<?php

	$conten = 'beranda';

	if(isset($_GET['page']))
	{
		$conten = $_GET['page'];
	}

	include 'page/'.$conten.'.php';

?>