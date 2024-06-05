<?php

namespace App\Console\Commands;

use App\Models\User;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Command\Command as CommandAlias;
use Throwable;

class CreateSuperAdminCommand extends Command
{
    protected $signature = 'superadmin:create';

    protected $description = 'Create a superadmin user';

    /**
     * @throws Throwable
     */
    public function handle(): int
    {
        DB::beginTransaction();
        try {
            $name = $this->ask('What is the name of the superadmin?');
            if (empty($name)) {
                $this->error('Name is required');

                return CommandAlias::INVALID;
            }

            $email = $this->ask('What is the email of the superadmin?');
            if (empty($email)) {
                $this->error('Email is required');

                return CommandAlias::INVALID;
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->error('Email is invalid');

                return CommandAlias::INVALID;
            }

            $password = $this->secret('What is the password of the superadmin?');
            if (empty($password)) {
                $this->error('Password is required');

                return CommandAlias::INVALID;
            }
            if (strlen($password) < 8) {
                $this->error('Password is too short. It must be at least 8 characters');

                return CommandAlias::INVALID;
            }

            $checkExistEmail = new User();
            $checkExistEmail = $checkExistEmail->where("email",$email);
            $checkExistEmail = $checkExistEmail->first();

            if($checkExistEmail){
                $this->error('Email has been taken');

                return CommandAlias::INVALID;
            }

            $this->info('Creating a superadmin user with the following credentials:');
            $this->info("Name: $name");
            $this->info("Email: $email");

            if ($this->confirm('Do you wish to create the user?')) {
                $this->info('Creating the user...');
                $user = User::create([
                    'name' => $name,
                    'email' => $email,
                    'password' => Hash::make($password),
                    'email_verified_at' => now(),
                ]);
                DB::commit();
                $this->info('Superadmin user created successfully.');
            } else {
                $this->error('Superadmin creation cancelled!');
            }

            return CommandAlias::SUCCESS;
        } catch (Exception $e) {
            DB::rollBack();
            $this->error('Could not create the user.');
            $this->error($e->getMessage());

            return CommandAlias::FAILURE;
        }
    }
}
