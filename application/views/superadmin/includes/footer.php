<div class="pull-right hidden-xs">
      <b>Powered By : Richlabz</b> 
    </div>
    <strong>Copyright &copy; <?php echo date('Y');?> <a href="http://itutor.com">Itutor</a>.</strong> All rights
    reserved.
	<script src="<?php echo SUPER_JS_PATH; ?>jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo SUPER_JS_PATH; ?>bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo SUPER_JS_PATH; ?>fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo SUPER_JS_PATH; ?>app.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo SUPER_JS_PATH; ?>jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo SUPER_JS_PATH; ?>jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo SUPER_JS_PATH; ?>jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo SUPER_JS_PATH; ?>jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?php echo SUPER_JS_PATH; ?>Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo SUPER_JS_PATH; ?>dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo SUPER_JS_PATH; ?>demo.js"></script>
<script src="<?php echo SUPER_JS_PATH; ?>common.js"></script>
<script type="text/javascript">
   function updateActivationStatus(s,table) {
        var listarray = new Array();
        //check this line for name filed
        $('input[name="multiple[]"]:checked').each(function () {
            listarray.push($(this).val());
        });
        //alert off if not nessearry
      // alert(listarray);
        var checklist = "" + listarray;
         //alert off if not nessearry
        //alert(checklist);
        if (!isNaN(s) && (s == '1' || s == '0' || s=='2') && checklist != '' && table!='') {
            $('#fail').hide();
            $.ajax({
                dataType: 'json',
                type: 'post',
                data: {'tablename':table, 'updatelist': checklist, 'activity': s},
                url: '<?php echo base_url(); ?>superadmin/Classes/commonStatus/',
                success: function (u) {
                    console.log(u);
                    if(u.code=='200'){$('#success').show();$('#success').html(u.description).addClass('alert alert-success');setTimeout(function() {window.location=location.href;},2000);}
				    if(u.code=='204' || u.code=='301' || u.code=='422'){$('#fail').show();$('#failmessage').html(u.description).addClass('alert alert-danger');}
				                },
                error: function (er) {
                    console.log(er);
                }
            });
        } else {
            $('#fail').show();
            $('#failmessage').html('*  Please select a record').addClass('alert alert-danger');
        }
    }
    function common_Delete(table){
    var listarray=new Array();
      $('input[name="multiple[]"]:checked').each(function(){listarray.push($(this).val());});
        var checklist=""+listarray;
        //alert(checklist);
      if(checklist!=''){
         $('#fail').hide();
         $.ajax({
          dataType:'json',
          type:'post',
          data:{'tablename':table,'updatelist':checklist},
          url:'<?php echo base_url();?>superadmin/CategorySubjects/commonDelete/',
          success:function(u){
           // console.log(u);
            if(u.code=='200'){$('#success').html(u.description).addClass('alert alert-success');setTimeout(function() {window.location=location.href;},2000);}
                    if(u.code=='204' || u.code=='301' || u.code=='422'){$('#failmessage').html(u.description).addClass('alert alert-danger');}
                 },
          error:function(er){
            console.log(er);
          }
        });
      }
      else{
       $('#failmessage').html('*  Please Select record').addClass('alert alert-danger');
      }
    }
    $('#category').on('change',function(){
    var category=$(this).val();
    if(category > 0 && !isNaN(category)) {
        $('#subcategory').html('');
        var base_url = '<?php echo base_url(); ?>';
        $.ajax({
            dataType:'html',
            method:'POST',
            data:{'category':category},
            url:base_url+'Books/subcatWithcat',
            success:function(ss){
                console.log(ss);
                $('#subcategory').html(ss);
            },
            error:function(se){
                console.log(se);
            }
        });
    }
});
    var category=$("#category").val();
    if(category!='')
    {
        $('#subcategory').html('');
        var base_url = '<?php echo base_url(); ?>';
        $.ajax({
            dataType:'html',
            method:'POST',
            data:{'category':category},
            url:base_url+'Books/subcatWithcat',
            success:function(ss){
                console.log(ss);
                $('#subcategory').html(ss);
            },
            error:function(se){
                console.log(se);
            }
        });
    }
</script>