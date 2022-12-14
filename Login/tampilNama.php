<?php

if(!isset($_SESSION['status'])){
    $_SESSION['status'] = false;
    session_start();
}
?>
<?php

if(! $_SESSION['status']){
    echo "<p>PERTAMA</p>";
    echo ($_SESSION['nama']);
}else{
    echo "<p>KEDUA</p>";
    echo ($_SESSION['nama']);
    echo '<a href="logout.php">LOGOUT</a>';
}


?>