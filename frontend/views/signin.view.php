
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <h2>Login to your Account</h2>
                <p>Welcome back! Please enter your details.</p>
            </div>
            
            <form class="form-block" action="../scripts/signin_process.php" method="post">
                <div class="input-block">
                    <div class="input-row">
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="Enter your username" required>
                    </div>
                    
                    <div class="input-row">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Enter your password" required>
                    </div>
                </div>
                
                <div class="rem-for">
                    <div class="rem">
                        <input type="checkbox" name="checkbox">
                        <label for="checkbox">Remember me</label>
                    </div>
                    
                    <a href="">Forget Password?</a>
                </div>

                <div class="button-block">
                    <button class="btn btn-bg" type="submit">signin</button>
                    <button class="btn btn-nbg"><img style="height:24px; width: 24px; margin-right: 12px" src="../assets/icons/google-icon.png" alt="">Sign up with Google</button>
                </div>
                
            </form>

            <p class="signup-block">Don't have an account? <a href="/signup">Sign up</a></p>
        </div>
    </div>
</body>
</html>
<

