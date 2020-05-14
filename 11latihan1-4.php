//KONEKSI MYSQL
//Latih 1 - koneksi php 

<?php 
 	
 	$koneksi = mysqli_connect("localhost","root","","db_ygDigunakan");

	//Cek koneksi
	if (mysqli_connect_errno()) //memeriksa koneksi berhasil atau tidak
	{
		echo "Koneksi database gagal : ".mysqli_connect_error(); //menampilkan eror pada koneksi
	}
?>

//MYSQL_QUERY()
//Latih 2 - membuat database

<?php

	$link = mysqli_connect("localhost", "root", ""); 
	$dbname = "lat_dbase";
	if(mysqli_connect_errno())
	{
    	echo mysqli_connect_error();

    	$query = "CREATE DATABASE $dbname";
    	if(mysqli_query($link, $query))
    	{
     	  	echo "Database $dbname berhasil dibuat..";
   		}
   		else
    	{
    		echo "Database $dbname Gagal dibuat..";
    	}
	}
?>

//MYSQL_SELECT_DB()
//Latih 3 - membuat table

<?php
	
	$koneksi = mysqli_connect("localhost","root","","lat_dbase");
	//Cek koneksi
	if (mysqli_connect_errno()) //memeriksa koneksi berhasil atau tidak
	{
		echo "Koneksi database gagal : ".mysqli_connect_error(); //menampilkan eror pada koneksi
	}

	$sql = "CREATE TABLE tbl_mhs
		(
            mhsID INT NOT NULL AUTO_INCREMENT,
            FirstName VARCHAR(15),
           	LastName VARCHAR(15),
           	Age INT,
           	PRIMARY KEY (mhsID)
        )";      
    if(mysqli_query($koneksi, $sql))
    {  
        echo "Tabel berhasil dibuat";  
    }
    else
    {  
        echo "Tabel gagal dibuat";  
    }
	mysqli_close($koneksi);
?>

//Latih 4 - menyisipkan data

<?php
	
	$koneksi = mysqli_connect("localhost","root","","lat_dbase");
	//Cek koneksi
	if (mysqli_connect_errno()) //memeriksa koneksi berhasil atau tidak
	{
		echo "Koneksi database gagal : ".mysqli_connect_error(); //menampilkan eror pada koneksi
	}

	$sql = "INSERT INTO tbl_mhs VALUES('Karina','Suwandi','29'),('Glenn','Gandari','32')";
    //cek apakah proses simpan berhasil
    if (mysqli_query($koneksi, $sql))
    {
    	echo "Data Berhasil Disimpan";
    }
    else
    {
		echo "Gagal menyimpan data";
    }
    mysqli_close($koneksi);
?>