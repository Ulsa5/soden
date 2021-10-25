<x-slot name="">
        
</x-slot><section class="py-1 bg-blueGray-50">
    <div class="w-full xl:w-8/8 mb-12 xl:mb-0 px-4 mx-auto mt-8">
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">

        <div class="rounded-t mb-0 mt-1 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-xl text-Gray-700">REGISTRO DE USUARIOS ACTIVOS</h3>
                </div>
            
                <div class="relative mt-1 w-full px-4 max-w-full flex-grow flex-1 text-right">
                    <input id="busquedadeempleados" type="text" class="text-gray text-sm uppercase px-3 py-1 rounded border-2 border-gray mr-1 mb-0" placeholder="&#xF002; buscar" style="font-family:Arial,FontAwesome" />
                </div>
                
                <div class="relative mt-1 w-full px-4 max-w-full flex-grow flex-1 text-right">
                    <button title="agregar empleado" wire:click="crear()" class="bg-green-700 text-white active:bg-green-500 text-sm font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                        <i class="fas fa-user-plus"></i>
                        Nuevo
                    </button>
                    {{-- @if ($modalAlta)
                        @include('livewire.crear')
                    @endif --}}
                    
                    <a title="ver bajas" href="empleados-de-baja" class="bg-red-700 text-white active:bg-red-500 text-sm font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                        <i class="fas fa-user-minus"></i>
                        Desactivados
                    </a>


                </div>
            </div>
        </div>

        <br>
        @include('livewire.tabla-usuarios')
        
      </div>
    </div>
</section>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>