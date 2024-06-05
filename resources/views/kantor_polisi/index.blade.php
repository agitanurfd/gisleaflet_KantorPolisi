@extends('adminlte::page')

@section('title', 'Data Kantor Polisi')

@section('content_header')
<h1 class="m-0 text-dark">Data Kantor Polisi</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if (session('success_message'))
                <div class="alert alert-success">
                    {{ session('success_message') }}
                </div>
                @endif

                <table class="table table-hover table-bordered table-striped" id="example2">
                    <thead>
                        <tr>
                            <th>Kantor Polisi</th>
                            <th>Alamat</th>
                            <th>Jam Operasional</th>
                            <th>Phone</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kantor_polisi as $key => $kantor_polisi)
                        <tr>
                            <td>{{ $kantor_polisi->kantorpolisi }}</td>
                            <td>{{ $kantor_polisi->alamat }}</td>
                            <td>{{ $kantor_polisi->jamoperasional }}</td>
                            <td>{{ $kantor_polisi->nohp }}</td>
                            <td>{{ $kantor_polisi->latitude }}</td>
                            <td>{{ $kantor_polisi->longitude }}</td>
                            <td>
                                <a href="{{ route('kantor_polisi.edit', $kantor_polisi->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-danger btn-sm" onclick="deletekantor_polisi('{{ $kantor_polisi->id }}')"><i class="fas fa-trash-alt"></i></button>

                                <!-- Form for delete -->
                                <form id="deleteForm_{{ $kantor_polisi->id }}" action="{{ route('kantor_polisi.destroy', $kantor_polisi->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <p class="mb-0"></p>
            </div>
        </div>
    </div>
</div>
@stop

@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function deletekantor_polisi(kantor_polisiId) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Anda tidak dapat mengembalikan data yang sudah dihapus!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
        }).then((result) => {
            if (result.isConfirmed) {
                // Trigger the form submission for delete
                document.getElementById('deleteForm_' + kantor_polisiId).submit();
            }
        });
    }
</script>
@endpush