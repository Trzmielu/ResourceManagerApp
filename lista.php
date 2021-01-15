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
                    <h1 class="h3 mb-4 text-gray-800">Lista sprzętów</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabela</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php
                                    $link = pg_connect("host=resourcemanagerdb.postgres.database.azure.com dbname=baza_aplikacja user=resourcemanager@resourcemanagerdb password=Trzmielu123") 
                                    $sql = "
                                    SELECT MODEL, NR_SERYJNY, RODZAJ_SPRZĘTU, NAZWA_UZYTKOWNIKA, STANOWISKO, STATUS, TERMIN, sprzet AS id_sprzet, dodatkowy_opis FROM
                                    (SELECT MODEL, NR_SERYJNY, RODZAJ_SPRZĘTU, NAZWA_UZYTKOWNIKA, STANOWISKO, STATUS, termin_wygasniecia AS TERMIN, t1.id_sprzet AS sprzet FROM
                                    (SELECT model AS MODEL, nr_seryjny AS NR_SERYJNY, rodzaj AS RODZAJ_SPRZĘTU, nazwa_uzytkownika AS NAZWA_UZYTKOWNIKA, stanowisko AS STANOWISKO, status AS STATUS, sprzet.id AS id_sprzet FROM pracownik
                                    RIGHT JOIN status ON pracownik.id = status.id_pracownik
                                    LEFT JOIN sprzet ON status.id_sprzet = sprzet.id 
                                    UNION 
                                    SELECT model AS MODEL, nr_seryjny AS NR_SERYJNY, rodzaj AS RODZAJ_SPRZĘTU,  nazwa_uzytkownika AS NAZWA_UZYTKOWNIKA, stanowisko AS STANOWISKO, status AS STATUS, sprzet.id AS id_sprzet FROM pracownik
                                    RIGHT JOIN status ON pracownik.id = status.id_pracownik
                                    LEFT JOIN sprzet ON status.id_sprzet = sprzet.id 
                                    UNION
                                    SELECT model AS MODEL, nr_seryjny AS NR_SERYJNY, rodzaj AS RODZAJ_SPRZĘTU,  nazwa_uzytkownika AS NAZWA_UZYTKOWNIKA, stanowisko AS STANOWISKO, status AS STATUS, sprzet.id AS id_sprzet FROM pracownik
                                    RIGHT JOIN status ON pracownik.id = status.id_pracownik
                                    RIGHT JOIN sprzet ON status.id_sprzet = sprzet.id
                                    ORDER BY status DESC) t1
                                    RIGHT JOIN dane_ksiegowe_sprzetu t2 ON t1.id_sprzet = t2.id_sprzet) t1
                                    RIGHT JOIN dane_techniczne_sprzetu t2 ON t1.sprzet = t2.id_sprzet
                                    ORDER BY TERMIN ASC";

                                    $wyniki = pg_query($link, $sql);
                                    echo "<form method='POST' action='lista.php' autocomplete='off'>";
                                    echo "<table class='table table-bordered' id='dataTable'width='100%' cellspacing='0'>";
                                    echo "<thead><tr><th onclick='sortTable(0)'>" . 'MODEL' . "</th><th onclick='sortTable(1)'>" . 'NR SERYJNY' . "</th><th onclick='sortTable(2)'>" . 'RODZAJ SPRZĘTU' . "</th><th onclick='sortTable(3)'>" . 'DODATKOWE INFORMACJE' . "</th><th onclick='sortTable(4)'>" . 'NAZWA UŻYTKOWNIKA' . "</th><th onclick='sortTable(5)'>" . 'STANOWISKO' . "</th><th onclick='sortTable(6)'>" . 'STATUS' . "</th><th onclick='sortTable(7)'>" . 'TERMIN' . "</th></tr></thead><tbody>";
                                    while($row = pg_fetch_array($wyniki)){
                                      if($row['STATUS'] == "W użyciu"){
                                        echo "<tr><input type='hidden' disabled name='id_sprzet' value='".$row['id_sprzet']."'><td>" . $row['MODEL'] . "</td><td style='cursor:pointer;' onclick='detale(this)'>" . $row['NR_SERYJNY'] . "</td><td>" . $row['RODZAJ_SPRZĘTU'] . "</td><td>" . $row['dodatkowy_opis'] . "</td><td>" . $row['NAZWA_UZYTKOWNIKA'] . "</td><td>" . $row['STANOWISKO'] . "</td><td style='color:#00FF04;'>" . $row['STATUS'] . "</td><td class='data'>" . $row['TERMIN'] . "</td></tr>"; 
                                        }
                                      elseif($row['STATUS'] == ""){
                                        echo "<tr><input type='hidden' disabled name='id_sprzet' value='".$row['id_sprzet']."'><td>" . $row['MODEL'] . "</td><td style='cursor:pointer;' onclick='detale(this)'>" . $row['NR_SERYJNY'] . "</td><td>" . $row['RODZAJ_SPRZĘTU'] . "</td><td>" . $row['dodatkowy_opis'] . "</td><td>" . $row['NAZWA_UZYTKOWNIKA'] . "</td><td>" . $row['STANOWISKO'] . "</td><td style='color:#ffff1a;'>Brak Statusu". "</td><td class='data'>" . $row['TERMIN'] . "</td></tr>"; 
                                      }
                                      else{
                                        echo "<tr><input type='hidden' disabled name='id_sprzet' value='".$row['id_sprzet']."'><td>" . $row['MODEL'] . "</td><td style='cursor:pointer;' onclick='detale(this)'>" . $row['NR_SERYJNY'] . "</td><td>" . $row['RODZAJ_SPRZĘTU'] . "</td><td>" . $row['dodatkowy_opis'] . "</td><td>" . $row['NAZWA_UZYTKOWNIKA']. "</td><td>" . $row['STANOWISKO'] . "</td><td style='color:#FF2F2F;'>" . $row['STATUS'] . "</td><td class='data'>" . $row['TERMIN'] . "</td></tr>"; 
                                      }
                                    }
                                      
                                    echo "</tbody></table></form>";

                                    pg_close($link);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div id="alert_success" data-delay="5000" class="toast">
                        <div class="alert alert-success hide" role="alert" aria-live="assertive" aria-atomic="true">
                            Pomyślnie dodano użytkownika!
                        </div>
                    </div>
                    <div id="alert_error" data-delay="5000" class="toast">
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

