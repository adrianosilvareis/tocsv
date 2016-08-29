<?php 

	$result = [
		"0" => [
			"name" => "Adriano Reis",
			"email_id" => "adriano_silvareis@hotmail.com"
		],
		"1" => [
			"name" => "Thiago Oliveira",
			'email_id' => 'thiago@tommasi.com.br'
		]
	];


	$filename = 'userDate.csv';

	header('Content-type: text/csv');

	header("Content-Disposition: attachement; filename=$filename");

	$output = fopen("php://output", "w");

	$header = array_keys($result[0]);

	fputcsv($output, $header);

	foreach ($result as $row)
	{
		fputcsv($output, $row);
	}

	fclose($output);
 ?>