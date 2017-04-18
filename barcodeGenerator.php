<?php
	$barcodeLayout = [
		"0" => [0,0,0,0],
		"1" => [0,0,0,1],
		"2" => [0,0,1,0],
		"3" => [0,0,1,1],
		"4" => [0,1,0,0],
		"5" => [1,0,0,1],
		"6" => [1,0,1,0],
		"7" => [0,1,1,1],
		"8" => [1,0,0,0],
		"9" => [1,0,0,1],
		"-" => [1,1,1,1],
		"<" => [1,1,0,1],
		">" => [1,0,1,1]
	];

	if(isset($_GET["barcode"]) && !empty($_GET["barcode"])) {
		$barcode = str_split($_GET["barcode"]);
		array_unshift($barcode, "<");
		array_push($barcode, ">");
	} else {
		$barcode = [];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.barcode {
			padding: 10px;
			background-color: lightgrey;
		}

		.barcodeChar {
			height: 200px;
			float: left;
		}

		.barcodeCharPart {
			height: 200px;
			float: left;
			width: 5px;
		}

		.black {
			background-color: black;
		}

		.white {
			background-color: white;
		}
	</style>
</head>
<body>
	<div class="barcode">
	<?php
		foreach ($barcode as $character) {
	?>
		<div class="barcodeChar">
		<?php
			foreach ($barcodeLayout[$character] as $black) {
				if ($black) {
					$colorString = "black";
				} else {
					$colorString = "white";
				}
		?>
			<div class="barcodeCharPart <?php echo $colorString; ?>"></div>
		<?php
			}
		?>
		</div>
	<?php
		}
	?>
	</div>
	<div>
		<?php
			foreach ($barcode as $char) {
				echo $char;
			}
		?>
	</div>
</body>
</html>