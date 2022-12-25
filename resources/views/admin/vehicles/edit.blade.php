@extends('layouts.master')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

         {{-- 'vehicle_id',
		 'user_id',
		 'km',
		 'dateservice',
		 'values',
		 'observations', --}}

<div class="container-fluid">
    <!-- Vertical Layout | With Floating Label -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <h2>
                       EDITAR USUARIO
                    </h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('vehicles.update', $vehicles->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line {{ $errors->has('vehiclemodels') ? 'focused error' : '' }}">
                                        <label for="vehiclemodel">Selecionar Veiculo Modelo</label>
                                        <select name="vehiclemodel_id" id="vehiclemodel" class="form-select" aria-label="Default select example">
                                            @foreach($registers as $data)
                                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="plaque" class="form-control" name="plaque" value="{{ $vehicles->plaque }}" placeholder="plaque" required>
                                        <label class="form-label">plaque</label>
                                    </div>
                                    @if ($errors->has('plaque'))
                                        <div class="alert alert-danger">{{ $errors->first('plaque') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="color" class="form-control" name="color" value="{{ $vehicles->color }}" placeholder="Servico de Data" required>
                                        <label class="form-label">Servico de Data</label>
                                    </div>
                                    @if ($errors->has('color'))
                                        <div class="alert alert-danger">{{ $errors->first('color') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="manufacturing" class="form-control" name="manufacturing" value="{{ $vehicles->manufacturing }}" placeholder="Valores" required>
                                        <label class="form-label">Valores</label>
                                    </div>
                                    @if ($errors->has('manufacturing'))
                                        <div class="alert alert-danger">{{ $errors->first('manufacturing') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="yearmodel" class="form-control" name="yearmodel" value="{{ $vehicles->yearmodel }}" placeholder="Observações" required>
                                        <label class="form-label">Observações</label>
                                    </div>
                                    @if ($errors->has('yearmodel'))
                                        <div class="alert alert-danger">{{ $errors->first('yearmodel') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="chassi" class="form-control" name="chassi" value="{{ $vehicles->chassi }}" placeholder="Observações" required>
                                        <label class="form-label">Observações</label>
                                    </div>
                                    @if ($errors->has('chassi'))
                                        <div class="alert alert-danger">{{ $errors->first('chassi') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('vehicles.index') }}">VOLTAR</a>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">SALVAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


