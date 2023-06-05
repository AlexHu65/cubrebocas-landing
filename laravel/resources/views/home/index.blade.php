@extends('master')
@section('title', 'Inicio / Home')
@section('content')

<!-- banner -->
@include('home.secciones.banners')
<!-- uso correcto -->
@include('home.secciones.correcto')
<!-- lavarse las manos -->
@include('home.secciones.lavado')
<!--carusel-->
@include('home.secciones.carusel')
<!--organismos-->
@include('home.secciones.organismos')

@endsection
