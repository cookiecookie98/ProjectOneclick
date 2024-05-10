<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row" style="margin-top: 20px">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Form Layout</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Form Layout</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Form Grid</h4>

                        </div><!-- end card header -->

                        <div class="card-body">

                            <div class="live-preview">
                                <form action="http://localhost/oneclickmvcapp/oneclickmvcapp/index.php?role=admin&pages=createandupdateproduct<?=$productId !== '' ? '&productid='.$productId : ''?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstNameinput" class="form-label">Tên sản phẩm</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Tên sản phẩm" id="firstNameinput" name="tensanpham">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="lastNameinput" class="form-label">Giá</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Giá" id="lastNameinput" name="gia">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="lastNameinput" class="form-label">Thương hiệu</label>
                                                <input type="number" class="form-control"
                                                    placeholder="Giá" value="1" id="lastNameinput" name="idthuonghieu">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="compnayNameinput" class="form-label">Mô tả</label>
                                                <textarea name="mota" class="form-control"  id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phonenumberInput" class="form-label">Hình Ảnh</label>
                                                <input type="file" name="hinhanh">
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <button class="btn btn-primary" type="submit" name="product_submit">Thêm</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="d-none code-view">
                                <pre class="language-markup" style="height: 375px;">

                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->

            </div>
            <!--end row-->


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->