<!-- NullOmicron aka Eri Setiawan -->
<?php
	$kalimat = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis qui velit nihil rerum saepe neque perspiciatis temporibus dolorem eum nesciunt, adipisci voluptas ab vitae dicta, tempore natus et at mollitia?";

	$arr_kalimat = explode(' ',$kalimat);

	for ($i = 0; $i < count($arr_kalimat); $i++) {
		$arr_kalimat_baru[] = trim($arr_kalimat[$i],',?.!@#$%^&*');
	}

	if (isset($_GET['submit'])) {
		$cari = $_GET['cari'];
		$kalimat_cari = str_replace($cari,"<mark>$cari</mark>",$kalimat);
	}
?>
<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<title>Search Word | Beta</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<!-- Aplikasi Pencarian Kata -->
	<div class="container">
		<h2>Search Word 1.0 Beta</h2>
		<div class="konten">
			<?php
				if (isset($_GET['submit'])) {
					echo "<p class='kalimat'>$kalimat_cari</p>";
					if (!in_array($cari,$arr_kalimat_baru)) {
						echo "<p class='error'>Tidak Ada!</p>";
					}
				}
				else {
					echo "<p class='kalimat'>$kalimat</p>";
				}
			?>
		</div>

		<div class="form">
			<form action="" method="get">
				<table>
					<tr>
						<td><input type="text" name="cari" autofocus></td>
						<td><input type="submit" name="submit" value="Cari" class="btn"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<!-- Aplikasi Pencarian Kata -->

	<p class="copy">&copy; 2019 Allrights Reserverd <a href="mailto:erisetiawan405@gmail.com">@nullomicron</a></p>

</body>
</html>
<!-- 12 Oktober 2019 -->
