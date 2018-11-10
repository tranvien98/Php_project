<?php
ob_start();
session_start();
include_once 'config/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VIENT Shop</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
                {
                    $Duration: 800,
                    x: 0.3,
                    $During: {$Left: [0.3, 0.7]},
                    $Easing: {$Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    x: -0.3,
                    $SlideOut: true,
                    $Easing: {$Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    x: -0.3,
                    $During: {$Left: [0.3, 0.7]},
                    $Easing: {$Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    x: 0.3,
                    $SlideOut: true,
                    $Easing: {$Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    y: 0.3,
                    $During: {$Top: [0.3, 0.7]},
                    $Easing: {$Top: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    y: -0.3,
                    $SlideOut: true,
                    $Easing: {$Top: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    y: -0.3,
                    $During: {$Top: [0.3, 0.7]},
                    $Easing: {$Top: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    y: 0.3,
                    $SlideOut: true,
                    $Easing: {$Top: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    x: 0.3,
                    $Cols: 2,
                    $During: {$Left: [0.3, 0.7]},
                    $ChessMode: {$Column: 3},
                    $Easing: {$Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    x: 0.3,
                    $Cols: 2,
                    $SlideOut: true,
                    $ChessMode: {$Column: 3},
                    $Easing: {$Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    y: 0.3,
                    $Rows: 2,
                    $During: {$Top: [0.3, 0.7]},
                    $ChessMode: {$Row: 12},
                    $Easing: {$Top: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    y: 0.3,
                    $Rows: 2,
                    $SlideOut: true,
                    $ChessMode: {$Row: 12},
                    $Easing: {$Top: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    y: 0.3,
                    $Cols: 2,
                    $During: {$Top: [0.3, 0.7]},
                    $ChessMode: {$Column: 12},
                    $Easing: {$Top: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    y: -0.3,
                    $Cols: 2,
                    $SlideOut: true,
                    $ChessMode: {$Column: 12},
                    $Easing: {$Top: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    x: 0.3,
                    $Rows: 2,
                    $During: {$Left: [0.3, 0.7]},
                    $ChessMode: {$Row: 3},
                    $Easing: {$Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    x: -0.3,
                    $Rows: 2,
                    $SlideOut: true,
                    $ChessMode: {$Row: 3},
                    $Easing: {$Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    x: 0.3,
                    y: 0.3,
                    $Cols: 2,
                    $Rows: 2,
                    $During: {$Left: [0.3, 0.7], $Top: [0.3, 0.7]},
                    $ChessMode: {$Column: 3, $Row: 12},
                    $Easing: {$Left: $Jease$.$InCubic, $Top: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    x: 0.3,
                    y: 0.3,
                    $Cols: 2,
                    $Rows: 2,
                    $During: {$Left: [0.3, 0.7], $Top: [0.3, 0.7]},
                    $SlideOut: true,
                    $ChessMode: {$Column: 3, $Row: 12},
                    $Easing: {$Left: $Jease$.$InCubic, $Top: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    $Delay: 20,
                    $Clip: 3,
                    $Assembly: 260,
                    $Easing: {$Clip: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    $Delay: 20,
                    $Clip: 3,
                    $SlideOut: true,
                    $Assembly: 260,
                    $Easing: {$Clip: $Jease$.$OutCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    $Delay: 20,
                    $Clip: 12,
                    $Assembly: 260,
                    $Easing: {$Clip: $Jease$.$InCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    $Delay: 20,
                    $Clip: 12,
                    $SlideOut: true,
                    $Assembly: 260,
                    $Easing: {$Clip: $Jease$.$OutCubic, $Opacity: $Jease$.$Linear},
                    $Opacity: 2
                }
            ];

            var jssor_1_options = {
                $AutoPlay: 1,
                $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions: jssor_1_SlideshowTransitions,
                    $TransitionsOrder: 1
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,
                    $SpacingX: 5,
                    $SpacingY: 5
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
</head>
<body>
<div>
    <header id="header">
        <div class="container">
            <div class="row">
                <div id="logo" class="col-md-2 col-sm-6 col-6">
                    <!-- logo -->
                    <h1>
                        <a href="index.php" title="Home"><img id="img-logo" src="images/logo.png"></a>
                    </h1>
                </div>
                <?php
                include_once './chucnang/timkiem/timkiem.php';
                ?>
                <?php
                include_once './chucnang/sanpham/dmsanpham.php';
                ?>
            </div>
        </div>
    </header>
    <!-- /header -->
    <section id="main">
    <?php
    // master page
    if(isset($_GET['page_layout']))
    {
        switch ($_GET['page_layout'])
        {
            case 'giohang':
                include './chucnang/giohang/giohang.php';
                break;
            case 'order':
                include './chucnang/giohang/order.php';
                break;
            case 'orderfinish':
                include './chucnang/giohang/orderfinish.php';
                break;
            case 'sosanh':
                include './chucnang/sosanh/sosanh.php';
                break;
            case 'phukien':
                include './chucnang/phukien/phukien.php';
                break;
            case 'chitietphukien':
                include './chucnang/phukien/chitietphukien.php';
                break;
            case 'sanpham':
                include './chucnang/sanpham/sanpham.php';
                break;
            case 'chitietsanpham':
                include './chucnang/sanpham/chitietsanpham.php';
                break;
            case 'chitietsanphamkm':
                include './chucnang/sanpham/chitietsanphamkm.php';
                break;
            case 'phone':
                include './chucnang/sanpham/phone.php';
                break;
            case 'sosanh':
                include_once './chucnang/sosanh/sosanh.php';
                break;

        }
    }
    else
    {
        include_once './chucnang/sanpham/sanpham.php';
    }
    ?>
    </section>
    <footer>
        <div id="footer-t">
            <div class="container">
                <div  class="row">
                    <div id="logo-f" class="col-md-3 col-sm-12 col-xs-12">
                        <a href="index.php">
                            <img src="images/logo.png">
                        </a>
                    </div>
                    <div id="about" class="col-md-3 col-sm-12 col-xs-12">
                        <h3>about us</h3>
                        <p>fgdsgfdsgdfsgdfgdfgsdfs</p>
                    </div>
                    <div id="hotline" class="col-md-3 col-sm-12 col-xs-12">
                        <h3>hotline</h3>
                        <p>Phone Sale: (+84) 00000000000</p>
                        <p>Email: @gmail.com</p>
                    </div>
                    <div id="contact" class="col-md-3 col-sm-12 col-xs-12">
                        <h3>contact us</h3>
                        <p>Address 1:</p>
                        <p>Address 2:</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer-b">
            <div class="container">
                <div class="row">
                    <div id="footer-b-l" class="col-md-6 col-sm-12 col-xs-12">
                        <p>VIENT</p>
                    </div>
                    <div id="footer-b-r" class="col-md-6 col-sm-12 col-xs-12">
                        <p>© 20 VIENT</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>