<?php
mysqli_connect("localhost","root","","newfile");
if(mysqli_connect_error())
{
    echo "Cannot Connect";
}
else{
    echo "Connected";
}
?>