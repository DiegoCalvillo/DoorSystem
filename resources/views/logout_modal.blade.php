<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Alerta</h4>
            </div>
            <div class="modal-body">
                <b>Se te recuerda que, por ser tu primer login en el sistema, antes de cerrar sesión debes cambiar y personalizar tu contraseña, de lo contrario tu cuenta puede bloquearse. Descuida, solo tendrás que hacerlo una vez. Sabiendo esto, ¿quieres salir de todos modos?</b>
            </div>
            <div class="modal-footer">
                <a href="{{ url('/logout') }}" type="button" class="btn btn-primary">Si</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>