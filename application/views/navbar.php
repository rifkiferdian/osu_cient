<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url(); ?>assets/img/logo/<?php if ($data == '') {echo "logo_d.png"; }else{ echo $data; } ?>" style="border-radius: 0px" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $nama_uni; ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="<?php echo site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li>
              <a href="<?php echo site_url('mailbox'); ?>">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
            <li><a target="blank" href="<?php echo base_url().'index.php/web_page/home/'.$id; ?>"><i class="fa fa-laptop"></i> <span>View Page</span></a></li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i>
                <span>Page Editor</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                    <a href="#"><i class="fa fa-circle-o"></i> Insert Header <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                      <li><a href="<?php echo base_url().'index.php/web_page/header_logo/'.$id; ?>"><i class="fa fa-circle-o"></i> Header Logo</a></li>
                      <li><a href="<?php echo base_url().'index.php/web_page/header_sosmed/'.$id; ?>"><i class="fa fa-circle-o"></i> Header Sosmed</a></li>
                      <li><a href="<?php echo base_url().'index.php/web_page/header_slider/'.$id; ?>"><i class="fa fa-circle-o"></i> Header Slider</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url().'index.php/web_page_content/index/'.$id; ?>"><i class="fa fa-circle-o"></i> Insert Body</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Insert Footer</a></li>
              </ul>
            </li>
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>