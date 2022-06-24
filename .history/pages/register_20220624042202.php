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
                            <form class="form" action="" method="POST">
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
                                </div>
                                <div class="form-group">
                                    <label for="password" class="input__title"
                                        >Mật khẩu</label
                                    >
                                    <input
                                        class="input-text-field"
                                        type="password"
                                        id="password"
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
                                        placeholder="Nhập lại mật khẩu"
                                    />
                                </div>
                                <div class="btn btn-rounded btn-primary mt-3">
                                    Đăng ký
                                </div>
                            </form>
                            <div class="nav-group">
                                <a href="./login.html" class="nav__link">Quay lại đăng nhập</a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
