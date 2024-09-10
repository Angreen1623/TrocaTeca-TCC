<div id="sidebar" class="fixed z-[60] w-screen h-screen left-0 top-0 translate-x-[-150%] bg-shadowtt">
    <div class="drop-shadow-2xl bg-white absolute overflow-hidden duration-300 max-w-96 w-full h-screen">
        <div class="bg-bluett border-b border-black w-full h-20 flex place-content-center items-center">
            <p class="h-fit text-white font-fredokatt drop-shadow-tt text-3xl">Filtros</p>
            <span onclick="sidebartt()" class="absolute cursor-pointer right-5">
                <img src="{{ asset('image/mais.svg') }}" alt="" width="30" class="rotate-45">
            </span>
        </div>
        <div class="flex flex-col items-center px-4 text-sm">
            <p>Categoria:</p>
            <a class="underline-animation" href="{{ route('filter', ['type'=>'categoria', 'value'=>'Brinquedo']) }}">Brinquedo</a>
            <a class="underline-animation" href="{{ route('filter', ['type'=>'categoria', 'value'=>'Mobilidade']) }}">Mobilidade</a>
            <a class="underline-animation" href="{{ route('filter', ['type'=>'categoria', 'value'=>'Movel']) }}">Móvel</a>
            <a class="underline-animation" href="{{ route('filter', ['type'=>'categoria', 'value'=>'Roupa']) }}">Roupa</a>
            <a class="underline-animation" href="{{ route('filter', ['type'=>'categoria', 'value'=>'Outro']) }}">Outro</a>
        </div>
        <div class="flex flex-col items-center px-4 text-sm ">
            <p>Condição:</p>
            <a class="underline-animation" href="{{ route('filter', ['type'=>'condicao', 'value'=>'Novo']) }}">Novo</a>
            <a class="underline-animation" href="{{ route('filter', ['type'=>'condicao', 'value'=>'Seminovo']) }}">Seminovo</a>
            <a class="underline-animation" href="{{ route('filter', ['type'=>'condicao', 'value'=>'Usado']) }}">Usado</a>
        </div>
        <div class="flex flex-col items-center px-4 text-sm mb-2">
            <a class="underline-animation" href="{{ route('filter', ['type'=>'local', 'value'=>'meuestado']) }}">Meu estado</a>
        </div>
    </div>
</div>