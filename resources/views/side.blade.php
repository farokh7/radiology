

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <div>
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="https://ebrahiminejad.com/wp-content/uploads/2021/12/me3.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"> فرخ ابراهیمی نژاد</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fa fa-bank"></i>
                <p>
حسابداری                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="{{Route('income')}}" class="nav-link">
                    <i class="fa fa-money nav-icon"></i>
                    <p>دریافتی های رادیولوژی</p>
                  </a>
                </li>
               
                </ul>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('salary')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>حقوق های رادیولوژی </p>
                  </a>
                </li>


                <li class="nav-item">
                  <a href="{{route('cost')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p> هزینه ها  </p>
                  </a>
                </li>
               
                


                
                
              </ul>
              


              
              </li>
            <li class="nav-item">
              <a href="{{Route('from')}}" class="nav-link">
                <i class="nav-icon fa fa-hospital-o"></i>
                <p>
                 ثبت مراکز
                  <span class="right badge badge-danger">جدید</span>
                </p>
              </a>
            </li>

                
            </li>
            <li class="nav-item">
              <a href="{{Route('regedit')}}" class="nav-link">
                <i class="nav-icon fa fa-hospital-o"></i>
                <p>
                 ثبت کاربر
                  <span class="right badge badge-danger">جدید</span>
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{Route('frominfo')}}" class="nav-link">
                <i class="nav-icon fa fa-hospital-o"></i>
                <p>
                 اطلاعات مراکز
                  <span class="right badge badge-danger">جدید</span>
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-headphones"></i>
                <p>
                   مدیریت
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{Route('admin')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>دید کلی    </p>
                  </a>
                </li>
               
              </ul>

              
             
            </li>
            
          </ul>
          <ul class="nav nav-treeview">
                <li class="nav-item" style="    width: 100%;">
                  <a href="{{route('logout')}}" class="nav-link">
                    <i class="fa fa-user-circle-o nav-icon" ></i>
                    <p>خروج    </p>
                  </a>
                </li>
               
              </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>






   <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> نرم افزار مدیریتی تحت وب رادیولوژی فرخ</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
            
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
