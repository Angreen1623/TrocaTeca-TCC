@if($propostas)
@foreach($propostas as $prop)
@foreach($prop->mensagem as $msg)

@if($msg->user->id == Auth()->user()->id)

<div class="text-right flex flex-col items-end">
    @if($msg->endereco_anexo)
    <div class="w-32">
        <img src="{{ asset($msg->endereco_anexo) }}" alt="">
    </div>
    @endif
    <pre>{{ $msg->conteudo_mensagem }}</pre>
</div>

@else

<div class="text-left flex flex-col items-start">
    @if($msg->endereco_anexo)
        <div class="w-32">
            <img src="{{ asset($msg->endereco_anexo) }}" alt="">
        </div>
    @endif
    <pre>{{ $msg->conteudo_mensagem }}</pre>
</div>

@endif
@endforeach
@endforeach
@endif