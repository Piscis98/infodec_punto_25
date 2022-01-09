<?php 
namespace App\Models;

use CodeIgniter\Model;

class Calificacion extends Model{
    protected $table      = 'calificacion';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields=['nombre_estudiante','parcial_uno','parcial_dos','parcial_tres', 'nota_final'];
}