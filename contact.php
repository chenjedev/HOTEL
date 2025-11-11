<?php 
     
if (isset($_POST['submit'])) {

    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $guest = $_POST['guest'];
    $class = $_POST['class'];
    $date = $_POST['date'];
    $time= $_POST['time'];
    $request = $_POST['request'];
    
    
    echo '<script type="text/javascript">';
    echo 'alert("SUCCES : Thanks make a book!");';
    echo '</script>';
}
?>