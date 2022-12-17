<?php
$connect = new PDO("mysql:host=localhost;dbname=pu012", "root", "");
$received_data = json_decode(file_get_contents("php://input"));

if($received_data->action == 'delete')
{
$query = "
DELETE FROM tbl_sample
WHERE id = '".$received_data->id."'
";

$statement = $connect->prepare($query);

$statement->execute();

$output = array(
'message' => 'Data Deleted'
);

echo json_encode($output);
}
?>