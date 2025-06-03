

@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{asset('css/home.css')}}" />
@endsection

@section('content')
<div class="app-container">
    @include('layouts.partials.sidebar')
    <div class="main-content">
    <header style="background:#03506f; color:#e0f0f3; padding:1rem 2rem; display:flex; justify-content:flex-end; align-items:center; position: relative;">

        <div style="position: relative; user-select: none;">
            <button id="userDropdownBtn" style="background:none; border:none; color:inherit; font-weight:700; font-size:1rem; cursor:pointer;">
                {{ auth()->user()->name }}
            </button>

            <div id="userDropdownMenu" style="display:none; position:absolute; right:0; background:#e0f0f3; color:#023e58; border-radius:5px; box-shadow:0 4px 8px rgba(0,0,0,0.1); margin-top:0.5rem; min-width:150px; z-index:100;">
                <a href="" style="display:block; padding:0.5rem 1rem; text-decoration:none; color:#023e58;">Editar Perfil</a>
                <a href="{{ route('logout') }}" style="display:block; padding:0.5rem 1rem; text-decoration:none; color:#023e58;"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form> 
            </div>
        </div>

        </header>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.getElementById('userDropdownBtn');
            const menu = document.getElementById('userDropdownMenu');

            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
            });

            document.addEventListener('click', function() {
                menu.style.display = 'none';
            });
        });
        </script>
        <main>
            @yield('content')
        </main>
    </div>
</div>
@endsection
