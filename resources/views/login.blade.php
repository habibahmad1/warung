@extends('partials.main')
@section('content')
    @if (session('success'))
    <div class="notifSuccess">
        {{ session('success') }}
    </div>
    @endif
    @if (session('error'))
    <div class="notifSuccess">
        {{ session('error') }}
    </div>
    @endif
    
    <div class="container-login">
        <h3 class="text-center mb-4">Login</h3>
        <form action="{{ route('index2') }}" method="POST">
            @csrf
            <input type="email" placeholder="Email" name="email" id="email" required>
            <input type="password" placeholder="Password" name="password" id="password" required>
            <button type="submit">Login</button>
            <p class="text-center">Belum punya akun?<br> <a href="/register">Daftar Sekarang</a></p>
        </form>
    </div>

@endsection