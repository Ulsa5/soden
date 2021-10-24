<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <script src="sweetalert2.all.min.js"></script>
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75">
            </div>
        </div>
        
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen">
            
        </span>
        
        {{-- ver tema de mediaquerys --}}
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-5xl sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form method="POST" enctype="multipart/form-data">

                
                
                <div class="w-full">
                    {{-- Header --}}
                    <div class="w-full bg-blue-600 h-32 rounded-t-lg"></div>
                        <div class="absolute -mt-28 ml-5 text-center content-center">
                            <div class="object-center bg-gray-100 border border-gray-300 h-36 w-36 rounded-lg shadow-md border-b border-primary">
                                <center>
                                    <img wire:model="foto" src="{{$foto}}"  alt="Agregar Foto"  style="height: 100%; width:100%; border-radius:5px;" overflow="hidden" />
                                </center>
                            </div>
                        </div>
                    </div>
                    {{-- {{$foto}} --}}
                    <div>
                        <label for="foto"><i class="ml-9 mt-10 block text-gray-700 text-sm font-bold mb-0 underline">Actualizar foto</i></label>
                        <input name="foto" id="foto" type="file" style="visibility: hidden;" accept="image/jpeg" wire:model="foto"></input>
                    </div>

                    {{-- Body --}}
                    <div class="p-5">

                        <fieldset class="border rounded border-gray-300 p-3">
                            <legend class="text-sm">Datos Personales</legend>

                            <div class="grid grid-cols-3 gap-4">

                                <div class="mb-4">
                                    <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                                    <input autofocus type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" wire:model="nombre" >
                                </div>

                                <div class="mb-4">
                                    <label for="fechadealta" class="block text-gray-700 text-sm font-bold mb-2">Fecha de Alta:</label>
                                    <input type="date" class="shadow appearance-none border rounded w-full py-1.5 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fechadealta" wire:model="fechadealta">
                                </div>

                                <div class="mb-4">
                                    <label for="dpi" class="block text-gray-700 text-sm font-bold mb-2">DPI:</label>
                                    <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="dpi" wire:model="dpi">
                                </div>

                                <div class="mb-4">
                                    <label for="empresa" class="block text-gray-700 text-sm font-bold mb-2">Empresa:</label>
                                    <select name="empresa" id="empresa" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="empresa" wire:model="empresa">
                                        <option value="1">CENTINELA</option>
                                        <option value="2">GLOSS</option>
                                        <option value="3">GOLD EAGLE</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="puesto" class="block text-gray-700 text-sm font-bold mb-2">Puesto:</label>
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="puesto" wire:model="puesto">
                                </div>

                                <div class="mb-4">
                                    <label for="telefono" class="block text-gray-700 text-sm font-bold mb-2">Teléfono:</label>
                                    <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="telefono" wire:model="telefono">
                                </div>

                                <div class="mb-4">
                                    <label for="direccion" class="block text-gray-700 text-sm font-bold mb-2">Dirección:</label>
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="direccion" wire:model="direccion">
                                </div>

                                <div class="mb-4">
                                    <label for="igss" class="block text-gray-700 text-sm font-bold mb-2">Afiliación:</label>
                                    <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="igss" wire:model="igss">
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    {{-- footer--}}
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="guardar()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-blue-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Guardar</button>
                        </span>
                        
                        
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click="cerrarModalAlta();" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cancelar</button>
                        </span>
                    </div>

                </div>

            </form>
            

        </div>
    </div>
    
</div>
