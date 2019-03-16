<?php

echo "Hello";
echo " World";

echo "<br>";

echo "Hello";
//die ();//can use "exit" function also. die and exit functions give the same output.
echo " World";

echo "<br>";

@mysql_connect ("localhost","gayathri","") || die ("Could not connect to database");
echo "Connected";

?>