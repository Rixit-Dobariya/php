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
    include "functions.php";
?>
<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="active">Shop </li>
            </ul>
        </div>
    </div>
</div>
<div class="shop-area pt-95 pb-100">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="shop-top-bar mb-35">
                    <div class="select-shoing-wrap">
                        <p>Showing 1–12 of 20 result</p>
                    </div>
                    <div class="filter-active">
                        <a href="#"><i class="fa fa-plus"></i> filter</a>
                    </div>
                </div>
                <form method="get">
                <div class="product-filter-wrapper">
                    <div class="row">
                        <!-- Product Filter -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                            <div class="product-filter">
                                <h5>Sort by</h5>
                                <?php show_sort_dropdown(); ?>
                                <br><br><br>
                                <h5>Filter by price</h5>
                                <div class="price-filter mt-25">
                                    <div class="price-slider-amount">
                                        <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                    </div>
                                    <div id="slider-range"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Filter -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                            <div class="product-filter">
                                <h5>Categories</h5>
                                <ul class="color-filter">
                                <?php    print_categories($con); ?>
                            </ul>
                            </div>
                        </div>
                        <!-- Product Filter -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                            <div class="product-filter">
                                <h5>Languages</h5>
                                <ul class="color-filter">
                                <?php    print_languages($con);  ?>
                                </ul>
                            </div>
                        </div>
                        <!-- Product Filter -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                            <div class="product-filter">
                                <h5>Book type</h5>
                                <ul class="color-filter">
                                    <?php 
                                        if($_GET['book-type'] && in_array("V",$_GET['book-type']))
                                            echo '<li><input type="checkbox" name="book-type[]" value="V" checked> <a href="#">Virtual</a></li>';
                                        else
                                            echo '<li><input type="checkbox" name="book-type[]" value="V"> <a href="#">Virtual</a></li>';
                                        if($_GET['book-type'] && in_array("H",$_GET['book-type']))
                                            echo '<li><input type="checkbox" name="book-type[]" value="H" checked> <a href="#">Hardcopy</a></li>';
                                        else
                                            echo '<li><input type="checkbox" name="book-type[]" value="H"> <a href="#">Hardcopy</a></li>';
                                    ?>
                                </ul>
                            </div>
                            <br><br><br><br><br><br><br><br><br>
                            <div class="pro-details-cart btn-hover">
                            <input type="submit" name="filter" value="Filter">
                        </div>
                        </div>
                    </div>
                </div>
                </form>
                <div class="product-area pb-70">
                    <div class="container">
                        <div class="tab-content jump">
                            <div class="tab-pane active" id="product-2">
                                <div class="row">
                                    <?php 
                                        show_products($con);
                                    ?>
                                </div>
                            </div>
                            
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


<?php     
    if($_GET['price'])
        show_price_range($con);
    else
        set_price_range($con); 
