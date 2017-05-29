<?php

// connect to ldap server
$user = filter_input(INPUT_POST, 'username');
$pass = filter_input(INPUT_POST, 'password');
$ldapconn = ldap_connect("nmmu.ac.za")
    or die("Could not connect to LDAP server.");



if ($ldapconn)
{

    // binding to ldap server
    $ldapbind = ldap_bind($ldapconn, $user, $pass);

    // verify binding
    if ($ldapbind) {
        echo "LDAP bind successful...";
    } else {
        echo "LDAP bind failed...";
    }

}

    