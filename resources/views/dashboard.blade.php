@extends('layouts.app')

@section('titulo')
    Tu Cuenta
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12">
                <img src="{{ asset('img/avatar.png') }}" alt="Avatar usuario">
            </div>
            <div class="md:w-8/12 lg:w-6/12">
                <p>{{ $user->username }}</p>
            </div>
        </div>
    </div>
@endsection
