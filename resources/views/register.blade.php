@extends('partials.main')
@section('content')

    <div class="container-login">
        <h3 class="text-center mb-4">Daftar</h3>
        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            <input type="text" placeholder="Fullname" name="fullname" id="fullname" required>
            <input type="text" placeholder="No WhatsApp" name="nowa" id="nowa">
            <input type="email" placeholder="Email" name="email" id="email">
            <input type="password" placeholder="Password" name="password" id="password">
            <input type="password" placeholder="Ketik Ulang Password" name="password_confirmation" id="password_confirmation" required>
            <button type="submit">Buat Akun</button>
            <p class="text-center">Sudah punya akun?<br> <a href="/login">Login Sekarang</a></p>
        </form>
    </div>

@endsection