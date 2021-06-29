<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Document</title>
</head>
<?php
session_start();
$disable="";
if (isset($_POST['login'])) {
    $_SESSION['userid'] = $_POST['userid'];
    echo "<h4>Logged-In</h4>";
    if (isset($_COOKIE[$_POST['userid']])) {
        setcookie($_POST['userid'], $_COOKIE[$_POST['userid']] + 1, time() + (86400 * 30), "/");
        echo  "<h3>" . $_SESSION['userid'] . " you have visited " . $_COOKIE[$_POST['userid']] . " Times</h3>";
    } else
        setcookie($_POST['userid'], 1, time() + (86400 * 30), "/");
    $_SESSION['loggedin'] = true;
    $disable="disabled";
    
}

if (isset($_POST['logout'])) {
    echo "<h4>Logged-Out</h4>";
    session_destroy();
}
?>

<body>
    <style>
        td,
        table {
            border: 2px black solid;
            background-color: #ccc;
        }

        td {
            padding: 10px;

        }

        input {
            display: block;
            margin: auto;
        }
    </style>
    <table>
        <?php
        if (isset($_POST['login']))
            echo "<th colspan=\"2\">" . $_SESSION['userid'] . " Logged in currently</th>";
        else
            echo "<th colspan=\"2\">Student Login</th>";
        ?>
        <form action="" method="post">
            <tr>
                <td><label>User ID</label></td>



                <td><input <?php echo $disable;?> type="text" name="userid"></td>



            </tr>
            <tr>
                <td><label>Password</label></td>
                <td><input <?php echo $disable;?> type="password" name="password"></td>
            </tr>
            <tr>
                <?php
                if (!isset($_POST['login']))//logged in
                    echo "<td colspan=2><input type=\"submit\" value=\"Login\" name=\"login\"></td>";
                if (isset($_POST['login']))
                echo "<td colspan=2><input type=\"submit\" value=\"Logout\" name=\"logout\"></td>";
                // if (isset($_POST['logout']))
                // else
                // echo "<td><input type=\"submit\" value=\"Login\" name=\"login\"></td>";
                ?>



            </tr>
        </form>
    </table>



</body>

</html>