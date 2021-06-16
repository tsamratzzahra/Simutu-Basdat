<?php
$db=pg_connect('host=localhost dbname=db_simutu user=postgres password=bismillahUSA2022');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
