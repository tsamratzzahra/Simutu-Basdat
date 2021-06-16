<?php

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    //mengambil data dari db
    $db = pg_connect("host=localhost port=5432 dbname=db_simutu user=postgres password=bismillahUSA2022");
    $sql = pg_query(
        "SELECT * FROM tb_register WHERE username='$_POST[username]' AND password= '$_POST[password]'"
    );
    $login_check = pg_num_rows($sql);
    
    if($login_check > 0){
        
        while($row = pg_fetch_array($sql)){
            foreach ($row as $key => $val){
                $$key = stripslashes( $val );
            }
            
           header("location: dashboard_coba.php");
                
        }
    }else{
        echo "username & password salah<br />";
    }
} else {
    die("Akses dilarang...");
}
