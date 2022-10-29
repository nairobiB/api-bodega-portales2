<?php

require_once('vistas/plantilla/head.php');
require_once('vistas/plantilla/nav.php');
require_once('vistas/plantilla/titulo.php');
?>




<h3>SALIDAS</h3>

</article>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Fecha Venta</th>
            <th scope="col">Encargado</th>
            <th scope="col">Accion</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->datos as $f) {
        ?>
            <tr>
                <th scope="row"><a href=""><?php echo $f['Codsalida']; ?></a>
                </th>
                <td><?php echo $f['Fechaventa']; ?>
                </td>
                <td><?php echo $f['NomUsr']; ?>
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