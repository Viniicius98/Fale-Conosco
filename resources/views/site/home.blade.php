@extends('site.layouts.basic')

@section('title','Bem Vindo')

@section('conteudo')

    <main class="welcome-container">
        @if (Auth::check())
            <section class="welcome-apresentation">
                <p>
                    <span>Bem-vindo de volta {{ Auth::user()->name }}!</span> Entre em contato conosco de forma rápida e fácil.
                </p>
                
            </section>
        @else
            <section class="welcome-apresentation">
                <p>
                    <span>Bem-vindo!</span> Entre em contato conosco de forma rápida e fácil.
                    Por favor, <span>registre-se</span> ou faça <span>login</span> e preencha o formulário para entrarmos em contato.
                </p>
               
            </section>
            
        @endif


       {{-- <section class="welcome-image">
        
        
       </section> --}}
    </main>



@endsection