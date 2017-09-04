<?php
    $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = feenix-oracle.swin.edu.au)(PORT = 1521)))(CONNECT_DATA=(SID=orcl)))" ;

    if($c = OCILogon("s1778064", "Abc123456", $db))
    {
        echo 'Successfully connected to Oracle.\n';
        OCILogoff($c);
    }
    else
    {
        $err = OCIError();
        echo 'Connection failed.' . $err[text];
    }
?>

