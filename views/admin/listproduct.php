<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row" style="margin-top: 20px">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Danh sách sản phẩm</h4>


                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Danh sách sản phẩm</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="live-preview">
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Tên sản phẩm</th>
                                                <th scope="col">Giá</th>
                                                <th scope="col">Thương hiệu</th>
                                                <th scope="col">Hình ảnh</th>
                                                <th scope="col">Hình ảnh</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($products as $key => $product){ ?>
                                                <tr>
                                                    <th scope="row"><a href="#" class="fw-medium"><?=$key+1?></a></th>
                                                    <td><?=$product['tensanpham']?></td>
                                                    <td><?=$product['gia']?></td>
                                                    <td><?=$product['ten']?></td>
                                                    <td>
                                                        <img src="<?=str_contains($product['hinhanh'], 'http://') || str_contains($product['hinhanh'], 'https://') ?  str_replace(')', '', $product['hinhanh']) :  'public/'.$product['hinhanh'] ?>" width="40" height="40" alt="" srcset="">
                                                    <td>
                                                        <button onclick="window.location.href = 'http://localhost/oneclickmvcapp/oneclickmvcapp/index.php?role=admin&pages=addproduct&productid=<?=$product['id'] ?? ''?>' " class="btn btn-primary">Sửa</button>
                                                        <button onclick="window.location.href = 'http://localhost/oneclickmvcapp/oneclickmvcapp/index.php?role=admin&pages=deleteproduct&productid=<?=$product['id'] ?? ''?>' " class="btn btn-danger">Xoá</button>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="d-none code-view">
                                <pre class="language-markup" style="height: 275px;"><code>&lt;table class=&quot;table table-nowrap&quot;&gt;

                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div>
                <!-- end col -->


            </div>
            <!-- end row -->



        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>

<script>
    $.ajax({
        url: "",
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {
            console.log(res);
        }
    });
</script>