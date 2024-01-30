<?php
$servername = "localhost";
$database = "pplg1_notes";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

function query($kueri)
{
    global $conn;
    $result=mysqli_query($conn,$kueri);
    $rows=[];
    while($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
     }
    return $rows;
}

function inputdata($inputdata){
    global $conn;
    $sql = mysqli_query($conn, $inputdata);
    return $sql;
}

function editdata($tablename,$id){
    global $conn;
    $sql = mysqli_query($conn ,"SELECT * FROM $tablename WHERE id = '$id'");
    return $sql;
}

function update($table, $data, $id)
{
    global $conn;
    $sql = "UPDATE $table SET note = '$data' WHERE id = '$id' ";
    $hasil = mysqli_query($conn,$sql);
    return $hasil;
}
function Delete($tablename, $id)
{
    global $conn;
    $hasil=mysqli_query($conn, "Delete from $tablename where id='$id'");
    return $hasil;
}

?>