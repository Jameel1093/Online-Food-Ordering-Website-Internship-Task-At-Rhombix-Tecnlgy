

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>
<body class="p-5">
    <div class="container" style="max-width: 600px;">
        <h2>Admin: Add New Menu Item</h2>
        <form method="POST" class="border p-4 bg-info shadow-sm">
            <div class="mb-3">
                <label>Item Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Price ($)</label>
                <input type="number" step="0.01" name="price" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Add to Menu</button>
            <a href="index.php" class="btn btn-link">View Storefront</a>
        </form>
    </div>
</body>
</html>