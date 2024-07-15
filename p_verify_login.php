<?php session_start(); 
extract($_POST);
include 'connect.php';
$u = $_POST['usrn'];
$p = $_POST['psw'];
$verified = 0;

$table = mysqli_query($c,"SELECT username FROM USERS WHERE username='$u' AND password='$p';");
$array = mysqli_fetch_row($table);
if (! empty($array)) {
    $verified = 1;
};
if($verified==1){
    //setcookie("user",$u);
    setcookie("user", $u, time() + 300, "/"); //5 minutes
    header('Location: p_index.php');
    exit();
}
else
{
    //header('Location: index.php');
    $Message = urlencode("User not found!");
    header("Location:p_login.php?Message=".$Message);
    exit();
};
?>
