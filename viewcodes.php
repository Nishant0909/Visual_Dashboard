<?php
		include('dbconnection.php');
	
		$s="select * from data";
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

    <title>Visualization - Dashboard</title>
    
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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <!-- <style>
        table th:nth-child(3), td:nth-child(3) {
        display: none;
        }
    </style> -->


    <script src="./T2E.js"></script>
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
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                  <script src="a.js"></script>
                  <div class="outer-wrapper">
                  <div class="table-wrapper">
                  <table id="example" data-excel-name="A very important table" class="display simple_table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>EndYear</th>
                          <th>Citylng</th>
                          <th>Citylat</th>
                          <th>Intensity</th>
                          <th>Sector</th>
                          <th>Topic</th>
                          <th>Insight</th>
                          <th>Swot</th>
                          <th>Url</th>
                          <th>Region</th>
                          <th>StartYear</th>
                          <th>Impact</th>
                          <th>Added</th>
                          <th>Published</th>
                          <th>City</th>
                          <th>Country</th>
                          <th>Relevance</th>
                          <th>Pestle</th>
                          <th>Source</th>
                          <th>Title</th>
                          <th>Likelihood</th>
                        </tr>
                    </thead>
    
                    <tbody>
                    <?php

                    $sno=0;
                    while($row=mysqli_fetch_array($r))
                    {
                        $id=$row[0];
                        $EndYear=$row[1];
                        $Citylng=$row[2];
                        $Citylat=$row[3];
                        $Intensity=$row[4];
                        $Sector=$row[5];
                        $Topic=$row[6];
                        $Insight=$row[7];
                        $Swot=$row[8];
                        $Url=$row[9];
                        $Region=$row[10];
                        $StartYear=$row[11];
                        $Impact=$row[12];
                        $Added=$row[13];
                        $Published=$row[14];
                        $City=$row[15];
                        $Country=$row[16];
                        $Relevance=$row[17];
                        $Pestle=$row[18];
                        $Source=$row[19];
                        $Title=$row[20];
                        $Likelihood=$row[21];
                        
                        $sno++;
                        echo "<tr>
                                    <td>".$sno."</td>
                                    <td>".$EndYear."</td>
                                    <td>".$Citylng."</td>
                                    <td>".$Citylat."</td>
                                    <td>".$Intensity."</td>
                                    <td>".$Sector."</td>
                                    <td>".$Topic."</td>
                                    <td>".$Insight."</td>
                                    <td>".$Swot."</td>
                                    <td>".$Url."</td>
                                    <td>".$Region."</td>
                                    <td>".$StartYear."</td>
                                    <td>".$Impact."</td>
                                    <td>".$Added."</td>
                                    <td>".$Published."</td>
                                    <td>".$City."</td>
                                    <td>".$Country."</td>
                                    <td>".$Relevance."</td>
                                    <td>".$Pestle."</td>
                                    <td>".$Source."</td>
                                    <td>".$Title."</td>
                                    <td>".$Likelihood."</td>
                              </tr>";
                    }
                    ?>
                    </tbody>
                  </table>
                  <input type="button" onclick="generate()" value="Export To PDF" />
                  <button id="export">Export to excel</button>
                  

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



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>


    <script>
        function generate() {
    var doc = new jsPDF('p', 'pt', 'letter');
    var htmlstring = '';
    var tempVarToCheckPageHeight = 0;
    var pageHeight = 0;
    pageHeight = doc.internal.pageSize.height;
    specialElementHandlers = {
        // element with id of "bypass" - jQuery style selector  
        '#bypassme': function (element, renderer) {
            // true = "handled elsewhere, bypass text extraction"  
            return true
        }
    };

    doc.autoTable({
        html: '.simple_table',
        theme: 'grid',
    })
    doc.save('Codes.pdf');
}
    </script>

    <script>
      var table2excel = new Table2Excel();

      document.getElementById('export').addEventListener('click', function() {
        table2excel.export(document.querySelectorAll('table'));
      });
    </script>
  </body>
</html>
