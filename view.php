<?php
if(isset($_GET['id'])){
$curl = curl_init();

$display_id = $_GET['id'];
curl_setopt_array($curl, array(
  CURLOPT_URL => "http://lending-loan.com/trainee/get-user?id=$display_id",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Cookie: _csrf-frontend=b4b4939148b3428e48fe27ce25c5790d580c1a3ab6a4df3a81287fb6720e8545a%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22k32T848sl05QTTp7v3vYs-viw_XJ5aOW%22%3B%7D; advanced-frontend=dbec8cc57b5ff7b6e319ed239ab779ed'
  ),
));

$response = curl_exec($curl);
$display[]= json_decode($response);
curl_close($curl);
//var_dump($display);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <?php 
    foreach($display as $data_row){
        
  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $display[0]->id; ?></th>
      <td><?php echo $display[0]->first_name; ?></td>
      <td><?php echo $display[0]->last_name; ?></td>
      <td><?php echo $display[0]->email; ?></td>
      
    </tr>
  <?php
    }
  ?>
</table>
</body>
</html>