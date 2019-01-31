<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"  />
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
                               <li class="col-md-4">
                                  <a href="#" class="btn btn-red text-white f14 no-bod-rad" data-toggle="modal" data-target="#feedback_view">Feedback</a></li> 
<div id="feedback_view" class="modal fade" role="dialog">
  <div class="modal-dialog"  style="font-family: 'MavenPro-Regular';">
  <div class="modal-content">
      <div class="modal-header btn-blue text-white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-family: 'MavenPro-Regular';">Feedback</h4>
      
      </div>
      <div class="modal-body">
       <form id="parent_feedback" action="" method="post">
<!--
         <div class="form-group col-sm-6">
             <label>Name</label>
           <input type="text" class="form-control no-bod-rad" placeholder="Name">
         </div> 
           <div class="form-group col-sm-6">
               <label>Email</label>
           <input type="text" class="form-control no-bod-rad" placeholder="Email">
         </div> 
-->
           
           <div class="form-group col-sm-12 m-t-10">
               <label>Your Feedback is Valuble for us</label>
           <textarea class="form-control no-bod-rad" rows="5" id="feedback"></textarea>
           </div>
        
     </div>
      <div class="modal-footer text-center col-sm-12" style="border-top: none; text-align: center;">
        <button type="submit" class="btn btn-blue no-bod-rad text-white" data-target="#feedback_view">Submit</button>
      </form>
          <button type="button" class="btn btn-red no-bod-rad text-white" data-dismiss="modal">Close</button>
      </div>
      <div class="clearfix">&nbsp;</div>
    </div>

  </div>
</div>
<form id="p"><button type="submit">try</button></form>

<script type="text/javascript">
      $(document).ready(function(){
$("#parent_feedback").submit(function(){
    alert('hii');
});
});
</script>