<div id="sidebar" class="fixed z-[60] w-screen h-screen left-0 top-0 translate-x-[-150%] bg-shadowtt"><!-- Dá pra colocar uma animaçaõ legal adicionando "transition-transform duration-500" mas fica meio cagado!-->
    <div class="drop-shadow-2xl bg-white absolute overflow-hidden duration-300 max-w-96 w-full h-screen">
        <div class="bg-bluett border-b border-black w-full h-20 flex justify-center items-center">
            <p class="text-white font-fredokatt drop-shadow-tt text-3xl">Filtros</p>
            <span onclick="sidebartt()" class="absolute cursor-pointer right-5">
                <img src="{{ asset('image/mais.svg') }}" alt="" width="30" class="rotate-45">
            </span>
        </div>


        <div class="flex flex-col items-start px-4 text-lg mt-3 text-left">
            <p class="font-semibold">Categoria:</p>
            <a class="underline-animation mt-1" href="{{ route('filter', ['type'=>'categoria', 'value'=>'Brinquedo']) }}">Brinquedo</a>
            <a class="underline-animation mt-1" href="{{ route('filter', ['type'=>'categoria', 'value'=>'Mobilidade']) }}">Mobilidade</a>
            <a class="underline-animation mt-1" href="{{ route('filter', ['type'=>'categoria', 'value'=>'Movel']) }}">Móvel</a>
            <a class="underline-animation mt-1" href="{{ route('filter', ['type'=>'categoria', 'value'=>'Roupa']) }}">Roupa</a>
            <a class="underline-animation mt-1" href="{{ route('filter', ['type'=>'categoria', 'value'=>'Outro']) }}">Outro</a>
            <hr class="h-px w-full bg-black border-2 border-black mb-4 mt-4">
        </div>


        <div class="flex flex-col items-start px-4 text-lg text-left">
            <p class="font-semibold">Condição:</p>
            <a class="underline-animation mt-1" href="{{ route('filter', ['type'=>'condicao', 'value'=>'Novo']) }}">Novo</a>
            <a class="underline-animation mt-1" href="{{ route('filter', ['type'=>'condicao', 'value'=>'Seminovo']) }}">Seminovo</a>
            <a class="underline-animation mt-1" href="{{ route('filter', ['type'=>'condicao', 'value'=>'Usado']) }}">Usado</a>
            <hr class="h-px w-full bg-black border-2 border-black mb-4 mt-4">
        </div>


        <div class="flex flex-col items-start px-4 text-lg text-left">
            <p class="font-semibold">Localidade:</p>
            <a class="underline-animation mt-1" href="{{ route('filter', ['type'=>'local', 'value'=>'minha cidade']) }}">Minha cidade</a>
            <a class="underline-animation mt-1" href="{{ route('filter', ['type'=>'local', 'value'=>'meu estado']) }}">Meu estado</a>
        </div>
    </div>
</div>