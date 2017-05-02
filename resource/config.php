<?php
$link = mysqli_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
    echo "done";
}
else
{

}
mysqli_select_db ($link, 'metri' );

?>