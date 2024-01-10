@extends('admin/layouts/master_layout')
   @section('title')
    Product Management
   @endsection 
   @section('content')
   
   <!DOCTYPE html>
<html>
 
  <body class="skin-blue">
    <div class="wrapper">
      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Product Management
            <!-- <small>advanced tables</small> -->
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Product Management</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Product Management</h3>
                </div><!-- /.box-header -->
                <div class="row">
                  <div class="col-md-12 text-right">
                    <a class="btn btn-info btn-social" data-toggle="modal" onclick="open_product_model()">
                      <i class="fa fa-plus"></i>Add Product
                    </a>
                  </div>
                </div>
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>SR No</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $count=0;
                      $imagePath = public_path('Products_Image');
                      foreach($ProductData as $pdata){ 
                        $count++; ?>
                      <tr>
                        <td>{{$count}}</td>
                        <td>{{$pdata['product_name']}}</td>
                        <td>{{$pdata['product_price']}}</td>
                        <td><img src="{{url('public/Products_Image/'.$pdata['product_image'])}}" alt="image not fount" height="100px" width="120px"></td>
                        <td><a href="javascript:void()" class="btn btn-success btn-sm" onclick="change_product_status({{$pdata['id']}},'product')">Active</a></td>
                        <td><?php echo (date('d M Y', strtotime($pdata['created_at']))); ?></td>
                        <td><a class="btn btn-info" data-toggle="modal" onclick="edit_product({{$pdata['id']}})"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" href="javascript:void()"><i class="fa fa-trash"></i></a></td>
                      </tr>
                      <?php } ?>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     
    </div><!-- ./wrapper -->

@endsection
<!-- Modal -->
<div class="modal fade" id="product_modal" tabindex="-1" role="dialog" aria-labelledby="product_modalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="product_title">Add Product</h3>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
      <p id="text_label"></p>
        <!-- general form elements -->
              <div class="box box-primary">
                <!-- <div class="box-header">
                  <h3 class="box-title">Quick Example</h3>
                </div> -->
                <!-- /.box-header -->
                <!-- form start -->
                <!-- action="{{url('admin/save_product')}}" -->
                <form id="productForm" method="post" enctype="multipart/form-data" role="form">
                 @csrf
                  <div class="box-body">
                    <input type="text" id="product_id" name="product_id">
                    <div class="form-group">
                      <label for="Input1">Product Name</label>
                      <input type="text" class="form-control" id="product_name" name="product_name"  placeholder="Enter Product Name">
                    </div>
                    <div class="form-group">
                      <label for="Input1">Product Price</label>
                      <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Enter Product Price">
                    </div>
                    <div class="form-group">
                      <label>Product Description</label>
                      <textarea class="form-control" rows="3" name="product_description" placeholder="Enter Product Description..." id="product_description"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="Input2">Choose Image</label>
                      <input type="file" id="product_image" name="product_image">
                     <span id="pimage"></span> 
                    </div>
                    <!-- <div class="checkbox">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div> -->
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="button" id="productaddbtn" class="btn btn-primary">Add</button>
                    <button type="button" id="producteditbtn" class="btn btn-primary">Edit</button>
                  </div>
                </form>
              </div><!-- /.box -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

 
@section('footerjs')
 <!-- jQuery 2.1.3 -->
    <script src="{{ URL::to('public/admin/plugins/jQuery/jQuery-2.1.3.min.js')}}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ URL::to('public/admin/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="{{ URL::to('public/admin/plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
    <script src="{{ URL::to('public/admin/plugins/datatables/dataTables.bootstrap.js')}}" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="{{ URL::to('public/admin/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="{{ URL::to('public/admin/plugins/fastclick/fastclick.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ URL::to('public/admin/dist/js/app.min.js')}}" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ URL::to('public/admin/dist/js/demo.js')}}" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
    <script>
    function open_product_model(){
      $('#product_title').html('Add Product');
      $('#producteditbtn').hide();
      $('#productaddbtn').show();
      $('#product_modal').modal('show');
    }
    function edit_product(pid){
      var csrfToken = $('meta[name="csrf-token"]').attr('content');
      $.ajax({
            type: "POST",
            url: "get-product",
            headers: {'X-CSRF-TOKEN': csrfToken},
            data: {product_id: pid},
            dataType: 'json',
            success: function(response) {
                // Handle the successful response from the server
                // var data = JSON.parse(response)
                console.log(response[0])
                $('#product_id').val(response.id);
                $('#product_name').val(response.product_name);
                $('#product_price').val(response.product_price);
                $('#product_description').val(response.product_description);
                $('#pimage').html('<img src="http://localhost/student/public/Products_Image/'+response.product_image+'" alt="source not found" width="100px" height="100px">');
                $("#pimage").attr("width","500");
            },
            error: function(errors) {
                // Handle errors
                console.error("Error submitting form: ", error);
            }
        });
        $('#product_title').html('Edit Product');
        $('#producteditbtn').show();
        $('#productaddbtn').hide();
        $('#product_modal').modal('show');
      
    }

    $(document).ready(function() {
    // Attach a click event handler to the submit button
        $("#productaddbtn").click(function() {
            // Create a FormData object to capture form data, including files
            var formData = new FormData($("#productForm")[0]);
            // Send an AJAX POST request to the server
            $.ajax({
                type: "POST",
                url: "add-product",
                data: formData,
                contentType: false, // Important for file uploads
                processData: false, // Important for file uploads
                success: function(data) {
                    // Handle the successful response from the server
                    var response = JSON.parse(data);
                    console.log(response)
                    if(response.success){
                      $('#text_label').html('Product added successfully.')
                      $('#text_label').css('color', 'green');
                      // location.reload()
                      console.log(response.success);
                    }else{
                      $('#text_label').html(response.error);
                      $('#text_label').css('color', 'red');
                      console.log(response.error);
                    }
                },
                error: function(error) {
                    // Handle errors
                    console.error("Error submitting form: ", error);
                }
            });
        });

        // +++++ Edit Product Button +++
        $("#producteditbtn").click(function() {
            // Create a FormData object to capture form data, including files
            var formData = new FormData($("#productForm")[0]);
            var product_id = $('#product_id').val();
            // Send an AJAX POST request to the server
            $.ajax({
              type: "POST",
              url: "edit-product/"+product_id,
              data: formData,
              contentType: false, // Important for file uploads
              processData: false, // Important for file uploads
              success: function(response) {
                  // Handle the successful response from the server
                  console.log(response)
                  if(response.success){
                    $('#text_label').html('Product edited successfully.')
                    $('#text_label').css('color', 'green');
                    // location.reload()
                    console.log(response.success);
                  }else{
                    $('#text_label').html('All field required.')
                    $('#text_label').css('color', 'red');
                    console.log(response.error);
                  }
              },
              error: function(error) {
                  // Handle errors
                  console.error("Error submitting form: ", error);
              }
            });
        });
    });

    function change_product_status(id, page){
      $.ajax({
        type: 'post',
        url: 'CommonAjax/change_status',
        data: {id: id, page: page},
        success: function(response){
          console.log(response)
        }
        error: function(error) {
            // Handle errors
            console.error("Error submitting form: ", error);
        }
      })
    }

  </script>
@endsection

