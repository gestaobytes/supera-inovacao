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

        <h1 class="font-bold mb-3 text-xl">ADICIONAR USUARIO</h1>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 pb-3">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Nome Completo</label>
                                    <input type="text" id="fullname" class="form-control" name="fullname" placeholder="Nome Completo">
                                </div>
                                @if ($errors->has('fullname'))
                                    <div class="alert alert-danger">{{ $errors->first('fullname') }}</div>
                                @endif
                            </div>
                        </div>
                    
                        <div class="col-md-4 pb-3">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Email</label>
                                    <input type="email" id="email" aria-describedby="emailHelp" class="form-control" name="email" placeholder="E-mail">
                                </div>
                                @if ($errors->has('email'))
                                    <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-3 pb-3">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Senha</label>
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Senha">
                                </div>
                                @if ($errors->has('password'))
                                    <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                        </div>
                    
                        <div class="col-md-1 pb-3">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Status</label>
                                    <input type="text" id="status" class="form-control" name="Status" placeholder="Status">
                                </div>
                                @if ($errors->has('status'))
                                    <div class="alert alert-danger">{{ $errors->first('status') }}</div>
                                @endif
                            </div>
                        </div>
                </div>
                <br>
                <a class="text-sm text-white bg-gray-500 rounded ml-2 p-1 px-2 hover:bg-gray-600 cursor-pointer"
                href="{{ route('users.index') }}">VOLTAR</a>
                <button type="submit"
                    class="text-sm text-white bg-blue-400 rounded ml-2 p-1 px-2 hover:bg-blue-600">SALVAR</button>
                </form>
            </div>
        </div>
    </div>
@endsection


