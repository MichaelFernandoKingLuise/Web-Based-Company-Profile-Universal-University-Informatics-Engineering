<style>
    .container-login {
        padding-left: 26px;
        padding-right: 32px;
        margin-top: 80px;
        margin-bottom: 80px;
        max-height: 100vh;
    }
</style>

<div class="container-fluid container-login">
    <div class="login-wrapper">
        <div class="login-form">
            <h1>
                Login
            </h1>
            <form method="POST" action="cek_login.php">
                <div class="txt-field">
                    <input type="text" name="username" class="username" placeholder="Username" required>
                </div>
                <div class="txt-field">
                    <input type="password" name="password" class="password" placeholder="Password" required>
                </div>
                <input type="submit" value="Login" class="submit">
            </form>
        </div>
    </div>
</div>