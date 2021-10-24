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
                                    <img wire:model="foto" src="{{$foto}}" alt="Agregar Foto" style="height: 100%; width:100%; border-radius:5px;" overflow="hidden" />
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
                            <button title="Subir documentos" wire:click.prevent="" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Subir Documentos</button>
                            {{-- @if ($modalSubirDocumentos)
                                @include('livewire.modalSubirDocumentos')
                                
                            @endif --}}
                        </span>
                    </div>


                    <fieldset class="border rounded border-gray-300 p-2">
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
                                <div class="mb-1">
                                <center>
                                    <h3 class="font-semibold text-xl text-Gray-700">VISUALIZACIÓN DE DOCUMENTOS</h3><br>
                                </center>
                                <div>
                                    <iframe wire:model="docdpi" src="{{ $docdpi }}" frameborder="1" width="100%" height="500" overflow="hidden">
                                    </iframe>
                                </div>
                            </div>
                            </div>
                        </div>
                    </fieldset>
                    
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">                        
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click="cerrarModalDocumentos()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cerrar</button>
                        </span>
                    </div>
                
                </div>
            </form>
        </div>
    </div>
</div>