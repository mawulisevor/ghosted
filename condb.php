<?php
function setOnlineCon(){
    $host="mysql4.000webhost.com";
    $username="a7257998_senalab";
    $password="MANIKODE360@YAHOO.COM";
    $dbase="a7257998_ghosts";
    $conn = @mysql_connect($host, $username, $password);
    if (!$conn) {
    exit('<p>Unable to connect to the ' .
    'database server at this time.</p>');
    }
    if (!@mysql_select_db($dbase)) {
    exit('<p>Unable to locate the database at this time.</p>');
    }
}

function setLocalCon(){
    $host="localhost";
    $username="root";
    $password="senalabs";
    $dbase="ghosts";
}
?>