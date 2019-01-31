<form method="post" action="<?php echo base_url();?>/admin/categories/cat_update_ctrl2/<?php echo $this->uri->segment(4);?>" class="form-inline">
<input type="text" name="cat_name" placeholder="enter category" value="<?php echo $res->category_name;?>" class="form-control" required>
<select name="cstatus" class="form-control">
	<option value=1>Active</option>
	<option value=0>In-Active</option>
</select>
<br/><br/>

 <input type="submit" name="update" value="update" class="btn btn-primary">
</form>
