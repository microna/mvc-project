<?php
/**
 * register page template
 */
if (isset($_POST['submit'])){
    $err =[];
    if (strlen($_POST['login']) < 4 OR strlen($_POST['login'] > 30)) {
        $err[] = "Login should be more than 3 and less than 30";
    }
    if ( isLoginExist($_POST['login'])) {
        $err[] = "Login already taken:(";
    }
    if (count($err) === 0) {
        createUser($_POST['login'], $_POST['password']);
        header('Location: /login');
        exit();
    }
    else {
        echo '<h4>Regestry error</h4>';
        foreach ($err as $error) {
            echo $error.'<br>';
        }
    }
}
?>

<div class="container">
    <div class="form-wrapper d-flex justify-content-center">
        <form method="POST">
            Login: <input class="form-control w-60" type="text" name="login" required value="admin3"><br>
            Password: <input class="form-control w-60" type="password" name="password" required value="12345"><br>
            <input class="btn btn-primary" type="submit" name="submit" value="Sign in">
        </form>
        </form>
    </div>
