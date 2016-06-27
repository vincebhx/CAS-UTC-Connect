<?php
$myUrl = "http://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI];
$casUrl = "https://cas.utc.fr/cas/";
require_once('cas/xml.php');
require_once('cas/cas.php');

session_start();

if (!isset($_SESSION['user']))
{
    if (isset($_GET['ticket']) OR $_GET['section'] == 'login')
      include('cas/login.php');
    else
      include('accueil_guest.php');
}
else
{
  if (isset($_GET['section']) AND $_GET['section'] == 'login')
    header("Location: ./");

  if (isset($_GET['section']) AND $_GET['section'] == 'logout')
     include_once('cas/logout.php');

  else
    include_once('accueil_user.php');
}
?>
