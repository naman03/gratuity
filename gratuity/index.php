<?php
$agent=1;
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
  $agent=0;
}
include('includes/config.php');
$queryu = query("SELECT * FROM c_users order by id desc");
  $rowu = mysqli_fetch_array($queryu);
  //$kid=$rowu[]'id'];

  $queryf = query("SELECT * FROM c_userdata order by id desc");       

  $rowf = mysqli_fetch_array($queryf);
    $queryd = query("SELECT * FROM help order by id desc");       

  $rowd = mysqli_fetch_array($queryf);
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<meta content="text/html; charset=UTF-8" http-equiv="content-type" />

<style type="text/css">

</style>

<title> Gratuity </title>

<?php
include("includes/header.php");
?>
<body>

 <?php include("includes/nav.php");?>





 <nav class="navbar navbar-default navbar-fixed" style="
 margin-top: 50px;
 ">
 <div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <?php if($agent==0){?>
    <button type="submit" class="btn btn-block btn-info" data-toggle="modal" data-target=".xt" style="margin-top:8px;">Sign Up/Log In</button></li>

    <?php }?>
  </div>


  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

       <!--  <form class="navbar-form navbar-left" role="search">
     <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->


      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form class="navbar-form " role="form" style="text-align: center;">
           <div class="form-group">


             <button type="button" class="btn btn-block btn-lg btn-info ti" data-toggle="modal" data-target=".xt" style="width:500px;">Sign Up/Log In</button></li>





           </form>
         </div>
       </div>

     </div><!-- /.navbar-collapse -->
   </div><!-- /.container-fluid -->
 </nav>






 <div class="container">



  <div class="row">


    <div class="col-md-3"    <?php if($agent==1){ echo 'style="position: fixed;"';} ?>  >

      <p class="list-group-item" style="background-color: #00bef2;color: white;font-size: x-large;text-align: center;">People's Need
      </p>
      <div class="list-group" style="text-align: center;">
        <a href="hub" class="list-group-item">Medical Supplies<span style="margin-left:5px;color: #00bef2;" class="glyphicon glyphicon-plus" ></a>
        <a href="hub" class="list-group-item">Funds<span style="margin-left:5px;color: #00bef2;" class="glyphicon glyphicon-gbp" ></span></a>
        <a href="hub" class="list-group-item">Clothes<span style="margin-left:5px;color: #00bef2;" class="glyphicon glyphicon-briefcase" ></a>
        <a href="hub" class="list-group-item">Food<span style="margin-left:5px;color: #00bef2;" class="glyphicon glyphicon-glass" ></a>

      </div>
    </div>

    <div class="col-md-8" style="float: right;">

      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="img/1920/red.jpg" alt="...">
            <div class="carousel-caption">
              ...
            </div>
          </div>
          <div class="item">
            <img src="img/1920/blue.jpg" alt="...">
            <div class="carousel-caption">
              ...
            </div>
          </div>
          ...
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <div class="row"><br><br><div class="btn btn-info btn-block btn-circle">Need of the Hour</div><br>
        <div class="thumbnail">
          
         <div class="list-group">
          <?php
         $query = query("SELECT * FROM c_userdata ORDER BY id DESC");
        $rx=query("SELECT * From help where verifyd='1' ORDER BY id DESC");

  //$r = mysqli_fetch_array($query);

       // $count=1;
          echo '<tbody>';
        while(  $rowr=mysqli_fetch_array($rx)AND$r = mysqli_fetch_array($query)){
            # code...
          
         echo '<a href="needy?email='.$rowr['email'].'" class="list-group-item card">
            <div class="media col-md-3">
              <figure class="pull-left">
                <img class="media-object img-rounded img-responsive"  src="cp/uploads/'.$r['propic'].'" alt="cp/uploads/'.$r['propic'].'" >
              </figure>
            </div>
            <div class="col-md-6">
              <h4 class="list-group-item-heading" style="color:#00bef2;"> '.$r['fname'].' '.$r['lname'].' </h4>
              <p class="list-group-item-text">'.$rowr['why'].'
              </p>
              <h4><strong>Needs:</strong>'.$rowr['need'].'</h4>
            </div>
            <div class="col-md-3 text-center">
              <h2> 200 <small> views </small></h2>
              <button type="button" class="btn btn-info btn-lg btn-block"> Help Now! </button>
              <div class="stars">
                <span class="glyphicon glyphicon-heart"></span>
                <span class="glyphicon glyphicon-heart"></span>
                <span class="glyphicon glyphicon-heart"></span>
                <span class="glyphicon glyphicon-heart"></span>
                <span class="glyphicon glyphicon-heart-empty"></span>
              </div>
             
            </div>
          </a>
';}?>



        

        </div>


      </div>

    </div><!-- row -->

 <?php
        include("includes/footer.php");  ?>

  </div><!-- col-8 -->


</div><!-- row -->






</div><!-- conatiner-->











<?php include("includes/footer2.php");  ?>









<div class="modal fade bs-example-modal-md xt" aria-labelledby="myLargeModalLabel" tabindex="-1" role="dialog"  aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="text-align:center;">Sign In/Sign Up</h4>
      </div>
      <div class="modal-body">
        <center>
         <div class="row">
          <div class="col-lg-2"></div>

          <div class="col-xs-6 col-lg-4">
            <a href="#" class="btn btn-primary" >Login With FaceBook</a>
          </div>
          <div class="col-xs-6 col-lg-4">
            <a href="#" class="btn btn-danger" style="<?php if($agent==1){ echo "width: 160px;";}?>">Login with Google   </a>
          </div>
          <div class="col-lg-2"></div>

        </div>
      </center><br>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-login">
            <div class="panel-heading">

              <div class="row">
                <div class="col-xs-6">
                  <a href="#" class="active" id="login-form-link">Sign In</a>
                </div>
                <div class="col-xs-6">
                  <a href="#" id="register-form-link">Sign Up</a>
                </div>
              </div>
              <hr>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">

                  <form id="login-form" action="#" method="" role="form" style="display: block;">
                    <div class="form-group">
                      <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group text-center">
                      <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                      <label for="remember"> Remember Me</label>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                          <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="text-center">
                            <a href="" tabindex="5" class="forgot-password">Forgot Password?</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <form id="register-form" action="" method="post" role="form" style="display: none;">
                    <div class="form-group">
                      <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                    </div>
                    <div class="form-group">

                      <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                          <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
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

    <div class="modal-footer">
      <form method="post" action="">
        <div class="login_result" style="text-align:center;" id="login_result"></div>
      </form>
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->





</body>

</html>





<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/main.js"></script>
<script type="text/javascript">
$(function() {

  $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

});

</script>

                                          <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. 
                                          <script>
                                              (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                                              function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                                              e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                                              e.src='//www.google-analytics.com/analytics.js';
                                              r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                                              ga('create','UA-XXXXX-X','auto');ga('send','pageview');
                                            </script>-->