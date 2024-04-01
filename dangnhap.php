<!-- <!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
</head> 
<body> 
	 <form action='xulydn.php' class="dangnhap" method='POST'> 
		<h3>Đăng nhập</h3>
		<input type='text' name='email' placeholder="Nhập Email" /> 
		<input type='password' name='password' placeholder="Nhập mật khẩu" /> 
		<input type='submit' class="button" name="dangnhap" value='Đăng nhập' /> 
		<p>Bạn chưa có tài khoản? <a href="dangky.php" id="dangky">Đăng ký ngay</a></p> 
<form>  -->
<!-- <!DOCTYPE html> -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Signup</title>
    <link rel="stylesheet" href="html_34/style.css">
</head>

<body>
    <div class="split-screen">
        <div class="left">
            <section class="copy">
                <h1>Hello, Friends</h1>
            </section>
        </div>
        <div class="right">
            <form action="xulydn.php" class="dangnhap" method = 'POST'>
                <section class="copy">
                    <h2>Log In</h2>
                    <div class="login-container">
                        Do not have an account?<a href="dangky.php"><strong>Sign Up</strong></a>
                    </div>
                </section><br><br>
                <div class="input-container email">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="input-container password">
                    <label for="Password">Password</label>
                    <input type="password" name="password" id="password" 
                    placeholder="Must be at least 6 characters">
                    <i class="for fa-eye-slash"></i>
                </div>
                <button class="signup-btn" type="submit" name = "dangnhap">Login</button>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
</body> 
</html>