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

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dodaj sprzęt</h1>
                    </div>

                    <form action="./dodaj_sprzet.php" method="POST" autocomplete="off">
                        <select class="form-control" name="rodzaj" id="rodzaj">
                            <option value="" disabled selected>WYBIERZ RODZAJ</option>
                            <?php
                                $link = pg_connect("host=resourcemanagerdb.postgres.database.azure.com dbname=baza_aplikacja user=resourcemanager@resourcemanagerdb password=Trzmielu123");
                                    if($link === false){
                                        die("ERROR: Could not connect. " . pg_last_error());
                                    }
                                $sql = "SELECT nazwa FROM rodzaj";
                                $result = pg_query($link, $sql);

                                if (pg_num_rows($result) > 0) {
                                  // output data of each row
                                  while($row = pg_fetch_assoc($result)) {
                                    echo "<option value='".$row["nazwa"]."'>".$row["nazwa"]."</option>";
                                  }
                                } else {
                                  echo "0 results";
                                }

                                pg_close($link);
                            ?>
                        </select>
                        </br>
                        <input  class="form-control" type="text" id="nr_seryjny" name="nr_seryjny"
                        placeholder="NR SERYJNY">
                        </br>
                        <input  class="form-control" type="text" id="marka" name="marka" placeholder="MARKA">
                        </br>
                        <textarea  class="form-control" id="dodatkowy_opis" name="dodatkowy_opis"
                        placeholder="DODATKOWY OPIS"></textarea>
                        </br>
                        DATA WYGAŚNIĘCIA
                        </br>
                        <input class="form-control" type="date" id="data_wygasniecia" name="data_wygasniecia">
                        </br>
                        <select  class="form-control" name="status" id="status" onchange="zmiana_statusu()">
                            <option value="" disabled selected>WYBIERZ STATUS</option>
                            <option value="Zamówiony">ZAMÓWIONY</option>
                            <option value="W użyciu">W UŻYCIU</option>
                            <option value="Uszkodzony">USZKODZONY</option>
                            <option value="W magazynie">W MAGAZYNIE</option>
                        </select>
                        </br>
                        <select class="form-control" name="pracownik" id="pracownik" style="display: none;">
                                <option value="NULL" selected>PODAJ UŻYTKOWNIKA</option>
                                <?php
                                    $link = pg_connect("host=resourcemanagerdb.postgres.database.azure.com dbname=baza_aplikacja user=resourcemanager@resourcemanagerdb password=Trzmielu123");
                                        if($link === false){
                                            die("ERROR: Could not connect. " . pg_last_error());
                                        }
                                    $sql = "SELECT id, nazwa_uzytkownika, stanowisko FROM pracownik";
                                    $result = pg_query($link, $sql);

                                    if (pg_num_rows($result) > 0) {
                                      // output data of each row
                                      while($row = pg_fetch_assoc($result)) {
                                        echo "<option value='".$row["id"]."'>".$row["id"]." - ".$row["nazwa_uzytkownika"]." - ".$row["stanowisko"]."</option>";
                                      }
                                    } else {
                                      echo "0 results";
                                    }

                                    pg_close($link);
                                ?>
                            </select>
                        <input class="form-control" type="submit" value="DODAJ">
                    </form>
                    <div id="alert_success" data-delay="3000" class="toast">
                        <div class="alert alert-success hide" role="alert" aria-live="assertive" aria-atomic="true">
                            Pomyślnie dodano sprzęt!
                        </div>
                    </div>
                    <div id="alert_error" data-delay="3000" class="toast">
                        <div  class="alert alert-danger" role="alert" aria-live="assertive" aria-atomic="true">
                            Error!
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

<script type="text/javascript">
  function zmiana_statusu(){
    if(document.getElementById('status').value == "W użyciu") {
      document.getElementById("pracownik").style.display = "block";
    }
    else{
      document.getElementById("pracownik").style.display = "none";
      document.getElementById("pracownik").options[0].selected = 'selected';
    }
}
</script>
<?php
    if(isset($_POST['nr_seryjny']) && isset($_POST['marka']) && isset($_POST['rodzaj']) && isset($_POST['dodatkowy_opis']) && isset($_POST['status']) && isset($_POST['pracownik'])){

        $link = pg_connect("host=resourcemanagerdb.postgres.database.azure.com dbname=baza_aplikacja user=resourcemanager@resourcemanagerdb password=Trzmielu123");
        if($link === false){
            die("ERROR: Could not connect. " . pg_last_error());
        }
        $sql = "INSERT INTO sprzet (model, nr_seryjny, rodzaj) VALUES ('$_POST[marka]', '$_POST[nr_seryjny]', '$_POST[rodzaj]')";
        if(pg_query($link, $sql)){
            $x = True;
        }else{
            $x = False;
        };
            
        $sql_id = "SELECT id FROM sprzet WHERE nr_seryjny = '$_POST[nr_seryjny]'";
        $que = pg_query($link, $sql_id);
        $result = pg_fetch_assoc($que);
        
        $sql2 = "INSERT INTO dane_techniczne_sprzetu (id_sprzet,dodatkowy_opis) VALUES (".$result["id"].",'$_POST[dodatkowy_opis]')";

        $priv = $_POST["pracownik"];
        if($priv == "NULL"){
            $sql4 = "INSERT INTO status (id_sprzet, status, id_pracownik) VALUES (".$result["id"].", '$_POST[status]',NULL)";
        }
        else{
            $sql4 = "INSERT INTO status (id_sprzet, status, id_pracownik) VALUES (".$result["id"].", '$_POST[status]','$_POST[pracownik]')";
        }
        $sql3 = "INSERT INTO dane_ksiegowe_sprzetu (id_sprzet, termin_wygasniecia) VALUES (".$result["id"].", '$_POST[data_wygasniecia]')";

        

        if($x && pg_query($link, $sql2) && pg_query($link, $sql3) && pg_query($link, $sql4)){
            echo("<script type='text/javascript'>
                $('#alert_success').toast('show')
            </script>");
        } else{
            echo("<script type='text/javascript'>
                $('#alert_error').toast('show')
            </script>");
        }

        pg_close($link);
    }
?>