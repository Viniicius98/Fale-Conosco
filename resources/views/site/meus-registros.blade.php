@extends('site.layouts.basic')

@section('title','Meus Registros')

@section('conteudo')
<div class="registros-container">
    <h1 class="registros-title">Meus Registros</h1>
    <div class="registros">
        @component('site.layouts._components.meus-registros')

        @endcomponent
    </div>

</div>

@endsection