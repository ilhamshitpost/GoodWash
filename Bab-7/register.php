<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Good Wash Cleaning</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in"><label for="tab-1" class="tab">Login</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab">Register</label>
            <div class="login-form">
                <form action="proses-login.php" method="post">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" name="username" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" name="password" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                            <label for="check"><span class="icon"></span> Biarkan saya tetap masuk</label>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Sign In">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <a href="#forgot" id="forgot-password-link">Lupa Password?</a> | <a href="index.html">Kembali?</a>
                        </div>
                    </div>
                </form>
                <form action="proses-register.php" method="post">
                    <div class="sign-up-htm">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" name="username" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" name="password" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <label for="email" class="label">Email Address</label>
                            <input id="email" name="email" type="email" class="input">
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Sign Up">
                        </div>
                        <div class="hr_reg"></div>
                        <div class="foot-lnk">
                            <label for="tab-1">Sudah Punya Akun?</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Forgot Password Popup -->
    <div class="popup" id="forgot-password-popup">
        <div class="popup-content">
            <h2>Lupa Password Bang?</h2>
            <form>
                <div class="group">
                    <label for="email-forgot" class="label">Email Address</label>
                    <input id="email-forgot" type="email" class="input" aria-label="Email Address">
                </div>
                <div class="group">
                    <button class="button" type="submit">Send Reset Link</button>
                </div>
            </form>
            <button class="close-popup" id="close-forgot-password-popup">Close</button>
        </div>
    </div>
    <script>
        document.getElementById('forgot-password-link').addEventListener('click', function () {
            document.getElementById('forgot-password-popup').style.display = 'block';
        });

        document.getElementById('close-forgot-password-popup').addEventListener('click', function () {
            document.getElementById('forgot-password-popup').style.display = 'none';
        });
    </script>
</body>
</html>
