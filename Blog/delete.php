<?php

	$id = $_GET["id"];

	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM blogtable WHERE id=$id" )

		or die("Can not execute query");



	header("Location: dashboard.php");



	//echo "<p><a href=read.php>READ all records</a>";

?>