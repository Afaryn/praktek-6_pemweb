<html>
    <head>
        <title>
            Login Page
        </title>
    </head>
    <body>
        <form action="get-login.php" method="GET">
            <table width="400" align="center" cellpadding="2" cellspacing="2">
                <tr>
                    <td width="130"><label for="nama">Nama</label></td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td width="130"><label for="email">Email</label></td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Login" name="btn_login"></td>
                </tr>
            </table>
        </form>
    </body>
</html>