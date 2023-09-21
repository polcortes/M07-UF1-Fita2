<h2>Login</h2>

<form action="" method="post">
    <input type="text" name="user" placeholder="user">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="Tramet la consulta">
</form>

<?php
    $users = [
        ["user" => "Claudia", "password" => "123"],
        ["user" => "Pol", "password" => "1234"]
    ];

    $login_ok = false;

    if (isset($_POST["user"])) {
        foreach ($users as $user) {
            if ($_POST["password"] == $user["password"]) {
                $login_ok = true;
                break;
            }
        }
        if ($login_ok) {
            echo "Logged in succesfuly";
        } else {
            echo "The user and the password doesn't match...";
        }
    }
?>

<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    form {
        display: flex;
        flex-direction: column;
        width: 800px;
        align-items: center;
    }

    input {
        max-width: 200px;
        margin: 5px;
    }
</style>