@vite('resources/css/app.css')

<!--Modal de inativação de conta-->
<div class="w-screen h-screen z-[45] absolute left-0 top-0 bg-backgtt bg-repeat bg-[length:870px_654px] bg-[url('/public/image/bg-icons.png')] bg-auto">
    <div class="fixed z-50 inset-0 flex items-center justify-center p-4 sm:p-8 ">
        <div class="w-full max-w-5xl rounded-3xl bg-bluett py-6 sm:py-8 px-16 shadow-2xl items-center drop-shadow-tt border-2 border-graytt-light">            
            <div class="flex">
            <div class="w-1/2 pr-10 flex flex-col justify-between h-96">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white font-fredokatt drop-shadow-tt h-16 flex items-center" style="font-family: 'Fredoka';">Cadastrar</h1> <!--Título-->

                <div>
                    <label for="nome" class="text-white">Nome:</label>
                    <input type="text" name="nome" class="shadow-tt max-w-96 block w-full rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6" id="nome">
                </div>

                <div>
                    <label for="sobrenome" class="text-white">Sobrenome:</label>
                    <input type="text" name="sobrenome" class="shadow-tt max-w-96 block w-full rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 " id="sobrenome">
                </div>

                <div>
                    <label for="email" class="text-white">E-mail:</label>
                    <input type="text" name="email" class="shadow-tt max-w-96 block w-full rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6" id="email">
                </div>

                <div>
                    <label for="data" class="text-white">Data de nasccimento:</label>
                    <input type="date" name="data" class="shadow-tt max-w-44 block w-full rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6" id="data">
                </div>

            </div>

            <div class="w-1/2 pl-5 border-l-2 border-white flex flex-col justify-between">

                <div>
                    <label for="estado" class="text-white">Estado:</label>
                    <select id="estado" name="estado" class="custom-select shadow-tt max-w-36 block w-full rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 ">
                        <option value="" disabled selected>Selecionar</option>
                        <option value="SP">SP</option>
                    </select>
                </div>

                <div>
                    <label for="cidade" class="text-white">Cidade:</label>
                    <input type="text" name="data" class="shadow-tt max-w-96 block w-full rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 " id="cidade">
                </div>

                <div>
                    <label for="senha" class="text-white">Senha:</label>
                    <input type="text" name="senha" class="shadow-tt max-w-96 block w-full rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 " id="senha">
                </div>

                <div>
                    <label for="senhac" class="text-white">Confirmar senha:</label>
                    <input type="text" name="senhac" class="shadow-tt max-w-96 block w-full rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 " id="senhac">
                </div>

                <div class="invisible">
                    <label>.</label>
                    <input class="shadow-tt max-w-44 block py-2 shadow-sm ring-1 border border-graytt ring-inset">
                </div>
            </div>    
        </div>        
            <div class="flex">
                <div class="w-1/2"></div>
                <div class="w-1/2 pl-5 border-l-2 border-white">
                    <div class="flex w-full justify-end items-end">
                        <button class="inline-flex items-center justify-center w-full sm:w-auto px-4 py-2 bg-pinktt shadow-tt hover:bg-pinktt-dark text-white text-lg font-medium rounded-2xl transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-110 duration-300">
                            Cadastrar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>