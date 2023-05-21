<?php if (isset($component)) { $__componentOriginal91fdd17964e43374ae18c674f95cdaa3 = $component; } ?>
<?php $component = App\View\Components\AdminLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AdminLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
       <!-- Content Wrapper. Contains page content -->
       <div class="content-wrapper" style="background-color: #EAF1F8;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">SYSTEM LOG</h1>
                    </div><!-- /.col -->
                    <!--  <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div> /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    
                </div>
                <!-- /.row -->
        </section>

        <!-- data tables -->
        <section class="invoice" style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
            <!-- Title Form -->
            <div class="row" style="margin-top:20px;">
                <div class="col" style=" margin-left: 50px; margin-top:0px;">
                    <h2 class=""style="color: #1266B4;">List of System Log</h2>
                </div>
                <div class="col">
                    <!-- SidebarSearch Form -->
                    <form action="#">
                        <div class="input-group"
                            style="width: 100%; float: right; margin-bottom:20px; margin-top:5px; margin-right: 100px;">
                            <input type="search" class="form-control form-control-lg"
                                placeholder="Type your keywords here">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search" style="color: #1266B4;"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped" id="example"
                        style="width:100%; margin-left: 0px; margin-right: 0px;">
                        <thead>
                            <tr style="color: #1266B4;">
                                <th>ID</th>
                                <th>DATE& TIME</th>
                                <th>LOG TYPE</th>
                                <th>DONE BY</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>2022-11-19:49:15 - 5 seconds ago</td>
                                <td><button style="border-radius: 8px; border-color: #EC7100; background-color: #EC7100; color: white;">Logout</button>&nbsp;&nbsp;&nbsp;user logout </td>
                                <td>jordanearlpascua@laverdad.edu.ph</td>
                                
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>2022-11-19:49:15 - 5 seconds ago</td>
                                <td><button style="border-radius: 8px; border-color: #F7BE57; background-color: #F7BE57; color: white;">Edit</button>&nbsp;&nbsp;&nbsp;user logout </td>
                                <td>jordanearlpascua@laverdad.edu.ph</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>2022-11-19:49:15 - 5 seconds ago</td>
                                <td><button style="border-radius: 8px; border-color: #EC7100; background-color: #EC7100; color: white;">Logout</button>&nbsp;&nbsp;&nbsp;user logout </td>
                                <td>jordanearlpascua@laverdad.edu.ph</td>
                            </tr>
                           
                        </tbody>
                      
                    </table>
                </div>
                <!-- /.col -->
            </div>
             <!--pagination -->
             <nav aria-label="Page navigation example">
                <div class="row">
                    <div class="col-md-2">
                        <div class="dataTables_info ml-5 mt-2" id="example1_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div>
                    </div>
                    <div class="col-md-8">
                        <ul class="pagination justify-content-center mb-3">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1"  style=" font-weight:bold;">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#"  style="color: #1266B4; font-weight:bold;">1</a></li>
                            <li class="page-item"><a class="page-link" href="#"  style="color: #1266B4; font-weight:bold;">2</a></li>
                            <li class="page-item"><a class="page-link" href="#"  style="color: #1266B4; font-weight:bold;">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" style="color: #1266B4; font-weight:bold;">Next</a>
                            </li>
                        </ul>
                    </div> 
                </div>
            </nav>
        </section>
        <!-- right col -->

        <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $component = $__componentOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\epvs-app2\resources\views/system-log.blade.php ENDPATH**/ ?>