//MYSQL_FETCH_ROW()
//Latih 5 - Menampilkan Data

<?php

	$koneksi = mysqli_connect("localhost","root","","lat_dbase");
	if (mysqli_connect_errno())
	{
		echo "Koneksi database gagal : ".mysqli_connect_error();
	}
	$sql = "SELECT * FROM tbl_mhs";
	if ($hasil=mysqli_query($koneksi,$sql))
	{
		While($data=mysqli_fetch_row($hasil))
		{
			echo "$data[0] $data[1] $data[2]";
		}
		mysqli_free_result($hasil);
	}	
	mysqli_close($koneksi);
?>

//MYSQL_FETCH_ARRAY()
//Latih 6 - Menampilkan Data

<?php
	$koneksi=mysqli_connect("localhost","root","","lat_dbase");
	if (mysqli_connect_errno())
  	{
  		echo "Koneksi database gagal : ".mysqli_connect_error();
  	}

  	$sql = "SELECT * FROM tbl_mhs";
	if ($hasil=mysqli_query($koneksi,$sql))
	{
		While($data=mysqli_fetch_array($hasil))
		{
			echo "$data [FirstName] $data[LastName] $data[Age]";
		}
		mysqli_free_result($hasil);
	}
	mysqli_close($koneksi);
?>

//MYSQL_NUM_ROWS()
//Latih 7

<?php
	$koneksi=mysqli_connect("localhost","root","","lat_dbase");
	if (mysqli_connect_errno())
  	{
  		echo "Koneksi database gagal : ".mysqli_connect_error();
  	}  	
  	$sql = "SELECT * FROM tbl_mhs";
	if ($hasil=mysqli_query($koneksi,$sql))
	{
		$hit=mysqli_num_rows($hasil);
		echo "Jumlah Record $hit";
	}
	mysqli_close($koneksi);
?>

//MYSQL_CLOSE()
//Latih - form.php

<html>
<body>
	<form action="insert3.php" method="post">
		Firstname: <input type="text" name="firstname" />
		Lastname: <input type="text" name="lastname" />
		Age: <input type="text" name="age" />
		<input type="submit" />
	</form>
</body>
</html>

//Latih - insert3.php

<?php
	
	$koneksi=mysqli_connect("localhost","root","","lat_dbase");
	if (mysqli_connect_errno())
  	{
  		echo "Koneksi database gagal : ".mysqli_connect_error();
  	}

  	$nm_dpn = $_POST['firstname'];
	$nm_blkang = $_POST['lastname'];
	$age = $_POST['age'];

	$sql = "INSERT INTO tbl_mhs (FirstName, LastName, Age) VALUES('$nm_dpn','$nm_blkang','$age')"
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

	if($query){
		echo "Data berhasil di insert";
	}
	else
	{
		echo "Error :".$sql."<br>".mysqli_error($koneksi);
	}
	mysqli_close($koneksi);
?>