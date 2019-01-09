<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 07/01/2019
 * Time: 07:29 PM
 */
?>

<script type="text/javascript">
    swal({
            title: "Cerrar sesión",
            text: "¿Realmente deseas salir de tu sesión?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Si, Salir",
            cancelButtonText: "No, Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm)
        {
            if (isConfirm) {
                swal("Saliendo", "Hasta la próxima", "success");
                setTimeout(function(){
                    window.location.href = "<?php echo URL?>login";
                },1800)
            }
            else {
                swal("Cancelando", "Continua trabajando...", "error");
                setTimeout(function(){
                    window.location.href = "<?php echo URL?>base";
                },1500)
            }
        });
</script>
