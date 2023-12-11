<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Flone - Minimal eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icons.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<?php 
    include "header.php";    
    function display_cart_record($con,$result1)
    {
        $book_id=$result1['Book_Id'];
        $sql="select * from book_details_tbl where Book_Id=".$result1['Book_Id'];
        $data=mysqli_query($con,$sql);
        $result2=mysqli_fetch_array($data);
        $new_price=$result2['Sale_Price']-($result2['Sale_Price']*$result2['Discount']/100);
        echo '
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="assets/img/'.$result2['Book_Image'].'" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">'.$result2['Book_Title'].'</a></td>
                                    <td class="product-price-cart"><span class="amount">'.$new_price.'</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" id="quantity" value="'.$result1['Quantity'].'">
                                            <input type="hidden" value="'.$book_id.'" id="book_id">
                                        </div>
                                    </td>
                                    <td class="product-subtotal">'.$new_price*$result['Quantity'].'</td>
                                    <td class="product-remove">
                                        <a href="#" id="cart"><i class="fa fa-pencil"></i></a>
                                        <a href="cart-page.php?book_id='.$result1['Book_Id'].'&action=remove"><i class="fa fa-times"></i></a>
                                </td>
                                </tr>
        ';
    }
    function display_cart_records($con)
    {
        $user_id=$_SESSION['user_id'];
        $sql="select * from cart_details_tbl where User_Id=".$user_id;
        $data=mysqli_query($con,$sql);
        while($result=mysqli_fetch_array($data))
        {
            display_cart_record($con,$result);
        }
    }
    if($_GET['book_id'] && $_GET['action']=="remove")
    {
        remove_from_cart($con,$_GET['book_id']);
    }
    else if($_GET['book_id'] && $_GET['action']=="update")
    {
        update_cart($con,$_GET['book_id'],$_GET['quantity']);
    }
    else if($_GET['book_id'])
    {
        add_to_cart($con,$_GET['book_id']);
    }
    function update_cart($con,$book_id,$quantity)
    {
        $user_id=$_SESSION['user_id'];
        $sql="update cart_details_tbl set Quantity=$quantity where Book_Id=$book_id and User_Id=$user_id";
        $check=mysqli_query($con,$sql); 
        if($check)
        {
            echo '<script>alert("Your record has been updated");</script>';
        }
        else
        {
            echo '<script>alert("Your record has not been updated");</script>';
        }       
    }
    function add_to_cart($con,$book_id)
    {
        $user_id=$_SESSION['user_id'];
        $sql="insert into cart_details_tbl(Book_Id,User_Id) values($book_id,$user_id)";
        $check=mysqli_query($con,$sql);
    }
    function remove_from_cart($con,$book_id)
    {
        $user_id=$_SESSION['user_id'];
        $sql="delete from cart_details_tbl where Book_Id=$book_id and User_Id=$user_id";
        $check=mysqli_query($con,$sql);
    }
    if($_POST['cart-submit'])
    {
        $user_id=$_SESSION['user_id'];
        $book_id=$_POST['book-id'];
        $quantity=$_POST['quantity'];
        $sql="insert into cart_details_tbl values($book_id,$quantity,$user_id)";
        $check=mysqli_query($con,$sql);
    }
?>
<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="active">Cart Page </li>
            </ul>
        </div>
    </div>
</div>
<div class="cart-main-area pt-90 pb-100">
    <div class="container">
        <h3 class="cart-page-title">Your cart items</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Until Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    display_cart_records($con);
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <a href="shop.php">Continue Shopping</a>
                                </div>
                                <div class="cart-clear">
                                    <button>Update Shopping Cart</button>
                                    <a href="#">Clear Shopping Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="cart-tax">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                            </div>
                            <div class="tax-wrapper">
                                <p>Enter your destination to get a shipping estimate.</p>
                                <div class="tax-select-wrapper">
                                    <div class="tax-select">
                                        <label>
                                            * Country
                                        </label>
                                        <select class="email s-email s-wid">
                                            <option>Bangladesh</option>
                                            <option>Albania</option>
                                            <option>Åland Islands</option>
                                            <option>Afghanistan</option>
                                            <option>Belgium</option>
                                        </select>
                                    </div>
                                    <div class="tax-select">
                                        <label>
                                            * Region / State
                                        </label>
                                        <select class="email s-email s-wid">
                                            <option>Bangladesh</option>
                                            <option>Albania</option>
                                            <option>Åland Islands</option>
                                            <option>Afghanistan</option>
                                            <option>Belgium</option>
                                        </select>
                                    </div>
                                    <div class="tax-select">
                                        <label>
                                            * Zip/Postal Code
                                        </label>
                                        <input type="text">
                                    </div>
                                    <button class="cart-btn-2" type="submit">Get A Quote</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="discount-code-wrapper">
                            <div class="title-wrap">
                               <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4> 
                            </div>
                            <div class="discount-code">
                                <p>Enter your coupon code if you have one.</p>
                                <form>
                                    <input type="text" required="" name="name">
                                    <button class="cart-btn-2" type="submit">Apply Coupon</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="grand-totall">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                            </div>
                            <h5>Total products <span>$260.00</span></h5>
                            <div class="total-shipping">
                                <h5>Total shipping</h5>
                                <ul>
                                    <li><input type="checkbox"> Standard <span>$20.00</span></li>
                                    <li><input type="checkbox"> Express <span>$30.00</span></li>
                                </ul>
                            </div>
                            <h4 class="grand-totall-title">Grand Total  <span>$260.00</span></h4>
                            <a href="#">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php" ?>



<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-v3.4.1.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="assets/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>

<script>
    document.getElementById("cart").addEventListener("click", changeLink);
    function changeLink()
    {
        var book_id=document.getElementById('book_id').value;
        var quantity=document.getElementById('quantity').value;
        document.getElementById("cart").href="cart-page.php?book_id="+book_id+"&quantity="+quantity+"&action=update";
        console.log(book_id);
    }
</script>


</body>

</html>

