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
    <p>{{ $msg->conteudo_mensagem }}</p>
</div>

@else

<div class="text-left flex flex-col items-start">
    @if($msg->endereco_anexo)
    <div class="w-32">
        <img src="{{ asset($msg->endereco_anexo) }}" alt="">
    </div>
    @endif
    <p>{{ $msg->conteudo_mensagem }}</p>

</div>

@endif
@endforeach
@endforeach
@endif

@if($prop->status_proposta == 0 && $prop->artigo->user->id == Auth()->user()->id)
<div class="text-left flex flex-col items-start">
    <a href="../acceptingpropose/{{ $id }}" type="button" class="inline-flex mt-2 items-center justify-center w-full sm:w-auto px-4 py-2 bg-greentt hover:bg-greentt-dark shadow-tt text-white text-xs sm:text-sm md:text-base lg:text-lg font-medium rounded-2xl transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
        Responder
    </a>
</div>

@endif

@if(isset($prop->acordo) && $prop->acordo->status_acordo == 0 && $prop->artigo->user->id == Auth()->user()->id)
<div class="flex text-left items-start">

    <a href="../acceptingfinalpropose/{{ $prop->acordo->id }}" type="button" class="inline-flex mt-2 mx-3 items-center justify-center w-full sm:w-auto px-4 py-2 bg-greentt hover:bg-greentt-dark shadow-tt text-white text-xs sm:text-sm md:text-base lg:text-lg font-medium rounded-2xl transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
        Aceitar
    </a>
    <a href="../denyingfinalpropose/{{ $prop->acordo->id }}" type="button" class="inline-flex mt-2 items-center justify-center w-full sm:w-auto px-4 py-2 bg-pinktt hover:bg-pinktt-dark shadow-tt text-white text-xs sm:text-sm md:text-base lg:text-lg font-medium rounded-2xl transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
        Negar
    </a>
</div>
@endif