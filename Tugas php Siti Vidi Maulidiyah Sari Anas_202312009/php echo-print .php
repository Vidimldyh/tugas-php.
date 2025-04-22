<!DOCTYPE html>
<html>
<body>

<?php
// Menampilkan teks "Halo"
echo "Halo";
// Bisa juga pakai kurung
echo("Halo");

// Menampilkan judul HTML
echo "<h2>Belajar PHP!!!!</h2>";

// Menampilkan teks baris baru
echo "Halo dunia!<br>";
echo "Ayo belajar PHP <br>";

// Menampilkan beberapa teks sekaligus
echo "Ini ", "adalah ", "contoh ", "menampilkan ", "dengan banyak parameter.";

// Variabel teks
$teks1 = "Belajar PHP";
$teks2 = "di W3Schools.com";

// Menampilkan variabel dalam HTML
echo "<h2>$teks1</h2>";
echo "<p>Belajar PHP di $teks2</p>";

// Versi lain dengan penggabungan teks pakai titik (.)
echo '<h2>' . $teks1 . '</h2>';
echo '<p>Belajar PHP di ' . $teks2 . '</p>';

// Menggunakan print (mirip echo)
print "<h2>PHP itu Seru!</h2>";
print "Halo dunia!<br>";
print "Saya sedang belajar PHP!";
?>

</body>
</html>
