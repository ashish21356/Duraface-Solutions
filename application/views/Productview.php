<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= BASEURL . '/assets/css/style.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL . '/assets/css/viewstyle.css' ?>">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
        .product-details-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .product-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .product-info h2 {
            margin-bottom: 20px;
        }
        .product-info p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<?php $this->view('Header');?>
<div class="container">
    <div class="product-details-container">
        <div class="product-info">
        <?php if (!empty($product)): ?>
    <?php foreach ($product as $item): ?>
        <h2><?= $item['product_title']; ?></h2>
        <img src="<?= BASEURL . '/assets/images/' . $item['product_image']; ?>" 
             alt="<?= $item['product_image']; ?>" 
             class="product-image">
        <p><strong>Stock:</strong> <?= $item['product_stock']; ?></p>
        <p><strong>Price:</strong> ₹<?= number_format($item['product_selling_price'], 2); ?></p>
        <p><strong>Meta Description:</strong> <?= $item['meta_description']; ?></p>
        <p><strong>Status:</strong> <?= $item['status'] == 0 ? 'Available' : 'Unavailable'; ?></p>
        <a href="<?= BASEURL . '/HomeCtr/downloadDatasheet/' . $item['product_slug']; ?>">
    <button type="button" class="btn btn-primary">Download Datasheet</button>
</a>
    <?php endforeach; ?>
<?php else: ?>
    <p>Product details not available.</p>
<?php endif; ?>


        </div>
    </div>
</div>



<?php $this->view('Footer');?>
</body>
</html>