<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 13/11/2018
 * Time: 08:33 AM
 */
?>

<h1 align="center">Bienvenido</h1>

<main>
    <div class="row">

        <div class="col blue-text  card-panel l10 offset-l0 m12 offset-m4 s10 offset-s10 z-depth-0">
            <div class="col s1 m1 offset-m2 l12 offset-l1">
                <div class="row ">
                    <table>
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Archivo descargado</th>
                            <th>Fecha</th>
                            <th>Hora</th>

                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>Alexander</td>
                            <td>Orozco</td>
                            <td>Reporte de gastos</td>
                            <td>26-11-2018</td>
                            <td>8:00 am</td>

                        </tr>
                        <tr>
                            <td>Maricruz</td>
                            <td>Valdez</td>
                            <td>Perdidas de la empresa</td>
                            <td>24-11-2018</td>
                            <td>5:00 pm</td>
                        </tr>
                        <tr>
                            <td>Alexander</td>
                            <td>Orozco</td>
                            <td>Ganancias anuales</td>
                            <td>26-11-2018</td>
                            <td>8:00 am</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</main>


<div >
    <a href="<?php echo URL?>reporte/print_pdf" target="_blank" id="imprimir_pdf" class="btn cyan lighten-2 accent-3 black-text tooltipped " data-position="bottom" data-delay="50" data-tooltip="Imprimir"><i class="material-icons">Imprime</i></a>
</div>