 
  <nav class="navbar navbar-findcond navbar-fixed-top" style="
  margin-bottom: 0px;
  ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   <?php   if($agent==1){

echo '<a class="navbar-brand" href="/gratuity"><img src="img/icon.png" style="
    height: 45px;margin-top:-10px;margin-left:-10px;
    
"/></a><a class="navbar-brand" href="/gratuity">Gratuity.IN</a>';

   }
   else
   {
      echo '<a class="navbar-brand" href="/gratuity"><img src="img/icon.png" style="
    height: 45px;margin-top:-10px;margin-left:-10px;
    
"/></a>';}


   ?>  
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

       <!--  <form class="navbar-form navbar-left" role="search">
     <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
        <ul class="nav navbar-nav" style="
        text-align: center;
        ">
        <li class="active"><a href="/gratuity">HOME </a></li>
        <li><a href="#">NEEDS</a></li>
      
           
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span style="margin-right:5px;color: #00bef2;" class="glyphicon glyphicon-user" ></span>Your Name <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Previous Donations</a></li>
            <li><a href="profile">View Profile</a></li>
            <li><a href="/gratuity/#contact">Contact Us</a></li>
            <li class="divider"></li>
            <li><a href="#">Log Out</a></li>
          </ul>
        </li>

        
      </ul>

    </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>