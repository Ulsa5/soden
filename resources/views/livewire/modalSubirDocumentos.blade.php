<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75">
            </div>
        </div>
        
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen">
            
        </span>
        
        {{-- ver tema de mediaquerys --}}
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-5xl sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form method="POST">

                {{-- Header --}}
                
                <div class="w-full">
                    <div class="w-full bg-blue-600 h-32 rounded-t-lg"></div>
                        <div class="absolute -mt-28 ml-5 text-center content-center">
                            <div class="object-center bg-gray-100 border border-gray-300 h-36 w-36 rounded-lg shadow-md border-b border-primary">
                                <center>
                                    <img wire:model="foto" src="{{$foto}}" alt="Agregar Foto" width="113" overflow="hidden" />
                                </center>
                            </div>
                        </div>
                    </div>
                <div>
                </div>

                {{-- Body --}}
                <div class="p-5">
                    
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button title="Ver documentos" wire:click="verDocumentos({{$empleado->id}})">Ver documentos</button>
                            @if ($modalDocumentos)
                                @include('livewire.modaldocumentos')
                            @endif
                            {{-- <button wire:click.prevent="" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Ver Documentos</button> --}}
                        </span>
                    </div>

                    <fieldset class="border rounded border-gray-300 p-3">
                        <legend class="text-sm">Documentos del expediente</legend>
                        
                        <div class="grid grid-rows-2 grid-flow-col gap-4">
                            
                            <div class="mb-10 col-span-1">
                                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                                <input disabled type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" wire:model="nombre" ><br><br>
                                <label for="dpi" class="block text-gray-700 text-sm font-bold mb-2">DPI:</label>
                                <input disabled type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" wire:model="dpi" ><br><br>
                                <label for="puesto" class="block text-gray-700 text-sm font-bold mb-2">Puesto:</label>
                                <input disabled type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" wire:model="puesto" ><br>
                            </div>

                            <div class="mb-1 row-span-1 w-full">
                                
                                <h3 class="font-semibold text-xl text-Gray-700">DOCUMENTOS DISPONIBLES</h3><br>
                                &nbsp;&nbsp;&nbsp;<a href="#" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" wire:model="docdpi" >VER DPI</a><br><br>
                                &nbsp;&nbsp;&nbsp;<a href="#" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" wire:model="" >VER DIPLOMA DE ESTUDIOS</a><br><br>
                                &nbsp;&nbsp;&nbsp;<a href="#" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" wire:model="" >VER ANTECEDENTE PENAL</a><br>
                            </div>

                            <div class="mb-1 row-span-2">
                                <div class="mb-4">
                                <center>
                                    <h3 class="font-semibold text-xl text-Gray-700">VISUALIZACIÓN DE DOCUMENTOS</h3><br>
                                </center>
                                <div>
                                    <iframe src="{{ $docdpi }}" frameborder="1" width="100%" height="500" overflow="hidden">
                                    </iframe>
                                </div>
                            </div>
                            </div>
                        </div>


                            
                            {{-- <div class="grid grid-cols-2 gap-4">

                                <div class="grid grid-cols-1 gap-4">

                                    <div class="mb-1">
                                        <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                                        <input disabled type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" wire:model="nombre" >
                                    </div>

                                    <div class="mb-0">
                                        <div>&nbsp;</div>
                                        <label for="dpi" class="shadow appearance-none text-center border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shados-outline block text-gray-700 text-sm font-bold mb-1">DPI</label>
                                        <input accept="application/pdf" style="visibility:hidden;" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="dpi" wire:model="dpi" >
                                    </div>

                                    <div class="mb-0">
                                        <div>&nbsp;</div>
                                        <label for="dpi" class="shadow appearance-none text-center border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shados-outline block text-gray-700 text-sm font-bold mb-1">Diploma de estudios</label>
                                        <input accept="application/pdf" style="visibility:hidden;" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="dpi" wire:model="dpi" >
                                    </div>

                                    <div class="mb-0">
                                        <div>&nbsp;</div>
                                        <label for="dpi" class="shadow appearance-none text-center border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shados-outline block text-gray-700 text-sm font-bold mb-1">Antecedentes Penales</label>
                                        <input accept="application/pdf" style="visibility:hidden;" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="dpi" wire:model="dpi" >
                                    </div>

                                    <div class="mb-0">
                                        <div>&nbsp;</div>
                                        <label for="dpi" class="shadow appearance-none text-center border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shados-outline block text-gray-700 text-sm font-bold mb-1">Antecedentes Policiacos</label>
                                        <input accept="application/pdf" style="visibility:hidden;" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="dpi" wire:model="dpi" >
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 gap-4">

                                    <div class="mb-4">
                                        <center>
                                        DOCUMENTO VISUALIZADO AL DARLE CLICK
                                        </center>
                                        {{-- <div>
                                            <iframe src="{{ $foto }}" frameborder="1" width="100%" height="300" overflow="hidden">

                                            </iframe>
                                        </div> --}}
                                    {{-- </div> --}}
                                {{-- </div> --}}
                            
                            {{-- </div> --}}
                    {{-- </fieldset> --}}
                    
                {{-- </div> --}}
                    
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="guardar()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-blue-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Guardar</button>
                        </span>
                        
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click="cerrarModalDocumentos()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cancelar</button>
                        </span>
                    </div>
                
                </div>
            </form>
        </div>
    </div>
</div>