?>
</body>
</html>
<?php
    function show_sort_dropdown()
    {
        echo '
        <div class="shop-select">
            <select name="sort">
                <option>Default</option>';

                if($_GET['sort']=="rating")
                    echo '<option value="rating" selected>Rating</option>';
                else    
                    echo '<option value="rating">Rating</option>';
                if($_GET['sort']=="new")
                    echo '<option value="new" selected>Newness</option>';
                else
                    echo '<option value="new">Newness</option>';
                if($_GET['sort']=="price-asc")
                    echo '<option value="price-asc" selected>Price: Low to High</option>';
                else
                    echo '<option value="price-asc">Price: Low to High</option>';
                if($_GET['sort']=="price-desc")
                    echo '<option value="price-desc" selected>Price: High to Low</option>';
                else
                    echo '<option value="price-desc">Price: High to Low</option>';
        echo'
            </select>
        </div>';
    }
    function show_products($con)
    {
        $sql="select * from book_details_tbl";
        if($_GET['filter'])
        {
            $arr=array();
            $categories=$_GET['categories'];
            $languages=$_GET['languages'];
            $book_type=$_GET['book-type'];
            $price=$_GET['price'];

            str_replace("+","",$price);
            $price=explode("-",$price);
            $price1=$price[0];
            $price1=explode("₹",$price1);
            $price1=$price1[1];
            $price2=$price[1];
            $price2=explode("₹",$price2);
            $price2=$price2[1];

            //to get the range of price

            $sql.=" where ";
            if($categories)
            {
                $query=" Book_Id in (select Book_Id from product_category_link_tbl where Category_Id IN ('".implode("','",$categories)."'))";
                array_push($arr,$query);
            }
            if($languages)
            {
                $query=" Language IN ('".implode("','",$languages)."')";
                array_push($arr,$query);
            }
            if($book_type)
            {
                $query=" Book_Type IN ('".implode("','",$book_type)."')";
                array_push($arr,$query);
            }
            $sql.=implode(" and ",$arr);
            if($languages||$languages||$book_type)
            {
                $sql.=" and Sale_Price*Discount/100>=$price1 and Sale_Price*Discount/100<=$price2";
            }
            else
            {
                $sql.=" Sale_Price*Discount/100>=$price1 and Sale_Price*Discount/100<=$price2";
            }
            
        }
        if($_GET['sort'])
        {
            switch($_GET['sort'])
            {
                case "rating": $sql.=" order by Rating desc";
                    break;
                case "new":$sql.=" order by Publication_Date desc";
                    break;
                case "price-asc":$sql.=" order by Sale_Price-Sale_Price*Discount/100";
                    break;
                case "price-desc":$sql.=" order by Sale_Price-Sale_Price*Discount/100 desc";
                    break;
            }
        }
        // echo $sql."\n";
        $data=mysqli_query($con,$sql);
        if($data)
        while($result=mysqli_fetch_array($data))
        {
            $new_price=$result['Sale_Price']-($result['Sale_Price']*$result['Discount']/100);
            if($result['Book_Type']=='H')
            {
                $book_type='Hardcopy';
            }
            else
            {
                $book_type='Virtual';
            }
            echo '
                                    <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                                        <div class="product-wrap mb-25 scroll-zoom">
                                            <div class="product-img">
                                                <a href="product-details.php?book_id='.$result['Book_Id'].'">
                                                    <img class="default-img" src="assets/img/product/'.$result['Book_Image'].'" alt="" height="200px">
                                                    <img class="hover-img" src="assets/img/product/'.$result['Book_Image'].'" alt="" height="200px">
                                                </a>
                                                <span class="pink">-'.$result['Discount'].'%</span>
                                                <div class="product-action">
                                                    <div class="pro-same-action pro-wishlist">
                                                        '.display_wishlist_button($con,$result['Book_Id']).'
                                                    </div>
                                                    <div class="pro-same-action pro-cart">
                                                        '.display_cart_button($con,$result['Book_Id']).'
                                                    </div>
                                                    <div class="pro-same-action pro-quickview">
                                                        <a title="Quick View" href="#" data-toggle="modal" data-target="#Modal'.$result['Book_Id'].'"><i class="pe-7s-look"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <h3><a href="product-details.html">'.$result['Book_Title'].'</a></h3>
                                                <div class="product-rating">
                                                    ';
                                                    display_starts($con,$result['Book_Id']);
                                                    echo '
                                                </div>
                                                <div class="product-price">
                                                    <span>'.$new_price.'</span>
                                                    <span class="old">'.$result['Sale_Price'].'</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    


            <div class="modal fade" id="Modal'.$result['Book_Id'].'" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-5 col-sm-12 col-xs-12">
                                    <div class="tab-content quickview-big-img">
                                        <div id="pro-1" class="tab-pane fade show active">
                                            <img src="assets/img/product/'.$result['Book_Image'].'" height="300px" alt="">
                                        </div>
                                    </div>
                                    <!-- Thumbnail Large Image End -->
                                    <!-- Thumbnail Image End -->
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <div class="product-details-content quickview-content">
                                        <h2>'.$result['Book_Title'].'</h2>
                                        <div class="product-details-price">
                                            <span>'.$new_price.'</span>
                                            <span class="old">'.$result['Sale_Price'].'</span>
                                        </div>
                                        ';
                                            show_rating($con,$result['Book_Id']);
                                        echo '
                                        <p>'.$result['Description'].'</p>
                                        <div class="pro-details-list">
                                            <ul>
                                                <li>- Author: '.$result['Author_Name'].'</li>
                                                <li>- Language: '.$result['Language'].'</li>
                                                <li>- Book type:  '.$book_type.'</li>
                                            </ul>
                                        </div>
                                        <div class="pro-details-size-color">
                                            <div class="pro-details-color-wrap">
                                                <span>Sample file</span>
                                                <div class="pro-details-color-content">
                                                    <a href="assets/sample-files/'.$result['Sample_File'].'" download>Sample file</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-details-quality">
                                            <div class="cart-plus-minus">
                                                <form action="cart-page.php" id="form" method="post">
                                                    <input class="cart-plus-minus-box" type="text" name="quantity" value="1">
                                            </div>
                                            <div class="pro-details-cart btn-hover">
                                                    <input type="hidden" value="'.$result['Book_Id'].'" name="book-id">
                                                    <input type="submit" value="ADD TO CART" name="cart-submit">
                                                </form>
                                            </div>
                                            <div class="pro-details-wishlist">
                                                <a href="wishlist.php?book_id='.$result['Book_Id'].'"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                        </div>
                                        <div class="pro-details-meta">
                                            <span>Categories :</span>
                                            <ul>
                                                <br>
                                                ';
                                            show_categories($con,$result['Book_Id']);
                                        echo '
                                            </ul>
                                        </div>
                                        <div class="pro-details-social">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ';
        }
    }
    function display_cart_button($con,$book_id)
    {
        if(exist_in_cart($con,$book_id))
        {
            return '<a title="Remove From Cart" href="cart-page.php?book_id='.$book_id.'&action=remove"><i class="pe-7s-cart"></i> Remove </a>';
        }
        else
        {
            return '<a title="Add To Cart" href="cart-page.php?book_id='.$book_id.'"><i class="pe-7s-cart"></i> Add to cart</a>';
        }
    }
    function exist_in_cart($con,$book_id)
    {
        $user_id=$_SESSION['user_id'];
        $sql="select * from cart_details_tbl where Book_Id=$book_id and User_Id=$user_id";
        $data=mysqli_query($con,$sql);
        if($data)
        {
            if(mysqli_num_rows($data))
                return true;
            else
                return false;
        }
    }
    function display_wishlist_button($con,$book_id)
    {
        if(exist_in_wishlist($con,$book_id))
        {
            return '<a title="Wishlist" href="wishlist.php?book_id='.$book_id.'&action=remove"><i class="pe-7s-like"></i></a>';
        }
        else
        {
            return '<a title="Wishlist" href="wishlist.php?book_id='.$book_id.'"><i class="pe-7s-like"></i></a>';
        }
    }
    function exist_in_wishlist($con,$book_id)
    {
        $user_id=$_SESSION['user_id'];
        $sql="select * from wishlist_details_tbl where Book_Id=$book_id and User_Id=$user_id";
        $data=mysqli_query($con,$sql);
        if($data)
        {
            if(mysqli_num_rows($data))
                return true;
            else
                return false;
        }
    }
    function show_rating($con,$book_id)
    {
        $sql="select avg(Rating) as rating,count(*) as review from review_details_tbl where Book_Id=".$book_id;
        $data=mysqli_query($con,$sql);
        $result=mysqli_fetch_array($data);
        $rating=$result['rating'];
        $review_count=$result['review'];
        echo '
                            <div class="pro-details-rating-wrap">
                                <div class="pro-details-rating">
        ';
        display_starts($con,$book_id);
        echo '
                                </div>
                                <span>'.$review_count.' Reviews</span>
                            </div>
        ';
    }
    function display_starts($con,$book_id)
    {
        $sql="select avg(Rating) as rating,count(*) as review from review_details_tbl where Book_Id=".$book_id;
        $data=mysqli_query($con,$sql);
        $result=mysqli_fetch_array($data);
        $rating=$result['rating'];
                                if($rating>=1)
                                    echo '<i class="fa fa-star-o yellow"></i>';
                                else
                                    echo '<i class="fa fa-star-o"></i>';
                                if($rating>=2)
                                    echo '<i class="fa fa-star-o yellow"></i>';
                                else
                                    echo '<i class="fa fa-star-o"></i>';
                                if($rating>=3)
                                    echo '<i class="fa fa-star-o yellow"></i>';
                                else
                                    echo '<i class="fa fa-star-o"></i>';
                                if($rating>=4)
                                    echo '<i class="fa fa-star-o yellow"></i>';
                                else
                                    echo '<i class="fa fa-star-o"></i>';
                                if($rating>=5)
                                    echo '<i class="fa fa-star-o yellow"></i>';
                                else
                                    echo '<i class="fa fa-star-o"></i>';
    }
    function show_categories($con,$book_id)
    {
        $sql="select Category_Id from product_category_link_tbl where Book_Id=".$book_id;
        $data=mysqli_query($con,$sql);
        while($result=mysqli_fetch_array($data))
        {
            $sql2="select Category_Name from category_details_tbl where Category_Id=".$result['Category_Id'];
            $data2=mysqli_query($con,$sql2);
            $result2=mysqli_fetch_array($data2);
            echo '<li><a href="search.php?type=category&query='.$result2['Category_Name'].'">'.$result2['Category_Name'].'</a></li><br>';
        }
    }
    function print_languages($con)
    {
        $sql="select DISTINCT Language from book_details_tbl";
        $data=mysqli_query($con,$sql);
        while($result=mysqli_fetch_array($data))
        {
            if($_GET['languages'] && in_array($result['Language'],$_GET['languages']))
            echo '<li><input type="checkbox" name="languages[]" value="'.$result['Language'].'" checked> <a href="#">'.$result['Language'].'</a></li>';
            else
            echo '<li><input type="checkbox" name="languages[]" value="'.$result['Language'].'"> <a href="#">'.$result['Language'].'</a></li>';
        }
    }
    function print_categories($con)
    {
        $sql="select * from category_details_tbl";
        $data=mysqli_query($con,$sql);
        while($result=mysqli_fetch_array($data))
        {
            if($_GET['categories'] && in_array($result['Category_Id'],$_GET['categories']))
            echo '<li><input type="checkbox" name="categories[]" value="'.$result['Category_Id'].'" checked> <a href="#">'.$result['Category_Name'].'</a></li>';
            else
            echo '<li><input type="checkbox" name="categories[]" value="'.$result['Category_Id'].'"> <a href="#">'.$result['Category_Name'].'</a></li>';

        }
    }
    function set_price_range($con)
    {
        $sql="SELECT max(Sale_Price-Sale_Price*Discount/100) as max FROM `book_details_tbl`";
        $data=mysqli_query($con,$sql);
        $result=mysqli_fetch_array($data);
        $max=$result['max'];
        echo '
        <script>
            var sliderrange = $("#slider-range");
            var amountprice = $("#amount");
            $(function() {
                sliderrange.slider({
                    range: true,
                    min: 0,
                    max: '.$max.',
                    values: [0, '.$max.'],
                    slide: function(event, ui) {
                        amountprice.val("₹" + ui.values[0] + " - ₹" + ui.values[1]);
                    }
                });
                amountprice.val("₹" + sliderrange.slider("values", 0) +
                    " - ₹" + sliderrange.slider("values", 1));
            });
        </script>
        ';
    }
    function show_price_range($con)
    {
        $sql="SELECT max(Sale_Price-Sale_Price*Discount/100) as max FROM `book_details_tbl`";
        $data=mysqli_query($con,$sql);
        $result=mysqli_fetch_array($data);
        $max=$result['max'];
        $price=$_GET['price'];

        str_replace("+","",$price);
        $price=explode("-",$price);
        $price1=$price[0];
        $price1=explode("₹",$price1);
        $price1=$price1[1];
        $price2=$price[1];
        $price2=explode("₹",$price2);
        $price2=$price2[1];

        echo '
        <script>
            var sliderrange = $("#slider-range");
            var amountprice = $("#amount");
            $(function() {
                sliderrange.slider({
                    range: true,
                    min: '.$price1.',
                    max: '.$max.',
                    values: ['.$price1.', '.$price2.'],
                    slide: function(event, ui) {
                        amountprice.val("₹" + ui.values[0] + " - ₹" + ui.values[1]);
                    }
                });
                amountprice.val("₹" + sliderrange.slider("values", 0) +
                    " - ₹" + sliderrange.slider("values", 1));
            });
        </script>
        ';
    }
?>