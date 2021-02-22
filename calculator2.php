<?php 

echo "<h2> Differece between Cookie and Session Variables.<br>";
echo "Cookies is a small file that the server embeds on the user computer.";
echo "Each time the same computer request a page with a browser,it will send the cookie too.";
echo "A Cookie is started with this function setcookie().";

echo "<br>";
echo "Session variables hold information about one single user,";
echo "and are available to all pages in one application.";
echo "A session is started with this function session_start().";

?> 