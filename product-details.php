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

    <style>
        body{background-color: #eee;}
        div.stars {
        width: 270px;
        display: inline-block;
        }
        .mt-200{
            margin-top:200px;  
        }
        input.star { display: none; }
        label.star {
        float: right;
        padding: 10px;
        font-size: 36px;
        color: #4A148C;
        transition: all .2s;
        }
        input.star:checked ~ label.star:before {
        content: '\f005';
        color: #FD4;
        transition: all .25s;
        }
        input.star-5:checked ~ label.star:before {
        color: #FE7;
        text-shadow: 0 0 20px #952;
        }
        input.star-1:checked ~ label.star:before { color: #F62; }
        label.star:hover { transform: rotate(0deg) scale(1.3); }
        label.star:before {
        content: '\f006';
        font-family: FontAwesome;
        }
    </style>
</head>

<body>
<?php 
    include "header.php";
?>
<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="active">Shop Details </li>
            </ul>
        </div>
    </div>
</div>
<?php
    display_product_details($con);
?>
<div class="related-product-area pb-95">
    <div class="container">
        <div class="section-title text-center mb-50">
            <h2>Related products</h2>
        </div>
        <div class="related-product-active owl-carousel">
            <div class="product-wrap">
                <div class="product-img">
                    <a href="#">
                        <img class="default-img" src="assets/img/product/pro-1.jpg" alt="">
                        <img class="hover-img" src="assets/img/product/pro-1-1.jpg" alt="">
                    </a>
                    <span class="pink">-10%</span>
                    <div class="product-action">
                        <div class="pro-same-action pro-wishlist">
                            <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                        </div>
                        <div class="pro-same-action pro-cart">
                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                        </div>
                        <div class="pro-same-action pro-quickview">
                            <a title="Quick View" href="#" data-toggle="modal" data-target="#exampleModal"><i class="pe-7s-look"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-content text-center">
                    <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                    <div class="product-rating">
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="product-price">
                        <span>$ 60.00</span>
                        <span class="old">$ 60.00</span>
                    </div>
                </div>
            </div>
            <div class="product-wrap">
                <div class="product-img">
                    <a href="single-product.html">
                        <img class="default-img" src="assets/img/product/pro-2.jpg" alt="">
                        <img class="hover-img" src="assets/img/product/pro-2-1.jpg" alt="">
                    </a>
                    <span class="purple">New</span>
                    <div class="product-action">
                        <div class="pro-same-action pro-wishlist">
                            <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                        </div>
                        <div class="pro-same-action pro-cart">
                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                        </div>
                        <div class="pro-same-action pro-quickview">
                            <a title="Quick View" href="#" data-toggle="modal" data-target="#exampleModal"><i class="pe-7s-look"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-content text-center">
                    <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                    <div class="product-rating">
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="product-price">
                        <span>$ 60.00</span>
                    </div>
                </div>
            </div>
            <div class="product-wrap">
                <div class="product-img">
                    <a href="#">
                        <img class="default-img" src="assets/img/product/pro-3.jpg" alt="">
                        <img class="hover-img" src="assets/img/product/pro-3-1.jpg" alt="">
                    </a>
                    <span class="pink">-10%</span>
                    <div class="product-action">
                        <div class="pro-same-action pro-wishlist">
                            <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                        </div>
                        <div class="pro-same-action pro-cart">
                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                        </div>
                        <div class="pro-same-action pro-quickview">
                            <a title="Quick View" href="#" data-toggle="modal" data-target="#exampleModal"><i class="pe-7s-look"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-content text-center">
                    <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                    <div class="product-rating">
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="product-price">
                        <span>$ 60.00</span>
                        <span class="old">$ 60.00</span>
                    </div>
                </div>
            </div>
            <div class="product-wrap">
                <div class="product-img">
                    <a href="#">
                        <img class="default-img" src="assets/img/product/pro-4.jpg" alt="">
                        <img class="hover-img" src="assets/img/product/pro-4-1.jpg" alt="">
                    </a>
                    <span class="purple">New</span>
                    <div class="product-action">
                        <div class="pro-same-action pro-wishlist">
                            <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                        </div>
                        <div class="pro-same-action pro-cart">
                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                        </div>
                        <div class="pro-same-action pro-quickview">
                            <a title="Quick View" href="#" data-toggle="modal" data-target="#exampleModal"><i class="pe-7s-look"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-content text-center">
                    <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                    <div class="product-rating">
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="product-price">
                        <span>$ 60.00</span>
                    </div>
                </div>
            </div>
            <div class="product-wrap">
                <div class="product-img">
                    <a href="#">
                        <img class="default-img" src="assets/img/product/pro-5.jpg" alt="">
                        <img class="hover-img" src="assets/img/product/pro-5-1.jpg" alt="">
                    </a>
                    <span class="pink">-10%</span>
                    <div class="product-action">
                        <div class="pro-same-action pro-wishlist">
                            <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                        </div>
                        <div class="pro-same-action pro-cart">
                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                        </div>
                        <div class="pro-same-action pro-quickview">
                            <a title="Quick View" href="#" data-toggle="modal" data-target="#exampleModal"><i class="pe-7s-look"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-content text-center">
                    <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                    <div class="product-rating">
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="product-price">
                        <span>$ 60.00</span>
                        <span class="old">$ 60.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php" ?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
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
                                <img src="assets/img/product/quickview-l1.jpg" alt="">
                            </div>
                            <div id="pro-2" class="tab-pane fade">
                                <img src="assets/img/product/quickview-l2.jpg" alt="">
                            </div>
                            <div id="pro-3" class="tab-pane fade">
                                <img src="assets/img/product/quickview-l3.jpg" alt="">
                            </div>
                            <div id="pro-4" class="tab-pane fade">
                                <img src="assets/img/product/quickview-l2.jpg" alt="">
                            </div>
                        </div>
                        <!-- Thumbnail Large Image End -->
                        <!-- Thumbnail Image End -->
                        <div class="quickview-wrap mt-15">
                            <div class="quickview-slide-active owl-carousel nav nav-style-1" role="tablist">
                                <a class="active" data-toggle="tab" href="#pro-1"><img src="assets/img/product/quickview-s1.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-2"><img src="assets/img/product/quickview-s2.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-3"><img src="assets/img/product/quickview-s3.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-4"><img src="assets/img/product/quickview-s2.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-details-content quickview-content">
                            <h2>Products Name Here</h2>
                            <div class="product-details-price">
                                <span>$18.00 </span>
                                <span class="old">$20.00 </span>
                            </div>
                            <div class="pro-details-rating-wrap">
                                <div class="pro-details-rating">
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span>3 Reviews</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                            <div class="pro-details-list">
                                <ul>
                                    <li>- 0.5 mm Dail</li>
                                    <li>- Inspired vector icons</li>
                                    <li>- Very modern style  </li>
                                </ul>
                            </div>
                            <div class="pro-details-size-color">
                                <div class="pro-details-color-wrap">
                                    <span>Color</span>
                                    <div class="pro-details-color-content">
                                        <ul>
                                            <li class="blue"></li>
                                            <li class="maroon active"></li>
                                            <li class="gray"></li>
                                            <li class="green"></li>
                                            <li class="yellow"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pro-details-size">
                                    <span>Size</span>
                                    <div class="pro-details-size-content">
                                        <ul>
                                            <li><a href="#">s</a></li>
                                            <li><a href="#">m</a></li>
                                            <li><a href="#">l</a></li>
                                            <li><a href="#">xl</a></li>
                                            <li><a href="#">xxl</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                </div>
                                <div class="pro-details-cart btn-hover">
                                    <a href="#">Add To Cart</a>
                                </div>
                                <div class="pro-details-wishlist">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                                <div class="pro-details-compare">
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="pro-details-meta">
                                <span>Categories :</span>
                                <ul>
                                    <li><a href="#">Minimal,</a></li>
                                    <li><a href="#">Furniture,</a></li>
                                    <li><a href="#">Electronic</a></li>
                                </ul>
                            </div>
                            <div class="pro-details-meta">
                                <span>Tag :</span>
                                <ul>
                                    <li><a href="#">Fashion, </a></li>
                                    <li><a href="#">Furniture,</a></li>
                                    <li><a href="#">Electronic</a></li>
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
<!-- Modal end -->









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

</body>

</html>

<?php
    function display_product_details($con)
    {
        $book_id=$_GET['book_id'];
        $sql="select * from book_details_tbl where Book_Id=".$book_id;
        $data=mysqli_query($con,$sql);
        $result=mysqli_fetch_array($data);
        $new_price=$new_price=$result['Sale_Price']-($result['Sale_Price']*$result['Discount']/100);
        if($result['Book_Type']=='H')
        {
            $book_type='Hardcopy';
        }
        else
        {
            $book_type='Virtual';
        }
        echo '
<div class="shop-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product-details dec-img-wrap">
                    <img src="assets/img/product-details/'.$result['Book_Image'].'" alt="">
                    <span>-'.$result['Discount'].'%</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product-details-content ml-70">
                    <h2>'.$result['Book_Title'].'</h2>
                    <div class="product-details-price">
                        <span>'.$new_price.'</span>
                        <span class="old">'.$result['Sale_Price'].'</span>
                    </div>
                    ';
                    show_rating($con,$_GET['book_id']);
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
                            ';
                            display_quantity($con,$result['Book_Type']);
                            echo '
                    <div class="pro-details-wishlist">
                        <a href="wislist.php?book_id='.$result['Book_Id'].'"><i class="fa fa-heart-o"></i></a>
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
<div class="description-review-area pb-90 mt-50">
    <div class="container">
        <div class="description-review-wrapper">
            <div class="description-review-topbar nav">
                <a data-toggle="tab" href="#des-details1">Additional information</a>
                <a class="active" data-toggle="tab" href="#des-details2">Description</a>
                <a data-toggle="tab" href="#des-details3">Reviews ('.comment_count($con,$book_id).')</a>
            </div>
            <div class="tab-content description-review-bottom">
                <div id="des-details2" class="tab-pane active">
                    <div class="product-description-wrapper">
                        <p>'.$result['Description'].'</p>
                    </div>
                </div>
                <div id="des-details1" class="tab-pane ">
                    <div class="product-anotherinfo-wrapper">
                        <ul>
                            <li><span>Book Type</span>    '.$book_type.'</li>
                            <li><span>Author name</span>   '.$result['Author_Name'].'</li>
                            <li><span>Publisher Name</span> '.get_publisher_name($con,$result['Publisher_Id']).'</li>
                            <li><span>Publisher Imprint</span> '.$result['Publisher_Imprint'].'</li>
                            <li><span>Publication Date</span> '.$result['Publication_Date'].'</li>
                            <li><span>Number of pages</span> '.$result['Number_Of_Pages'].'</li>
                            ';
                                display_other_info($con,$result);
                            echo '
                        </ul>
                    </div>
                </div>
                <div id="des-details3" class="tab-pane">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="review-wrapper">
                                ';
                                show_reviews($con);
                                echo '
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="ratting-form-wrapper pl-50">
                                <h3>Add a Review</h3>
                                <div class="ratting-form">
                                    <form  method="post">
                                        <div class="star-box">
                                            <span>Your rating:</span>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="stars">
                                                                    <input class="star star-5" id="star-5" type="radio" name="star" value="1"/>
                                                                    <label class="star star-5" for="star-5"></label>
                                                                    <input class="star star-4" id="star-4" type="radio" name="star"  value="2"/>
                                                                    <label class="star star-4" for="star-4"></label>
                                                                    <input class="star star-3" id="star-3" type="radio" name="star"  value="3"/>
                                                                    <label class="star star-3" for="star-3"></label>
                                                                    <input class="star star-2" id="star-2" type="radio" name="star"  value="4"/>
                                                                    <label class="star star-2" for="star-2"></label>
                                                                    <input class="star star-1" id="star-1" type="radio" name="star"  value="5"/>
                                                                    <label class="star star-1" for="star-1"></label>
                                                            </div>    
                                                        </div> 
                                                    </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="rating-form-style form-submit">
                                                        <textarea name="review" placeholder="Message"></textarea>
                                                        <input type="hidden" name="book-id" value='.$result['Book_Id'].'>
                                                        <input type="submit" value="Submit" name="add-review">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';
    }
    function display_other_info($con,$result)
    {
        if($result['Book_Type']=='H')
        {
            $sql="select * from virtual_book_details_tbl where Book_Id=".$result['Book_Id'];
            $data=mysqli_query($con,$sql);
            $result=mysqli_fetch_query($data);
            echo '<li><span>Weight</span> '.$result['Weight'].'</li>';
            echo '<li><span>Returnable</span> '.$result['Returnable'].'</li>';
            echo '<li><span>ISBN13</span> '.$result['ISBN13'].'</li>';
        }
    }
    function get_user_name($con,$user_id)
    {
        $sql="select Full_Name from user_details_tbl where User_Id=".$user_id;
        $data=mysqli_query($con,$sql);
        $result=mysqli_fetch_array($data);
        return $result['Full_Name'];
    }
    function show_reviews($con)
    {
        $sql="select * from review_details_tbl where Comment  IS NOT NULL ";
        $data=mysqli_query($con,$sql);
        $result=mysqli_fetch_array($data);
        $user_name=get_user_name($con,$result['User_Id']);
        echo '
                                <div class="single-review">
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-left">
                                                <div class="review-name">
                                                    <h4>'.$user_name.'</h4>
                                                </div>
                                                <div class="review-rating">
                                                    ';
                                                    
                                                    display_starts($con,$result['Book_Id']);

                                                    echo '
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="review-bottom">
                                            <p>'.$result['Comment'].'</p>
                                        </div>
                                    </div>
                                </div>
        ';
    }
    if($_POST['add-review'])
    {
        add_review($con);
    }
    function add_review($con)
    {
        $rating=$_POST['star'];
        $review=$_POST['review'];
        $book_id=$_POST['book-id'];
        $user_id=$_SESSION['user_id'];

        if($review)
        {
            $sql="insert into review_details_tbl values($book_id,$user_id,$rating,'$review',NOW())";
        }
        else
        {
            $sql="INSERT INTO `review_details_tbl` (`Book_Id`, `User_Id`, `Rating`, `Comment_date`) VALUES ('$book_id', '$user_id', '$rating', NOW());";
        }
        $check=mysqli_query($con,$sql);
        update_rating($con,$book_id);
    }
    function update_rating($con,$book_id)
    {
        $sql="update `book_details_tbl` set Rating=(select avg(Rating) as Rating from review_details_tbl where Book_Id=".$book_id.") where Book_Id=".$book_id.";";
        $check=mysqli_query($con,$sql);
        if($check)
        {
            echo '<script>alert("Your review has been added!);</script>';
        }
        else
        {
            echo 'some problem';
        }
    }
    function comment_count($con,$book_id)
    {
        $sql="select count(*) as review from review_details_tbl where Comment IS NOT NULL and Comment!='' and Book_Id=".$book_id;
        $data=mysqli_query($con,$sql);
        $result=mysqli_fetch_array($data);
        return $result['review'];
    }
    function get_publisher_name($con,$publisher_id)
    {
        $sql="select Full_Name from user_details_tbl where User_Id=".$publisher_id;
        $data=mysqli_query($con,$sql);
        $result=mysqli_fetch_array($data);
        return $result['Full_Name'];
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
    function display_quantity($con,$book_type)
    {
        if($book_type=='H')
        {
            echo '<div class="cart-plus-minus">
                    <form action="cart-page.php" id="form">
                            <input class="cart-plus-minus-box" type="number" name="qtybutton" value="1">
                    </div>
                    <div class="pro-details-cart btn-hover">
                            <input type="submit" value="ADD TO CART">
                        </form>
                    </div>
                    ';
        }
        else
        {
            echo '
            <form action="cart-page.php" id="form">
                            <input class="cart-plus-minus-box" type="hidden" name="qtybutton" value="1">
                            <div class="pro-details-cart btn-hover">
                            <input type="submit" value="ADD TO CART">
                        </form>
                    </div>';
        }
    }
?>