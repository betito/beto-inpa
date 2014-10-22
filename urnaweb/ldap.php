<?php

// LDAP variables
$ldaphost = "172.20.0.68";  // your ldap servers
$ldapport = 389;                 // your ldap server's port number
$ldaplogin = "roberto.santos";
$ldappass = "adivinh@";
// Connecting to LDAP

$ldapconn = ldap_connect($ldaphost, $ldapport)
or die("Could not connect to $ldaphost");

$dn = "uid=" . $ldaplogin . ",ou=Usuarios,dc=inpa,dc=gov,dc=br";


if ($ldapconn) {

	// binding to ldap server
	$ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

	// verify binding
	if ($ldapbind) {
		echo "LDAP bind successful...";
	} else {
		echo "LDAP bind failed...";
	}

}else{
	echo "LDAP ERROR...";
}


?>