<?php
  $options = '';
  $link = pg_connect("host=resourcemanagerdb.postgres.database.azure.com dbname=baza_aplikacja user=resourcemanager@resourcemanagerdb password=Trzmielu123");
    if($link === false){
      die("ERROR: Could not connect. " . pg_last_error());
    }
    $sql = "SELECT id, nazwa_uzytkownika FROM pracownik";
    $result = pg_query($link, $sql);
    while($row = pg_fetch_assoc($result)) {
        $options .= '<option value="'.$row["id"].'">'.$row["nazwa_uzytkownika"]."</option>'+'";
    }

    pg_close($link);
?>

<script type="text/javascript">
  function zmiana_nazwy(){
                  if($("#nazwy").val() != "NULL"){
                    $("#statusy option:eq(1)").removeAttr("disabled");
                    $("#statusy option:eq(2)").prop("disabled","disabled");
                    $("#statusy option:eq(3)").prop("disabled","disabled");
                    $("#statusy option:eq(4)").prop("disabled","disabled");
                  }
                  else{
                    $("#statusy option:eq(2)").removeAttr("disabled");
                    $("#statusy option:eq(3)").removeAttr("disabled");
                    $("#statusy option:eq(4)").removeAttr("disabled");
                  }
                }
  function zmiana_statusu(){
                  if($("#statusy").val() != "NULL"  && $('#statusy').val() != 'W użyciu'){
                    for(var i = 1;i<$('#nazwy option').length;i++){
                      $("#nazwy option:eq("+i+")").prop("disabled","disabled");
                    }
                  }
                  else{
                    for(var i = 1;i<$('#nazwy option').length;i++){
                      $("#nazwy option:eq("+i+")").removeAttr("disabled");
                    }
                  }
                }
    var tablica_war = [];

  $(document).ready(function() {
    $(document).on('click', 'button[id^="cancel_button"]', function() {
      $('#dataTable tr').removeClass('nohoverable');
      var tablica = $(this.closest('tr')).children();
      for(var i = 0;i<tablica.length; i++){
        $(tablica[i]).text(tablica.eq(i).find('input').val());
      }
      $(tablica[5]).text(tablica_war[5]);
      $(tablica[7]).text(tablica_war[7]);
      $(tablica).children("input").remove();
      $(tablica).children("select").remove();
      $('#accept_button').remove();
      $('#cancel_button').remove();
    });
    $('#dataTable tr:not(:first)').hover(
      function() {
        if(!$('#dataTable tr').hasClass('nohoverable')){
          $(this.closest('tr')).append('<button id="edit_button"><i class="fas fa-edit"></i></button>');
          $('#edit_button').click(function(){

            var id = $(this.closest('tr')).children();
            $(id[0]).removeAttr('disabled');

            var tablica = $(this.closest('tr')).children();
            
            for(var i = 0;i<tablica.length; i++){
              if($(tablica[i]).attr("onClick") != undefined){
                var index=i;
                $(tablica[i]).prop("onclick", null).off("click");
              }
              if(i == 5){
                tablica_war[i] = $(tablica[i]).html();
                $(tablica[i]).append('<select onchange="zmiana_nazwy()" id="nazwy" style="width:100%;overflow:hidden;" name="nazwa_uzytkownika">'+'<option value="NULL">---------</option>'+'<?php echo $options; ?>');
                $(tablica[i]).append('</select>');
              }
              else if(i == 7){
                tablica_war[i] = $(tablica[i]).html();
                $(tablica[i]).append('<select onchange="zmiana_statusu()" id="statusy" style="width:100%;overflow:hidden;" name="statusy">'+'<option value="NULL">---------</option>'+'<option value="W użyciu">W użyciu</option>'+'<option value="W magazynie">W magazynie</option>'+'<option value="Uszkodzony">Uszkodzony</option>'+'<option value="Zamówiony">Zamówiony</option>');
                $(tablica[i]).append('</select>');
              }
              else{
                $(tablica[i]).append('<input style="width:100%" value="'+tablica.eq(i).html()+'"type="text">');
              }
              $(tablica[i]).contents().filter(function(){
                  return this.nodeType === 3;
              }).remove();

            }
            $(tablica[1]).children('input').prop("disabled","disabled");
            $(tablica[2]).children('input').prop("disabled","disabled");
            $(tablica[3]).children('input').prop("disabled","disabled");
            $(tablica[4]).children('input').prop("name","dodatkowy_opis");
            $(tablica[5]).children('select').prop("name","nazwa_uzytkownika");
            $(tablica[6]).children('input').prop("disabled","disabled");
            $(tablica[7]).children('input').prop("name","status");
            $(tablica[8]).children('input').prop("disabled","disabled");;
            $('#dataTable tr').addClass('nohoverable');
            $('#edit_button').after('<button class="btn btn-primary" type="button" id="cancel_button">Anuluj</button>');
            $('#edit_button').after('<input class="btn btn-primary" type="submit" id="accept_button" value="Dodaj"></input>');
            $('#edit_button').remove();
            });
        }
      }, function() {
          $('#edit_button').remove();
      }
    );
    });

  function detale(nr_seryjny){
    window.open('./details.php?nr='+nr_seryjny.innerText,"_self");
  }

  var date = new Date()
  date.setDate(date.getDate() + 365);

  for(var i=0;i<document.getElementsByClassName('data').length; i++){
    if (Date.parse(document.getElementsByClassName('data')[i].innerText) <= Date.now()){
        document.getElementsByClassName('data')[i].style.color = '#fa5448';
    }
    else if(Date.parse(document.getElementsByClassName('data')[i].innerText) > Date.now() && Date.parse(document.getElementsByClassName('data')[i].innerText) <= Date.parse(date)){
        document.getElementsByClassName('data')[i].style.color = 'yellow';
    }
    else {
        document.getElementsByClassName('data')[i].style.color = '#00FF04';
    }
  }
  function sortTable(n) {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById("dataTable");
    switching = true;
    dir = "asc";
    while (switching) {
      switching = false;
      rows = table.rows;
      for (i = 1; i < (rows.length - 1); i++) {
        shouldSwitch = false;
        x = rows[i].getElementsByTagName("TD")[n];
        y = rows[i + 1].getElementsByTagName("TD")[n];
        if (dir == "asc") {
          if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            shouldSwitch = true;
            break;
          }
        } else if (dir == "desc") {
          if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
            shouldSwitch = true;
            break;
          }
        }
      }
      if (shouldSwitch) {
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
        switchcount ++;
      } else {
        if (switchcount == 0 && dir == "asc") {
          dir = "desc";
          switching = true;
        }
      }
    }
  }
