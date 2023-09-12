@extends('layout.master-head')

@section('title', 'Accueil - Gestion des clients') {{-- titre personnalisé --}}

@section('content')
    <section>
        @include('includes.interface.customers')
    </section>
@endsection