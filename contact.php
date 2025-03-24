<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

// Changed to check for form submission using the submit button
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    $isRead = 0;

    // Changed to use PDO prepared statement to match other parts of the code
    $sql = "INSERT INTO tblcontact (Name, Email, Subject, Message, IsRead) VALUES (:name, :email, :subject, :message, :isRead)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':subject', $subject, PDO::PARAM_STR);
    $query->bindParam(':message', $message, PDO::PARAM_STR);
    $query->bindParam(':isRead', $isRead, PDO::PARAM_INT);

    if ($query->execute()) {
        echo "<script>alert('Your message was sent successfully!');</script>";
        echo "<script>window.location.href = 'index.html';</script>"; 
    } else {
        echo "<script>alert('Something went wrong. Please try again');</script>";
    }
}
?>

<!doctype html>
<html>
<head>
    <title>SBDM || Contact Us Page</title>
    <link rel="stylesheet" href="/css/main.css">
    <script type="application/x-javascript"> 
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
        function hideURLbar(){ window.scrollTo(0,1); } 
    </script>
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
        /* Contact Us Header Styles */
        .header-container {
            position: relative;
            width: 100%;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .header-background {
            position: relative;
            height: 220px;
            background: linear-gradient(to right, rgba(72, 126, 176, 0.8), rgba(64, 97, 130, 0.8));
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
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

        .phone-icon {
            position: absolute;
            width: 80px;
            height: 80px;
            border: 4px solid white;
            border-radius: 50%;
            top: 70px;
            left: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .phone-icon:after {
            content: "";
            display: block;
            width: 40px;
            height: 40px;
            background-color: white;
            mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M20 15.5c-1.2 0-2.4-.2-3.6-.6-.3-.1-.7 0-1 .2l-2.2 2.2c-2.8-1.4-5.1-3.8-6.6-6.6l2.2-2.2c.3-.3.4-.7.2-1-.3-1.1-.5-2.3-.5-3.5 0-.6-.4-1-1-1H4c-.6 0-1 .4-1 1 0 9.4 7.6 17 17 17 .6 0 1-.4 1-1v-3.5c0-.6-.4-1-1-1zM12 3C7 3 3 7 3 12h2c0-3.9 3.1-7 7-7v-2z'/%3E%3C/svg%3E") no-repeat 50% 50%;
            -webkit-mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M20 15.5c-1.2 0-2.4-.2-3.6-.6-.3-.1-.7 0-1 .2l-2.2 2.2c-2.8-1.4-5.1-3.8-6.6-6.6l2.2-2.2c.3-.3.4-.7.2-1-.3-1.1-.5-2.3-.5-3.5 0-.6-.4-1-1-1H4c-.6 0-1 .4-1 1 0 9.4 7.6 17 17 17 .6 0 1-.4 1-1v-3.5c0-.6-.4-1-1-1zM12 3C7 3 3 7 3 12h2c0-3.9 3.1-7 7-7v-2z'/%3E%3C/svg%3E") no-repeat 50% 50%;
        }

        .email-icon {
            position: absolute;
            width: 70px;
            height: 50px;
            background-color: white;
            border-radius: 5px;
            right: 200px;
            top: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .email-icon:after {
            content: "";
            display: block;
            width: 40px;
            height: 30px;
            border-radius: 5px;
            border: 2px solid #4a92a8;
        }

        .map-pin {
            position: absolute;
            width: 60px;
            height: 60px;
            left: 400px;
            top: 90px;
        }

        .map-pin:before {
            content: "";
            position: absolute;
            width: 30px;
            height: 30px;
            background-color: #e74c3c;
            border-radius: 50% 50% 50% 0;
            transform: rotate(-45deg);
        }

        .map-pin:after {
            content: "";
            position: absolute;
            width: 15px;
            height: 15px;
            background-color: white;
            border-radius: 50%;
            top: 7.5px;
            left: 7.5px;
        }

        .dots {
            position: absolute;
            width: 80px;
            height: 80px;
            right: 350px;
            top: 70px;
        }

        .dot {
            position: absolute;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.7);
        }

        .dot:nth-child(1) { top: 0; left: 0; }
        .dot:nth-child(2) { top: 0; left: 30px; }
        .dot:nth-child(3) { top: 0; left: 60px; }
        .dot:nth-child(4) { top: 30px; left: 0; }
        .dot:nth-child(5) { top: 30px; left: 30px; }
        .dot:nth-child(6) { top: 30px; left: 60px; }
        .dot:nth-child(7) { top: 60px; left: 0; }
        .dot:nth-child(8) { top: 60px; left: 30px; }
        .dot:nth-child(9) { top: 60px; left: 60px; }

        .header-content {
            color: white;
            z-index: 1;
            position: relative;
            text-align: center;
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
            justify-content: center;
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

        /* Contact Content Styles */
        .contact {
            padding: 40px 0;
        }

        .contact-info {
            text-align: center;
            margin-bottom: 40px;
        }

        .c-text {
            font-size: 24px;
            color: #333;
            margin-bottom: 30px;
        }

        .contact-grids {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 40px;
        }

        .contact-grid-left,
        .contact-grid-middle,
        .contact-grid-right {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .contact-grid-left:hover,
        .contact-grid-middle:hover,
        .contact-grid-right:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .contact-grid-left h3,
        .contact-grid-middle h3,
        .contact-grid-right h3 {
            color: #333;
            margin-bottom: 15px;
            border-bottom: 2px solid #4a92a8;
            padding-bottom: 10px;
        }

        .contact-grid-left p,
        .contact-grid-middle p,
        .contact-grid-right p {
            color: #666;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .header-background {
                height: 180px;
            }
            
            .header-title {
                font-size: 2rem;
            }
            
            .contact-grids {
                flex-direction: column;
            }
            
            .contact-grid-left,
            .contact-grid-middle,
            .contact-grid-right {
                margin-bottom: 20px;
            }
            
            .phone-icon, .email-icon, .map-pin, .dots {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!--header-->
    <?php include_once('includes/header.php');?>
    <!-- Top Navigation -->
    
    <!-- Contact Header -->
    <div class="header-container">
        <div class="header-background">
            <div class="background-images">
                <div class="phone-icon"></div>
                <div class="email-icon"></div>
                <div class="map-pin"></div>
                <div class="dots">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </div>
            <div class="header-content">
                <h1 class="header-title">CONTACT US</h1>
                <div class="header-breadcrumb">
                    <a href="index.html">Home</a>
                    <span>/</span>
                    <a href="contact.php">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="curve"></div>
    </div>
    
    <!-- Contact Content -->
    <div class="contact">
        <!-- container -->
        <div class="container">
            <div class="contact-info">
                <h3 class="c-text">Feel Free to contact with us!</h3>
            </div>
            
            <div class="contact-grids">
                <?php 
                $sql = "SELECT * FROM tblpage WHERE PageType='contactus'";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                
                if($query->rowCount() > 0) {
                    foreach($results as $row) {
                ?>
                <div class="col-md-4 contact-grid-left">
                    <h3>Address</h3>
                    <p><?php echo htmlentities($row->PageDescription); ?></p>
                </div>
                <div class="col-md-4 contact-grid-middle">
                    <h3>Phones</h3>
                    <p><?php echo htmlentities($row->MobileNumber); ?></p>
                </div>
                <div class="col-md-4 contact-grid-right">
                    <h3>E-mail</h3>
                    <p><?php echo htmlentities($row->Email); ?></p>
                </div>
                <?php 
                    }
                } 
                ?>
                <div class="clearfix"></div>
            </div>
            
            <!-- Contact Form -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Send us a message</h3>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="contact.php">
                                <div class="form-group">
                                    <label for="name">Your Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" id="subject" name="subject" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Google Map Section - Uncomment and add your coordinates when ready
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-12">
                    <div class="map-container" style="height: 400px; width: 100%;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d YOUR_COORDINATES_HERE!2d YOUR_LONGITUDE!3d YOUR_LATITUDE!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMznCsDA0JzU5LjAiTiA3N8KwMDMnMTguOCJF!5e0!3m2!1sen!2sin!4v1234567890" width="100%" height="100%" style="border:0; border-radius: 5px;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            -->
        </div>
        <!-- //container -->
    </div>
    <!-- //contact -->
    
    <?php include_once('includes/footer.php');?>
</body>
</html>