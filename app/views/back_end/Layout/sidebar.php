      <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="./public/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a><!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
                <a href="index.php" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dash Board
                    </p>
                </a>
            </li>
           
            <li class="nav-item ">
                <a href="admin_list.php" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Admin 

                    </p>
                </a>

            </li>
          
               <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        USERS
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>


                   <ul class="nav nav-treeview">
                       <li class="nav-item">
                           <a href="user_list.php?u_type=<?=base64_encode(1)?>" class="nav-link" style="font-size: 13px;">
                               <i class="far fa-user nav-icon"></i>
                               <p>Customers </p>
                           </a>
                       </li>

                   </ul>
            </li>






            <li class="nav-item has-treeview">
                <a href="product_list.php" class="nav-link">
                    <i class="nav-icon fas fa-boxes"></i>
                    <p>
                        STOCK
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="product_list.php" class="nav-link" style="font-size: 13px;">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>List</p>
                        </a>
                    </li>


                </ul>
            </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link" style="font-size: 13px;">
                    <i class="nav-icon fas fa-wrench"></i>
                    <p>
                        JOBS
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="service_list.php" class="nav-link" style="font-size: 13px;">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>List</p>
                        </a>
                    </li>


                </ul>
            </li>


            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-laptop"></i>
                    <p>
                        DIVICES
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="vehicle_list.php?owner=<?=base64_encode(1)?>" class="nav-link" style="font-size: 13px;">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>List</p>
                        </a>
                    </li>


                </ul>


            </li>


         

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-cog"></i>
                    <p>
                       SYSTEM SETTINGS
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="currency_list.php" class="nav-link" style="font-size: 13px;">
                            <i class="far fa-circle nav-icon"></i>
                            <p> Currency Settings</p>
                        </a>
                    </li>

                </ul>
            </li>
            
     
            <li class="nav-item">
                <a  href="javascript:logout()"  class="nav-link">
                    <i class="nav-icon  fas  fa-sign-out-alt"></i>
                    <p>
                       LOGOUT
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->

   </aside>
      
      