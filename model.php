<?php
// Bagian MVC yang mengurusi database, semua hal yang terkait database, ditulis di Model
function db(){
    return mysqli_connect("localhost","root",null,"mvc_data");
}

function ambil_table(){
    $link = db();
    $table = mysqli_query($link,"select * from user");

    // kita explode data dari db ke array aso
    $result = mysqli_fetch_all($table, MYSQLI_ASSOC);
    return $result;
}
