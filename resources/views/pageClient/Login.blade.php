<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="../assets/client/styles/Login.css" />
  <title>Aurora Coffee</title>
</head>

<body>
  <div class="container" id="container">
    <div class="form-container sign-up">
      <form>
        <img src="../assets/client/images/2.png" alt="" style="width: 60%" />
        <h1>Tạo Tài Khoản</h1>
        <div class="social-icons">
          <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <span>Hoặc sử dụng email để đăng kí</span>
        <input type="text" placeholder="Họ Và Tên" />
        <input type="email" placeholder="Email" />
        <input type="password" placeholder="Mật Khẩu" />
        <button>Đăng Kí</button>
      </form>
    </div>
    <div class="form-container sign-in">
      <form>
        <img src="../assets/client/images/2.png" alt="" style="width: 60%" />
        <h1>Đăng Nhập</h1>
        <div class="social-icons">
          <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <span>hoặc sử dụng mật khẩu Email của bạn</span>
        <input type="email" placeholder="Email" />
        <input type="password" placeholder="Mật Khẩu" />
        <a href="#">Quên Mật Khẩu?</a>
        <button>
          <a href="/indexClient" style="color: white">Đăng Nhập</a>
        </button>
      </form>
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>Chào Mừng Trở Lại!</h1>
          <p>
            Nhập thông tin cá nhân của bạn để sử dụng tất cả các tính năng của
            trang web
          </p>
          <button class="hidden" id="login">Đăng Nhập</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>Xin Chào !</h1>
          <p>
            Đăng ký với thông tin cá nhân của bạn để sử dụng tất cả các tính
            năng của trang web
          </p>
          <button class="hidden" id="register">Đăng Kí</button>
        </div>
      </div>
    </div>
  </div>

  <script src="../assets/client/js/Login.js"></script>
</body>

</html>
