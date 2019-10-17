<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?> | URL ADD</title>
     -->
    <!-- jQuery library -->
    <!-- <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
    
    <!-- Bootstrap library -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    
    <!-- Stylesheet file -->
    <!-- <link rel="stylesheet" href="assets/css/style.css')"> -->
    <!-- <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>
</head>
<body>

    <div class="container">
        
        <div class="row">
            <div class="col-md-12">
                <h1>Image
                    <small>List</small>
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#imageAdd"><span class="fa fa-plus"></span> Add New</a></div>
                </h1>
            </div> -->
            <!-- <div class="col-md-12 head"> -->
                <!-- <h5><?php echo $title; ?></h5> -->
            <!-- </div> -->
        
            <!-- Data list table --> 
            <!-- <table class="table table-striped" id="imageList">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Header Title</th>
                        <th>Description</th>
                        <th>Promo</th>
                        <th>Promo Start date</th>
                        <th>Promo End date</th>
                    </tr>
                </thead>
                <tbody id="imageData">
                </tbody>
            </table>
        </div>
    </div> -->



    <!-- Modal Add and Edit Form -->
    <!-- <div class="modal fade" id="imageAdd" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content"> -->
                <!-- Modal Header -->
                <!-- <div class="modal-header"> -->
                    <!-- <h4 class="modal-title"><span id="hlabel">Add New</span> Image</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div> -->
                
                <!-- Modal Body -->
                <!-- <div class="modal-body">
                    <div class="statusMsg"></div>
                    <form role="form" id="imageAdd"> -->

                        <!-- <input type="hidden" name="id" id="id"> -->

                        <!-- <div class="form-group">
                            <label>Header Title</label>
                            <input type="text" class="form-control" name="header_title" id="header_title" placeholder="Title" >
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description" id="description" placeholder="description" >
                        </div>
                        <div class="form-group">
                            <label>Action Button Text</label>
                            <input type="text" class="form-control" name="cta_text" id="cta_text" placeholder="Enter Action" >
                        </div>
                        <div class="form-group">
                            <label>Redirect Url</label>
                            <input type="text" class="form-control" name="header_url" id="header_url" placeholder="Enter Url" >
                        </div>
                        <div class="form-group">
                            <label>Button Redirect Url</label>
                            <input type="text" class="form-control" name="cta_url" id="cta_url" placeholder="Enter Url" >
                        </div>
                        <div class="form-group">
                            <label>Background Desktop Url</label>
                            <input type="text" class="form-control" name="bg_desk_url" id="bg_desk_url" placeholder="Enter Url" >
                        </div>
                        <div class="form-group">
                            <label>Background Mobile Url</label>
                            <input type="text" class="form-control" name="bg_mob_url" id="bg_mob_url" placeholder="Enter Url" >
                        </div>
                        <div class="form-group">
                            <label>Display Order</label>
                            <input type="number" min="1" max="5" class="form-control" name="display_order" id="display_order" placeholder="Enter Order Number" >
                        </div>
                        <div class="form-group">
                            <label>Promotion</label>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="1" name="is_promo" class="custom-control-input" value="1" >
                                <label class="custom-control-label" for="1">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="2" name="is_promo" class="custom-control-input" value="0" >
                                <label class="custom-control-label" for="2">No</label>
                            </div>
                            <div class="form-group">
                            <label>Promotion Start date</label>
                                <div class='input-group date' >
                                    <input type="text" id='datepicker1' class="form-control" name='promo_start_at'/>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                                <script>
                                    $('#datepicker1').datepicker({
                                        uiLibrary: 'bootstrap4'
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                            <label>Promotion End date</label>
                                <div class='input-group date' >
                                    <input type="text" id='datepicker2' class="form-control" name='promo_end_at'/>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                                <script>
                                    $('#datepicker2').datepicker({
                                        uiLibrary: 'bootstrap4'
                                    });
                                </script>
                            </div>
                        </div>

                    </form>
                </div> -->

                <!-- Display status message -->
                <!-- <div class="statusMsg"></div> -->
                
                <!-- Modal Footer -->
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" id="add">SUBMIT</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalUpdate" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content"> -->
                <!-- Modal Header -->
                <!-- <div class="modal-header">
                    <h4 class="modal-title"><span id="hlabel">Edit</span> Image</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div> -->
                
                <!-- Modal Body -->
                <!-- <div class="modal-body">
                    <div class="statusMsg"></div>
                    <form role="form" id="imageEdit">

                        <input type="hidden" name="id" id="id">

                        <div class="form-group">
                            <label>Header Title</label>
                            <input type="text" class="form-control" name="header_title" id="header_title" placeholder="Title" >
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description" id="description" placeholder="description" >
                        </div>
                        <div class="form-group">
                            <label>Action Button Text</label>
                            <input type="text" class="form-control" name="cta_text" id="cta_text" placeholder="Enter Action" >
                        </div>
                        <div class="form-group">
                            <label>Redirect Url</label>
                            <input type="text" class="form-control" name="header_url" id="header_url" placeholder="Enter Url" >
                        </div>
                        <div class="form-group">
                            <label>Button Redirect Url</label>
                            <input type="text" class="form-control" name="cta_url" id="cta_url" placeholder="Enter Url" >
                        </div>
                        <div class="form-group">
                            <label>Background Desktop Url</label>
                            <input type="text" class="form-control" name="bg_desk_url" id="bg_desk_url" placeholder="Enter Url" >
                        </div>
                        <div class="form-group">
                            <label>Background Mobile Url</label>
                            <input type="text" class="form-control" name="bg_mob_url" id="bg_mob_url" placeholder="Enter Url" >
                        </div>
                        <div class="form-group">
                            <label>Display Order</label>
                            <input type="number" min="1" max="5" class="form-control" name="display_order" id="display_order" placeholder="Enter Order Number" >
                        </div>
                        <div class="form-group">
                            <label>Promotion</label>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="1" name="is_promo" class="custom-control-input" value="1" checked>
                                <label class="custom-control-label" for="1">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="2" name="is_promo" class="custom-control-input" value="0" checked>
                                <label class="custom-control-label" for="2">No</label>
                            </div>
                            <div class="form-group">
                            <label>Promotion Start date</label>
                                <div class='input-group date' >
                                    <input type="text" id='datepicker1' class="form-control" name='promo_start_at'/>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                                <script>
                                    $('#datepicker1').datepicker({
                                        uiLibrary: 'bootstrap4'
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                            <label>Promotion End date</label>
                                <div class='input-group date' >
                                    <input type="text" id='datepicker2' class="form-control" name='promo_end_at'/>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                                <script>
                                    $('#datepicker2').datepicker({
                                        uiLibrary: 'bootstrap4'
                                    });
                                </script>
                            </div>
                        </div>

                    </form>
                </div>   -->

                <!-- Display status message -->
                <!-- <div class="statusMsg"></div> -->
                
                <!-- Modal Footer -->
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" id="imgUpdate">SUBMIT</button>
                </div>
            </div>
        </div>
    </div> -->

    <!-- delete -->
         <!-- <form>
            <div class="modal fade" id="deleteForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="product_code_delete" id="product_code_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
        </form>

</body>




<script type="text/javascript">
    $(document).ready(function(){
        imageList();

        $('#imageList').dataTable();

        function imageList(){
        $.ajax({
            type: 'ajax',
            url : '<?php echo base_url('welcome/showDetail')?>',
            async : true,
            dataType : 'json',
            success: function(data){
                console.log(data);
                var html = '';
                var i; 
                for(i=0; i<data.length; i++){
                    html += '<tr>'+
                            '<td>'+data[i].id+'</td>'+
                            '<td>'+data[i].header_title+'</td>'+
                            '<td>'+data[i].description+'</td>'+
                            '<td>'+data[i].is_promo+'</td>'+
                            '<td>'+data[i].promo_start_at+'</td>'+
                            '<td>'+data[i].promo_end_at+'</td>'+
                            '<td style="text-align: right;">'+
                                '<a href="javascript:void(0);" id="imageEdit" class="btn btn-info btn-sm editImage" data-id="'+data[i].id+'" data-name="'+data[i].header_title+'" data-desc="'+data[i].description+'" data-promo="'+data[i].is_promo+'" data-strdate="'+data[i].promo_start_at+'" data-enddate="'+data[i].promo_end_at+'"> Edit </a>'+' '+
                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id+'">Delete</a>'+ 
                            '</td>' + 
                            '</tr>';
                }
                $('#imageData').html(html);
            }
        });
    }
    }) -->


    // /////////// ADD
    // $('#add').on('click', function(){
    //     var header_title = $('#header_title').val();
    //     var description = $('#description').val();
    //     var cta_text = $('#cta_text').val();
    //     var header_url = $('#header_url').val();
    //     var cta_url = $('#cta_url').val();
    //     var bg_desk_url = $('#bg_desk_url').val();
    //     var bg_mob_url = $('#bg_mob_url').val();
    //     var display_order = $('#display_order').val();
    //     var is_promo = $('input[type="radio"]:checked').val();
    //     var datepicker1 = $('#datepicker1').val();
    //     var datepicker2 = $('#datepicker2').val();

    //     $.ajax({
    //         type: "POST",
    //         url :'<?php echo base_url('welcome/imgAdd')?>',
    //         dataType : "JSON",
    //         data : {header_title:header_title, description:description, cta_text:cta_text, header_url:header_url, cta_url:cta_url, bg_desk_url:bg_desk_url, bg_mob_url:bg_mob_url, display_order:display_order, is_promo:is_promo, datepicker1:datepicker1, datepicker2:datepicker2},
    //         success: function(data){
    //             $('#header_title').val("");
    //             $('#description').val("");
    //             $('#cta_text').val("");
    //             $('#header_url').val("");
    //             $('#cta_url').val("");
    //             $('#bg_desk_url').val("");
    //             $('#bg_mob_url').val("");
    //             $('#display_order').val("");
    //             $('#is_promo').val("");
    //             $('#datepicker1').val("");
    //             $('#datepicker2').val("");
    //             imageList();
    //         }
            
    //     });
    //     return false;
    // });

    // $('#imageData').on('click', '.editImage ', function(){
    //     var id = $(this).data('id');
    //     var header_title = $(this).data('header_title');
    //     var description = $(this).data('description');
    //     var cta_text = $(this).data('cta_text');
    //     var header_url = $(this).data('header_url');
    //     var cta_url = $(this).data('cta_url');
    //     var bg_desk_url = $(this).data('bg_desk_url');
    //     var bg_mob_url = $(this).data('bg_mob_url');
    //     var is_promo = $(this).data('is_promo');
    //     var datepicker1 = $(this).data('datepicker1');
    //     var datepicker2 = $(this).data('datepicker2');

    //     $('#modalUpdate').modal('show');
    //     $('#header_title').val(header_title);
    //     $('#description').val(description);
    //     $('#cta_text').val(cta_text);
    //     $('#header_url').val(header_url);
    //     $('#cta_url').val(cta_url);
    //     $('#bg_desk_url').val(bg_desk_url);
    //     $('#bg_mob_url').val(bg_mob_url);
    //     $('#display_order').val(display_order);
    //     $('#is_promo').val(is_promo);
    //     $('#datepicker1').val(datepicker1);
    //     $('#datepicker2').val(datepicker2);
    // });

    // /////////// UPDATE
    // $('#imgUpdate').on('click', function(){
    //     var id = $('#id').val();
    //     var header_title = $('#header_title').val();
    //     var description = $('#description').val();
    //     var cta_text = $('#cta_text').val();
    //     var header_url = $('#header_url').val();
    //     var cta_url = $('#cta_url').val();
    //     var bg_desk_url = $('#bg_desk_url').val();
    //     var bg_mob_url = $('#bg_mob_url').val();
    //     var display_order = $('#display_order').val();
    //     var is_promo = $('input[type="radio"]:checked').val();
    //     var datepicker1 = $('#datepicker1').val();
    //     var datepicker2 = $('#datepicker2').val();

    //     $.ajax({
    //         type: "POST",
    //         url :'<?php echo base_url('Welcome/imgUpdate')?>',
    //         dataType : "JSON",
    //         data : {id:id, header_title:header_title, description:description, cta_text:cta_text, header_url:header_url, cta_url,cta_url, bg_desk_url:bg_desk_url,
    //                 bg_mob_url:bg_mob_url, display_order:display_order, is_promo:is_promo, datepicker1:datepicker1, datepicker2:datepicker2},
    //         success: function(data){
    //             $('#id').val("");
    //             $('#header_title').val();
    //             $('#description').val();
    //             $('#cta_text').val();
    //             $('#header_url').val();
    //             $('#cta_url').val();
    //             $('#bg_desk_url').val();
    //             $('#bg_mob_url').val();
    //             $('#display_order').val();
    //             $('#is_promo').val();
    //             $('#datepicker1').val();
    //             $('#datepicker2').val();
    //             imageList();
    //         }
            
    //     });
    //     return false;
    // });

    // $('#show_data').on('click','.item_delete',function(){
    //     var id = $(this).data('id');
         
    //     $('#deleteForm').modal('show');
    //     $('#id').val(id);
    // });

    // delete
    // $('#btn_delete').on('click',function(){
        // $('#deleteForm').modal('show');
// 		var id = $('#id').val();
// 		$.ajax({
// 			type : "POST",
// 			url  : "<?php echo base_url('emp/delete')?>",
// 			dataType : "JSON",  
// 			data : {id:id},
// 			success: function(data){
// 				$("#id").remove();
// 				$('#deleteEmpImgId').val("");
// 				$('#deleteImgModal').modal('hide');
// 				imageList();
// 			}
// 		});
// 		return false;
// 	});

// </script>
// </html>