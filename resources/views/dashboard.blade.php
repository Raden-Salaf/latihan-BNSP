@extends('master')
@section('konten')
    <style>
        body {
            background: url('/img/login.jpg') center center fixed;
        }
    </style>
    <h4>
        selamat datang <b>{{ Auth::user()->name }}</b> Koe Login karo sebagai <b>
            {{ Auth::user()->role }}
        </b>
    </h4>
@endsection
