<?php
    session_start();
    ob_start();
    include("database.php");    

    if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
     if(isset($_POST['submit'])){
        if (empty($_POST["name"]) && empty($_POST["email"]) && empty($_POST["password"])){
            die("Không được để trống ");
        }
    }
    // kiem tra mat khau day du 8 ki tu
    if(isset($_POST['submit'])){
      if(strlen($_POST["password"]) < 8){
        die("Can du 8 ki tu");
      }
             }
    // kiem tra  co du 1 ki tu khong
    if(isset($_POST['submit'])){
        if(! preg_match("/[a-z]/i",$_POST['password'])){
            die("Can them it nhat 1 chu cai");
        }
    }
    // kiem tra co du so khong
    if ( ! preg_match("/[0-9]/", $_POST["password"])) {
        die("Password must contain at least one number");
    }
   
             
}
if (isset($_POST['submit'])) {
    // Lấy giá trị từ form
    $Name = $_POST['name'];
    $password = $_POST['password'];

    // Kết nối đến CSDL
    $conn = Connect();

    // Truy vấn SQL
    $query = "SELECT * FROM admin WHERE tendangnhap=:Name AND password_hash=:password";
    $stmt = $conn->prepare($query);

    // Bind tham số
    $stmt->bindParam(':Name', $Name);
    $stmt->bindParam(':password', $password);

    // Thực hiện truy vấn
    $result = $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
           if(gettype($data) === 'array'){
                $_SESSION['user'] = json_encode([
                    'ten' => $data['ten'],
                    'email' => $data['email']
                ]);
                header('Location: MyAccount.php');
            }else{
                echo "login failed";
            }
    
}

?>