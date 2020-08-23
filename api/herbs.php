<?php
 
function getProducts(){
    include("../include/config.php");
    $db = new $mysqli;
    // array for json response
    $response = array();
    $response["Herbs"] = array();


    
     
    // Mysql select query
    $result = mysqli_query($mysqli, "SELECT * FROM herbs_herbs");
     
    if(!empty($result)){
        while($row = mysqli_fetch_array($result)){
        // temporary array to create single category
        $tmp = array();

        $tmp["id"] = $row["id"];
        $tmp["title"] = $row["name"];
        $tmp["description"] = $row["description"];
        $tmp["disease"] = $row["disease"];
        $tmp["image"] = $row["image"];
        $tmp["date"] = $row["date"];
        $response["success"] = 1;

        // push category to final json array
        array_push($response["Herbs"], $tmp);
        }
         
        // keeping response header to json
        header('Content-Type: application/json');
         
        // echoing json result
        $carlist_api = json_encode($response,JSON_PRETTY_PRINT);
        echo $carlist_api;
       }
    else{
      // no product found

    $response["success"] = 0;

    $response["message"] = "No Tips found";

    // echo no users JSON
    echo json_encode($response,JSON_PRETTY_PRINT);
    }
}
 
getProducts();



?>