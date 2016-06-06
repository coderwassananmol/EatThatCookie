<?php

session_start();
$random = rand(1,5);
$_SESSION['random']=$random; //Session variable to fix the random number to the server.
setcookie('cookie', 'Thanks for eating the cookies.', time() +$_SESSION['random']); //Cookie set up with a random expiry.
echo '<font size="10" color="blue">Hurry!!!!Click on cookie before it gets all eaten up.</font>';
echo '<br />';
echo '<a href="cookie_view.php"> <img src="cookie.jpg" height="200px" width="200px"> </a>';

?>
