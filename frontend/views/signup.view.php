<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="../assets/styles/signin_signup.css">
</head>
<body>
    <div class="container">
        <div class="left-content">
            <img class="logo-icon" src="" alt="">
            <h1>BRAND NAME</h1>
        </div>

        <div class="right-content">
            <div class="content-header">
                <img class="logo-icon" src="" alt="">
                <h2>Create an account</h2>
                <p>Welcome! Enyoy using our Webapp</p>
            </div>

            <form class="form-block" action="../scripts/signup_process.php" method="post">
                <div class="input-block">
                    <div class="input-row">
                        <label for="username">Username</label>
                        <input type="text" placeholder="Ente your username" name="username" required>
                    </div>

                    <div class="input-row">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Enter your email" name="email" required>
                    </div>

                    <div class="input-row">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Create a password" name="password" required>
                    </div>
                </div>

                <div class="button-block">
                    <button class="btn btn-bg" type="submit">Gets Started</button>
                    <button class="btn btn-nbg"><img style="height:16px; width: 16px; margin-right: 12px" src="../assets/icons/google-icon.png" alt="">Sign up with Google</button>
                </div>
            </form>

            <p class="signup-block">Already have an account? <a href="/signin">Login</a></p>
        </div>
    </div>
</body>
</html>