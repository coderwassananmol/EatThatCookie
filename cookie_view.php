<?php

session_start();
if(isset($_COOKIE['cookie']))
{
    echo $_COOKIE['cookie'];
}
else
{
    echo 'Sorry, it got all eaten up. Better luck next time!';
}
setcookie('cookie','Thanks for eating the cookies.',time()-$_SESSION['random']);
session_destroy();

?>
