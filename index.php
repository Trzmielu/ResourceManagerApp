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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body onload='zmiana_wartosci()' id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <img width="30%" src="./img/logo.ico"></img>
                <div class="sidebar-brand-text mx-3">MF<sup>Expert</sup></div>
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
                <form action='./' method="GET">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                </nav>

                   

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Sprzęt</h1>
                            <select id='jaki_sprzet' onchange="this.form.submit()" class="form-control jaki" name="jaki_sprzet">
                                <option value="Wszystkie">WSZYSTKIE</option>
                                <?php
                                    // Initialize connection variables.
                                    $host = "resourcemanagerdb.postgres.database.azure.com";
                                    $database = "baza_aplikacja";
                                    $user = "resourcemanager@resourcemanagerdb";
                                    $password = "Trzmielu123";

                                    // Initialize connection object.
                                    $connection = pg_connect("host=$host dbname=$database user=$user password=$password") 
                                        or die("Failed to create connection to database: ". pg_last_error(). "<br/>");
                                    // $link = mysqli_connect("localhost", "root", "", "baza_aplikacja");
                                    //     if($link === false){
                                    //         die("ERROR: Could not connect. " . mysqli_connect_error());
                                    //     }
                                    $sql = "SELECT id, nazwa FROM rodzaj";
                                    $result = pg_query($connection, $sql);

                                    if (pg_num_rows($result) > 0) {
                                      // output data of each row
                                      while($row = pg_fetch_assoc($result)) {
                                        echo "<option value='".$row["nazwa"]."'>".$row["nazwa"]."</option>";
                                      }
                                    } else {
                                      echo "0 results";
                                    }
                                    pg_close($connection);
                                    // mysqli_close($link);
                                ?>
                            </select>
                    </div>
                    <!-- Content Row -->
                    <div id="row1" class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4"> 
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-danger text-uppercase mb-1">
                                                Wygasłe</div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    if(isset($_GET['jaki_sprzet']) && $_GET['jaki_sprzet'] != 'Wszystkie'){
                                                        wyswietl("SELECT COUNT(*) AS wynik FROM sprzet t1 LEFT JOIN dane_ksiegowe_sprzetu t2 ON t2.id_sprzet=t1.id WHERE termin_wygasniecia < NOW() and rodzaj = '" . $_GET['jaki_sprzet']."'");
                                                    }
                                                    else{
                                                        wyswietl("SELECT COUNT(*) AS wynik FROM sprzet t1 LEFT JOIN dane_ksiegowe_sprzetu t2 ON t2.id_sprzet=t1.id WHERE termin_wygasniecia < NOW()");
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-laptop fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-warning text-uppercase mb-1">
                                                Blisko wygaśnięcia</div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    if(isset($_GET['jaki_sprzet']) && $_GET['jaki_sprzet'] != 'Wszystkie'){
                                                        wyswietl("SELECT COUNT(*) AS wynik FROM sprzet t1 LEFT JOIN dane_ksiegowe_sprzetu t2 ON t2.id_sprzet=t1.id WHERE termin_wygasniecia > NOW() and termin_wygasniecia < (NOW()+ INTERVAL '1 YEAR') and rodzaj = '" . $_GET['jaki_sprzet']."'");
                                                    }
                                                    else{
                                                        wyswietl("SELECT COUNT(*) AS wynik FROM sprzet t1 LEFT JOIN dane_ksiegowe_sprzetu t2 ON t2.id_sprzet=t1.id WHERE termin_wygasniecia > NOW() and termin_wygasniecia < (NOW()+ INTERVAL '1 YEAR')");
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-laptop fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-info text-uppercase mb-1">
                                                W magazynie</div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    if(isset($_GET['jaki_sprzet']) && $_GET['jaki_sprzet'] != 'Wszystkie'){
                                                        wyswietl("SELECT COUNT(*) AS wynik FROM sprzet t1 LEFT JOIN status t2 ON t2.id_sprzet=t1.id WHERE status = 'W magazynie' and rodzaj = '" . $_GET['jaki_sprzet']."'");
                                                    }
                                                    else{
                                                        wyswietl("SELECT COUNT(*) AS wynik FROM sprzet t1 LEFT JOIN status t2 ON t2.id_sprzet=t1.id WHERE status = 'W magazynie'");
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-laptop fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-success text-uppercase mb-1">
                                                Zamówione</div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    if(isset($_GET['jaki_sprzet']) && $_GET['jaki_sprzet'] != 'Wszystkie'){
                                                        wyswietl("SELECT COUNT(*) AS wynik FROM sprzet t1 LEFT JOIN status t2 ON t2.id_sprzet=t1.id WHERE status = 'Zamowiony' and rodzaj = '" . $_GET['jaki_sprzet']."'");
                                                    }
                                                    else{
                                                        wyswietl("SELECT COUNT(*) AS wynik FROM sprzet t1 LEFT JOIN status t2 ON t2.id_sprzet=t1.id WHERE status = 'Zamowiony'");
                                                    }
                                                ?>
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
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-danger text-uppercase mb-1">
                                                Uszkodzone</div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    if(isset($_GET['jaki_sprzet']) && $_GET['jaki_sprzet'] != 'Wszystkie'){
                                                        wyswietl("SELECT COUNT(*) AS wynik FROM sprzet t1 LEFT JOIN status t2 ON t2.id_sprzet=t1.id WHERE status = 'Uszkodzony' and rodzaj = '" . $_GET['jaki_sprzet']."'");
                                                    }
                                                    else{
                                                        wyswietl("SELECT COUNT(*) AS wynik FROM sprzet t1 LEFT JOIN status t2 ON t2.id_sprzet=t1.id WHERE status = 'Uszkodzony'");
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-laptop fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                Wszystkie</div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    if(isset($_GET['jaki_sprzet']) && $_GET['jaki_sprzet'] != 'Wszystkie'){
                                                        wyswietl("SELECT COUNT(*) AS wynik FROM sprzet WHERE rodzaj = '" . $_GET['jaki_sprzet']."'");
                                                    }
                                                    else{
                                                        wyswietl("SELECT COUNT(*) AS wynik FROM sprzet");
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-laptop fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Licencje</h1>
                            <select onchange="this.form.submit()" id='jaka_licencja' class="form-control jaki" name="jaka_licencja">
                                <option value="Wszystkie">WSZYSTKIE</option>
                                <?php
                                    $connection = pg_connect("host=resourcemanagerdb.postgres.database.azure.com dbname=baza_aplikacja user=resourcemanager@resourcemanagerdb password=Trzmielu123") 
                                        or die("Failed to create connection to database: ". pg_last_error(). "<br/>");
                                    if($connection === false){
                                        die("ERROR: Could not connect. " . pg_last_error());
                                    }
                                    $sql = "SELECT DISTINCT nazwa FROM licencja";
                                    $result = pg_query($connection, $sql);

                                    if (pg_num_rows($result) > 0) {
                                      // output data of each row
                                      while($row = pg_fetch_assoc($result)) {
                                        echo "<option value='". $row['nazwa'] . "'>" . $row['nazwa'] . "</option>";
                                      }
                                    } else {
                                      echo "0";
                                    }

                                    pg_close($link);
                                ?>
                            </select>
                    </div>
                    <div id="row2" class="row">                        
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-danger text-uppercase mb-1">
                                                Użyte</div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    if(isset($_GET['jaka_licencja']) && $_GET['jaka_licencja'] != 'Wszystkie'){
                                                        wyswietl("SELECT COUNT(*) AS wynik FROM licencja WHERE sprzet_id IS NOT NULL and nazwa = '" . $_GET['jaka_licencja']."'");
                                                    }
                                                    else{
                                                        wyswietl("SELECT COUNT(*) AS wynik FROM licencja WHERE sprzet_id IS NOT NULL");
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-certificate fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-success text-uppercase mb-1">
                                                Wolne</div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    if(isset($_GET['jaka_licencja']) && $_GET['jaka_licencja'] != 'Wszystkie'){
                                                        wyswietl("SELECT COUNT(*) AS wynik FROM licencja WHERE sprzet_id IS NULL and nazwa = '" . $_GET['jaka_licencja']."'");
                                                    }
                                                    else{
                                                        wyswietl("SELECT COUNT(*) AS wynik FROM licencja WHERE sprzet_id IS NULL");
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-certificate fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                Wszystkie</div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    if(isset($_GET['jaka_licencja']) && $_GET['jaka_licencja'] != 'Wszystkie'){
                                                        wyswietl("SELECT COUNT(*) AS wynik FROM licencja WHERE nazwa = '" . $_GET['jaka_licencja']."'");
                                                    }
                                                    else{
                                                        wyswietl("SELECT COUNT(*) AS wynik FROM licencja");
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-certificate fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    </div>

                </div>
                <!-- /.container-fluid -->
                </form>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Multifinance Expert 2020</span>
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


<?php
function wyswietl($sql)
{
    // Initialize connection object.
    $connection = pg_connect("host=resourcemanagerdb.postgres.database.azure.com dbname=baza_aplikacja user=resourcemanager@resourcemanagerdb password=Trzmielu123") 
        or die("Failed to create connection to database: ". pg_last_error(). "<br/>");
    if($connection === false){
        die("ERROR: Could not connect. " . pg_last_error());
    }
    $result = pg_query($connection, $sql);
    if (pg_num_rows($result) > 0) {
    // output data of each row
        while($row = pg_fetch_assoc($result)) {
        echo $row['wynik'];
        }
    } else {
        echo "0";
    }

    pg_close($link);
}
// function wyswietl($sql)
// {
//     $link = mysqli_connect("localhost", "root", "", "baza_aplikacja");
//     if($link === false){
//         die("ERROR: Could not connect. " . mysqli_connect_error());
//     }
//     $result = mysqli_query($link, $sql);

//     if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//     echo $row['wynik'];
//     }
//     } else {
//     echo "0";
//     }

//     mysqli_close($link);
// }

?>

<script type="text/javascript">
    function zmiana_wartosci(){
        var x = "<?php if(isset($_GET['jaki_sprzet'])){echo $_GET['jaki_sprzet'];}; ?>"
        var tablica = $('#jaki_sprzet').children();
        for (var i = 0; i <tablica.length; i++){
            if(tablica.eq(i).val() == x){
                tablica.eq(i).prop('selected',true);
            }
        }
        var y = "<?php if(isset($_GET['jaka_licencja'])){echo $_GET['jaka_licencja'];}; ?>"
        var tablica = $('#jaka_licencja').children();
        for (var i = 0; i <tablica.length; i++){
            if(tablica.eq(i).val() == y){
                tablica.eq(i).prop('selected',true);
            }
        }
        var x = $('#jaki_sprzet').val();
        $('#row1 .text-s').append(' ('+x+')');
        var y = $('#jaka_licencja').val();
        $('#row2 .text-s').append(' ('+y+')');
    } 
</script>