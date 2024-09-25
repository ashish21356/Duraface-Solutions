<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">
        <title>Manage Page Content Form</title>
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

    <div class="container-fluid mt-4" id="sidenav">
      <div class="row">
        <div class="col-lg-3 col-md-4 mb-4">
          <h3 class="mb-4">Admin Panel</h3>
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL . '/AdminCtr' ?>">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL . '/AdminCtr/Createproduct' ?>">Create Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Update Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL . '/HomeCtr' ?>">User Dashboard</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-9 col-md-8">
            <h2 class="mb-4 bg-info p-1">Update Product</h2>

            <?php if (!empty($errors)): ?>
            <div style="color: red;">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if (!empty($success_message)): ?>
            <div style="color: green;">
                <?php echo htmlspecialchars($success_message); ?>
            </div>
        <?php endif; ?>

        <form action="<?= BASEURL . '/AdminCtr/Updateproduct' ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <!-- Product ID (readonly) -->
            <div class="form-group">
                <label>Product ID</label>
                <input type="text" class="form-control" name="product_id" value="<?= $data[0]['id']?? ''; ?>" readonly>
            </div>

            <!-- Product Title -->
            <div class="form-group">
                <label>Product Title</label>
                <input type="text" class="form-control" name="product_title" value="<?= $data[0]['product_title']?? ''; ?>" placeholder="Enter product title">
            </div>

            <!-- Product Stock -->
            <div class="form-group">
                <label>Product Stock</label>
                <input type="text" class="form-control" name="product_stock" value="<?= $data[0]['product_stock'] ?? ''; ?>" placeholder="ex. 20">
            </div>

            <!-- Product Selling Price -->
            <div class="form-group">
                <label>Product Selling Price</label>
                <input type="text" class="form-control" name="product_selling_price" value="<?= $data[0]['product_selling_price']?? ''; ?>" placeholder="Enter selling price ex. 1000">
            </div>

            <!-- Product Image -->
            <div class="form-group">
                <label>Product Image</label>
                <input type="file" class="form-control" value="<?= $data[0]['product_image']??''; ?>"  name="product_image" accept="image/*" required>
                <!-- If you want to display the current image -->
                <input type="hidden" name="current_image" value="<?= $data[0]['product_image']??''; ?>" required>
                <img src="<?= BASEURL . '/assets/images/' .  $data[0]['product_image']; ?>" alt="Product Image" style="max-width: 40px; margin-top: 5px;">
            </div>
        </div>

        <div class="col-md-6">
            <!-- Meta Description -->
            <div class="form-group">
                <label>Meta Description</label>
                <textarea class="form-control" name="meta_description" rows="2" placeholder="Enter meta description"><?= $data[0]['meta_description']?? ''; ?></textarea>
            </div>

            <!-- Product Status -->
            <div class="form-group">
                <label>Product Status</label>
                <select class="form-control" aria-label="Default select example" name="status">
    <option value="0" <?= isset($data[0]['status']) && $data[0]['status'] == 0 ? 'selected' : ''; ?>>Active</option>
    <option value="1" <?= isset($data[0]['status']) && $data[0]['status'] == 1 ? 'selected' : ''; ?>>Deactive</option>
</select>

            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
</form>

        </div>

        <!-- Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>

