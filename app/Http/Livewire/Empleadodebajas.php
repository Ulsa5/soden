<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleadodebaja;
use App\Models\Empleado;

class Empleadodebajas extends Component
{
    public $empleadodebajas, $foto;
    public $modalAlta=false, $modalDocumentos=false, $modalSubirDocumentos=false;

    public function render()
    {
        $this->empleadodebajas = Empleadodebaja::all();
        return view('livewire.empleadodebajas');
    }

    public function crear(){
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModalAlta(){
        $this->modalAlta=true;
    }

    public function cerrarModalAlta(){
        $this->modalAlta=false;
    }

    public function verDocumentos($id){
        $empleado = Empleadodebaja::findOrFail($id);
        $this->id_empleado=$id;
        $this->nombre=$empleado->nombre;
        $this->dpi=$empleado->dpi;
        $this->puesto=$empleado->puesto;
        $this->foto=$empleado->foto;
        $this->docdpi=$empleado->docdpi;
        $this->abrirModalDocumentos();
    }

    public function subirDocumentos($id){
        $empleado = Empleadodebaja::findOrFail($id);
        $this->id_empleado=$id;
        $this->nombre=$empleado->nombre;
        $this->dpi=$empleado->dpi;
        $this->puesto=$empleado->puesto;
        $this->foto=$empleado->foto;
        $this->docdpi=$empleado->docdpi;
        $this->abrirModalSubirDocumentos();
    }

    public function abrirModalSubirDocumentos(){
        $this->modalSubirDocumentos = true;
    }

    public function cerrarModalSubirDocumentos(){
        $this->modalSubirDocumentos = false;
    }

    public function abrirModalDocumentos(){
        $this->modalDocumentos=true;
    }

    public function cerrarModalDocumentos(){
        $this->modalDocumentos=false;
    }

    public function limpiarCampos(){
        $this->fechadealta="";
        $this->nombre="";
        $this->dpi="";
        $this->empresa="";
        $this->puesto="";
        $this->telefono="";
        $this->direccion="";
        $this->igss="";
        $this->id_empleado="";
    }

    public function realta($id){
        $empleado = Empleadodebaja::findOrFail($id);
        $this->id_empleado=$id;
        $this->foto=$empleado->foto;
        $this->fechadealta=$empleado->fechadealta;
        $this->nombre=$empleado->nombre;
        $this->dpi=$empleado->dpi;
        $this->empresa=$empleado->empresa;
        $this->puesto=$empleado->puesto;
        $this->telefono=$empleado->telefono;
        $this->direccion=$empleado->direccion;
        $this->igss=$empleado->igss;
        $this->docdpi=$empleado->docdpi;
        $this->abrirModalAlta();
    }

    public function borrarDeBajas($id){
        Empleadodebaja::find($id)->delete();
    }

    public function guardarRealta($id){
        Empleado::updateOrCreate([
            'id'=>$this->id
        ],
        [
            'id'=>$id,
            'fechadealta'=>$this->fechadealta,
            'foto'=>$this->foto,
            'nombre'=>$this->nombre,
            'dpi'=>$this->dpi,
            'empresa'=>$this->empresa,
            'puesto'=>$this->puesto,
            'telefono'=>$this->telefono,
            'direccion'=>$this->direccion,
            'igss'=>$this->igss,
            'docdpi'=>$this->docdpi
        ]);
        $this->cerrarModalAlta();
        $this->limpiarCampos();
        $this->borrarDeBajas($id);
    }











}
