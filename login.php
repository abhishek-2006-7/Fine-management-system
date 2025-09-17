
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="Login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="Login/css/style.css">
</head>
<body >

    <div class="main" ></div>
<!-- Sing in  Form -->
 <section class="sign-in" >
            <div class="container">
                <div class="signin-content" style="margin-top: -223px;">
                	
                    <div class="signin-image">
                        <figure><img src="Login/images/haiiii.jpg" alt="sing up image"></figure>
                        <a href="create.php" class="signup-image-link">Create an account</a>
                    </div>
                
                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="loginAction.php" method="POST" class="register-form" id="login-form">
                        
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="uname" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pwd" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                       
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="https://www.facebook.com/"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="https://x.com/i/flow/login?lang=en&mx=2"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="https://accounts.google.com/InteractiveLogin/signinchooser?ifkv=AVdkyDnguySLYvjh87F5yglMWScJ1719hjydWfeObUm8fUDb2FAXnAkR8bRmC7cIDalqwsllBPCGhQ&ddm=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="Login/vendor/jquery/jquery.min.js"></script>
    <script src="Login/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
