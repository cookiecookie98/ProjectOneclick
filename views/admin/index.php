<?php
    require_once('header.php');
    require_once('./app/controllers/admin/ProductController.php');
    $pages = $_GET['pages'] ?? 'home';
    $productController = new ProductController();

    switch ($pages) {
        case 'home':
            require_once('home.php');
            break;
        case 'listproduct':
            $products = $productController::getAll();
            require_once('listproduct.php');
            break;
        case 'addproduct':
            $productId = $_GET['productid'] ?? '';
            require_once('addproduct.php');
            break;
        case 'createandupdateproduct':
            if(isset($_POST['product_submit'])){
                if (isset($_FILES["hinhanh"]) && $_FILES["hinhanh"]["error"] == 0) {
                    $image = $_FILES['hinhanh']['name'];
                    $imageName =  'assets/images/product'.$image;
                } else {
                    echo "Please select an image file to upload.";
                }

                $product = [
                    'id' => NULL,
                    'tensanpham' => $_POST['tensanpham'] ?? '',
                    'gia' => (int)$_POST['gia'] ?? 0,
                    'idthuonghieu' => $_POST['idthuonghieu'] ?? '',
                    'mota' => $_POST['mota'] ?? '',
                    'hinhanh' => $imageName
                ];
                $productid = $_GET['productid'] ?? '';
                if($productid === ''){
                    $productController::addProduct($product);
                }else{
                    $productController::updateProduct($productid, $product);
                }

                // echo "<script>window.location.href='http://localhost/oneclickmvcapp/oneclickmvcapp/index.php?role=admin&pages=listproduct'</script>";
            }
            break;
        case 'deleteproduct':
            $productId = $_GET['productid'] ?? '';
            $productController::deleteProduct($productId);
            echo "<script>window.location.href='http://localhost/oneclickmvcapp/oneclickmvcapp/index.php?role=admin&pages=listproduct'</script>";
            break;
        case 'controllerproduct':
            // $productController = new ProductController();
            // $action = ''
            break;
        default:
            require_once('home.php');
            break;
    }

    require_once('footer.php');
?>