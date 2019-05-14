<template>
    <!-- Normal modal -->
    <div class="fade">
        <!-- .modal-dialog -->
        <div class="modal-dialog modal-dialog-overflow" role="document">
            <!-- .modal-content -->
            <div class="modal-content">
                <!-- .modal-header -->
                <div class="modal-header">
                    <h5 class="modal-title"> Modal title </h5>
                </div>
                <!-- /.modal-header -->
                <!-- .modal-body -->
                <div class="modal-body">


                </div>
                <!-- /.modal-body -->
                <!-- .modal-footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Gravar</button>
                </div>
                <!-- /.modal-footer -->
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- /.card-body -->
</template>
<script>
    // import VueImageUploadCroppie from 'vue-image-upload-croppie'
    export default {
        // components: {
        //     VueImageUploadCroppie
        // },

        data() {
            return {
                'defaultImage': '',
                'trans': {
                    'cropImage': 'Carregar Imagem',
                    'chooseImage':'Carregar',
                    'confirmCutting': 'Confirmar'
                },
                showCropt: true
            }
        },
        mounted ()
        {
            console.log("Boa Vida");
        },
        watch: {
            'defaultImage': function(value) {
                if (value) {
                    console.log('imagem cortada', value)
                    // do whatever you want with image value,(upload ..)
                }
            }
        },

    }

</script>
<style scoped=""></style>