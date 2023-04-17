<html>
    <head>
        <title>
            BIODATA Page
        </title>
    </head>
    <body>
        <center><h3>Silahkan lengkapi form biodata dibawah ini: </h3></center>
        <br>
        <form action="get-bio.php" method="GET">
            <table width="400" align="center" cellpadding="2" cellspacing="2">
                <tr>
                    <td width="130"><label for="nama">Nama Lengkap</label></td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td width="130"><label for="email">Email</label></td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>
                <tr>
                    <td width="130"><label for="ttl">Tanggal Lahir</label></td>
                    <td><input type="date" name="ttl" id="ttl"></td>
                </tr>
                <tr>
                    <td width="130"><label for="alamat">Alamat tempat Tinggal</label></td>
                    <td><input type="text" name="alamat" id="alamat"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Login" name="btn_login"></td>
                </tr>
            </table>
        </form>
    </body>
</html>