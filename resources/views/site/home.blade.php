@extends('site.layouts.basic')

@section('title','Home')

@section('conteudo')
    <div class="auth-container">
        <h1>Formulário</h1>
        @component('site.layouts._components.formulario')
        @endcomponent
        
    </div>
@endsection