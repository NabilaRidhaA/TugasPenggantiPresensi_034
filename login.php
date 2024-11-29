<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 text-center">Form Penjualan</h1>
        <div class="row mt-5">
            <div class="col-12 col-md-3">
                <?php include 'sidebar.php'; ?>
                
            </div>
            <div class="col-12 col-md-6">
            <form action="hitung_process.php" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingNama" name="nama">
                    <label for="floatingNama">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingJml" name="jumlah">
                    <label for="floatingJml">Password</label>
                </div>
                <button type="submit" class="btn btn-primary">Hitung</button>
            </form>
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>