<form method="POST" v-on:submit.prevent="createKeep">

<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Crear tarea</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <label for="keep">Nueva tarea</label>
                <input type="text" name="keep" class="form-control" v-model="newKeep">
                <span v-for="error in errors" clasS="text-danger">@{{ error }}</span>
                
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
        </div>
    </div>
</div>

</form>