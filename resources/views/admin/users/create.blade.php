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
                       ADICIONAR NOVO USUARIO
                    </h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="fullname" class="form-control" name="fullname" placeholder="Nome Completo" required>
                                        <label class="form-label">Nome Completo</label>
                                    </div>
                                    @if ($errors->has('fullname'))
                                        <div class="alert alert-danger">{{ $errors->first('fullname') }}</div>
                                    @endif
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" id="email" aria-describedby="emailHelp" class="form-control" name="email" placeholder="E-mail" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                    @if ($errors->has('email'))
                                        <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                            </div>
                        {{-- </div> --}}
                        
                        
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Senha" required>
                                    <label class="form-label">Senha</label>
                                </div>
                                @if ($errors->has('password'))
                                    <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" id="cellphone" class="form-control" name="cellphone" placeholder="Celular" >
                                    <label class="form-label">Celular</label>
                                </div>
                                @if ($errors->has('cellphone'))
                                    <div class="alert alert-danger">{{ $errors->first('cellphone') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" id="cpf" class="form-control" name="cpf" placeholder="CPF" required>
                                    <label class="form-label">CPF</label>
                                </div>
                                @if ($errors->has('cpf'))
                                <div class="alert alert-danger">{{ $errors->first('cpf') }}</div>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="status" class="form-control" name="status">
                                    <label class="form-label">status</label>
                                </div>
                                @if ($errors->has('status'))
                                    <div class="alert alert-danger">{{ $errors->first('status') }}</div>
                                @endif
                            </div>
                        </div>

                        {{-- <div class="form-group form-float">
                            <div class="form-line">
                                <label for="status">Status</label>
                                <select class="form-control" id="status">
                                <option>1</option>
                                <option>2</option>
                                </select>
                            </div>
                        </div> --}}
                        <div class="col-md-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="type" class="form-control" name="type">
                                    <label class="form-label">Tipo</label>
                                </div>
                                @if ($errors->has('type'))
                                    <div class="alert alert-danger">{{ $errors->first('type') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                        <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('users.index') }}">VOLTAR</a>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">SALVAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


