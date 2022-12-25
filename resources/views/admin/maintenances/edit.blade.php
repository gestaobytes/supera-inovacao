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

    <div class="container">

        <h1 class="font-bold mb-3 text-xl">EDITAR MANUTENÇÃO</h1>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('maintenances.update', $data->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 pb-3">
                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('users') ? 'focused error' : '' }}">
                                    <label for="user">Selecionar Usuario</label>
                                    <select name="user_id" value="{{ $data->user_id }}" id="user"
                                        class="form-select" aria-label="Default select example">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->fullname }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 pb-3">
                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('vehicles') ? 'focused error' : '' }}">
                                    <label for="vehicle">Selecionar Usuario</label>
                                    <select name="vehicle_id" value="{{ $data->vehicle_id }}" id="vehicle"
                                        class="form-select" aria-label="Default select example">
                                        @foreach ($vehicles as $vehicle)
                                            <option value="{{ $vehicle->id }}">{{ $vehicle->plaque }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 pb-3">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">KM</label>
                                    <input type="text" id="km" class="form-control" name="km"
                                        value="{{ $data->km }}" placeholder="KM" required>
                                </div>
                                @if ($errors->has('km'))
                                    <div class="alert alert-danger">{{ $errors->first('km') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 pb-3">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Servico de Data</label>
                                    <input type="text" id="dateservice" class="form-control" name="dateservice"
                                        value="{{ $data->dateservice }}" placeholder="Servico de Data" required>
                                </div>
                                @if ($errors->has('dateservice'))
                                    <div class="alert alert-danger">{{ $errors->first('dateservice') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 pb-3">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Servico de Data</label>
                                    <input type="text" id="values" class="form-control" name="values"
                                        value="{{ $data->values }}" placeholder="Servico de Data" required>
                                </div>
                                @if ($errors->has('values'))
                                    <div class="alert alert-danger">{{ $errors->first('values') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 pb-3">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Servico de Data</label>
                                    <input type="text" id="observations" class="form-control" name="observations"
                                        value="{{ $data->observations }}" placeholder="Servico de Data" required>
                                </div>
                                @if ($errors->has('observations'))
                                    <div class="alert alert-danger">{{ $errors->first('observations') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <br>

                    <a class="text-sm text-white bg-gray-500 rounded ml-2 p-1 px-2 hover:bg-gray-600 cursor-pointer"
                        href="{{ route('maintenances.index') }}">VOLTAR</a>
                    <button type="submit"
                        class="text-sm text-white bg-blue-400 rounded ml-2 p-1 px-2 hover:bg-blue-600">SALVAR</button>
                </form>
            </div>
        </div>

    </div>
@endsection
