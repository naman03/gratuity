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

<title> Gratuity</title>

<?php
include("includes/header.php");include("includes/config.php");
?>

<body>


 <?php include("includes/nav.php");
 $session_emailid= $_GET['email'];
$queryu = query("SELECT * FROM c_users WHERE emailid='$session_emailid'");
  $rowu = mysqli_fetch_array($queryu);
  //$kid=$rowu[]'id'];

  $queryf = query("SELECT * FROM c_userdata WHERE emailid='$session_emailid'");       

  $rowf = mysqli_fetch_array($queryf);

 $queryd = query("SELECT * FROM help WHERE email='$session_emailid'");       

  $rowd = mysqli_fetch_array($queryd);

 ?>



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

      </div>
      <div class="navbar-right">


        <form class="navbar-form " role="form">
         <div class="form-group">

         </div>


       </form>
     </div>

   </div><!-- /.navbar-collapse -->
 </div><!-- /.container-fluid -->
</nav>






<div class="container">



  <div class="row">


    <div class="col-md-3 col-sm-3"    <?php if($agent==1){ echo 'style="position: fixed;"';} ?>  >




      <div class="thumbnail">
      <?php echo '<img class="img-rounded" style=" margin-top: 10px;" src="cp/uploads/'.$rowf['propic'].'" alt=""/>';?>
        <div class="caption">
          <h4 class="pull-right"></h4>
        <?php echo '<h4 style="text-align:center;"><a href="#">'.$rowf['fname'].' '.$rowf['lname'].'</a>
           <p><strong>Funds Needed:</strong> Rs.'.$rowd['funds'].' </p>';

        ?>
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

     </div>

     <div class="col-md-8 col-sm-8" style="float: right; <?php if ($agent==0){echo "width:100%;";}  ?> ">




      <div class="row">


        <div class="col-sm-12 col-lg-12 col-md-12">
          <button class="btn btn-info btn-block" data-toggle="modal" data-target=".xt" style="min-height: 42px;font-size: x-large;" >Help the Needy!</button>
          <div class="thumbnail" >
            <div class="row" style="text-align:center;">

              <!--<div class="col-md-3" style="margin:10px;">
                <img  src="http://placehold.it/180x180" alt="">

              </div>-->
              <div class="col-md-12" style="text-align:left;">
               <div class="info">
                <?php echo'
              
                 <p><strong>About Me:</strong> '.$rowf['edu'].' </p>
                 <p><strong>state:</strong>'.$rowf['state'].'</p>
                  <p><strong>Age:</strong>'.$rowf['age'].'</p>
                  <p><strong>About Me:</strong> '.$rowf['gender'].' </p>
                  <p><strong>My Situaton:</strong> '.$rowd['why'].' </p>




                 ';?>

               </div>              

             </div>
           </div>





           

           <div class="caption">
           </div>

         </div>
       </div>




















       <div class="col-sm-12 col-lg-12 col-md-12">
        <div class="well" style="width:100%;color: white; background-image: linear-gradient(to bottom,#00BEF2 0,#00BEF2 100%);text-align:center;<?php if($agent==1) { echo 'font-size: x-large;';}?>">Video</div>
        <div class="thumbnail" >
          <div class="row" style="text-align:center;">

              <!--<div class="col-md-3" style="margin:10px;">
                <img  src="http://placehold.it/180x180" alt="">

              </div>-->
              <div class="col-md-12 col-xs-12" style="text-align:left;">
               <div class="info">

                <?php 
                if($agent==1)
                {
                  echo '<iframe width="721" height="315" src="https://www.youtube.com/embed/0Kdw8MWoHJo" frameborder="0" allowfullscreen></iframe>';
                }
                else
                {
                  echo '<iframe width="300" height="250" src="https://www.youtube.com/embed/0Kdw8MWoHJo" frameborder="0" allowfullscreen></iframe>';
                }
                ?>
              </div>              

            </div>
          </div>







          <div class="caption">
          </div>

        </div>
      </div>






    </div><!-- row -->













    
    <div class="row thumbnail">

      <div class="">

      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title" style="">
              <a data-toggle="collapse"  data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
               Comment
              </a>
            </h4>
          </div>
          <div class="col-xs-12">
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
               <ul class="media-list">
                <li class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg" alt="profile">
                  </a>
                  <div class="media-body">
                    <div class="well well-lg">
                      <h4 class="media-heading text-uppercase reviews">Marco </h4>
                      <ul class="media-date text-uppercase reviews list-inline thumbnail">
                        <li class="dd">22</li>
                        <li class="mm">09</li>
                        <li class="aaaa">2014</li>
                      </ul><br>
                      <p class="media-comment">
                        askdasld
                      </p>
                    </div>              
                  </div>
                </div>
              </li>          

              <li class="media">
                <a class="pull-left" href="#">
                  <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/lady_katherine/128.jpg" alt="profile">
                </a>
                <div class="media-body">
                  <div class="well well-lg">
                    <h4 class="media-heading text-uppercase reviews">Kriztine</h4>
                    <ul class="media-date text-uppercase reviews list-inline">
                      <li class="dd">xx</li>
                      <li class="mm">xx</li>
                      <li class="aaaa">2015</li>
                    </ul>
                    <p class="media-comment">
                      Yehhhh......................
                    </p>
                  </div>              
                </div>

              </li>
            </ul> 
          </div>
        </div>
      </div>
