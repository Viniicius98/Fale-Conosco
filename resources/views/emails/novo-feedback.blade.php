<x-mail::message>
# Motivo: {{$motivo_contato}}

Mensagem enviada:  {{$mensagem}}

Telefone cadastrado para contato: {{$telefone}}

<x-mail::button :url="''">
Clique aqui para ver sua mensagem
</x-mail::button>

Atenciosamente,<br>
{{ config('app.name') }}
</x-mail::message>
