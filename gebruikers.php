<?php

$login_vereist = true;
include("init.php");


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">


    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<?php include ("nav_header.php"); ?>
<!-- Sidebar Navigation end-->
<div class="page-content">
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Tables</h2>
        </div>
    </div>
    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Tables        </li>
        </ul>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="block margin-bottom-sm">
                    <div class="title"><strong>Gebruikers binnen uw organisatie.</strong></div>
                    <div class="table-responsive">

                        <button id="btn-show-all-children" type="button">Expand All</button>
                        <button id="btn-hide-all-children" type="button">Collapse All</button>
                        <hr>
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Voornaam</th>
                                <th>Achternaam</th>
                                <th>E-mail</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th></th>
                                <th>Voornaam</th>
                                <th>Achternaam</th>
                                <th>E-mail</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="block">
                        <div class="title"><strong class="d-block">Basic Form</strong><span class="d-block">Lorem ipsum dolor sit amet consectetur.</span></div>
                        <div class="block-body">
                            <form>
                                <div class="form-group">
                                    <label class="form-control-label">Voornaam</label>
                                    <input type="text" placeholder="Piet" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Achternaam</label>
                                    <input type="text" placeholder="De Vries" class="form-control">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input type="email" placeholder="piet@devries.nl" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Wachtwoord</label>
                                    <input type="password" placeholder="Een veilig wachtwoord.." class="form-control">
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Permissies <br><small class="text-primary">Als u niets aanvinkt kan de gebruiker alleen inloggen en de app gebruiken volgens uw instellingen.</small></label>
                                    <div class="form-group">
                                    <div class="col-sm-9">
                                        <div>
                                            <input id="option" type="checkbox" value="">
                                            <label for="option">Kan eigen gegevens bekijken/aanpassen</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div>
                                            <input id="option" type="checkbox" value="">
                                            <label for="option">Kan logboeken bekijken</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div>
                                            <input id="option" type="checkbox" value="">
                                            <label for="option">Kan gebruikers toevoegen/verwijderen</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div>
                                            <input id="option" type="checkbox" value="">
                                            <label for="option">Is administrator(Globale beheerpermissies)</label>
                                        </div>
                                    </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Toegang tot: <br><small class="text-primary">Dit zijn verbonden MobiAuth scanners, houdt 'CONTROL' ingedrukt om meerdere te selecteren.</small></label>
                                    <div class="col-sm-9 ml-auto">
                                        <select multiple="" class="form-control">
                                            <option>Hoofdingang</option>
                                            <option>Congiergekantoor</option>
                                            <option>Voorraadhok</option>
                                            <option>Administratiekantoor</option>
                                             <option>Kantoor van piet</option>
                                            <option>Vergaderzalen</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Signin" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>
    <footer class="footer">
        <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
                <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                <p class="no-margin-bottom">2020 &copy; Your company. Design by <a href="https://bootstrapious.com/p/bootstrap-4-dark-admin">Bootstrapious</a>.</p>
            </div>
        </div>
    </footer>
</div>
</div>
<!-- JavaScript files-->
<script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
<script src="vendor/popper.js/umd/popper.min.js"> </script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="js/front.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script>
    function format ( d ) {
        // `d` is the original data object for the row
        return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
            '<tr>'+
            '<td>Naam:</td>'+
            '<td>'+d.voornaam+ ' '+d.achternaam+'</td>'+
            '</tr>'+
            '<tr>'+
            '<td>Gebruikers-ID:</td>'+
            '<td>'+d.uid+'</td>'+
            '</tr>'+
            '<tr>'+
            '<td>Organisatie:</td>'+
            '<td>'+d.organisatie+'</td>'+
            '</tr>'+
            '</table>';
    }

    $(document).ready(function() {
        var table = $('#example').DataTable( {
            "ajax": "https://mobiauth.nl/api/userdata",
            "columns": [
                {
                    "className":      'details-control',
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ''
                },
                { "data": "voornaam" },
                { "data": "achternaam" },
                { "data": "email" }
            ],
            "order": [[1, 'asc']]
        } );

        // Add event listener for opening and closing details
        $('#example tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row( tr );

            if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Open this row
                row.child( format(row.data()) ).show();
                tr.addClass('shown');
            }
        } );
    } );
</script>
<style>
    td.details-control {
        background: url('https://cdn.rawgit.com/DataTables/DataTables/6c7ada53ebc228ea9bc28b1b216e793b1825d188/examples/resources/details_open.png') no-repeat center center;
        cursor: pointer;
    }
    tr.shown td.details-control {
        background: url('https://cdn.rawgit.com/DataTables/DataTables/6c7ada53ebc228ea9bc28b1b216e793b1825d188/examples/resources/details_close.png') no-repeat center center;
    }
</style>
</body>
</html>