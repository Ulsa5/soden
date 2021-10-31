<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleado;
use App\Models\Empleadodebaja;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Cloudder;

class Empleados extends Component
{
    public $empleados, $unempleado, $fechadealta, $fechadebaja, $docdpi, $foto, $nombre, 
    $dpi, $empresa, $puesto, $telefono, $direccion, $igss, $id_empleado;
    public $modalAlta=false, $modalBaja=false, $modalDocumentos=false;
    
    use WithFileUploads;

    public function render()
    {
        // $empleados = Empleado::paginate(1);
        $this->empleados = Empleado::all();
        // $this->empleados = Empleado::orderBy('foto','asc')->get();
        // $this->empleados = Empleado::where('empresa',2)->get();

        return view('livewire.empleados');
        
    }

    public function crear(){
        $this->limpiarCampos();
        $this->abrirModalAlta();
    }

    public function abrirModalDocumentos(){
        $this->modalDocumentos=true;
    }

    public function cerrarModalDocumentos(){
        $this->modalDocumentos=false;
    }

    public function abrirModalAlta(){
        $this->modalAlta=true;
    }

    public function cerrarModalAlta(){
        $this->modalAlta=false;
    }

    public function abrirModalBaja(){
        $this->modalBaja=true;
    }

    public function cerrarModalBaja(){
        $this->modalBaja=false;
    }

    public function limpiarCampos(){
        $this->fechadealta="";
        $this->foto="";
        $this->nombre="";
        $this->dpi="";
        $this->empresa="";
        $this->puesto="";
        $this->telefono="";
        $this->direccion="";
        $this->igss="";
        $this->id_empleado="";
        $this->fechadebaja="";
    }

    public function editar($id){
        $fotonueva=null;

        $empleado = Empleado::findOrFail($id);

        $this->id_empleado=$id;
        $this->foto=$empleado->foto;
        $this->nombre=$empleado->nombre;
        $this->fechadealta=$empleado->fechadealta;
        $this->dpi=$empleado->dpi;
        $this->empresa=$empleado->empresa;
        $this->puesto=$empleado->puesto;
        $this->telefono=$empleado->telefono;
        $this->direccion=$empleado->direccion;
        $this->igss=$empleado->igss;
        // $this->docdpi=$empleado->docdpi;
        $this->abrirModalAlta();
    }

    public function verDocumentos($id){

        $empleado = Empleado::findOrFail($id);
        $this->id_empleado=$id;
        $this->nombre=$empleado->nombre;
        $this->dpi=$empleado->dpi;
        $this->puesto=$empleado->puesto;
        $this->foto=$empleado->foto;
        $this->docdpi=$empleado->docdpi;
        $this->abrirModalDocumentos();
    }


    // public function store(){
    //     $imagenes = $this->foto->store("public/images/");
    //     $url= Storage::url($imagenes);
    //     return $url;
    // }


    public function guardar(){

        if (!empty($foto)) {
            //si actualizo la foto, trae datos
            $foto=$this->foto;
        }else {
            //si foto conserva los mismos datos
            $ruta = $this->foto->store('public/images/');
            $url= Storage::url($ruta);
            $this->foto = $url;
        }

        // $imagenes = $this->foto->store("public/images/");
        // $url= Storage::url($imagenes);
        // $this->foto = $url;

        Empleado::updateOrCreate(['id'=>$this->id_empleado],
        [
            'fechadealta'=>$this->fechadealta,
            'foto'=>$this->foto,
            'nombre'=>$this->nombre,
            'dpi'=>$this->dpi,
            'empresa'=>$this->empresa,
            'puesto'=>$this->puesto,
            'telefono'=>$this->telefono,
            'direccion'=>$this->direccion,
            'igss'=>$this->igss,
            // 'docdpi'=>$this->docdpi
        ]);
        $this->cerrarModalAlta();
        $this->limpiarCampos();
        
    }

        

    public function borrar($id){
        $empleado = Empleado::findOrFail($id);
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
        $this->abrirModalBaja();
    }

    public function borrado($id){
        Empleado::find($id)->delete();
    }

    public function guardarBaja($id){
        Empleadodebaja::updateOrCreate(['id'=>$this->id],
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
            'fechadebaja'=>$this->fechadebaja,
            'docdpi'=>$this->docdpi
        ]);
        $this->cerrarModalBaja();
        $this->limpiarCampos();
        $this->borrado($id);
    }
    
}
