// Phần header
header.header__home
    // Ẩn trên giao diện desktop
    .menu-toggle
        .menu-open-btn
        .menu--open
            .menu__header
                .menu-close-btn
                .menu__title {Menu}
            .menu__body
                .menu-item
                    img.user-avatar
                    h4.user-name
                .menu-item
                    .menu-item__icon
                    p.menu-item__menu-name {Trang chủ}
                .menu-item
                    .menu-item__icon
                    p.menu-item__menu-name {Cài đặt}
                .menu-item
                    .menu-item__icon
                    p.menu-item__menu-name {Đăng xuất}
            .menu__overlay
    // Hiển thị trên giao diện desktop
    .search-group
        input[type="text"].search-input %Tìm kiếm%
        .search-icon
    .logo
    .user-dropdown-menu
        .menu-item
            .user-avatar
            h4.user-name
        .menu-item
            .cog-icon
            p.menu-item__menu-name {Cài đặt}
        .menu-item
            .log-out-icon
            p.menu-item__menu-name {Đăng xuất}
.main-container
    section.hero
        h3.hero__title {Khám phá}
        p.hero__sub-title {Thế giới tri thức trong tầm tay}
    // Ẩn trên giao diện desktop
    .search-group
        input[type="text"].search-input %Tìm kiếm%
        .search-icon 
    // Ẩn trên giao diện mobile
    section.banner
        .banner-1
        .banner-2
        .banner-3
    // Hiển thị trên tất cả thiết bị
    section.categories
        .category-item
            .book-icon
            p.categor-item__name {Truyện tranh}
        .category-item
            .flower-icon
            p.categor-item__name {Đời sống}
        .category-item
            .puzzle-icon
            p.categor-item__name {Khoa học - Công nghệ}
    section.products
        (for each products)
        .product-item
            .product-item__image
            h5.product-item__name
            p.product-item__price
            .product-item__hover-overlay
                .add-to-cart-btn
    section.contact-area
        .contact-banner
        .contact-form
            input[type="text"].contact-input %Họ và tên%
            input[type="text"].contact-input %Số điện thoại%
            input[type="email"].contact-input %Email%
            textarea.contact-message %Nội dung liên hệ%
            .btn.btn-primary {Gửi phản hồi}
footer.footer
    .footer-subscribe
        h3.subscribe-shop-name {Books}
        p.subscribe-intro
        input[type="email"].subscribe-email %Email của bạn%
        .btn {Đăng ký }
    .footer-info-block
        h5.info-block__title {Tài khoản của tôi}
        p.info-block__item {Tài khoản của tôi}
        p.info-block__item {Lịch sử đơn hàng}
        p.info-block__item {Danh sách yêu thích}
        p.info-block__item {Thư thông báo}
    .footer-info-block
        h5.info-block__title {Thông tin}
        p.info-block__item {Về chúng tôi}
        p.info-block__item {Blog}
        p.info-block__item {Liên lạc với chúng tôi}
        p.info-block__item {Cửa hàng}
        p.info-block__item {Xem thêm thông tin}
    .footer-info-block
        h5.info-block__title {Liên hệ}
        p.info-block__item {Email: email@domain.com}
        p.info-block__item {SĐT: (+84) 370 651 963}
        p.info-block__item {Nhà sách: 56 Linh Chiểu, Thủ Đức, Tp.HCM}
    .footer-social-contact
        .facebook-icon
        .instagram-icon
        .twitter-icon
        .youtube-icon
    .footer-copy-right
        h5.copy-right__title {Books đã đăng ký bản quyền}
        p.copy-right__item {Chính sách bảo mật}
        p.copy-right__item {Điều khoản sử dụng}
        p.copy-right__item {Liên hệ}
