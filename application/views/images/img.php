<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?> | CodeIgniter CRUD without Page Refresh</title>
    
    <!-- jQuery library -->
    <!-- <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script> -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    
    <!-- Bootstrap library -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- Stylesheet file -->
    <!-- <link rel="stylesheet" href="assets/css/style.css')"> -->
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>

    <div class="col-md-10" style="text-align:center;">
        
        <div class="row">
            <div class="col-md-12 head">
                <h5><?php echo $title; ?></h5>
                <!-- Add link -->
                <div class="float-right">
                    <a href="javascript:void(0);" class="btn btn-success Add" data-type="add" data-toggle="modal" data-target="#modalUserAddEdit"><i class="plus"></i>Add New Image</a>
                </div>
            </div>
        
            <!-- Data list table --> 
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Header Title</th>
                        <th>Description</th>
                        <th>Display Order</th>
                        <th>Promo</th>
                        <th>Action Button Text</th>
                        <th>Promo Start date</th>
                        <th>Promo End date</th>
                        <th>Redirect Url</th>
                        <th>Button Redirect Url</th>
                        <th>Background Desktop Url</th>
                        <th>Background Mobile Url</th>
                        <th>Display Order</th>
                    </tr>
                </thead>
                <tbody id="userData">
                    <?php if(!empty($imgInfo)){ foreach($imgInfo as $row){ ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['header_title']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['display_order']; ?></td>
                        <td><?php echo $row['is_promo']; ?></td>
                        <td><?php echo $row['cta_text']; ?></td>
                        <td><?php echo $row['promo_start_at']; ?></td>
                        <td><?php echo $row['promo_end_at']; ?></td>
                        <td><?php echo $row['header_url']; ?></td>
                        <td><?php echo $row['cta_url']; ?></td>
                        <td><?php echo $row['bg_desk_url']; ?></td>
                        <td><?php echo $row['bg_mob_url']; ?></td>
                        
                        <td>
                            <a href="javascript:void(0);" class="btn btn-warning" name="edit" id="edit" rowID="<?php echo $row['id']; ?>" data-type="edit" data-toggle="modal" data-target="#modalUserAddEdit">edit</a>
                            <a href="javascript:void(0);" class="btn btn-danger" onclick="return confirm('Are you sure to delete data?')?userAction('delete', '<?php echo $row['id']; ?>'):false;">delete</a>
                        </td>
                    </tr>
                    <?php } }else{ ?>
                    <tr><td colspan="7">No member(s) found...</td></tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>



    <!-- Modal Add and Edit Form -->
    <div class="modal fade" id="modalUserAddEdit" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"><span id="hlabel">Add New</span> Image</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="statusMsg"></div>
                    <form role="form">

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
                                    <!-- <input type="date" id='datepicker1' class="form-control" name="promo_start_at"> -->
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
                                    <!-- <input type="date" id='datepicker2' class="form-control" name="promo_end_at"> -->
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
                </div>

                <!-- Display status message -->
                <div class="statusMsg"></div>
                
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success submit" id="Submit">SUBMIT</button>
                    <!-- <button type="button" class="btn btn-success editbutton" id="editbutton">Edit</button> -->
                </div>
            </div>
        </div>
    </div>
</body>
<script>



    function userAction(type, id){

        id = (typeof id == "undefined")?'':id;
        var userData = '', frmElement = '';

        if(type == 'addImagesDetails'){
            frmElement = $("#modalUserAddEdit");
            userData = frmElement.find('form').serialize();
        }
        else if (type == 'edit'){
            frmElement = $("#modalUserAddEdit");
            userData = frmElement.find('form').serialize();
        }
        else{
            frmElement = $(".row");
            userData = 'id='+id;
        }

        frmElement.find('.statusMsg').html('');

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('Welcome/'); ?>'+type,
            dataType: 'JSON',
            data: userData,
            beforeSend: function(){
                frmElement.find('form').css("opacity", "0.5");
            },
            success:function(resp){
                frmElement.find('.statusMsg').html(resp.msg);
                if(resp.status == 1){
                    if(type == 'addImagesDetails'){
                        frmElement.find('form')[0].reset();
                    }
                    getUsers();
                }
                frmElement.find('form').css("opacity", "");
            }
        });
    }

    // Edit data(fill form)
    function editImagesDetails(id) {
        $.post("<?php echo base_url('Welcome/imgData/'); ?>", {id: id}, function(data) {
            $('#id').val(data.id);
            $('#header_title').val(data.header_title);
            $('#description').val(data.description);
            $('#cta_text').val(data.cta_text);
            $('#header_url').val(data.header_url);
            $('#cta_url').val(data.cta_url);
            $('#bg_desk_url').val(data.bg_desk_url);
            $('#bg_mob_url').val(data.bg_mob_url);
            $('#display_order').val(data.display_order);
            $('input[name="is_promo"] :checked').val();
            $('#datepicker1').val(data.promo_start_at);
            $('#datepicker2').val(data.promo_end_at);
            $("#"+ data.is_promo).prop("checked", true);
        }, "json");
    }
    

    // Actions on modal show and hidden events
    $(function(){
        $('#modalUserAddEdit').on('show.bs.modal', function(e){
            var type = $(e.relatedTarget).attr('data-type');
            var userFunc = "userAction('addImagesDetails');";
            $('#hlabel').text('Add New');

            if(type == 'edit'){
                userFunc = "userAction('edit');";
                var rowId = $(e.relatedTarget).attr('rowID');
                editImagesDetails(rowId);
                $('#hlabel').text('Edit');
            }
            $('#Submit').attr("onclick", userFunc);
        });
        
        $('#modalUserAddEdit').on('hidden.bs.modal', function(){
            $('#Submit').attr("onclick", "");
            $(this).find('form')[0].reset();
            $(this).find('.statusMsg').html('');
        });
    });

</script>
</html>