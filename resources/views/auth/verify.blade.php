@extends('site.layouts.basic')

@section('title','Verifique seu E-mail')

@section('conteudo')
    <div class="auth-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-success text-dark fw-bold">Verifique seu E-mail</div>
                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    Um novo link de verificação foi enviado para o seu endereço de e-mail.
                                </div>
                            @endif
        
                            Antes de continuar, por favor, verifique seu e-mail para encontrar o link de verificação. Caso não tenha recebido o e-mail,
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">clique aqui para solicitar outro</button>.
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
