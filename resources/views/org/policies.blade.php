@extends('template')

@section('breadcrumb')
    <li><a href="{{ route('org.about') }}">Sobre Nós</a></li>
    <li>Políticas de Privacidade</li>
@stop

@section('content')
    @include('incs.construction')
@stop