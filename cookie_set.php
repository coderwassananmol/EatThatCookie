<?php

$random = rand(1, 5);
setcookie('cookie', 'Thanks for eating the cookies.', time() +$random);
echo '<font size="10" color="blue">Hurry!!!!Click on cookie before it gets all eaten up.</font>';
echo '<br />';
echo '<a href="cookie_view.php"> <img src="cookie.jpg" height="200px" width="200px"> </a>';

?>