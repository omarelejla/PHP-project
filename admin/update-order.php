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
        <h1>Update Order</h1>
        <br><br>


        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Food Name</td>
                    <td><b>$food name </b></td>
                </tr>

                <tr>
                    <td>Price</td>
                    <td>
                        <b>$price $ </b>
                    </td>
                </tr>

                <tr>
                    <td>Qty</td>
                    <td>
                        <input type="number" name="qty" value="">
                    </td>
                </tr>

                <tr>
                    <td>Status</td>
                    <td>
                        <select name="status">
                            <option value="Ordered">Ordered</option>
                            <option value="On Delivery">On Delivery</option>
                            <option value="Delivered">Delivered</option>
                            <option value="Cancelled">Cancelled</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Customer Name:</td>
                    <td>
                        <input type="text" name="customer_name" value="">
                    </td>
                </tr>

                <tr>
                    <td>Customer Contact:</td>
                    <td>
                        <input type="text" name="customer_contact" value="">
                    </td>
                </tr>

                <tr>
                    <td>Customer Email:</td>
                    <td>
                        <input type="text" name="customer_email" value="">
                    </td>
                </tr>

                <tr>
                    <td>Customer Address:</td>
                    <td>
                        <textarea name="customer_address" cols="30" rows="5"></textarea>
                    </td>
                </tr>

                <tr>
                    <td clospan="2">
                        <input type="hidden" name="">
                        <input type="hidden" name="price" value="">

                        <input type="submit" name="submit" value="Update Order" class="btn-secondary">
                    </td>
                </tr>
            </table>

        </form>


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