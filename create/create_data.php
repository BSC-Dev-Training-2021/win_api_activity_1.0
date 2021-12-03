<?php

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://lending-loan.com/trainee/create',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('first_name' => $_POST['first_name'],'last_name' => $_POST['last_name'],'email' =>   $_POST['email']),
    CURLOPT_HTTPHEADER => array(
        'Cookie: _csrf-frontend=b4b4939148b3428e48fe27ce25c5790d580c1a3ab6a4df3a81287fb6720e8545a%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22k32T848sl05QTTp7v3vYs-viw_XJ5aOW%22%3B%7D; advanced-frontend=dbec8cc57b5ff7b6e319ed239ab779ed'
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    // echo $response;

    echo "
    <a href='http://localhost/win_api_activity_1.0/view.php?id=$response'><button>View Data</button></a>
    ";
?>