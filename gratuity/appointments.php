<?php
$agent=1;
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
  $agent=0;
}
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
  
  <title> Ecounsellors </title>
  <?php
include("includes/header.php");
?>
<body>
  


 <?php include("includes/nav.php");?>


<nav class="navbar navbar-default navbar-fixed" style="
margin-top: ;
">
<div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->


  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

       <!--  <form class="navbar-form navbar-left" role="search">
     <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <div class="navbar-left">
        <a class="navbar-brand" href="#"> <span class="label label-default">New User?</span><a class="btn btn-success" style="margin-top:7px;"> Register now.</a></a>

      </div>
      <div class="navbar-right">


        <form class="navbar-form " role="form">
         <div class="form-group">
           <span class="label label-default">Log In</span>
           <input type="email" class="form-control" placeholder="Email">
           <input type="password" class="form-control" placeholder="Password">

           <button type="submit" class="btn btn-default">Login</button></li>
         </div>


         <button class="btn btn-primary">Facebook</button>
         <button class="btn btn-danger">Google</button>
       </form>
     </div>

   </div><!-- /.navbar-collapse -->
 </div><!-- /.container-fluid -->
</nav>






<div class="container">



  <div class="row">


    <div class="col-md-3"    <?php if($agent==1){ echo 'style="position: fixed;"';} ?>  >




          <div class="thumbnail">
            <img src="http://placehold.it/180x180" alt="">
            <div class="caption">
              <h4 class="pull-right"></h4>
              <h4 style="text-align:center;"><a href="#">Your Name</a>
              </h4>
              
            </div>
           <!-- <div class="ratings">
              <p class="pull-right">12 reviews</p>
              <p>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
              </p>
            </div>-->
          </div>
        

      <!--<p class="list-group-item" style="
      background-color: #00bef2;
      color: white;
      font-size: x-large;
       text-align: center;
      ">Options</p>-->
      <div class="list-group" style="
    text-align: center;
">

        <a href="#" class="list-group-item">View Profile<span style="margin-left:5px;color: #00bef2;" class="glyphicon glyphicon-edit" ></span></a>
        <a href="#" class="list-group-item">E-bucks<span style="margin-left:5px;color: #00bef2;" class="glyphicon glyphicon-usd" ></a>
       
      </div>
    </div>

    <div class="col-md-8" style="float: right;">

    


      <div class="row">


        <div class="col-sm-12 col-lg-12 col-md-12">
          <div class="well" style="color: white; background-image: linear-gradient(to bottom,#00BEF2 0,#00BEF2 100%);text-align:center;<?php if($agent==1) { echo 'font-size: xx-large;';}?>">Appointments</div>
          <div class="thumbnail">
            <img src="http://placehold.it/320x150" alt="">
            <div class="caption">
              <h4 class="pull-right"></h4>
              <h4><a href="#">First Counsellor</a>
              </h4>
              <p>Date Amount etc..     Cancelled/Reschduled</p>
            </div>
            
          </div>
        </div>

         <div class="col-sm-12 col-lg-12 col-md-12">
          <div class="thumbnail">
            <img src="http://placehold.it/320x150" alt="">
            <div class="caption">
              <h4 class="pull-right"></h4>
              <h4><a href="#">First Counsellor</a>
              </h4>
              <p>Date Amount etc..     Cancelled/Reschduled</p>
            </div>
            
          </div>
        </div>

        <div class="col-sm-12 col-lg-12 col-md-12">
          <div class="thumbnail">
            <img src="http://placehold.it/320x150" alt="">
            <div class="caption">
              <h4 class="pull-right"></h4>
              <h4><a href="#">First Counsellor</a>
              </h4>
              <p>Date Amount etc..     Cancelled/Reschduled</p>
            </div>
            
          </div>
        </div>
        <div class="col-sm-12 col-lg-12 col-md-12">
          <div class="thumbnail">
            <img src="http://placehold.it/320x150" alt="">
            <div class="caption">
              <h4 class="pull-right"></h4>
              <h4><a href="#">First Counsellor</a>
              </h4>
              <p>Date Amount etc..     Cancelled/Reschduled</p>
            </div>
            
          </div>
        </div>
        <div class="col-sm-12 col-lg-12 col-md-12">
          <div class="thumbnail">
            <img src="http://placehold.it/320x150" alt="">
            <div class="caption">
              <h4 class="pull-right"></h4>
              <h4><a href="#">First Counsellor</a>
              </h4>
              <p>Date Amount etc..     Cancelled/Reschduled</p>
            </div>
            
          </div>
        </div>






      </div><!-- row -->


    </div><!-- col-8 -->



  </div><!-- row -->






</div><!-- conatiner-->










<?php include("includes/footer2.php");  ?>















</body>
</html>





<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/main.js"></script>

                                          <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. 
                                          <script>
                                              (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                                              function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                                              e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                                              e.src='//www.google-analytics.com/analytics.js';
                                              r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                                              ga('create','UA-XXXXX-X','auto');ga('send','pageview');
                                            </script>-->