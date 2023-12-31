<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../../FE/core/css/home_admin.css">
    <link rel="stylesheet" href="../../FE/core/css/header.css">
    <link rel="stylesheet" href="../../FE/core/css/reponsi.css">
    <link rel="stylesheet" href="../../FE/core/css/login.css">
    <link rel="stylesheet" href="../../FE/core/css/shop.css">
    <link rel="stylesheet" href="../../FE/core/css/addproduct.css">
</head>

<body>
    <!-- header section  -->
    <header class="header">
        <div class="header-1">
            <p>Admin</p>
            <form action="" class="search-form">
                <input type="search" name="" id="search-box" placeholder="Tìm kiếm...">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <li><a href="index.php?act=cart" class="fas fa-shopping-cart"></a></li>
                <li><a href="index.php?act=dangnhap" class="fas fa-user" id="user"></a>
                    <ul class="taikhoan">
                        <?php
                        if (isset($_SESSION['user'])) {
                            extract($_SESSION['user']);
                            $user_account = isset($user_account) ? $user_account : '';
                        ?>
                        <li><a href="index.php?act=logout">Thoát</a></li>
                        <li><a href="" class="taikhoan_main">Xin chào <?=$user_account?></a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </li>
                <li>
                    <div id="login-btn" class="fas fa-heart"></div>
                </li>
            </div>
        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="index.php?act=add_dmsp">Danh mục</a>
                <a href="index.php?act=add_sp">Sản phẩm</a>
                <a href="index.php?act=add_banner">Banner</a>
                <a href="index.php?act=add_sukien">Sale off</a>
                <a href="index.php?act=donhang">Đơn hàng</a>
            </nav>

        </div>

        <!-- bottom navbar -->
        <nav class="bottom-navbar">
            <a href="#home" class="fas fa-home"></a>
            <a href="#home" class="fas fa-list"></a>
            <a href="#home" class="fas fa-tags"></a>
            <a href="#home" class="fas fa-comments"></a>
            <a href="#contact" class="fas fa-blogs"></a>
        </nav>
    </header>
    <!-------------- List Category ----------------->
    <div class="container">
        <h2>Chi tiết đơn hàng</h2>
    </div>
    <table>
        <tr>
            <th>Mã đơn hàng</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>
        <?php
        foreach ($cart_chitiet as $cart_item) {
            echo '<tr>
                    <td>' . $cart_item["id_bill"] . '</td>
                    <td>' . $cart_item["ten_sanpham"] . '</td>
                    <td>' . $cart_item["soluong"] . '</td>
                    <td>' . number_format($cart_item["thanhtien"]) . '</td>
                  </tr>';
        }
        echo '</table>';
    ?>
    </table>