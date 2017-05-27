<?php
    $conn = new mysqli("localhost", "root", "root", "test");
	$stmt = $conn->prepare("create table reminders (id int, name varchar(100), phone int, zip int)");
	$stmt->execute();
?>