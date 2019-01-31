<form method="post" action="<?php echo base_url();?>/admin/categories/cat_update_ctrl2/<?php echo $this->uri->segment(4);?>" class="form-inline">
 <select name="tutor_id" id="classes" class="form-control ">
							
                                <option value="">Choose Class</option>
                                <?php
	                        
                                $category_res = json_decode($cls);
	                                 print_r($category_res);
                                if ($category_res->code == SUCCESS_CODE) {
                                    foreach ($category_res->category_list as $category_response) {
                                        ?>
                                        <option  value="<?php echo $category_response->category_id;?>" <?php echo set_select('tutor_id',$category_response->category_id); ?> ><?php echo $category_response->category_name; ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                            
<input type="text" name="tutor_type" placeholder="enter tutor type" value="<?php echo $res->tutor_type;?>" class="form-control" required>

<br/><br/>

 <input type="submit" name="update" value="update" class="btn btn-primary">
</form>
