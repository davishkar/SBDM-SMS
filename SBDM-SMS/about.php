<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html>
<head>
<title>SBDM Atpadi || About Us Page</title>
<link rel="stylesheet" href="/css/main.css">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--bootstrap-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--coustom css-->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<!--script-->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- js -->
<script src="js/bootstrap.js"></script>
<!-- /js -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--script-->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){		
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
        });
    });
</script>
<style>
    /* About College Header Styles */
    .header-container {
        position: relative;
        width: 100%;
        overflow: hidden;
        margin-bottom: 30px;
    }

    .header-background {
        position: relative;
        height: 220px;
        background: linear-gradient(to right, rgba(221, 183, 171, 0.8), rgba(197, 159, 149, 0.8));
        display: flex;
        align-items: center;
        padding-left: 80px;
    }

    .background-images {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        opacity: 0.7;
    }

    .ruler-left {
        position: absolute;
        width: 150px;
        height: 40px;
        background-color: #c44536;
        transform: rotate(-30deg);
        top: 100px;
        left: 40px;
    }

    .circle {
        position: absolute;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        border: 4px solid white;
        top: 80px;
        left: 200px;
    }

    .dot {
        position: absolute;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #d68c45;
        top: 120px;
        left: 300px;
    }

    .notebook {
        position: absolute;
        width: 180px;
        height: 200px;
        background-color: #e9b949;
        top: 20px;
        left: 350px;
        transform: rotate(10deg);
        box-shadow: 3px 3px 5px rgba(0,0,0,0.2);
    }

    .notebook-rings {
        position: absolute;
        top: 30px;
        left: 380px;
        z-index: 1;
    }

    .ring {
        width: 15px;
        height: 5px;
        background-color: #888;
        margin-bottom: 15px;
        border-radius: 2px;
    }

    .triangle {
        position: absolute;
        width: 80px;
        height: 80px;
        background-color: #4a92a8;
        clip-path: polygon(0% 100%, 50% 0%, 100% 100%);
        right: 250px;
        top: 100px;
        transform: rotate(-10deg);
    }

    .flask {
        position: absolute;
        right: 120px;
        top: 70px;
    }

    .flask-top {
        width: 30px;
        height: 40px;
        background-color: rgba(255,255,255,0.8);
        margin: 0 auto;
        border-radius: 15px 15px 0 0;
    }

    .flask-bottom {
        width: 70px;
        height: 80px;
        background-color: rgba(255,255,255,0.8);
        clip-path: polygon(0% 0%, 100% 0%, 80% 100%, 20% 100%);
    }

    .header-content {
        color: white;
        z-index: 1;
        position: relative;
    }

    .header-title {
        font-size: 2.5rem;
        font-weight: bold;
        letter-spacing: 1px;
        margin-bottom: 10px;
    }

    .header-breadcrumb {
        display: flex;
        align-items: center;
    }

    .header-breadcrumb a {
        color: white;
        text-decoration: none;
        font-size: 1rem;
    }

    .header-breadcrumb span {
        margin: 0 10px;
        color: white;
    }

    .curve {
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        height: 30px;
        background-color: white;
        border-radius: 50% 50% 0 0 / 100% 100% 0 0;
    }

    /* About Content Styles */
    .about {
        padding: 40px 0;
    }

    .about-info-grids {
        display: flex;
        flex-wrap: wrap;
    }

    .abt-pic img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .abt-info-pic {
        padding-left: 20px;
    }

    .abt-info-pic p {
        line-height: 1.6;
        color: #555;
        margin-bottom: 15px;
        text-align: justify;
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
    }

    @media (max-width: 768px) {
        .header-background {
            height: 180px;
            padding-left: 30px;
        }
        
        .header-title {
            font-size: 2rem;
        }
        
        .about-info-grids {
            flex-direction: column;
        }
        
        .abt-info-pic {
            padding-left: 0;
            margin-top: 20px;
        }
        
        .notebook, .triangle, .flask {
            display: none;
        }
    }
</style>
</head>
<body>
    <!--header-->
    <?php include_once('includes/header.php');?>
    <!-- Top Navigation -->
    
    <!-- About Header -->
    <div class="header-container">
        <div class="header-background">
            <div class="background-images">
                <div class="ruler-left"></div>
                <div class="circle"></div>
                <div class="dot"></div>
                <div class="notebook"></div>
                <div class="notebook-rings">
                    <div class="ring"></div>
                    <div class="ring"></div>
                    <div class="ring"></div>
                    <div class="ring"></div>
                    <div class="ring"></div>
                </div>
                <div class="triangle"></div>
                <div class="flask">
                    <div class="flask-top"></div>
                    <div class="flask-bottom"></div>
                </div>
            </div>
            <div class="header-content">
                <h1 class="header-title">ABOUT COLLEGE</h1>
                <div class="header-breadcrumb">
                    <a href="index.html">Home</a>
                    <span>/</span>
                    <a href="about.php">About College</a>
                </div>
            </div>
        </div>
        <div class="curve"></div>
    </div>
    
    <!-- About Content -->
    <div class="about">
        <div class="container">
            <div class="about-info-grids">
                <div class="col-md-5 abt-pic">
                    <img src="images/abt.jpg" class="img-responsive" alt="College Image"/>
                </div>
                <div class="col-md-7 abt-info-pic">
                    <?php
                    $sql = "SELECT * from tblpage where PageType='aboutus'";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                    if($query->rowCount() > 0) {
                        foreach($results as $row) {
                            // Split the content by paragraphs and display with proper formatting
                            $paragraphs = explode("\n", $row->PageDescription);
                            foreach($paragraphs as $paragraph) {
                                if(trim($paragraph) != '') {
                                    echo "<p>" . $paragraph . "</p>";
                                }
                            }
                        }
                    }
                    ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <?php include_once('includes/footer.php');?>
    
</body>
</html>