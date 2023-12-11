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
<?php include "header.php";
if($_GET['book_id'] && $_GET['action'])
{
    remove_from_wishlist($con,$_GET['book_id']);
}
else if($_GET['book_id'])
{
    add_to_wishlist($con,$_GET['book_id']);
}
function add_to_wishlist($con,$book_id)
{
    $user_id=$_SESSION['user_id'];
    $sql="insert into wishlist_details_tbl values($book_id,$user_id)";
    $check=mysqli_query($con,$sql);
}
function remove_from_wishlist($con,$book_id)
{
    $user_id=$_SESSION['user_id'];
    $sql="delete from wishlist_details_tbl where Book_Id=$book_id and User_Id=$user_id";
    $check=mysqli_query($con,$sql);
}
function display_wishlist_record($con,$result1)
{
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
                                        <input class="cart-plus-minus-box" type="text" id="quantity" value="1">
                                        <input type="hidden" value='.$result2['Book_Id'].' id="book_id">
                                    </div>
                                </td>
                                <td class="product-subtotal">'.$new_price*$result['Quantity'].'</td>
                                <td class="product-wishlist-cart">
                                    <a href="#" id="cart">add to cart</a>
                               </td>
                            </tr>
    ';
}
function display_wishlist_records($con)
{
    $user_id=$_SESSION['user_id'];
    $sql="select * from wishlist_details_tbl where User_Id=$user_id";
    $data=mysqli_query($con,$sql);
    if($data)
    {
        while($result=mysqli_fetch_array($data))
        {
            display_wishlist_record($con,$result);
        }
    }
}
?>
<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="active">Wishlist </li>
            </ul>
        </div>
    </div>
</div>
<div class="cart-main-area pt-90 pb-100">
    <div class="container">
        <h3 class="cart-page-title">Your wishlist items</h3>
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
                                    <th>Add To Cart</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    display_wishlist_records($con);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </form>
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
        document.getElementById("cart").href="cart-page.php?book_id="+book_id+"&quantity="+quantity;
    }
</script>

</body>

</html>

