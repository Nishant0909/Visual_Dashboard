<?php
		include('dbconnection.php');
	
		$s="select * from passcode";
		$r=mysqli_query($con, $s);
?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="./assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="./assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="./assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="./assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <!-- <link rel="stylesheet" href="./assets/css/demo.css" /> -->

    <!-- Vendors CSS -->
    <!-- <link rel="stylesheet" href="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" /> -->

    <!-- <link rel="stylesheet" href="./assets/vendor/libs/apex-charts/apex-charts.css" /> -->

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="./assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <!-- <script src="./assets/js/config.js"></script> -->




    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="t.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        table th:nth-child(3), td:nth-child(3) {
        display: none;
        }
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        
        <?php
          include('header.html');
        ?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card">
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                  <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
                  <div class="outer-wrapper">
                  <div class="table-wrapper">
                  <table id="example" class="display" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                    <th>tick</th>
                    <th>Sno</th>
                    <th>Coupon ID</th>
                    <th>Code</th>
                    <th>Status</th>
                    <th>Button</th>
                </tr>
            </thead>
    
            <tfoot>
                <tr>
                    <th>tick</th>
                    <th>Sno</th>
                    <th>Coupon ID</th>
                    <th>Code</th>
                    <th>Status</th>
                    <th>Button</th>
                </tr>
            </tfoot>
    
            <tbody>
            <?php

            $sno=0;
            while($row=mysqli_fetch_array($r))
            {
                $pid=$row[0];
                $passcode=$row[1];
                $status=$row[2];
                
                $sno++;
                echo "<tr>
                <td><input type='checkbox' id='vehicle1' name='vehicle1' value='Bike'></td>
                <td>".$sno."</td>
                            <td>".$pid."</td>
                            <td>".$passcode."</td>
                            <td>".$status."</td>
                            
                            <td><a href='passcodedelete.php?a=$pid'>Terminate</a><br>
                            <a href='passcodeupdate.php?a=$pid'>Update</a></td>
                        </tr>";
            }
            ?>
            </tbody>
        </table>

        </div>
    </div>
                  </card>  
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php
              include('footer.html');
            ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <!-- <div class="layout-overlay layout-menu-toggle"></div> -->
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <!-- <script src="./assets/vendor/libs/jquery/jquery.js"></script> -->
    <!-- <script src="./assets/vendor/libs/popper/popper.js"></script> -->
    <!-- <script src="./assets/vendor/js/bootstrap.js"></script> -->
    <!-- <script src="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script> -->

    <script src="./assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <!-- <script src="./assets/vendor/libs/apex-charts/apexcharts.js"></script> -->

    <!-- Main JS -->
    <script src="./assets/js/main.js"></script>

    <!-- Page JS -->
    <!-- <script src="./assets/js/dashboards-analytics.js"></script> -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>




    <script>
    //         $(document).ready(function() {
    //     $('#example').DataTable( {
    //         responsive: true,
    //         "pageLength": 10
    //     } );
    // } );

    $(document).ready(function() {
        $('#example').DataTable( {
            "pagingType": "full_numbers"
        } );
    } );
        </script>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
