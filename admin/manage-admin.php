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

<!-- Main Content Section Starts -->
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Admin</h1>

        <br/>

        <br><br><br>

        <!-- Button to Add Admin -->
        <a href="add-admin.php" class="btn-primary">Add Admin</a>

        <br/><br/><br/>

        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>


            <tr>
                <td>id</td>
                <td>username</td>
                <td>fullname</td>
                <td>
                    <a href="update-admin.php?id=id" class="btn-secondary"> update </a> &nbsp;
                    <a href="delete-admin.php?id=id" class="btn-danger"> delete </a>&nbsp;
                    <a href="update-password.php?id=id" class="btn-primary"> change password </a>&nbsp;

                </td>
            </tr>

            <tr>
                <td>
                    <p> no admin yet ! </p></td>
            </tr>

        </table>

    </div>
</div>
<!-- Main Content Setion Ends -->

<div class="footer">
    <div class="wrapper">
        <p class="text-center">2021 All rights reserved, Food House</p>
    </div>
</div>
<!-- Footer Section Ends -->

</body>
</html>