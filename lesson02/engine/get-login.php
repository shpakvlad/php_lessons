<?php
require_once "db-connect.php";
require_once "User.php";

session_start();

$_SESSION['error'] = '';
$role = '';

if (isset($_COOKIE["user"])) {
    header("Location: user-page.php");
}

if ($_POST) {
    if (!empty(trim(strip_tags($_POST['username']))) && !empty(trim(strip_tags($_POST['password'])))) {

        $user = new User($_POST['username'], $_POST['password']);

        if ($user->check_pass()) {

            $role = $user->get_role();

            switch ($user->get_role()) {
                case 'admin':
                    setcookie("role", "admin", time() + 3600 * 24);
                    header("Location: admin-page.php");
                    break;
                case 'user':
                    setcookie("role", "user", time() + 3600 * 24);
                    header("Location: user-page.php");
                    break;
                default:
                    header("Location: 404.php");
                    break;
            }
        } else {
            $_SESSION['error'] = "Username or password is incorrect";
        }
    } else {
        $_SESSION['error'] = "Fill in all the fields";
    }
}

if (isset($_GET['logout'])) {
    switch ($_GET['logout']) {
        case 'admin':
            setcookie("role", 'admin', time() - 3600 * 24);
            break;
        case 'user':
            setcookie("role", 'user', time() - 3600 * 24);
            break;
        default:
            break;
    }

    header("Location: index.php");
}

?>

