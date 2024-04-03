@extends('site.layouts.basic')

@section('title','Home')

@section('conteudo')
    <div class="auth-container">
        @component('site.layouts._components.formulario')
            
        @endcomponent
        
    </div>
@endsection