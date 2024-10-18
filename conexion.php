    <?php


    // declaracion de variables
    $sever="sql.freedb.tech";
    $user="freedb_novanight";
    $pass="Qtf$@4K7xD#Azcw";
    $dbname="freedb_novanight";
    $db_port="3306";


    $conx1=mysqli_connect($sever,$user,$pass,$dbname,$db_port);

    if(!$conx1){
        echo("Failled");
    }
    ?>
