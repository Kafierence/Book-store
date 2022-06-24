<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Book store</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/css/style.css" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="register__container">
                        <header class="header">
                            <div class="logo">Logo here</div>
                        </header>
                        <div class="hero">
                            <h3 class="hero__title">Đăng ký</h3>
                            <p class="hero__sub-title">Sẵn sàng khám phá thế giới tri thức của bạn</p>
                    
                        </div>
                        <section class="register__region">
                            <form class="form" action="../logic/register.inc.php" method="POST">
                                <div class="form-group">
                                    <label for="name" class="input__title"
                                        >Họ và tên</label
                                    >
                                    <input
                                        class="input-text-field"
                                        type="text"
                                        id="name"
                                        placeholder="Họ và tên"
                                        name="userName"
                                        require
                                    />
                                      <?php

                                        if (isset($_GET["error"])) {
                                            if ($_GET["error"] == "invalidName") {
                                                echo "<p class='text-danger'>Please Type valid Name ( not special character and number)</p>";
                                            }
                                        }
                                   ?>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="input__title"
                                        >Địa chỉ</label
                                    >
                                    <input
                                        class="input-text-field"
                                        type="text"
                                        id="address"
                                        name="userAddress"
                                        placeholder="Địa chỉ"
                                        require
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="email" class="input__title"
                                        >Email</label
                                    >
                                    <input
                                        class="input-text-field"
                                        type="text"
                                        id="email"
                                        name="userEmail"
                                        placeholder="Email"
                                    />
                                       <?php

                                        if (isset($_GET["error"])) {
                                            if ($_GET["error"] == "invalidEmail") {
                                                echo "<p class='text-danger'>Please Enter Valid Email</p>";
                                            }
                                        }
                                   ?>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="input__title"
                                        >Mật khẩu</label
                                    >
                                    <input
                                        class="input-text-field"
                                        type="password"
                                        id="password"
                                        name="userPassword"
                                        placeholder="Mật khẩu"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm" class="input__title"
                                        >Nhập lại mật khẩu</label
                                    >
                                    <input
                                        class="input-text-field"
                                        type="password"
                                        id="password-confirm"
                                        name="userConfirmPassword"
                                        placeholder="Nhập lại mật khẩu"
                                    />
                                </div>
                                <?php

                                if (isset($_GET["error"])) {
                                    if ($_GET["error"] == "emptyinput") {
                                        echo "<p class='text-danger'>Please Full fill fields</p>";
                                    }
                                    else if($_GET["error"] == "invalidConfirm"){
                                        echo "<p class='text-danger'>Please Enter the same password and confirm password</p>";

                                    }
                                    else if($_GET["error"]=="existAccount"){
                                        echo "<p class='text-danger'>This Email Account already created</p>";
                                    }
                                }
                                   ?>
                              
                                <button type="submit" name="submit"  class="btn btn-rounded btn-primary mt-3">
                                    Đăng ký
                                </button >
                            </form>
                            <div class="nav-group">
                                <a href="./login.php" class="nav__link">Quay lại đăng nhập</a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
