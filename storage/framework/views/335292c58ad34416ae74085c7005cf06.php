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
                        <h1 class="m-0">XERO INTEGRATION</h1>
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
                    <div class="col-lg-6 col-8">
                        <!-- small box -->
                        <a href="<?php echo e(url('/xero-send')); ?>">
                            <div class="small-box"
                                style="background-color: #FFFFFF;  border: 5px solid #D78C47; border-radius: 12px; color: black;">
                                <div class="inner ml-3 ">
                                    <p class="mt-2">SENDING RECEIPTS</p>
                                    <h1 style="color:#D78C47; font-size: 60px;"><b>1000</b></h1>
                                </div>

                                <div class="icon">
                                    <i class="ion ion-card mr-3 mt-3" style="color:#D78C47;"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-6">
                        <!-- small box -->
                        <a href="<?php echo e(url('/xero-sent')); ?>">
                            <div class="small-box"
                                style="background-color: #FFFFFF;  border: 0px solid #008000; border-radius: 12px; color: black;">
                                <div class="inner ml-3 ">
                                    <p class="mt-2">SENT RECEIPTS</p>
                                    <h1 style="color:#008000; font-size: 60px;"><b>1000</b></h1>
                                </div>

                                <div class="icon">
                                    <i class="ion ion-card mr-3 mt-3" style="color:#008000;"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </a>
                    </div>

                </div>
                <!-- /.row -->
        </section>

        <div style="text-align: right;  ">
            <button id="send-to-xero-btn" class="btn btn-default mr-4 mb-3" style="background-color: #D74747; color: #ffffff; width: 170px;"><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;SEND TO XERO</button>
        </div>

        <!-- data tables -->
        <section class="invoice" style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
            <!-- Title Form -->
            <div class="row" style="margin-top:20px;">
                <div class="col" style=" margin-left: 50px; margin-top:0px;">
                    <h2 class=""style="color: #1266B4;">List of Enrollment Payment Receipt</h2>
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

            <div class="row mt-4">
                <div class="col-12 table-responsive">
                    <table class="table table-striped" id="example"
                        style="width:100%; margin-left: 0px; margin-right: 0px;">
                        <thead>
                            <tr style="color: #1266B4;">
                                <th>Select</th>
                                <th>Name</th>
                                <th>Xero Account Id</th>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Reference</th>
                                <th>Created At</th>
                                <th>Created By</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $xeroInvoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td><input type="checkbox" id="my-checkbox" name="my-checkbox" class="checkbox invoice_checkbox" data-id="<?php echo e($value->id); ?>"></td>
                                <td><?php echo e($value->xero_account_name); ?></td>
                                <td><?php echo e($value->xero_account_id); ?></td>
                                <td><?php echo e($value->description); ?></td>
                                <td><?php echo e($value->amount); ?></td>
                                <td><?php echo e($value->reference); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($value->created_at)->format('M d, Y h:i A')); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($value->updated_at)->format('M d, Y h:i A')); ?></td>
                            </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


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
    

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Loading</h5>
                              
                            </div>
                            <div class="modal-body text-center">
                                <div class="spinner-border text-warning" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>

    </section>
    <script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>

    <script>

$(document).ready(function () {
    let invoice_obj = {};

    $(".invoice_checkbox").change(function(e){
        console.log(this.checked)
        let id = this.getAttribute('data-id');
        if (this.checked == true) {
            // add to list
            invoice_obj[id] = id
        } else {
            // remove from list
            delete invoice_obj[id]
        }

        console.log(invoice_obj);
    });

    $('#send-to-xero-btn').click(function(e) {
        handleSendToXero();
    });

    function handleSendToXero() {

        let invoiceIdCsv = Object.keys(invoice_obj).map(function (key, index) {
        return invoice_obj[key]
        }).join(', ')

        console.log(invoiceIdCsv);
        sendToXeroApi(invoiceIdCsv);
    }

    function sendToXeroApi(invoice_ids_csv) {
        $.ajax({
            url: '/v1/xero/makeInvoiceAndPay',
            method: 'GET',
            data: {
                invoice_ids: invoice_ids_csv
            },
            xhrFields: { withCredentials: true },
            beforeSend: function() {
                $('#exampleModalCenter').modal('toggle');
            },
            error: function (error) {
                console.log(error);
                $('#exampleModalCenter').modal('toggle');
            },
            success: function (response) {
                var result = $.parseJSON(response);
                location.reload()
            }
        });
    }



});

        </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $component = $__componentOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\epvs-app2\resources\views/xero-send.blade.php ENDPATH**/ ?>