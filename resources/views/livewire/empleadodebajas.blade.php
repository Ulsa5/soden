    <section class="py-1 bg-blueGray-50">
    <script src="sweetalert2.all.min.js"></script>
        <div class="w-full xl:w-8/8 mb-12 xl:mb-0 px-4 mx-auto mt-8">
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">

            <div class="rounded-t mb-0 mt-1 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                        <h2 class="font-semibold text-xl text-gray-700">REGISTRO DE EMPLEADOS DE BAJA</h2>
                    </div>
                
                    <div class="relative mt-1 w-full px-4 max-w-full flex-grow flex-1 text-right">
                        <input id="busquedadeempleados" type="text" class="text-gray text-sm uppercase px-3 py-1 rounded border-2 border-gray mr-1 mb-0" placeholder="&#xF002; buscar" style="font-family:Arial,FontAwesome" />
                    </div>
                    
                    <div class="relative mt-1 w-full px-4 max-w-full flex-grow flex-1 text-right">
                        <a title="ver altas" href="empleados" class="bg-indigo-500 text-white active:bg-indigo-600 text-sm font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                            <i class="fas fa-user-check"></i>
                            Ver Altas
                        </a>
                    {{-- </div>
                    <button onclick="
                    Swal.fire({
                        title: 'Alta Exitosa',
                        text: 'Presiona Ok para continuar',
                        icon: 'success',
                        confirmButtonText: 'OK'
                        });">
                    ver alerta
                    </button> --}}




                </div>
            </div>

            <br>
            
            @include('livewire.tabla-empleados-bajas')
        </div>
    </div>
</section>
    
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

