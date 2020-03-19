<?php
require_once "vendor/autoload.php";

use  Irfa\Gatcha\Roll ;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Gatcha</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12" align="center">
				<div class="alert alert-primary">
					<?= "<h2>Selamat Kamu mendapatkan </h2><h2>".Roll::put(['SSR ITEM' => 0.1,
					'SSR ITEM 2' => 0.2,
					'SSR ITEM 3' => 0.3,
					'SSR ITEM 4' => 0.4,
					'SR ITEM 1' => 0.5,
					'SR ITEM 2' => 0.6,
					'SR ITEM 3' => 1.2,
					'item 8' => 2,
					'item 9' => 2.8,
					'item 10' => 3.6,
					'item 11' => 4.4,
					'item 12' => 5.2,
					'item 13' => 6,
					'item 14' => 6.8,
					'item 15' => 7.6,
					'item 16' => 8.4,
					'item 17' => 9.2,
					'item 18' => 10,
					'item 19' => 10.8,
					'item 20' => 11.6,
					'item 21' => 8.3,

					])->spin()."</h2>" ?>
				</div>
			</div>
		</div>
	</div>
</body>
