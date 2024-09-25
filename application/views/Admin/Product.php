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
              <a class="nav-link" href="<?= BASEURL . '/HomeCtr' ?>">User Dashboard</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-9 col-md-8">
            <h2 class="mb-4 bg-info p-1">Create Product</h2>

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

            <form action="<?= BASEURL . '/AdminCtr/Createproduct' ?>" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label >Product Title</label>
                            <input type="text" class="form-control" name="product_title" placeholder="Enter product title" >
                        </div>
                        <div class="form-group">
                            <label >Product Stock</label>
                            <input type="text" class="form-control" name="product_stock" placeholder="ex. 20" >
                        </div>
                        <div class="form-group">
                            <label >Product Selling Price</label>
                            <input type="text" class="form-control" name="product_selling_price" placeholder="Enter selling price ex. 1000" >
                        </div>
                        <div class="form-group">
                            <label >Product Image</label>
                            <input type="file" class="form-control" name="product_image" placeholder="Selecet product image" accept="image/*" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Meta Description</label>
                            <textarea class="form-control" name="meta_description" rows="2" placeholder="Enter meta description" ></textarea>
                        </div>
                        <div class="form-group">
                            <label >Product Status</label>
                            <select class="form-control" aria-label="Default select example" name="status" >
                                <option selected>Please select
                                </option>
                                <option value="0">Active</option>
                                <option value="1">Deactive</option>
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

