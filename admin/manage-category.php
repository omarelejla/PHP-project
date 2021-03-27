<html>
<head>
    <title>Food Order Website - Home Page</title>

    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
<!-- Menu Section Starts -->
<div class="menu text-center">
    <div class="wrapper">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="manage-admin.php">Admin</a></li>
            <li><a href="manage-category.php">Category</a></li>
            <li><a href="manage-food.php">Food</a></li>
            <li><a href="manage-order.php">Order</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</div>
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Category</h1>

        <br>
        <!-- Button to Add Admin -->
        <a href="add-category.php" class="btn-primary">Add Category</a>


        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Title</th>
                <th>Image</th>
                <th>Featured</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>


            <tr>
                <td> id</td>
                <td> title</td>

                <td>
                    <img src="image name " width="50px">


                </td>

                <td>featured image</td>
                <td>active</td>
                <td>
                    <a href="update-category.php?id=id" class="btn-secondary">Update Category</a>
                    <a href="delete-category.php?id=id" class="btn-danger">Delete Category</a>
                </td>
            </tr>


            <tr>
                <td colspan="6">
                    <div class="error">No Category Added.</div>
                </td>
            </tr>


        </table>
    </div>

</div>

<div class="footer">
    <div class="wrapper">
        <p class="text-center">2021 All rights reserved, Food House</p>
    </div>
</div>
<!-- Footer Section Ends -->

</body>
</html>