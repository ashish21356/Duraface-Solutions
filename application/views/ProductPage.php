<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= BASEURL . '/assets/css/style.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL . '/assets/css/viewstyle.css' ?>">
    <style>
        .product-block {
            display: flex;
            align-items: flex-start;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            height: 400px; /* Set fixed height */
            overflow: hidden; /* Hide overflow */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional: Add shadow */
        }
        .product-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-right: 15px;
            flex-shrink: 0; /* Prevent image from shrinking */
        }
        .product-details {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Space out content */
        }
    </style>
</head>
<body>
    <?php $this->view('Header'); ?>

    <div class="container mt-4">
        <?php if (!empty($products)): ?>
            <div class="row">
                <?php foreach ($products as $product): ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="product-block">
                        <a href="callByProductSlug/<?=$product['product_slug'];?>">
                            <img src="<?= BASEURL . '/assets/images/' . $product['product_image']; ?>" 
                                 class="product-image" 
                                 alt="<?= $product['product_image']; ?>"></a>
                            <div class="product-details">
                                <h5><strong><?= $product['product_title']; ?></strong></h5>
                                <p>
                                    <strong>Stock:</strong> <?= $product['product_stock']; ?><br>
                                    <strong>Price:</strong> ₹<?= number_format($product['product_selling_price'], 2); ?><br>
                                    <strong>Meta Description:</strong> <?= $product['meta_description']; ?><br>
                                    <strong>Status:</strong> <?= $product['status'] == 0 ? 'Available' : 'Unavailable'; ?>
                                </p>
                                <a href="callByProductSlug/<?=$product['product_slug'];?>" class="btn btn-info">View Details</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>No products found.</p>
        <?php endif; ?>
    </div>

    <?php $this->view('Footer'); ?>
</body>
</html>