</div>
    </div>
</div>
  













  <div class="row thumbnail" style="margin-top:40px;">
    <div class="col-md-6">
      <div class="well well-sm">
        <div class="text-right">
          <a class="btn btn-success btn-green btn-block" href="#reviews-anchor" id="open-review-box">Comment Here</a>
        </div>

        <div class="row" id="post-review-box" style="display:none;">
          <div class="col-md-12">
            <form accept-charset="UTF-8" action="" method="post">
              <input id="ratings-hidden" name="rating" type="hidden"> 
              <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>

              <div class="text-right">
                <div class="stars starx starrr" data-rating="0"></div>
                <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                  <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                  <button class="btn btn-success btn-lg" type="submit">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div> 

      </div>




      <div class="col-xs-12 col-md-6">
        <div class="well well-sm">
          <div class="row">
            <div class="col-xs-12 col-md-6 text-center">
              
               
</div>
</div>
</div>
</div>

</div>










</div><!-- col-8 -->



</div><!-- row -->






</div><!-- conatiner-->













<?php 

include("includes/footer2.php");

?>









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

                                            <script type="text/javascript">




                                            </script>












<div class="modal fade bs-example-modal-md xt" aria-labelledby="myLargeModalLabel" tabindex="-1" role="dialog"  aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-header">


                <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close"><span class="label label-danger" aria-hidden="true">&times;</span></button>

            <h3><span class="label label-info" id="qid">1</span> Contact This Person</h3>
        </div>
        <div class="modal-body">
            <div class="col-md-3 col-md-offset-5 col-xs-offset-4">
               <div id="loadbar" style="display: none;">
                  <div class="blockG" id="rotateG_01"></div>
                  <div class="blockG" id="rotateG_02"></div>
                  <div class="blockG" id="rotateG_03"></div>
                  <div class="blockG" id="rotateG_04"></div>
                  <div class="blockG" id="rotateG_05"></div>
                  <div class="blockG" id="rotateG_06"></div>
                  <div class="blockG" id="rotateG_07"></div>
                  <div class="blockG" id="rotateG_08"></div>
              </div>
          </div>

          <div class="quiz" id="quiz" data-toggle="buttons">
           <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">Via Email</label>
           <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="2">Via Call</label>
           <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="3">Face to Face</label>
       </div>
       
   </div>
   <div class="modal-footer text-muted">
    <span id="answer"></span>
</div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->