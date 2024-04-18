<x-mail::message>
# Seu Contato Foi Cadastrado com Sucesso!

Segue abaixo o registro

- # Motivo: 
  {{$motivo_contato}}

- # Mensagem enviada:  
  {{$mensagem}}

- # Telefone para contato: 
  {{$telefone}}

<x-mail::button :url="''">
Clique aqui para ver sua mensagem
</x-mail::button>

Atenciosamente,<br>
{{ config('app.name') }}
</x-mail::message>
