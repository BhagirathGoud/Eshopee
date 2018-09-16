<?php
session_start();
if (isset($_SESSION))
{

unset($_SESSION);
    session_unset();

}
header('Location:index.php');


?>
