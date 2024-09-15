<?php

$con = mysqli_connect("localhost", "root", "", "db_chatatan");

function queryData($query){
    global $con;
    $result = mysqli_query($con, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function insertData($data){
    global $con;
    $divisi = $data["divisi"];
    $type = $data["type"];
    $story = $data["story"];
    $reference = $data["reference"];
    $caption = $data["caption"];
    $target = $data["target"];

    $query = "INSERT INTO media VALUES (
        null, '$type', '$reference', '$caption', '$story', '$target', '$divisi', 'Take'
    )";

    mysqli_query($con, $query);
    return mysqli_affected_rows($con);
}

function updateData($data){
    global $con;
    $id = $data["id"];
    $status = $data["status"];

    $query = "UPDATE media SET status = '$status' WHERE id = '$id' ";

    mysqli_query($con, $query);
    return mysqli_affected_rows($con);
}

function updateDataType($data){
    global $con;
    
    $id = $data["id"];
    $divisi = $data["divisi"];
    $type = $data["type"];
    $story = $data["story"];
    $reference = $data["reference"];
    $caption = $data["caption"];
    $target = $data["target"];
    $status = $data["status"];

    $query = "UPDATE media SET 
                type = '$type', 
                divisi = '$divisi', 
                story = '$story', 
                reference = '$reference', 
                caption = '$caption', 
                target = '$target',
                status = '$status'
                WHERE id = $id 
                ";

    mysqli_query($con, $query);
    return mysqli_affected_rows($con);
    // var_dump($data);
}

function deleteData($id){
    global $con;
    mysqli_query($con , "DELETE FROM media WHERE id = '$id'");
    return mysqli_affected_rows($con);
    
}
?>