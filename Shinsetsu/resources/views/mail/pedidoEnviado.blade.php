@component('mail::message')
    # Mensagem

    <p>Nome:</p>
    <p>{{$name}}</p>
    <p>Mensagem:</p>
    <p>{{ $message }}</p>

    <p>* Esse e-mail é enviado automaticamente através do sistema!</p>

@endcomponent
