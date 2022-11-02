<?php

require_once('vistas/plantilla/head.php');
require_once('vistas/plantilla/nav.php');
require_once('vistas/plantilla/titulo.php');
?>



<p>Módulo de gestión de <?php echo $this->titulo ?></p>
<h3>ENTRADAS</h3>

</article>
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Fecha Entrada</th>
            <th scope="col">Encargado</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->datos as $f) {
        ?>
            <tr>
                <th scope="row"><a href=""><?php echo $f['IdCompra']; ?></a>
                </th>
                <td><?php echo $f['Fechaentrada']; ?>
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
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Id Prod</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->datosdetalle as $f2) {
        ?>
            <tr>
                <th scope="row"><a href=""><?php echo $f2['IdCompra']; ?></a>
                </th>
                <td><?php echo $f2['IdProd']; ?>
                </td>
                <td><?php echo $f2['Cantidad']; ?>
                </td>
                <td><?php echo $f2['Precio']; ?>
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
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre Categoria</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->datoscate as $f3) {
        ?>
            <tr>
                <th scope="row"><a href=""><?php echo $f3['IdCat']; ?></a>
                </th>

                <td><?php echo $f3['NombreCat']; ?>
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