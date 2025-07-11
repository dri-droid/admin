<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard</title>
      <link rel="stylesheet" href="css/bootstrap.css">
  <style>

    
     
  </style>
</head>
<body>

  <!-- Sidebar -->
<?php include("sidebar.html");?>
  <!-- Main Content -->
  <div class="main">
    <!-- Topbar -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2>Dashboard</h2>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search...">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form> -->
    </div>

    <!-- Cards -->
    <div class="row mb-4">
      <div class="col-md-4 mb-3">
        <div class="card bg-primary text-white">
          <div class="card-body">
            <h5 class="card-title">Total Users</h5>
            <p class="card-text fs-3">1,204</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card bg-success text-white">
          <div class="card-body">
            <h5 class="card-title">Monthly Revenue</h5>
            <p class="card-text fs-3">$8,450</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card bg-warning text-dark">
          <div class="card-body">
            <h5 class="card-title">New Signups</h5>
            <p class="card-text fs-3">342</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Simulated Chart with Progress Bars -->
    <div class="card mb-4">
      <div class="card-header">User Activity Overview</div>
      <div class="card-body">
        <p>Active Users <span class="float-end">75%</span></p>
        <div class="progress mb-3">
          <div class="progress-bar bg-primary" style="width: 75%">75%</div>
        </div>

        <p>Returning Users <span class="float-end">50%</span></p>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width: 50%">50%</div>
        </div>

        <p>Bounce Rate <span class="float-end">20%</span></p>
        <div class="progress">
          <div class="progress-bar bg-danger" style="width: 20%">20%</div>
        </div>
      </div>
    </div>

    <!-- Table -->
    <div class="card">
      <div class="card-header">Recent Users</div>
      <div class="card-body p-0">
        <table class="table table-hover mb-0">
          <thead class="table-light">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Status</th>
              <th>Joined</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>1</td><td>Alice</td><td>alice@mail.com</td><td><span class="badge bg-success">Active</span></td><td>2025-07-01</td></tr>
            <tr><td>2</td><td>Bob</td><td>bob@mail.com</td><td><span class="badge bg-secondary">Inactive</span></td><td>2025-06-28</td></tr>
            <tr><td>3</td><td>Carol</td><td>carol@mail.com</td><td><span class="badge bg-success">Active</span></td><td>2025-06-30</td></tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>

</body>
</html>
