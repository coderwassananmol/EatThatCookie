<?php

if(!(isset($_COOKIE['cookie'])))
{
    echo 'Sorry! It got all eaten up. Better luck next time.';
}
else
{
    echo $_COOKIE['cookie'];
}
?>