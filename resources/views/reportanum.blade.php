@vite('resources/css/app.css')

<!--Modal de denunciar anúncio-->
<div id="modalContainer" class="fixed z-[60] w-screen h-screen left-0 top-0 hidden bg-shadowtt">
    <div class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-8">
        <div class="w-full max-w-2xl rounded-3xl bg-bluett p-6 sm:p-8 shadow-2xl">
            <h1 class="text-2xl sm:text-4xl font-bold text-center text-white font-fredokatt drop-shadow-tt">Denunciar Anúncio</h1>

            <div class="sm:col-span-2">
                <label for="motivoanum" class="block text-sm font-semibold leading-6 text-white mt-6 ">Motivo da Denúncia:</label>
                <div class="mt-2.5">
                    <textarea name="motivoanum" id="motivoanum" rows="6" class="resize-none block w-full rounded-lg border border-graytt-light px-3.5 py-2 shadow-sm ring-1 ring-inset ring-graytt-light placeholder:text-graytt focus:ring-1 focus:ring-inset sm:text-sm sm:leading-6 shadow-tt" placeholder="Descreva o motivo da denúncia..."></textarea>
                </div>
            </div>

            <!-- Botões de confirmação -->
            <div class="mt-4 flex flex-col sm:flex-row gap-4 sm:gap-8 justify-center">
                <button id="cancelReport" class="inline-flex items-center px-4 py-2 justify-center w-full sm:w-auto shadow-tt bg-pinktt hover:bg-pinktt-dark text-white text-sm font-medium rounded-2xl mr-5 transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
                    Cancelar
                </button>
                <button class="inline-flex items-center px-4 py-2 justify-center w-full sm:w-auto shadow-tt bg-greentt hover:bg-greentt-dark text-white text-sm font-medium rounded-2xl transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
                    Confirmar
                </button>
            </div>
        </div>
    </div>
</div>    