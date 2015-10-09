@extends('template')

@section('breadcrumb')
    <li>Seja Bem-Vindo!</li>
@stop

@section('content')
    <div class="jumbotron">
        <h1>{!! env('APP_TITLE_HTML') !!}</h1>
    </div>
@stop