<?php

include('database_connection.php');

// $country = '';
$query = "SELECT * FROM data";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
 $country .= '<option value="'.$row['city'].'">'.$row['city'].'</option>';
}

?>

<html>
 <head>
  <title>Custom Search in jQuery Datatables using PHP Ajax</title>
  <script src="d2.js"></script>
  <link rel="stylesheet" href="d1.css" />
  <script src="dt.js"></script>
  <script src="dt1.js"></script>  
  <link rel="stylesheet" href="dt.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
 </head>
 <body>
  <div class="container box">
   <h3 align="center">Custom Search in jQuery Datatables using PHP Ajax</h3>
   <br />
   <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
     <div class="form-group">
      <select name="filter_gender" id="filter_gender" class="form-control" required>
       <option value="">Select Gender</option>
       <option value="Male">Male</option>
       <option value="Female">Female</option>
      </select>
     </div>
     <div class="form-group">
      <select name="filter_country" id="filter_country" class="form-control" required>
       <option value="">Select Country</option>
       <?php echo $country; ?>
      </select>
     </div>
     <div class="form-group" align="center">
      <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>
     </div>
    </div>
    <div class="col-md-4"></div>
   </div>
   <div class="table-responsive">
    <table id="customer_data" class="table table-bordered table-striped">
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
       <th>URL</th>
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
    </table>
    <br />
    <br />
    <br />
   </div>
  </div>
 </body>
</html>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){
  
  fill_datatable();
  
  function fill_datatable(filter_gender = '', filter_country = '')
  {
   var dataTable = $('#customer_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "searching" : false,
    "ajax" : {
     url:"fetch.php",
     type:"POST",
     data:{
    //   filter_gender:filter_gender, filter_country:filter_country
     }
    }
   });
  }
  function fill_datatable1(filter_country = '')
  {
   var dataTable = $('#customer_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "searching" : false,
    "ajax" : {
     url:"fetch.php",
     type:"POST",
     data:{
        // filter_country:filter_country
     }
    }
   });
  }
  
//   $('#filter').click(function(){
//    var filter_gender = $('#filter_gender').val();
//    var filter_country = $('#filter_country').val();
//    if(filter_gender != '' && filter_country != '')
//    {
//     $('#customer_data').DataTable().destroy();
//     fill_datatable(filter_gender, filter_country);
//    }
//     else if (filter_country != ''){
//     $('#customer_data').DataTable().destroy();
//     fill_datatable1( filter_country);
//    }
//    else if (filter_gender != ''){
//     $('#customer_data').DataTable().destroy();
//     fill_datatable(filter_gender);
//    }
//    else
//    {
//     alert('Select atleast one filter option');
//     $('#customer_data').DataTable().destroy();
//     fill_datatable();
//    }
//   });
  
  
 });
 
</script>