
<?php
include 'conexiune.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $product_id = $_GET['id'];

    $sql = "DELETE FROM products WHERE id = '$product_id'";
    if ($conexiune->query($sql) === TRUE) {
        header('Location: ../index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conexiune->error;
    }
}

$conexiune->close();
?>
