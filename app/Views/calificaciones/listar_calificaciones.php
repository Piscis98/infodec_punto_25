
<?=$header;?>

<div class="row justify-content-end"> 
<a class="col-2 btn btn-success" href="<?=base_url('agregar_calificacion')?>"> Nuevo </a>
</div> 
    <table class="table table-light text-center">

    <thead class="thead-light">
        <tr>
            <th>Nombre</th>
            <th>Parcial 1</th>
            <th>Parcial 2</th>
            <th>Parcial 3</th>
            <th>Final</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>

    <?php foreach($calificaciones as $calificacion):?>

         <tr>
            <td><?=$calificacion['nombre_estudiante'];?></td>
            <td><?=$calificacion['parcial_uno'];?></td>
            <td><?=$calificacion['parcial_dos'];?></td>
            <td><?=$calificacion['parcial_tres'];?></td>
            <td><?=$calificacion['nota_final'];?></td>
            <td><a href="<?=base_url('editar_calificacion/'.$calificacion['id']);?>" class="btn btn-info" type="button" style="margin-right:4px;">Editar</a><a href="<?=base_url('eliminar_calificacion/'.$calificacion['id']);?>" class="btn btn-danger" type="button">Eliminar</a> </td>
        </tr> 

      <?php endforeach; ?>  

    </tbody>

    </table>
    <?=$footer;?>

 