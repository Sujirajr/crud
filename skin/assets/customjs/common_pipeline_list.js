var table;
$(document).ready(function() {

    table = $('#datatable-common_pipeline').DataTable({ 

    	"pagingType": 'full_numbers',
        "iDisplayLength": 10,
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "order": [],

        "ajax": {
            "url" : base_url+'basic_settings/common_pipeline_list',
            "type": "POST",
            "data": function ( data ) {
            	  
            }
        },
        "columnDefs": [
        { 
            "targets": [ 0 ],
            "orderable": false,
        },
        ],

    });
});



$(document).ready(function() {
    $("#common_pipeline_save").click(function(e){
        e.preventDefault();
        var pipeline_name            = $("#pipeline").val();
        var pipeline_method          = $('#pipeline_method').val();
        var pipeline_stages          = $('#pipeline_stages').val();
        var description              = $('#common_pipeline_description').val();
       
         if (pipeline_name=="") {
         $('#pipeline').addClass('is-invalid');
         return false;
         } else{
            $('#pipeline').removeClass('is-invalid');
         } 
         if (pipeline_method=="") {
         $('#pipeline_method').addClass('is-invalid');
         return false;
         } else{
            $('#pipeline_method').removeClass('is-invalid');
         } 
          if (pipeline_stages=="") {
         $('#pipeline_stages').addClass('is-invalid');
         return false;
         } else{
            $('#pipeline_stages').removeClass('is-invalid');
         } 



        
          
        $.ajax({
        type: "POST",
        url : base_url+'common/db_add_update',
        data: {What:'common_pipeline_save',pipeline_name:pipeline_name,pipeline_method:pipeline_method,pipeline_stages:pipeline_stages,description:description},
        success: function(data){
        $('#addcommonpipeline').modal('hide');
           table.ajax.reload();
        $('#form_common_pipeline_save')[0].reset();
        },
       
      });

    }); 

});

$(document).on('click', '.kt_common_pipeline_process_edit', function () {
    
    var id = $(this).attr('id');
    $.ajax({
        type: "POST",
        url : base_url+'common/ajax_edit_data',
        data: {table:'qrecruitment_common_pipeline_process',id:id},
        success: function(data){

            var object = JSON.parse(data);

            $.each(object, function(key, value)
              {
                 $('#e_process_id').val(value.id);
                 $('#e_process_name').val(value.process_name);
                 $('#e_process_description').val(value.description);
                // $('#e_payhead_category').val(value.payhead_category);
              
              });
            $('#editcommonpipelineprocess').modal('show');
       },
       
  });
     
});


$(document).ready(function() {
    $("#common_pipeline_proces_update").click(function(e){
        e.preventDefault();
         var process_id      = $("#e_process_id").val();
         var process_name    = $("#e_process_name").val();
         var description     = $('#e_process_description').val();
       
         if (process_name=="") {
         $('#e_process_name').addClass('is-invalid');
         return false;
         } else{
            $('#e_process_name').removeClass('is-invalid');
         } 
          
        $.ajax({
        type: "POST",
        url : base_url+'common/db_add_update',
        data: {What:'common_pipeline_proces_update',id:process_id,process_name:process_name,description:description},
        success: function(data){
        $('#editcommonpipelineprocess').modal('hide');
           table.ajax.reload();
        $('#form_common_pipeline_process_update')[0].reset();
        },
       
   });

    }); 

});



    $(document).on('click', '.kt_common_pipeline_delete', function () {
     var id = $(this).attr('id');
   
       Swal.fire({
        title: "Are you sure?",
        text: "You will not be able to recover this Common Pipeline!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel it!" }).then(result => {
        if (result.value) {

        $.ajax({
              type: "POST",
              url : base_url+'common/db_add_update',
              data: {What:'common_pipeline_delete',id:id},
              success: function(data) {
                  table.ajax.reload();
                  swal.fire("Deleted!", "Your Common Pipeline has been deleted.", "success");
             }
          });
          } else {
            swal.fire("Cancelled", "Your Common Pipeline is safe :)", "error");

          }
        })
     });
    $(document).ready(function()
    {
        $('#pipeline_stages').select2();
    });
     $(document).ready(function() {

        $('select[name="pipeline"]').on('change', function() {
            var pipeline = $(this).val();
            if(pipeline == 1) {
                $.ajax({
                    url:base_url+'basic_settings/get_recruitment',
                    type: "POST",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="pipeline_method"]').empty();
                        $('select[name="pipeline_method"]').append('<option value="'+ '' +'">'+ 'select' +'</option>');
                        $.each(data, function(key, value) {
                        $('select[name="pipeline_method"]').append('<option value="'+ value.id +'">'+ value.method_name +'</option>');
                        });
                    }
                });
            }
            else if(pipeline == 2) {
                $.ajax({
                    url:base_url+'basic_settings/get_onboard',
                    type: "POST",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="pipeline_method"]').empty();
                        $('select[name="pipeline_method"]').append('<option value="'+ '' +'">'+ 'select' +'</option>');
                        $.each(data, function(key, value) {
                        $('select[name="pipeline_method"]').append('<option value="'+ value.id +'">'+ value.method_name +'</option>');
                        });
                    }
                });
            }
              else if(pipeline == 3) {
                $.ajax({
                    url:base_url+'basic_settings/get_documentation',
                    type: "POST",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="pipeline_method"]').empty();
                        $('select[name="pipeline_method"]').append('<option value="'+ '' +'">'+ 'select' +'</option>');
                        $.each(data, function(key, value) {
                        $('select[name="pipeline_method"]').append('<option value="'+ value.id +'">'+ value.method_name +'</option>');
                        });
                    }
                });
            }
            else{
                $('select[name="pipeline_method"]').empty();
            }
        });
         
    });
