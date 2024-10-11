@if($propostas)
@foreach($propostas as $prop)
@foreach($prop->mensagem as $msg)

<div class="mb-2 last:mb-0">    

@if($msg->user->id == Auth()->user()->id)

<div class="flex justify-end w-full">
    <div class="flex flex-row-reverse py-3 px-2 rounded-t-lg rounded-l-lg border-black border-2 bg-greentt-light w-fit max-w-96">
        <pre class="flex justify-center text-wrap whitespace-pre-wrap break-all">{{ $msg->conteudo_mensagem }}</pre>
        @if($msg->endereco_anexo)
        <div class="min-w-32 w-32 h-full flex flex-col justify-center items-center mr-2">
            <img src="{{ asset($msg->endereco_anexo) }}" alt="">
        </div>
        @endif
    </div>
</div>

@else

<div class="flex justify-start w-full">
    <div class="flex items-start py-3 px-2 rounded-t-lg rounded-r-lg border-black border-2 bg-pinktt w-fit max-w-96">
        <pre class="flex items-center whitespace-pre-wrap text-wrap break-all">{{ $msg->conteudo_mensagem }}</pre>
        @if($msg->endereco_anexo)
        <div class="min-w-32 w-32 h-full flex flex-col justify-center items-center ml-2">
            <img src="{{ asset($msg->endereco_anexo) }}" alt="">
        </div>
        @endif
    </div>
</div>

@endif

</div>


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