
<?php
	if (empty($_GET['nama'])||empty($_GET['email'])||empty($_GET['ttl'])||empty($_GET['alamat'])) {
		header("Location:redirect-bio.php");
    }else{
		echo "<center>Nama :" .$_GET['nama']. "</center><br>";
        echo "<center>Email :" .$_GET['email']. "</center><br>";
        echo "<center>Tanggal Lahir :" .$_GET['ttl']."</center><br>";
        echo "<center>Alamat Tempat Tinggal :".$_GET['alamat']."</center>";
	}
?>
