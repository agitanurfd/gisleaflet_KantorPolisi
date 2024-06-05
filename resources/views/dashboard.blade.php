@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="m-0 text-dark">Police Station</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{$totalKantorPolisi}}</h3>
                                <p>Total Kantor Polisi</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-fw fa-building"></i>
                            </div>
                            <a href="{{route('kantor_polisi.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop