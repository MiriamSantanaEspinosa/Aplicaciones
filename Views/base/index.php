<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 02/01/2019
 * Time: 11:02 PM
 */
?>
<h1 align="center">Bienvenido</h1>

<div align="center" >
    <a href="<?php echo URL?>base/print_pdf" target="_blank" id="imprimir_pdf" class=" btn btn-primary black-text tooltipped " data-position="bottom" data-delay="50" data-tooltip="Imprimir"><i class="material-icons">Documentos Subidos</i></a>
</div>

<br>
<br>

<body id="LoginForm">
<div class="container" align="center">
        <a data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary">Actas</a>
        <a data-toggle="modal" data-target="#squarespaceModal1" class="btn btn-primary">Informes</a>
        <a data-toggle="modal" data-target="#squarespaceModal2" class="btn btn-primary">Reportes</a>
        <a data-toggle="modal" data-target="#squarespaceModal3" class="btn btn-primary">Pendientes</a>
</div>

<div  class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h3 class="modal-title" id="lineModalLabel" >Actas</h3>
                <a class="close" data-dismiss="modal"><span aria-hidden="true">×</span> </a>
            </div>

            <div class="modal-body">
                <form action="<?php echo URL?>base/file" method="post" enctype="multipart/form-data">
                    Seleccione archivo:<input type="file" name="archivo" id="archivo" > </input>

                    <br><br>
                    <input  type="submit" value="Subir archivo"> </input>
                </form>
            </div>



        </div>
    </div>
</div>

<div class="modal fade" id="squarespaceModal1" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h3 class="modal-title" id="lineModalLabel" >Informes</h3>
                <a class="close" data-dismiss="modal"><span aria-hidden="true">×</span> </a>
            </div>
            <div class="modal-body">
                <form action="<?php echo URL?>base/file1" method="post" enctype="multipart/form-data">
                    Seleccione archivo:<input type="file" name="archivo" id="archivo" requiered> </input>

                    <br><br>
                    <input type="submit" value="Subir archivo"> </input>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="squarespaceModal2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h3 class="modal-title" id="lineModalLabel" >Reportes</h3>
                <a class="close" data-dismiss="modal"><span aria-hidden="true">×</span> </a>
            </div>
            <div class="modal-body">
                <form action="<?php echo URL?>base/file2" method="post" enctype="multipart/form-data">
                    Seleccione archivo:<input type="file" name="archivo" id="archivo" > </input>
                    <br><br>
                    <input type="submit"  value="Subir archivo"> </input>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="squarespaceModal3" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h3 class="modal-title" id="lineModalLabel" >Pendientes</h3>
                <a class="close" data-dismiss="modal"><span aria-hidden="true">×</span> </a>
            </div>
            <div class="modal-body">
                <form action="<?php echo URL?>base/file3" method="post" enctype="multipart/form-data">
                    Seleccione archivo:<input type="file" name="archivo" id="archivo" > </input>
                    <br><br>
                    <input type="submit"  value="Subir archivo"> </input>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
</body>





