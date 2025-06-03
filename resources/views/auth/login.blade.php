@extends('layouts.app')

@section('title', 'Login')

@section('styles')
<link rel="stylesheet" href="{{asset('css/login.css')}}" />
@endsection

@section('content')
    <div class="login-container">
        <h2>Login</h2>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login.authenticate') }}">
            @csrf
            <label for="email">Email</label>
            <input 
                id="email" 
                name="email" 
                type="email" 
                value="{{ old('email') }}" 
                required 
                autofocus
                placeholder="seuemail@exemplo.com"
            />

            <label for="password">Senha</label>
            <input 
                id="password" 
                name="password" 
                type="password" 
                required 
                placeholder="********"
            />

            <button type="submit">Entrar</button>
        </form>
    </div>
@endsection
