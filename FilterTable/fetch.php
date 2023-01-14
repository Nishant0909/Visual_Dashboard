<?php

include('database_connection.php');

$column = array('id', 'end_year', 'citylng', 'citylat', 'intensity', 'sector');

$query = "SELECT * FROM data";

// if(isset($_POST['filter_gender'], $_POST['filter_country']) && $_POST['filter_gender'] != '' && $_POST['filter_country'] != '')
// {
//  $query .= '
//  WHERE Gender = "'.$_POST['filter_gender'].'" AND Country = "'.$_POST['filter_country'].'" 
//  ';
// }
// else if(isset($_POST['filter_gender']) && $_POST['filter_gender'] != '')
// {
//  $query .= '
//  WHERE Gender = "'.$_POST['filter_gender'].'"';
// }
// else if(isset($_POST['filter_country']) && $_POST['filter_country'] != '')
// {
//  $query .= '
//  WHERE Country = "'.$_POST['filter_country'].'" 
//  ';
// }


// if(isset($_POST['order']))
// {
//  $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
// }
// else
// {
//  $query .= 'ORDER BY CustomerID DESC ';
// }

// $query1 = '';

// if($_POST["length"] != -1)
// {
//  $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
// }

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();



$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row[0];
 $sub_array[] = $row[1];
 $sub_array[] = $row[2];
 $sub_array[] = $row[3];
 $sub_array[] = $row[4];
 $sub_array[] = $row[5];
 $sub_array[] = $row[6];
 $sub_array[] = $row[7];
 $sub_array[] = $row[8];
 $sub_array[] = $row[9];
 $sub_array[] = $row[10];
 $sub_array[] = $row[11];
 $sub_array[] = $row[12];
 $sub_array[] = $row[13];
 $sub_array[] = $row[14];
 $sub_array[] = $row[15];
 $sub_array[] = $row[16];
 $sub_array[] = $row[17];
 $sub_array[] = $row[18];
 $sub_array[] = $row[19];
 $sub_array[] = $row[20];
 $sub_array[] = $row[21];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM data";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 "draw"       =>  intval($_POST["draw"]),
 "recordsTotal"   =>  count_all_data($connect),
 "recordsFiltered"  =>  $number_filter_row,
 "data"       =>  $data
);

echo json_encode($output);

?>