<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body style="background-color: #fff;">
<?php include 'menu1.php'; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">เพิ่มสินค้าใหม่</h3>
                    <form method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="category" class="form-label">หมวดหมู่สินค้า</label>
                            <select class="form-control" id="category" name="category" required>
                                <option value="">-- เลือกหมวดหมู่ --</option>
                                <option>Keyboard</option>
                                <option>Gaming Laptop</option>
                                <option>Mouse</option>
                                <option>Gaming Chair</option>
                                <option>Gaming Mic</option>
                                <option>Joy Stick & Console</option>
                                <option>Speaker</option>
                                <option>Screen</option>
                                <option>Earphones</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="product_name" class="form-label">ชื่อสินค้า</label>
                            <input type="text" class="form-control" id="product_name" name="product_name" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">รายละเอียดสินค้า</label>
                            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">ราคา (บาท)</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                        </div>

                        <div class="mb-3">
                            <label for="product_image" class="form-label">เลือกรูปสินค้า</label>
                            <input type="file" class="form-control" id="product_image" name="product_image" accept="image/*" required>
                        </div>

                        <div class="mb-3">
                            <label for="quantity" class="form-label">จำนวนสินค้า</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">เพิ่มสินค้า</button>
                        <a href="admin_dashboard.php" class="btn btn-secondary w-100 mt-2">กลับไปหน้าหลัก</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>

</body>
</html>
