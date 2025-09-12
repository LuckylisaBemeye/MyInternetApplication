<?php
class forms {
    public function signup() {
?>
    <h2 style="text-align:center; color:#2c3e50;">Welcome to My Task App!</h2>
    <p style="text-align:center; font-size:1.1em; color:#34495e;">Ready to organize your life and boost your productivity? Register now and join a community of achievers! Your journey to getting things done starts here.</p>
    <form method="post" action="/TaskApp/Plugins/phpmailer/mail.php" style="max-width:400px; margin:auto;">
        <label for="username" style="font-size:1.1em; color:#34495e;">Username:</label>
        <input type="text" id="username" name="username" required style="width:100%; font-size:1em; padding:8px; box-sizing:border-box;">
        <br><br>
    <label for="email" style="font-size:1.1em; color:#34495e;">Email:</label>
    <input type="text" id="email" name="email" style="width:100%; font-size:1em; padding:8px; box-sizing:border-box;">
        <br><br>
    <!-- Password field removed as requested -->
        <div style="text-align:center;">
            <input type="submit" value="Register" style="font-size:1.1em; color:#34495e; background-color:#ecf0f1; border:1px solid #34495e; padding:8px 16px; cursor:pointer;">
        </div>
    </form>
<?php
    }
    public function login() {
        ?>
        <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br><br>
            <input type="submit" value="Log In"> <a href="./">Don't have an account? Sign up</a>
        </form>
        <?php
    }
}
