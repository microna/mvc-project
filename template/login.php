<?php
/**
 * login page template
 */
if (isset($_POST['submit'])){
    $user = login($_POST['login'], $_POST['password']);
    if ($user) {
        $user = $user[0];
        $hash = md5(generateCode(10));
        $ip = null;
        if (!empty($_POST['ip'])){
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        updateUser($user['id'], $hash, $ip);
        setcookie('id', $user['id'], time()+60*60*24*30, "/");
        setcookie('hash', $hash, time()+60*60*24*30, "/");
        header("Location: /admin");
        exit();
    }
}
else {
    echo 'Incorrect creds!';
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

