<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .main-content {
            margin-left: 250px;
            /* space for sidebar */
            padding: 2rem;
        }

        /* Optional: vertically center table cell contents */
        td,
        th {
            vertical-align: middle !important;
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <?php include("sidebar.html"); ?>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid">
            <h2 class="mb-4">User Management</h2>

            <!-- User Table -->
            <div class="card">
                <div class="card-header">User List</div>
                <div class="card-body p-0">
                    <table class="table table-striped table-hover mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Alice Johnson</td>
                                <td>alice@example.com</td>
                                <td>User</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <button class="btn btn-sm btn-secondary me-2">Deactivate</button>
                                    <button class="btn btn-sm btn-info">View Purchase History</button>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-danger";>Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Bob Smith</td>
                                <td>bob@example.com</td>
                                <td>Admin</td>
                                <td><span class="badge bg-secondary">Banned</span></td>
                                <td>
                                    <button class="btn btn-sm btn-success me-2">Activate</button>
                                    <button class="btn btn-sm btn-info">View Purchase History</button>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <!-- Add more users here -->
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
