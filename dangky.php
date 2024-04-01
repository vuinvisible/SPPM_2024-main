<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
    <!-- <form action="xulydk.php" method="POST" class="dangky">

        <h3>Đăng ký tài khoản</h3>
        <input type="text" class="box" placeholder="Email" name="email">
        <input type="password" class="box" placeholder="Nhập mật khẩu" name="pass">
        <input type="password" class="box" placeholder="Nhập lại mật khẩu" name="repass">
        <input type="text" class="box" placeholder="Họ tên" name="txtten">
        <input type="text" class="box" placeholder="Địa chỉ" name="adress">
        <input type="number" class="box" placeholder="Số điện thoại" name="sdt">
        <input type="submit" value="Đăng ký" class="button" name="dangky">
     
    </form> -->
	<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | sL Code Hub</title>
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
            <form action="#">
                <section class="copy">
                    <h2>Sign Up</h2>
                    <div class="login-container">
                        I have an account? <a href="dangnhap.php"><strong>Log In</strong></a>
                    </div>
                </section><br><br>
                <div class="input-container name">
                    <label for="fname">Full Name</label>
                    <input type="text" name="fname" id="fname">
                </div>
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
				<div class="input-container password">
                    <label for="Password">Re Password</label>
                    <input type="password" name="repassword" id="password" 
                    placeholder="Must be at least 6 characters">
                    <i class="for fa-eye-slash"></i>
                </div>
                <div class="input-container email">
                    <label for="email">Số điện thoại</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="input-container email">
                    <label for="email">Địa chỉ</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="input-container cta">
                    <label class="checkbox-container">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        sing up for email updates.
                    </label>
                </div>
                <button class="signup-btn" type="submit">Sign Up</button>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
</body>
</html>