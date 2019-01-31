 <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo SUPER_IMG_PATH;?>avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo TITLE_PATH;?></p>
          
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
       
  
          <li class="treeview">
          <a href="#">
            <i class="fa fa-qrcode"></i>
            <span>Inventory</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
<!--            <li class="treeview">
          <a href="<?php echo base_url();?>inventory/add_vendor">
            <i class="fa fa-circle-o"></i> <span>Add Vendor</span>
          </a>
        </li> -->
        <li class="treeview">
          <a href="<?php echo base_url();?>inventory/manage_vendor">
            <i class="fa fa-circle-o"></i> <span>Vendors List</span>
          </a>
        </li>
<!--         <li class="treeview">
          <a href="<?php echo base_url();?>inventory/add_inventory">
            <i class="fa fa-circle-o"></i> <span>Add Inventory</span>
          </a>
        </li> -->
        <li class="treeview">
          <a href="<?php echo base_url();?>inventory/manage_inventory">
            <i class="fa fa-circle-o"></i> <span>Inventory List</span>
          </a>
        </li>        
          </ul>
        </li>     
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Books Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li class="treeview">
          <a href="<?php echo base_url();?>books/manage_categories">
            <i class="fa fa-circle-o"></i> <span>Categories </span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url();?>books/manage_subcategories">
            <i class="fa fa-circle-o"></i> <span>Subcategories</span>
          </a>
        </li> 
        <li class="treeview">
          <a href="<?php echo base_url();?>books/manage_books">
            <i class="fa fa-circle-o"></i> <span>Books</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url();?>books/manage-coupons">
            <i class="fa fa-circle-o"></i> <span>Coupons</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url();?>books/manage-slider">
            <i class="fa fa-circle-o"></i> <span>Slider</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url();?>books/manage-orders">
            <i class="fa fa-circle-o"></i> <span>Orders</span>
          </a>
        </li>               
          </ul>
        </li>    
        <li class="treeview">
          <a href="<?php echo SUPER_ADMIN_FOLDER_PATH; ?>Admin/logout">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          
          </a>
        </li>
    </section>