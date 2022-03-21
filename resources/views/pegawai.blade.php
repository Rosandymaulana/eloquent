<!DOCTYPE html>
<html>
<head>
	<title>Praktikum Pemrograman Web Lanjut 04 : Eloquent Laravel</title>
</head>
<body>

<h1>Data Pegawai</h1>
<h3>www.malasngoding.com</h3>

<ul>
	@foreach($pegawai as $p)
		<li>{{ "Nama : ". $p->nama . ' | Alamat : ' . $p->alamat }}</li>
	@endforeach
</ul>

<center><h3>TI-2B_17_Maulana Rosandy_2041720120</h3></center>
</body>
</html>