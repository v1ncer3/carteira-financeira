@extends('layouts.main')

@section('title', 'Cadastro')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 100%; max-width: 400px;">
        <div class="card-header text-center">
            <h4>Cadastro</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('register.submit') }}">
                @csrf

                <!-- Exibir erros de validação -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="Digite seu nome" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Digite seu e-mail" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Digite sua senha" required>
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirmar Senha</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirme sua senha" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
            </form>
        </div>
        <div class="card-footer text-center">
            <p>Já tem uma conta? <a href="/Login">Faça login</a></p>
        </div>
    </div>
</div>
@endsection
