<?php

require_once 'connection.php';

$users = array();
$query = 'select * from users';

$sentence = $connection->prepare( $query );
$sentence->execute();

while ( $row = $sentence->fetch( PDO::FETCH_ASSOC ) ) {
	$users['users'][] = $row;
}

echo json_encode( $users );
