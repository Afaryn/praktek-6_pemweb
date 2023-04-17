
<?php
	if (empty($_GET['nama'])) {
		header("Location:redirect-login.php");
	} elseif(empty($_GET['email'])) {
        header("Location:redirect-login.php");
    }else{
		echo "<center>Nama :" .$_GET['nama']. "</center><br>";
        echo "<center>Email :" .$_GET['email']. "</center><br>";
        echo "<center>Selamat anda berhasil login <br>" . date("d-m-Y h:i:sa") . "</center><br>";
	}
?>
