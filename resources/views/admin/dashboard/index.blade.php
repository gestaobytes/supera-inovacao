@extends('layouts.master')

@section('content')
    <div class="container">

        <h1 class="font-bold mb-3 text-xl">MANUTENÇÕES PREVISTAS PARA OS PRÓXIMOS 7 DIAS</h1>
        
        <div class="row">
            @foreach ($registers as $data)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">PLACA:{{ $data->vehicle->plaque }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">USUARIO:{{ $data->user->fullname }}</h6>
                        <p class="card-text">Observação:{{ $data->observations }}</p>
                    </div>
                </div>
                <br/>
            </div>
            @endforeach
        </div>

    </div>
@endsection