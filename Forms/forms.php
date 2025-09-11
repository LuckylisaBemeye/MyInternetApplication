<?php
class forms {
    public function signup() {
?>
    <h2 style="text-align:center; color:#2c3e50;">Welcome to My Task App!</h2>
    <p style="text-align:center; font-size:1.1em; color:#34495e;">Ready to organize your life and boost your productivity? Register now and join a community of achievers! Your journey to getting things done starts here.</p>
    <form method="post" action="../Plugins/phpmailer/main.php" style="max-width:400px; margin:auto;">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <input type="submit" value="Sign Up">
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
