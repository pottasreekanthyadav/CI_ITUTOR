
      <div class="contianer-fluid br-bt bg-wh">
        <div class="container"> 
            <div class="col-sm-12 rentmenu-adj">
          <div class="col-md-2 no-pad logo"><a href="<?php echo base_url();?>">
    <img src="<?php echo base_url();?>assets/images/logo.png" alt="logo" class="img-responsive rentlogo" /></a></div>
      <form method="post" action="<?php echo base_url();?>rentabook/frontend/search">  
      <div class="col-sm-5 col-sm-offset-1">
  <div class="input-group m-t-10">
   
    <input type="text" class="form-control no-bod-rad" placeholder="Search" name="searchstr">
    <div class="input-group-btn">
      <button class="btn btn-default no-bod-rad" type="submit" name="search">
        <i class="glyphicon glyphicon-search"></i>
      </button>
        </div>
      
  </div>
      </div></form>
       <div class="col-sm-4">
        <span class="pull-right m-t-10"> <span class="pull-left" style="margin-top: 3px;">Get our App on &nbsp; </span> <img src="<?php echo base_url();?>assets/images/rentabooks/playstore.png" alt="playstore" class="img-responsive"/> </span>
       </div>
                </div>
       </div>
      </div>
  <!-- menu start -->
  <nav class="navbar rentabook">
  <div class="container multilist">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#rentabooks">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
    </div>
    <div class="collapse navbar-collapse" id="rentabooks">
      <ul class="nav navbar-nav">
       
        
          
        
        <li class="dropdown">       
            <a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
                <b>Browse by Categories</b> <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
          <?php if(isset($category_data)){
                foreach ($category_data as $row){?>
              
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#"><?php if(isset($row->title)) echo $row->title;?></a>
                <ul class="dropdown-menu">
                  <?php 
                  if(isset($row->subcategory_name)){
                  foreach($row->subcategory_name as $srow){?>
              <li><a tabindex="-1" href="#"><?php if(!empty($srow->title)){ echo $srow->title;}?></a></li>
                <?php 
              } 
            }
                ?>
                </ul>
              </li>
            <?php }} ?>
            </ul>
        </li>
        <li><a href="#"> <b> How it Works </b> </a></li>
        <li><a href="#"> <b> Pricing &amp; Plans </b> </a></li>
          <li><a href="#"> <b> Offers </b> </a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url();?>rentabook/frontend/checkout" class="tl-site"> <b>Cart(<?php if($total_item->qty){ echo $total_item->qty;} else echo"0";?>items)</b> <i class="fa fa-shopping-cart"></i></a></li>
    
      </ul>
    </div>
  </div>
</nav>
  <!-- menu end -->
