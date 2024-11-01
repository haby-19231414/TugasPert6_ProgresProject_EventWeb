@extends('backend.v_layouts.app')
@section('content')
<style>
    /* Styling untuk konten utama */
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        color: #270ee2;
        margin: 0;
        padding: 0;
    }

    /* Container utama */
    .content-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Judul Halaman */
    h3 {
        font-size: 24px;
        color: #333;
        text-align: center;
        margin-top: 0;
    }

    /* Pesan Selamat Datang */
    p {
        font-size: 16px;
        line-height: 1.6;
        color: #555;
    }

    /* Nama pengguna */
    b {
        color: #0275d8; /* Warna biru untuk membedakan teks penting */
    }

    /* Role pengguna */
    b.role {
        color: #5cb85c; /* Warna hijau untuk role pengguna */
    }
</style>

<div class="content-container">
    <h3>{{ $judul }}</h3>
    <p>
        Selamat Datang <b>{{ Auth::user()->nama }}</b> pada laman aplikasi pengelolaan event dengan hak akses yang anda miliki sebagai
        <b class="role">
            @if (Auth::user()->role == 1)
                Super Admin
            @elseif (Auth::user()->role == 0)
                Admin
            @endif
        </b>. Ini adalah halaman utama dari aplikasi ini.
    </p>
</div>
@endsection