</script>


<?php
  if(isset($_POST['nazwa_uzytkownika']) && isset($_POST['id_sprzet']) && isset($_POST['statusy']) && $_POST['statusy'] != 'NULL' && !($_POST['statusy'] == 'W użyciu' && $_POST['nazwa_uzytkownika'] == 'NULL') && isset($_POST['dodatkowy_opis'])){
    $link = pg_connect("host=resourcemanagerdb.postgres.database.azure.com dbname=baza_aplikacja user=resourcemanager@resourcemanagerdb password=Trzmielu123");
    if($link === false){
      die("ERROR: Could not connect. " . pg_last_error());
    }
    if($_POST['nazwa_uzytkownika'] == "NULL"){
      $sql = "UPDATE status SET id_pracownik = NULL, id_sprzet = '$_POST[id_sprzet]', status = '$_POST[statusy]' WHERE id_sprzet='$_POST[id_sprzet]'";
    }
    else{
      $sql = "UPDATE status SET id_pracownik = '$_POST[nazwa_uzytkownika]', id_sprzet = '$_POST[id_sprzet]', status = '$_POST[statusy]' WHERE id_sprzet='$_POST[id_sprzet]'";
    }
    $sql2 = "UPDATE dane_techniczne_sprzetu SET dodatkowy_opis = '$_POST[dodatkowy_opis]' WHERE id_sprzet='$_POST[id_sprzet]'";

    if(pg_query($link, $sql2) && pg_query($link, $sql)){
        echo "<meta http-equiv='refresh' content='0'>";
        echo('<script type="text/javascript">
                    $("#alert_success").toast("show");
            </script>');
    }
    else{
        echo "<meta http-equiv='refresh' content='0'>";
        echo("<script type='text/javascript'>
                $('#alert_error').toast('show');
            </script>");
    }
   pg_close()($link); 
  }
?>

