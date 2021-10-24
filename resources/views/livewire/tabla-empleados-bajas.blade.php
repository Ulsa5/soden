{{-- TABLA --}}
<div class="block w-full overflow-x-auto">
    <table id="tabla_empleados" class="items-center bg-transparent w-full border-collapse overflow-hidden">
        <thead class="bg-gray-100">
            <tr>
                <th class="text-center px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Número
                </th>
                <th class="text-center px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Foto
                </th>
                <th class="text-center px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Fecha de Alta
                </th>
                <th class="text-center px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Fecha de Baja
                </th>
                <th class="text-center px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Nombre
                </th>
                <th class="text-center px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    DPI
                </th>
                <th class="text-center px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Empresa
                </th>
                <th class="text-center px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Puesto
                </th>
                <th class="text-center px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Teléfono
                </th>
                <th class="text-center px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Dirección
                </th>
                <th class="text-center px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Afiliación IGSS
                </th>
                <th class="text-center px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Acciones
                </th>
            </tr>
        </thead>

        <tbody id="tbodyempleados" class="text-center mb-5">    
            @php
                $i=0;
                $empresa="";
            @endphp

            @foreach ($empleadodebajas as $empleado)
                @php
                    $i+=1;
                    $fechaOriginal = $empleado->fechadealta;
                    $fechaBajaOriginal = $empleado->fechadebaja;
                    $nuevaFecha = date("d/m/Y", strtotime($fechaOriginal));
                    $nuevaFechaBaja = date("d/m/Y", strtotime($fechaBajaOriginal));

                    if ($empleado->empresa == 1){
                        $empresa="CENTINELA";
                    }elseif ($empleado->empresa == 2) {
                        $empresa="GLOSS";
                    }elseif ($empleado->empresa == 3) {
                        $empresa="GOLD EAGLE";
                    }
                @endphp
            <tr>
                <td class="border px-4 py-2">{{$i}}</td>
                <td class="border px-4 py-2"><img src="{{$empleado->foto}}" alt="foto" height="100"/></td>
                <td class="border px-4 py-2">{{$nuevaFecha}}</td>
                <td class="border px-4 py-2">{{$nuevaFechaBaja}}</td>
                <td class="border px-4 py-2">{{$empleado->nombre}}</td>
                <td class="border px-4 py-2">{{$empleado->dpi}}</td>
                <td class="border px-4 py-2">{{$empresa}}</td>
                <td class="border px-4 py-2">{{$empleado->puesto}}</td>
                <td class="border px-4 py-2">{{$empleado->telefono}}</td>
                <td class="border px-4 py-2">{{$empleado->direccion}}</td>
                <td class="border px-4 py-2">{{$empleado->igss}}</td>
                <td class="border px-4 py-2">
                        <button wire:click="realta({{$empleado->id}})"><i class="text-2xl text-green-700 fas fa-user-plus" title="Reingreso"></i></button>
                        @if ($modalAlta)
                            @include('livewire.crear')
                        @endif
                        
                        &nbsp;|&nbsp;
                        <button title="Ver documentos" wire:click="verDocumentos({{$empleado->id}})"><i class="text-2xl text-green-700 fas fa-file-pdf"></i></button>
                        @if ($modalDocumentos)
                            @include('livewire.modaldocumentos')
                        @endif
                </td>
            </tr>
        
            @endforeach
        </tbody>
    </table>
</div>










