<?php

$host    = 'localhost';
$db      = 'ajax1';
$db_user = 'root';
$db_pass = '1234';

try {
	$connection = new PDO( 'mysql:host={$host}; dbname={$db}', $db_user, $db_pass );
} catch ( PDOException $e ) {
	die( $e->getMessage() );
}