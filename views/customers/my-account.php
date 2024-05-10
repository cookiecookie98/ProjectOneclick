<?php
session_start();
ob_start();
include("database.php");

$conn = Connect();

// Sửa tên biến thành $SQL_lietke
// $SQL_lietke = "SELECT * FROM `admin` ORDER BY ten, email";
// $stmt = $conn->prepare($SQL_lietke);
// $result = $stmt->execute();

// if ($result) {
//     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//         // Xử lý dữ liệu từ hàng của bảng
//         $ten = $row['ten'];
//         $email = $row['email'];
//         // ...
//         $_SESSION['user'] = json_encode([
//             "ten" => $ten,
//             "email" => $email
//         ]);
//     }
// }
 
?>
<?php 
    $user = json_decode($_SESSION['user']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css?v=1">
    <title>My Account</title>
</head>

<body>

    <div class="Container">
        <div class="upper-left">
            <div class="profile">
                <img class="img"
                    src="https://s.memehay.com/files/posts/20200812/2905018b902d83cf71b8ce455130453dhacker-tre-trau-noi-hay-lam-khong-bay-acc.jpg"
                    alt="user">
            </div>
        </div>
        <div class="upper-right">
            <div class="information">
                <h2 class="main-title">Thông tin chung <span></span></h2>
                <div class="Red"> Thông tin tài khoản
                    <button class="edit">Chỉnh sửa </button>
                </div>
                <div class="information_1">
                    <h4> Họ Và Tên :<p style="display: inline-block;"> <?php echo $user->ten ?></p>
                    </h4>
                    <h4> Email :<p style="display: inline-block;"> <?php echo $user->email ?></p>
                    </h4>
                    <h4> Số điện thoại :<p style="display: inline-block;"> 0112223348934</p>
                    </h4>
                </div>
            </div>
        </div>
        <div class="down-left">
            <div class="Function">
                <!-- Thêm nội dung hoặc các yếu tố khác nếu cần -->
                <div class="Content">
                    <ul class="List">
                        <li> <a href="">Thông Tin Tài Khoản</a></li>
                        <li> <a href="">Sản phẩm theo dõi</a></li>
                        <li><a href="">Bình Luận của Tôi</a></li>
                        <li><a href="">Danh Sách Đơn Hàng</a> </li>
                        <li><a href="">Thoát</a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="down-right">

            <div class="Tracking_product">
                <div class="Following"> Sản Phẩm Theo Dõi
                    <button class="fullham">Chỉnh sửa </button>
                </div>
                <form action="Xuat Table" method="post">
                    <div class="TableContainer">
                        <table class="Table">
                            <thead>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Đơn Giá</th>
                                <th>Chi Tiết</th>
                                <th>Hành Động</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>cccd</td>
                                    <td>250000</td>
                                    <td>abc</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>