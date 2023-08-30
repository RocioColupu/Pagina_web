<!-- Insertar Registros-->
<?php
if (isset($_POST['formInsertar'])){?>
    <div class="col-12 col-md-12"> 
<form action="" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombres">Nombres</label>
      <input name="nombres" type="text" class="form-control" placeholder="Nombres">
    </div>
    <div class="form-group col-md-6">
      <label for="edad">Apellidos</label>
      <input name="apellidos" type="text" class="form-control" id="edad" placeholder="Apellidos">
    </div>
  </div>
<div class="form-row">  
    <div class="form-group col-md-6">
      <label for="profesion">Profesión</label>
      <input name="profesion" type="text" class="form-control" id="profesion" placeholder="Profesion">
    </div>

  <div class="form-group col-md-6">
    <label for="Estado">Estado</label>
    <select required name="estado" class="form-control" id="Estado">
    <option value=""><< >></option>
    <option value="Colombia">Colombia</option>
    <option value="Argentina">Argentina</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Peru">Peru</option>
    <option value="Brasil">Brasil</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Chile">Chile</option>
    </select>
  </div>

</div>
<div class="form-group">
  <button name="insertar" type="submit" class="btn btn-primary  btn-block">Guardar</button>
</div>
</form>
    </div> 
<?php }  ?>
<!-- Fin Insertar Registros-->