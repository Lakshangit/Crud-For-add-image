

    // function getUsers(){
    //     $.post( "<?php echo base_url('Welcome/listview/'); ?>", function( data ){
    //         $('#userData').html(data);
    //     });
    // }


    // function userAction(type, id){

    //     id = (typeof id == "undefined")?'':id;
    //     var userData = '', frmElement = '';

    //     if(type == 'addImagesDetails'){
    //         frmElement = $("#modalUserAddEdit");
    //         userData = frmElement.find('form').serialize();
    //     }
    //     else if (type == 'edit'){
    //         frmElement = $("#modalUserAddEdit");
    //         userData = frmElement.find('form').serialize();
    //     }
    //     else{
    //         frmElement = $(".row");
    //         userData = 'id='+id;
    //     }

    //     frmElement.find('.statusMsg').html('');

    //     $.ajax({
    //         type: 'POST',
    //         url: '<?php echo base_url('Welcome/'); ?>'+type,
    //         dataType: 'JSON',
    //         data: userData,
    //         beforeSend: function(){
    //             frmElement.find('form').css("opacity", "0.5");
    //         },
    //         success:function(resp){
    //             frmElement.find('.statusMsg').html(resp.msg);
    //             if(resp.status == 1){
    //                 if(type == 'addImagesDetails'){
    //                     frmElement.find('form')[0].reset();
    //                 }
    //                 getUsers();
    //             }
    //             frmElement.find('form').css("opacity", "");
    //         }
    //     });
    // }

    // Edit data(fill form)
    // function editImagesDetails(id) {
    //     $.post("<?php echo base_url('Welcome/imgData/'); ?>", {id: id}, function(data) {
    //         $('#id').val(data.id);
    //         $('#header_title').val(data.header_title);
    //         $('#description').val(data.description);
    //         $('#cta_text').val(data.cta_text);
    //         $('#header_url').val(data.header_url);
    //         $('#cta_url').val(data.cta_url);
    //         $('#bg_desk_url').val(data.bg_desk_url);
    //         $('#bg_mob_url').val(data.bg_mob_url);
    //         $('#display_order').val(data.display_order);
            // $('input:radio[name="is_promo"').filter('[value="' +data.is_promo+ '"]').attr('checked', true);
            // $('input[name=is_promo]:checked').val();
            // $('#datepicker1').val(data.promo_start_at);
            // $('#datepicker2').val(data.promo_end_at);
            // $("input").datepicker1({dateFormat: 'dd,mm,yyyy'});

    //     }, "json");
    // }
    // Actions on modal show and hidden events
    // $(function(){
    //     $('#modalUserAddEdit').on('show.bs.modal', function(e){
    //         var type = $(e.relatedTarget).attr('data-type');
    //         var userFunc = "userAction('addImagesDetails');";
    //         $('#hlabel').text('Add New');

    //         if(type == 'edit'){
    //             userFunc = "userAction('edit');";
    //             var rowId = $(e.relatedTarget).attr('rowID');
    //             editImagesDetails(rowId);
    //             $('#hlabel').text('Edit');
    //         }
    //         $('#Submit').attr("onclick", userFunc);
    //     });
        
    //     $('#modalUserAddEdit').on('hidden.bs.modal', function(){
    //         $('#Submit').attr("onclick", "");
    //         $(this).find('form')[0].reset();
    //         $(this).find('.statusMsg').html('');
    //     });
    // });

