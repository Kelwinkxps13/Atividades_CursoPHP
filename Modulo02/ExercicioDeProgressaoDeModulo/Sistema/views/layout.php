<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

    <?php include_once 'components/navbar.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php functionPages(); ?>
            </div>
        </div>
    </div>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js"></script>
    <script type="text/javascript" src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
    <script type="text/javascript">
        new DataTable('#myTable');
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#price1').mask('000.000,00', {
                reverse: true
            });
            $('#price2').mask('000.000,00', {
                reverse: true
            });
            $('#cpf').mask('000.000.000-00');
            $('#barcode').mask('0000000000000');
            $('#stock').mask('0000');
            //$('#internalCode').mask('00000000000000');
        });
    </script>
</body>

</html>