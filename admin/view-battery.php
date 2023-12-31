     <?php 
     ob_start();
     require_once '../library/lib.php';
     require_once '../classes/crud.php';

     $lib=new Lib;
     $crud=new Crud;

     $lib->check_login2();

    if (isset($_GET['id'])) {
       $crud->delete($_GET['id'],'battery','view-battery.php');
     }
     ?>

     <?php include 'inc/header.php'; ?>
     <?php include 'inc/sidebar.php'; ?>
     <!-- ============================================================== -->
     <!-- End Left Sidebar - style you can find in sidebar.scss  -->
     <!-- ============================================================== -->
     <!-- ============================================================== -->
     <!-- Page wrapper  -->
     <!-- ============================================================== -->
     <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">BATTERY INFORMATION</h4>
            <div class="ml-auto text-right">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">My Battery Information</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?php $lib->msg();?></h5>
                <div class="table-responsive">
                  <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>S/N</th>
                        <th>Manufacturer Name</th>
                        <th>Serial Number</th>
                        <th>Manufacturing Date</th>
                        <th>Date Created</th>
                        <th>Delete</th>
                        <th>View</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php

                     $qt=$crud->displayAllWithOrder('battery','id','desc');

                     $c=1;
                     if ($qt) {

                       foreach($qt as $r){
                        ?>
                        <tr>
                         <td><?php echo $c++; ?></td>   
        <td><?php echo $crud->displayNameByUserId('user',$r['user_id']); ?></td>  
        <td><?php echo $r['serial_number']; ?></td>
        <td><?php echo $r['date']; ?></td>
         <td><?php echo $r['date']; ?></td>
         <td><a href="view-battery.php?id=<?php echo $r['id']; ?>"><i class="mdi mdi-washing-machine"></i></a></td>
         <td><a href="view.php?id=<?php echo $r['id']; ?>"><i class="mdi mdi-eye"></i></a></td>

        </tr>
        <?php
      }

    } else {
      echo "<tr><td colspan='5'><center>No Battery Information at the moment</center</td></tr>";
    }
    ?>

  </tbody>
  <tfoot>
    <tr>
 <th>S/N</th>
                        <th>Serial Number</th>
                        <th>Manufacturer Name</th>
                        <th>Manufacturing Date</th>
                        <th>Date Created</th>
                         <th>Delete</th>
                        <th>View</th>
    </tr>
  </tfoot>
</table>
</div>

</div>
</div>
</div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<?php include 'inc/footer.php'; ?>
<script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
         $('#zero_config').DataTable();
       </script>

     </body>

     </html>