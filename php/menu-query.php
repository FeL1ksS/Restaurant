<?php
    header('Access-Control-Allow-Origin: *');
    require('connectDB.php');
        $query = "SELECT * FROM `Menu_table`";
        $result = $DB->query($query); 

    $data = array();
    $i = 0;
    foreach ($result as $row){
//        if($row["Category_dish"] == "Десерт"){
//            $data["Dessert"][++$i] = $row;
//            
//        }
//        if($row["Category_dish"] == "Суп"){
//            $data["Sup"][++$i] = $row;
//            
//        }  
//        Запись в массив по категориям
        $category = $row["Category_dish"];
        $data[$category][++$i] = $row;
  
    }
        echo json_encode($data);


?>     
