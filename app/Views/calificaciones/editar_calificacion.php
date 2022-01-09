<?=$header;?>


<?=$validation->listErrors();?>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Actualizar calificación</h5>
            <p class="card-text">

            <form method="post" action="<?=site_url('/editar')?>">
    
            <input class="form-control" type="hidden" name="id" value="<?=$calificacion['id']?>">

    <div class="form-group">
        <label for="nombre_estudiante">Nombre</label>
        <input id="nombre_estudiante" class="form-control" type="text" name="nombre_estudiante" value="<?=$calificacion['nombre_estudiante']?>"/>

    </div>

    <div class="form-group">

      <label for="parcial_uno">Parcial 1</label>
        <input id="parcial_uno" class="form-control" type="text" name="parcial_uno" oninput="calcularNota()" value="<?=$calificacion['parcial_uno']?>"/>
 

    </div>

    <div class="form-group">
        
        <label for="parcial_dos">Parcial 2</label>
        <input id="parcial_dos" class="form-control" type="text" name="parcial_dos" oninput="calcularNota()" value="<?=$calificacion['parcial_dos']?>"/>


    </div>

    <div class="form-group">
        
        <label for="parcial_tres">Parcial 3</label>
        <input id="parcial_tres" class="form-control" type="text" name="parcial_tres" oninput="calcularNota()" value="<?=$calificacion['parcial_tres']?>"/>

    </div>

    <div class="form-group">
        
        <label for="nota_final">Nota</label>
        <input id="nota_final" class="form-control" type="text" name="nota_final" value="<?=$calificacion['nota_final']?>" readonly/>

    </div>

    <button class="btn btn-success" type="submit">Actualizar</button>

    </form>

            </p>
        </div>
    </div>

    
<?=$footer;?>