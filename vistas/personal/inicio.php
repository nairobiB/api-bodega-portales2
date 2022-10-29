<?php

require_once('vistas/plantilla/head.php');
require_once('vistas/plantilla/nav.php');
require_once('vistas/plantilla/titulo.php');
?>




<h3>PERSONAL</h3>

</article>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Telefono</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Direccion</th>
            <th scope="col">Email</th>
            <th scope="col">Estado</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->datos as $f) {
        ?>
            <tr>
                <th scope="row"><a href=""><?php echo $f['IdPer']; ?></a>
                </th>
                <td><?php echo $f['TelPer']; ?>
                </td>
                <td><?php echo $f['NomPer']; ?>
                </td>
                <td><?php echo $f['ApePer']; ?>
                </td>
                <td><?php echo $f['DirPer']; ?>
                </td>
                <td><?php echo $f['Email']; ?>
                </td>
                <td><?php echo $f['Estado']; ?>
                </td>
                <td><?php echo $f['fecha_nacimineto']; ?>
                </td>
                <td>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary">Mod</button>
                        <button type="button" class="btn btn-warning">Del</button>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>

</table>
</div>
</div>
</section>
<?php
require_once('vistas/plantilla/pie.php');
require_once('vistas/plantilla/js.php');
require_once('vistas/plantilla/fin.php');
?>