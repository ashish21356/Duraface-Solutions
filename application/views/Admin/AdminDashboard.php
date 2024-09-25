<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Dashboard | Duraface Solutions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= BASEURL . '/assets/css/style.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL . '/assets/css/viewstyle.css' ?>">
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
              <a class="nav-link" href="<?= BASEURL . '/HomeCtr' ?>">User Dashboard</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-9 col-md-8">
          <h2 class="mb-4 bg-info p-1">Product List</h2>
         <!---Error or sucess msg--->
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


          <?php if (!empty($products)): ?>
            <table class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <th>S.NO.</th>
                  <th>Product Title</th>
                  <th>Stock</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Meta Description</th>
                  <th>Status</th>
                  <th colspan="2" style="text-align: center;">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=0; foreach ($products as $product): ?>
                  <tr>
                    <td><?= ++$i; ?></td>
                    <td><?= $product['product_title']; ?></td>
                    <td><?= $product['product_stock']; ?></td>
                    <td>₹<?= number_format($product['product_selling_price'], 2); ?></td>
                    <td><img src="<?= BASEURL . '/assets/images/' . $product['product_image']; ?>" alt="<?= $product['product_image']; ?>" width="50"></td>

                    <td><?= $product['meta_description']; ?></td>
                    <td><?= $product['status'] == 0 ? 'Available' : 'Unavailable'; ?></td>
                    <td >
                      <a href="<?= BASEURL . '/AdminCtr/deleteProduct/' . $product['id']; ?>" class="btn btn-info">
                        Delete
                      </a>
                    </td>
                    <td>
                    <a href="<?= BASEURL . '/AdminCtr/Updateproductview/' . $product['id']; ?>" class="btn btn-warning">
                        Update
                      </a>
                    </td>

                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          <?php else: ?>
            <p>No products found.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>

  </body>
</html>

