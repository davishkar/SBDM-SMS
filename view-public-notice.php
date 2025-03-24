<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html>
<head>
<title>SBDM || Home Page</title>
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
<!--hover-girds-->
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>
<!--/hover-grids-->
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
    .page-header-banner {
        background: linear-gradient(to right, rgba(255,255,255,0.7), rgba(255,200,200,0.7)), url('images/school-supplies-bg.jpg');
        background-size: cover;
        background-position: center;
        padding: 60px 0;
        border-radius: 0 0 50% 50% / 20px;
        position: relative;
        overflow: hidden;
        margin-bottom: 30px;
    }
    
    .circle-accent {
        position: absolute;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        border: 3px solid rgba(255,255,255,0.8);
        top: 60px;
        left: 100px;
    }
    
    .dot-accent {
        position: absolute;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: rgba(221, 153, 119, 0.8);
        top: 100px;
        left: 220px;
    }
    
    .page-header-banner h1 {
        color: #fff;
        font-size: 42px;
        font-weight: bold;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
        margin-left: 270px;
    }
    
    .breadcrumb-wrapper {
        margin-left: 270px;
    }
    
    .breadcrumb-wrapper a {
        color: #fff;
        text-decoration: none;
    }
</style>
<!--/script-->
</head>
<body>
<?php include_once('includes/header.php');?>

<!-- New Header Banner based on the image -->
<div class="page-header-banner">
    <div class="circle-accent"></div>
    <div class="dot-accent"></div>
    <div class="container">
        <h1>Public Notice</h1>
        <div class="breadcrumb-wrapper">
            <a href="index.html">Home</a> / Notice
        </div>
    </div>
</div>

<!-- Original banner code (commented out) -->
<!--
<div class="banner banner5">
    <div class="container">
    <h2>Notice</h2>
    </div>
</div>
-->

<!--weelcome-->
<div class="welcome">
    <div class="container">
        <table border="1" class="table table-bordered mg-b-0">
                      <?php
$vid=$_GET['viewid'];
$sql="SELECT * from tblpublicnotice where ID=:vid";
$query = $dbh -> prepare($sql);
$query->bindParam(':vid',$vid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
 <tr align="center" class="table-warning">
<td colspan="4" style="font-size:20px;color:blue">
 Notice</td></tr>
<tr class="table-info">
    <th>Notice Announced Date</th>
    <td><?php  echo $row->CreationDate;?></td>
  </tr>
    <tr class="table-info">
    <th>Notice Title</th>
    <td><?php  echo $row->NoticeTitle;?></td>
  </tr>
  <tr class="table-info">
     <th>Message</th>
    <td><?php  echo $row->NoticeMessage;?></td>
     
  </tr>
 
  <?php $cnt=$cnt+1;}} ?>
</table>
    </div>
</div>
<!--/welcome-->
<?php include_once('includes/footer.php');?>
<!--/copy-rights-->
    </body>
</html>