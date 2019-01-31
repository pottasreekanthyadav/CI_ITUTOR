 <div class="container-fluid rentfooter">
     <div class="container text-center">
           <div class="clearfix">&nbsp;</div>  
         <img src="<?php  echo MYIMAGES_PATH;?>rentabooks/white-logo.png" alt="book" class="m-t-15">
         <div class="col-sm-12">
               <div class="clearfix">&nbsp;</div>  
         <p class="m-t-10"><a href="#" class="col-wh">Terms of Conditions</a>
            <a href="#" class="col-wh"> | Privacy Policy</a>
            <a href="#" class="col-wh"> | Copyrights Notifications</a></p>
               <div class="clearfix">&nbsp;</div>   
        <div class="col-sm-4">
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Feedback</a></li>
                <li><a href="#">Faq's</a></li>
                <li><a href="#">Terms of Use</a></li>
            </ul>
        </div> 
             <div class="col-sm-4">
            <ul>
                <li><a href="#">Gift Membership </a></li>
                <li><a href="#">Tell a friend</a></li>
                <li><a href="#">Request a Book</a></li>
                <li><a href="#">Book Donation</a></li>
            </ul>
        </div>
             <div class="col-sm-4">
            <ul>
                <li><a href="#">Contact Us:  </a></li>
                <li><a href="#">Mobile : +91 7032 575757  <br> &emsp; &emsp; &nbsp; &nbsp;  +91 7032 676767  </a></li>
                <li><a href="#">Email : info@itsmytutor.com</a></li>
               
            </ul>
        </div>
               <div class="clearfix">&nbsp;</div> 
               <div class="clearfix">&nbsp;</div>  
         </div>
     </div>
   </div>
<div class="container-fluid sub-footer">
     <div class="text-center m-t-10">
     <h5 style="margin-top: 12px;" class="col-wh"> © 2018 Itsmytutor All Rights Reserved Designed by <a href="http://richlabz.com/" target="_blank" class="text-danger"> <b> Richlabz  IT Solutions Pvt Ltd.</b></a></h5>
    </div>   
</div>

<!--suggest a book modal start-->
<div class="modal fade in" id="suggest_a_book" role="dialog">
  
   <form>
    <div class="modal-dialog postrequirment">
    
      <!-- Modal content-->
      <div class="modal-content no-bod-rad">
        <div class="modal-header text-center" style="border-bottom: 1px solid #ffffff;">
          <button type="button" class="close" style="opacity:2" data-dismiss="modal"><i class="fa fa-times" style="margin-top: 2px;" aria-hidden="true"></i></button>
          <h2 class="modal-title"><b>Suggest a Book</b></h2>
        </div>
        <div class="modal-body">
     
     <div class="col-sm-offset-2">
 <div class="form-group col-sm-10">
            
           <input type="text" class="form-control no-bod-rad" name="name" id="name" placeholder="Name" value="">
           </div> 
         <div class="form-group col-sm-10 m-t-25">
            
           <input type="text" class="form-control no-bod-rad" name="name" id="name" placeholder="Email" value="">
           </div> 
          <div class="form-group col-sm-10 m-t-25">
          
           <input type="text" class="form-control no-bod-rad" name="mobile" id="mobile" placeholder="Mobile" value="">
           </div>
         <div class="form-group col-sm-10 m-t-25">
           <input type="text" class="form-control no-bod-rad" name="mobile" id="mobile" placeholder="Book Name" value="">
           </div>
          <div class="col-sm-12 text-center">
                  <div class="clearfix">&nbsp;</div>
        <button type="submit" class="btn btn_rent no-bod-rad btn-lg col-sm-8 col-sm-offset-1 submit m-t-15">Submit</button>
      </div>
              <div class="clearfix">&nbsp;</div>
         </div>
            
            <div class="clearfix">&nbsp;</div>
      
        <div class="modal-footer" style="border-top:none;padding: 2px;">
<!--          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        </div>
      </div>
        </div>
    </div>
       </form>
    
     </div>
<!--suggest a book modal end-->
<script type="text/javascript">
  function validate(){
    var str = true;
    var search = document.getElementById("searchstr").value;
    if(search == ""){
      str = false;
      //document.getElementById("search_err").innerHTML = "Enter book name or author";
      document.getElementById('searchstr').style.border="1px solid #a270d2";
    }
    else{
     document.getElementById("search_err").innerHTML = "";
    }
    return str;
  }
</script>
