
<div class="container-fluid px-4">
    <h1 class="mt-4"><?= $titleSection; ?></h1>

    <h3>Bem vindo a tela de Inicio</h3>

</div>
<script>
    function validate() {
        var size = 20715; //20.xx kb
        var file_size = document.getElementById('file_upload').files[0].size;
        if (file_size >= size) {
            alert('Tamanho máximo de 20 kb');
            document.getElementById('file_upload').value='';
            return false;
        }
        
        // var type = 'image/*';
        // var file_type = document.getElementById('file_upload').files[0].type;
        // if (file_type != type) {
        //     alert('Format not supported,Only .jpeg images are accepted');
        //     document.getElementById('file_upload').value='';
        //     return false;
        // }
    }
</script>