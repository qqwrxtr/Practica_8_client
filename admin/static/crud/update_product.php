<?php
include 'conexiune.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $product_id = $_GET['id'];

    $sql = "SELECT * FROM products WHERE id = '$product_id'";
    $result = $conexiune->query($sql);

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        echo "Product not found!";
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['id'];
    $name = $_POST['name'];
    $img = $_POST['img'];

    $sql = "UPDATE products SET name = '$name', img = '$img' WHERE id = '$product_id'";
    if ($conexiune->query($sql) === TRUE) {
        echo "Product updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conexiune->error;
    }
}

$conexiune->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Product - AdminKit Demo</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add other CSS files or stylesheets here -->
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Update Product</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="update_product.php">
                            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">

                            <div class="form-group">
                                <label for="name">Product Name:</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $product['name']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="img">Product Image URL:</label>
                                <input type="text" name="img" class="form-control" value="<?php echo $product['img']; ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </form>
                        <a href="../index.php" class="btn btn-secondary mt-3">Back to Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Add other JS files or scripts here -->

</body>

</html>
