<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resource Manager</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <img width="30%" src="./img/logo.ico"></img>
                <div class="sidebar-brand-text mx-3">Company</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Zarządzanie
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-laptop"></i>
                    <span>Sprzęty</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Wybierz</h6>
                        <a class="collapse-item" href="dodaj_sprzet.php">Dodaj sprzęt</a>
                        <a class="collapse-item" href="edytuj_sprzet.php">Edytuj sprzęt</a>
                        <a class="collapse-item" href="usun_sprzet.php">Usuń sprzęt</a>
                        <h6 class="collapse-header">Rodzaj</h6>
                        <a class="collapse-item" href="dodaj_rodzaj.php">Dodaj rodzaj</a>
                        <a class="collapse-item" href="usun_rodzaj.php">Usuń rodzaj</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLicencje"
                    aria-expanded="true" aria-controls="collapseLicencje">
                    <i class="fas fa-fw fa-certificate"></i>
                    <span>Licencje</span>
                </a>
                <div id="collapseLicencje" class="collapse" aria-labelledby="headingLicencje" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Wybierz</h6>
                        <a class="collapse-item" href="dodaj_licencje.php">Dodaj licencje</a>
                        <a class="collapse-item" href="przypisz_licencje.php">Przypisz sprzęt</a>
                        <a class="collapse-item" href="usun_licencje.php">Usuń licencje</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Użytkownicy</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Wybierz</h6>
                        <a class="collapse-item" href="dodaj_uzytkownika.php">Dodaj użytkownika</a>
                        <a class="collapse-item" href="edytuj_uzytkownika.php">Edytuj użytkownika</a>
                        <a class="collapse-item" href="usun_uzytkownika.php">Usuń użytkownika</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-signal"></i>
                    <span>Status</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sprzęt</h6>
                        <a class="collapse-item" href="edytuj_status_sprzet.php">Aktualizuj status</a>
                        <a class="collapse-item" href="usun_status_sprzet.php">Usuń status</a>
                        <h6 class="collapse-header">Licencja</h6>
                        <a class="collapse-item" href="edytuj_status_licencja.php">Aktualizuj status</a>
                        <a class="collapse-item" href="usun_status_licencja.php">Usuń status</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Listy
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="lista.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Lista sprzętów</span></a>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="lista2.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Lista licencji</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Informacje szczegółowe</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                <?php
                                    echo mb_strtoupper($_GET['nr']);
                                ?>
                            </h6>
                        </div>
                        <div class="card-body">
                               <?php
                                    $link = pg_connect("host=resourcemanagerdb.postgres.database.azure.com dbname=baza_aplikacja user=resourcemanager@resourcemanagerdb password=Trzmielu123");
                                    $sql = "SELECT model, nr_seryjny, rodzaj, dodatkowy_opis
                                    FROM dane_techniczne_sprzetu
                                    JOIN sprzet ON dane_techniczne_sprzetu.id_sprzet = sprzet.id
                                    WHERE sprzet.nr_seryjny = '$_GET[nr]'";
                                    $sql2 = "SELECT termin_wygasniecia
                                    FROM dane_ksiegowe_sprzetu
                                    JOIN sprzet ON dane_ksiegowe_sprzetu.id_sprzet = sprzet.id
                                    WHERE sprzet.nr_seryjny = '$_GET[nr]'";
                                    $sql3 = "SELECT nazwa
                                    FROM licencja
                                    JOIN sprzet ON licencja.sprzet_id = sprzet.id
                                    WHERE sprzet.nr_seryjny = '$_GET[nr]'";

                                    $wyniki = pg_query($link, $sql);
                                    $wyniki2 = pg_query($link, $sql2);
                                    $wyniki3 = pg_query($link, $sql3);
                                    $wyniki3 = pg_query($link, $sql3);
                                    $row2 = pg_fetch_array($wyniki2);
                                    $licencje = '';
                                    while($row3 = pg_fetch_array($wyniki3)){
                                            $licencje .= $row3['nazwa']."</br>";
                                    }
                                    while($row = pg_fetch_array($wyniki)){
                                        echo '<div class="row">
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                                        Numer Seryjny</div>
                                                                    <div class="h1 mb-0 font-weight-bold text-gray-800">
                                                                        '.mb_strtoupper($row['nr_seryjny']).'
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-laptop fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                                        Model</div>
                                                                    <div class="h1 mb-0 font-weight-bold text-gray-800">
                                                                        '.mb_strtoupper($row['model']).'
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-laptop fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                                        Rodzaj sprzętu</div>
                                                                    <div class="h1 mb-0 font-weight-bold text-gray-800">
                                                                        '.mb_strtoupper($row['rodzaj']).'
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-cog fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div id="data" class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                                        Termin wygaśnięcia</div>
                                                                    <div class="h1 mb-0 font-weight-bold text-gray-800">
                                                                        '.$row2['termin_wygasniecia'].'
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-calendar-day fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div style="max-width: 100% !important; flex:none;" class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                                        Opis</div>
                                                                    <div class="h3 mb-0 font-weight text-gray-800">
                                                                        '.mb_strtoupper($row['dodatkowy_opis']).'
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-sticky-note fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div style="max-width: 100% !important; flex:none;" class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                                        Licencje</div>
                                                                    <div class="h3 mb-0 font-weight text-gray-800">
                                                                        '.
                                                                        $licencje
                                                                        .'
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-certificate fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>'; 
                                    }

                                    pg_close($link);
                                ?>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Company</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

<script type="text/javascript">
    var x = $('#data').text();
    x = Date.parse(x.trim().substring(160,170));
    
    var date = new Date()
    date.setDate(date.getDate() + 365);
    console.log(x,Date.now())
    if(x <= Date.now()){
        console.log('es');
        $('#data').addClass('border-left-danger');
        $('#data .card-body .col div').addClass('text-danger');
    }
    else if(x > Date.now() && x <= Date.parse(date)){
        $('#data').addClass('border-left-warning');
        $('#data .card-body .col div').addClass('text-warning');
    }
    else {
        $('#data').addClass('border-left-success');
        $('#data .card-body .col div').addClass('text-success');
    }
</script>