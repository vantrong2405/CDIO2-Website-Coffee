<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/admin/css/login.css">
    <title>Đăng nhập admin</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-in">
            <form>
                <img src="../assets/admin/images/avatars/Aurora_Coffee.png" alt="">
                <h1 style="color: #AB826B;">Đăng Nhập Admin</h1>
                <input class="mt-5" type="email" placeholder="Email" id="email">
                <input class="" type="password" placeholder="Password" id="pass"">
                <div style=" display: flex ; align-items: center; justify-content: start; width: 100%; ">
                    <input style=" width: 7%;" type="checkbox" id="remember">
                <div style="width: 80%; margin-left: 5px;"> Remember</div>
        </div>
        <button class="mt-2" style="background-color: #AB826B;" onclick="login()">Đăng nhập</button>
        </form>
    </div>
    </div>

    <script src="../assets/admin/js/login.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const x = localStorage.getItem("login")
            if (x) {
                return window.location.href = "/indexAdmin"
            }
        });

        function login() {
            const email = document.getElementById('email').value;
            const pass = document.getElementById('pass').value;
            if (email === 'minhtuanledng@gmail.com' && pass === '123') {
                localStorage.setItem('login', JSON.stringify(email, pass))
                return window.location.href = '/indexAdmin'
            } else {
                alert('Sai tài khoản hoặc mật khẩu')
            }
        }
    </script>
</body>

</html>
