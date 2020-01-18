 <?php 
 include_once('connection.php');
    session_start();
if(isset($_POST['userid']) && isset($_POST['password'])){
$userid     = $_POST['userid'];
$password   = $_POST['password'];



$query  = "SELECT * FROM admin_list WHERE Email = '$userid' AND Password = md5('$password')";
$result = $dbc->query($query);
if($result->num_rows)
{
$_SESSION['valid'] = $userid;

}
if(isset($_SESSION['valid'])){
header("location:admin.php");
}else{
header("location:dashboard.php");
echo 'Error';
}
    }
     ?>

    <!--  if isset admin_user = (kung ano name ng userfield sa database ) && admin_pass = database apssword field {

href= tite;
}Else if user_user = database field && user_pass = database field {

href = pepe;
} -->