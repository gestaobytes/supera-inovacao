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

        <h1 class="font-bold mb-3 text-xl">ADICIONAR MANUTENÇÃO</h1>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('vehiclemodels.update', $registers->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="name" class="form-control" name="name" value="{{ $registers->name }}" placeholder="Nome">
                                    <label class="form-label">Nome</label>
                                </div>
                                @if ($errors->has('name'))
                                    <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="brand" class="form-control" name="brand" value="{{ $registers->brand }}" placeholder="Marca">
                                    <label class="form-label">Marca</label>
                                </div>
                                @if ($errors->has('brand'))
                                    <div class="alert alert-danger">{{ $errors->first('brand') }}</div>
                                @endif
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="version" class="form-control" name="version" value="{{ $registers->version }}" placeholder="Versão">
                                    <label class="form-label">Versão</label>
                                </div>
                                @if ($errors->has('version'))
                                    <div class="alert alert-danger">{{ $errors->first('version') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <a class="text-sm text-white bg-gray-500 rounded ml-2 p-1 px-2 hover:bg-gray-600 cursor-pointer"
                        href="{{ route('maintenances.index') }}">VOLTAR</a>
                    <button type="submit"
                        class="text-sm text-white bg-blue-400 rounded ml-2 p-1 px-2 hover:bg-blue-600">SALVAR</button>
                </form>

            </div>
        </div>

    </div>
@endsection

<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
