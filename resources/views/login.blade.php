@vite('resources/css/app.css')

<!--Modal de inativação de conta-->
<div class="w-screen h-screen z-[45] absolute left-0 top-0 bg-backgtt bg-repeat bg-[length:870px_654px] bg-[url('/public/image/bg-icons.png')] bg-auto">
    <div class="fixed z-50 inset-0 flex items-center justify-center p-4 sm:p-8 ">
        <div class="w-full max-w-lg rounded-3xl bg-bluett py-6 sm:py-8 px-16 shadow-2xl items-center drop-shadow-tt border-2 border-graytt-light">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-center text-white font-fredokatt drop-shadow-tt mb-5" style="font-family: 'Fredoka';">Login</h1> <!--Título de aviso-->
            
            <div>
                <label for="email" class="text-white">E-mail:</label>
                <input type="text" name="email" class="shadow-tt max-w-96 block w-full rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 mb-5" id="email">

                <label for="senha" class="text-white">Senha:</label>
                <input type="text" name="senha" class="shadow-tt max-w-96 block w-full rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 mb-5" id="senha">
            </div>

            <div class="flex justify-end">            
                <button class="inline-flex items-center justify-center w-full sm:w-auto px-4 py-2 bg-pinktt shadow-tt hover:bg-pinktt-dark text-white text-lg font-medium rounded-2xl transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-110 duration-300">
                    Entrar
                </button>
            </div>
            
        </div>
    </div>
</div>