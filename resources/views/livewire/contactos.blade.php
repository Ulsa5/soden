{{-- ver tema de mediaquerys --}}
<div class="inline-block bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-w-full sm:w-full">
        
    {{-- Body --}}
    <div class="p-5">
        <fieldset class="border rounded border-gray-300 p-3">
            <legend class="text-sm">Información adicional y de contacto</legend>
            
            <div class="grid md:grid-rows-2 grid-flow-col gap-4 sm:grid grid-rows-3">

                <div class="mb-1 row-span-1 w-full">
                    <h3 class="font-semibold text-xl text-Gray-700">MANUALES</h3><br>
                    &nbsp;&nbsp;&nbsp;<button onclick="document.getElementById('framemanuales').src='{{ asset('docs/manualdeusuario.pdf') }}'" class="shadow appearance-none border rounded w-64 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="manualdeusuario">MANUAL DE USUARIO</button><br><br>
                    &nbsp;&nbsp;&nbsp;<button onclick="document.getElementById('framemanuales').src='{{ asset('docs/manualtecnico.pdf') }}';" class="shadow appearance-none border rounded w-64 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="manualtecnico" >MANUAL TÉCNICO</button>
                </div>
                
                <div class="mb-1 col-span-1">
                    <div class="max-w-md py-1 px-8 bg-white border border-2 shadow-lg rounded-lg my-4">
                        <div class="flex justify-center md:justify-end -mt-16">
                            <img class="w-32 h-32 object-cover rounded-full border-2 border-indigo-500" src="{{ asset("img/Developer.jfif") }}">
                        </div>
                        
                        <div>
                            <h2 class="text-gray-800 text-3xl font-semibold">Saúl Escobar</h2>
                            <p class="mt-1 text-gray-600">Desarrollador FullStack</p>
                            <br>
                            <p class="mt-1 text-black font-bold">
                            Teléfono: 
                            <a href="tel:+50259665629" class="mt-2 text-gray-600 font-normal"> 59665629</a>
                            </p>
                            <p class="mt-2 text-black font-bold">Coreo: 
                                <a href="mailto:juansa665@gmail.com" class="mt-2 text-gray-600 font-normal"> juansa665@gmail.com</a>
                            </p>
                            
                        </div>
                        
                        <div class="flex justify-end mt-1">
                            <a href="#@saul" class="text-4xl font-medium text-yellow-700"><i class="fab fa-instagram"></i></a>&nbsp;&nbsp;
                            <a href="#@saul" class="text-4xl font-medium text-indigo-500"><i class="fab fa-facebook-square"></i></a>&nbsp;&nbsp;
                            <a href="#@saul" class="text-4xl font-medium text-indigo-300"><i class="fab fa-twitter-square"></i></a>&nbsp;&nbsp;
                            <a href="#@saul" class="text-4xl font-medium text-black"><i class="fab fa-github-square"></i></a>
                        </div>
                    </div>
                </div>

                <div class="mb-1 lg:row-span-2 md:row-span-2 sm:row-span-1">
                    <div class="mb-1">
                        <center>
                            <h3 class="font-semibold text-xl text-Gray-700">VISUALIZADOR DE DOCUMENTOS</h3><br>
                        </center>
                        <div>
                            <iframe id="framemanuales" src="{{ asset('docs/manualdeusuario.pdf') }}" frameborder="1" width="100%" height="550"  overflow="hidden">
                            </iframe>                            
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>


