<?php
    session_start();
    error_reporting(1);
    if(isset($_POST['sub'])){
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];
        if($mail == '' || $pass == ''){
            $err = '<font color="red" size="6">Please fill user name and pass first!!</font>';
        }else{
            if(file_exists('users'.'/'.$mail) && file_exists('users'.'/'.$mail.'/'.$pass)){
                $_SESSION['mail'] = $mail;
                header('location: account.php');
            }else{
                $err = '<font color="red" size="6">wrong user name or password</font>';
            }
        }
    }
?>
<html>
    <body bgcolor="#265073">
        <center>
            <form action="" method="post">
            <table border="0" width="300" height="174" cellspacing="0" bgcolor="#2D9596">
                <tr>
                    <td colspan="2"><?php echo $err; ?></td>
                </tr>
                <tr>
                    <td height="50" colspan="2" align="center">Login Page</td>
                </tr>
                <tr>
                    <td height="38" align="center">Email:</td>
                    <td><input type="email" name="mail" autofocus placeholder="enter ur email"></td>
                </tr>
                <tr>
                    <td height="49" align="center">Password:</td>
                    <td><input type="password" name="pass" placeholder="enter ur password"></td>
                    <tr>
                        <td height="33" colspan="2" align="center"><input type="submit" value="Login" name="sub" ><a href="registration.php">New user ? Click here</a></td>
                    </tr>
                </tr>
            </table>
            </form>
        </center>
    </body>
</html>