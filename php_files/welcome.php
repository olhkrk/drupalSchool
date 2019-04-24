<?php
function welcome () {
    session_start();



   echo "<li class='active' style='position: center;'>";


    echo 'Hello: '.$_SESSION["username"].'<br>';
    echo '<a href="#"><span>Logout</span></a></li>';

}
?>