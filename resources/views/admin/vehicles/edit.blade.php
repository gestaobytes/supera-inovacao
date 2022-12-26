@extends('layouts.master')

@section('content')

<div class="container">
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1 class="font-bold mb-3 text-xl">EDITAR VEICULO</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('vehicles.update', $vehicles->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 pb-3">
                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('vehiclemodels') ? 'focused error' : '' }}">
                                    <label class="form-label" for="vehiclemodel">Selecionar Veiculo Modelo</label>
                                    <select name="vehiclemodel_id" id="vehiclemodel" class="form-select" aria-label="Default select example">
                                        @foreach($vehiclemodels as $data)
                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 pb-3">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Placa</label>
                                    <input type="text" id="plaque" class="form-control" name="plaque" value="{{ $vehicles->plaque }}" placeholder="Placa" required>
                                </div>
                                @if ($errors->has('plaque'))
                                    <div class="alert alert-danger">{{ $errors->first('plaque') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 pb-3">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="color" class="form-control" name="color" value="{{ $vehicles->color }}" placeholder="Cor" required>
                                    <label class="form-label">Cor</label>
                                </div>
                                @if ($errors->has('color'))
                                    <div class="alert alert-danger">{{ $errors->first('color') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 pb-3">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="manufacturing" class="form-control" name="manufacturing" value="{{ $vehicles->manufacturing }}" placeholder="Fabricação" required>
                                    <label class="form-label">Fabricação</label>
                                </div>
                                @if ($errors->has('manufacturing'))
                                    <div class="alert alert-danger">{{ $errors->first('manufacturing') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 pb-3">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="yearmodel" class="form-control" name="yearmodel" value="{{ $vehicles->yearmodel }}" placeholder="Ano/Modelo" required>
                                    <label class="form-label">Ano/Modelo</label>
                                </div>
                                @if ($errors->has('yearmodel'))
                                    <div class="alert alert-danger">{{ $errors->first('yearmodel') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 pb-3">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="chassi" class="form-control" name="chassi" value="{{ $vehicles->chassi }}" placeholder="Chassi" required>
                                    <label class="form-label">Chassi</label>
                                </div>
                                @if ($errors->has('chassi'))
                                    <div class="alert alert-danger">{{ $errors->first('chassi') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <a class="text-sm text-white bg-gray-500 rounded ml-2 p-1 px-2 hover:bg-gray-600 cursor-pointer"
                        href="{{ route('vehicles.index') }}">VOLTAR</a>
                    <button type="submit"
                        class="text-sm text-white bg-blue-400 rounded ml-2 p-1 px-2 hover:bg-blue-600">SALVAR</button>
                </form>
            </div>
        </div>
    </div>
@endsection


