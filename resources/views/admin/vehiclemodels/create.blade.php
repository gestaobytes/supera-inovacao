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

<div class="container-fluid">
    <!-- Vertical Layout | With Floating Label -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <h2>
                       ADICIONAR NOVO MODELO DE VEICULO
                    </h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('vehiclemodels.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Nome">
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
                                        <input type="text" id="brand" class="form-control" name="brand" placeholder="Marca">
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
                                        <input type="text" id="version" class="form-control" name="version" placeholder="Versão">
                                        <label class="form-label">Versão</label>
                                    </div>
                                    @if ($errors->has('version'))
                                        <div class="alert alert-danger">{{ $errors->first('version') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('vehiclemodels.index') }}">VOLTAR</a>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">SALVAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


