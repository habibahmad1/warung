@extends('partials.main')
@section('content')
    @if (session('success'))
    <div class="notifSuccess">
        {{ session('success') }}
    </div>
    @endif
    
    <div class="container-login">
        <h3 class="text-center mb-4">Login</h3>
        <form action="" method="POST">
            <input type="email" placeholder="Email" name="email" id="email">
            <input type="password" placeholder="Password" name="password" id="password">
            <button type="submit">Login</button>
            <p class="text-center">Belum punya akun?<br> <a href="/register">Daftar Sekarang</a></p>
        </form>
    </div>

@endsection