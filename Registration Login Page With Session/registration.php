<?php
    session_start();
    if(isset($_POST['sub'])){
        $_SESSION['mail'] = $_POST['mail'];
        $_SESSION['pass'] = $_POST['pass'];
        if(file_exists('users'.'/'.$_SESSION['mail'])){
            echo "<font color='red' size='10'>You are already register.</font>";
        }else{
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['mail'] = $_POST['mail'];
            $_SESSION['pass'] = $_POST['pass'];
            $_SESSION['add'] = $_POST['add'];
            mkdir('users'.'/'.$_SESSION['mail']);
            $arr= fopen('users'.'/'.$_SESSION['mail'].'/'.$_SESSION['pass'],'w');
            $data="ur name is:".$_SESSION['name']."    "."ur email is:".$_SESSION['em']."   "."ur password is:".$_SESSION['pass']."    "."ur address is:".$_SESSION['add'];
            fwrite($arr,$data);
            header('location: welcome.php');    
        }
    }
?>
<html>
    <body bgcolor="#265073">
        <center>
            <form action="" method="post">
                <table border="0" width="300" height="325" cellspacing="0" bgcolor="#2D9596" >
                    <tr>
                        <td align="center" colspan="2">Registration Form</td>
                    </tr>
                    <tr>
                        <td height="26" align="center">Name:</td>
                        <td align="center"><input type="text" name="name" autofocus placeholder="enter ur name" required>(*)</td>
                    </tr>
                        <td height="29" align="center">Email:</td>
                        <td align="center"><input type="email" name="mail"  placeholder="enter ur email" required>(*)</td>
                    </tr>
                    <tr>
                        <td height="33" align="center">Password:</td>
                        <td align="center"><input type="password" name="pass"  placeholder="enter ur password" required>(*)</td>
                    </tr>
                    <tr>
                        <td height="167" align="center">Address:</td>
                        <td align="center"><textarea name="add" id="" cols="20" rows="5"></textarea></td>
                    </tr>
                    <tr>
                        <td height="28" colspan="2" align="center"><input type="submit" name="sub" value="Register"></td>
                    </tr>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>