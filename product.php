<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Product Dashboard with Sidebar</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f8f9fa;
    }
    .product-img {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 5px;
    }
    /* Margin so main content is not overlapped by sidebar */
    .main-content {
      margin-left: 250px;
      padding: 2rem;
    }
  </style>
</head>
<body>

<?php include("sidebar.html"); ?>

<div class="main-content">
  <div class="container-fluid">
    <h2 class="mb-4">Product Management</h2>

    <!-- Add / Edit Product Form -->
    <div class="card mb-4">
      <div class="card-header">
        Add / Edit Product
      </div>
      <div class="card-body">
        <form>
          <div class="row g-3">
            <div class="col-md-3">
              <input type="text" class="form-control" placeholder="Product Name" required>
            </div>
            <div class="col-md-2">
              <input type="number" class="form-control" placeholder="Price" required>
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" placeholder="Category" required>
            </div>
            <div class="col-md-2">
              <input type="url" class="form-control" placeholder="Image URL" required>
            </div>
            <div class="col-md-2 d-grid">
              <button class="btn btn-primary" type="submit">Add Product</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Product Table -->
    <div class="card">
      <div class="card-header">Product List</div>
      <div class="card-body p-0">
        <table class="table table-bordered mb-0 align-middle">
          <thead class="table-light">
            <tr>
              <th>#</th>
              <th>Image</th>
              <th>Name</th>
              <th>Price ($)</th>
              <th>Category</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td><img src="https://via.placeholder.com/60" class="product-img" alt="Mouse"></td>
              <td>Wireless Mouse</td>
              <td>25.99</td>
              <td>Accessories</td>
              <td>
                <button class="btn btn-sm btn-warning">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td><img src="https://via.placeholder.com/60?text=Headphones" class="product-img" alt="Headphones"></td>
              <td>Bluetooth Headphones</td>
              <td>49.99</td>
              <td>Audio</td>
              <td>
                <button class="btn btn-sm btn-warning">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td><img src="https://via.placeholder.com/60?text=Monitor" class="product-img" alt="Monitor"></td>
              <td>LED Monitor</td>
              <td>149.99</td>
              <td>Display</td>
              <td>
                <button class="btn btn-sm btn-warning">Edit</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>

</body>
</html>
