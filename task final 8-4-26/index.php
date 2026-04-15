<?php
if (isset($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
    echo $name; 
}
else
    echo "no data";
?>