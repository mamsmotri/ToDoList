<div class="form-signin">
    <form method="post">
        <label for="login" class="sr-only">Email address</label>
        <input type="text" id="login" name="login" class="form-control" placeholder="login" required="" autofocus="">
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="password" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
</div>

<?
    extract($data);
    if ($login_status == "access_denied") {
?>
    <p style="color:red">Логин и/или пароль введены неверно.</p>
<?
    }
?>
