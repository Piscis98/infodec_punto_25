<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Calificacion;

class Calificaciones extends Controller{

    protected $calificacion;

    protected $db;

    protected $builder;

    protected $validation;

    public function __construct(){
        $this->calificacion=new Calificacion();
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('calificacion');
    }

    public function index()
    {

         $datos['calificaciones']=$this->calificacion->orderBy('nombre_estudiante','ASC')->findAll();
         $datos['header']= view('template/header');
         $datos['footer']= view('template/footer');

        return view('calificaciones/listar_calificaciones',$datos);
    }

    public function agregarCalificacion()
    {

        session();

        $validation = \Config\Services::validation();

        $datos['header']= view('template/header');
        $datos['footer']= view('template/footer');
        $datos['validation']=$validation;

        return view('calificaciones/agregar_calificacion', $datos);
    }

    public function agregar()
    {

        if($this->validate('calificacion')){

            $datos= [
                'nombre_estudiante' => $this->request->getVar('nombre_estudiante'),
                'parcial_uno' => $this->request->getVar('parcial_uno'),
                'parcial_dos' => $this->request->getVar('parcial_dos'),
                'parcial_tres' => $this->request->getVar('parcial_tres'),
                'nota_final' => $this->request->getVar('nota_final'),
            ];

       $this->calificacion->insert($datos);

       return redirect('/', 'refresh');   

        }else{
            return redirect()->back()->withInput();
        }

      
    }



    public function eliminarCalificacion($id=null){

         $this->calificacion->where('id',$id)->delete($id);

         return redirect('/', 'refresh');   

    }


    public function editarCalificacion($id=null)
    {
        $validation = \Config\Services::validation();
        $datos['calificacion']= $this->calificacion->where('id',$id)->first();
        $datos['header']= view('template/header');
        $datos['footer']= view('template/footer');
        $datos['validation']=$validation;
        return view('calificaciones/editar_calificacion', $datos);
        
    }



    public function editar()
    {
        $id=$this->request->getVar('id'); 

        if($this->validate('calificacion')){

            $datos= [
                'nombre_estudiante' => $this->request->getVar('nombre_estudiante'),
                'parcial_uno' => $this->request->getVar('parcial_uno'),
                'parcial_dos' => $this->request->getVar('parcial_dos'),
                'parcial_tres' => $this->request->getVar('parcial_tres'),
                'nota_final' => $this->request->getVar('nota_final'),
            ];
   
       $this->calificacion->update($id,$datos);

       return redirect('/', 'refresh');   

        }else{

        return self::editarCalificacion($id);
        
        }

      
    }

}