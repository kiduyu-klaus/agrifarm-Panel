<?php
 
function getProducts(){
    include("../include/config.php");
    $db = new $mysqli;
    // array for json response
    $response = array();
    $response["Tips"] = array();


    
     
    // Mysql select query
    $result = mysqli_query($mysqli, "SELECT * FROM herbs_tips");
     
    if(!empty($result)){
        while($row = mysqli_fetch_array($result)){
        // temporary array to create single category
        $tmp = array();

        $tmp["id"] = $row["id"];
        $tmp["title"] = $row["title"];
        $tmp["description"] = $row["description"];
        $tmp["image"] = $row["image"];
        $tmp["date"] = $row["date"];
        $response["success"] = 1;

        // push category to final json array
        array_push($response["Tips"], $tmp);
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