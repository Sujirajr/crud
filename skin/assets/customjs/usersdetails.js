    /*******************************************************************************
     * Author : Bincy                                                              *
     * Detail : User Information save,update,delete
     * Date   : 24-04-2020                                                         *
     *******************************************************************************/


$(document).ready(function() {
  // alert("njan vanu");

  jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});



    var table = $('#userdetails_list').DataTable({
        "dom"        : 'Bfrtip',
        "lengthMenu" : [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
        "buttons": [
            {
             extend: 'pageLength',
             className:'btn btn-danger btn-outline-brand btn-elevate btn-pill'  
            },
            {
             extend: 'copy',
             className:'btn btn-outline-brand btn-elevate btn-pill' 
            },
            {
              extend: 'csv',
              className:'btn btn-outline-brand btn-elevate btn-pill'
            },
            {
              extend: 'excel',
              className:'btn btn-outline-brand btn-elevate btn-pill'
            },
            { 
              extend: 'pdf',
              className:'btn btn-outline-brand btn-elevate btn-pill'
            },
            {
                extend: 'print',
                text: 'Print all (not just selected)',
                className:'btn btn-outline-brand btn-elevate btn-pill',
                exportOptions: {
                    modifier: {
                        selected: null
                    }
                }
            }
        ],
        "select": true,
        "pagingType": 'full_numbers',
        "iDisplayLength": 10,
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "stripeClasses": [ 'odd-row', 'even-row' ],
        "order": [],

        "ajax": {
            "url" : base_url+'welcome/userdetails_lists',
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


  $(document).on('click', '#Customerdetail_submit', function(){

         $('#user-form').validate(  {
          rules: {
            cust_type : "required",
            cust_email: {
              required: true,
              email: true
            },
            cust_name    : "required",
            cust_zip     : "required",
            cust_region  : "required",
            cust_website : "required",
            cust_mobile  : "required",



          },
          messages: {
            cust_type  : "Please specify your Customer Type",
            cust_email : {
              required: "We need your email address to contact you",
              email: "Your email address must be in the format of name@domain.com"
            },
            cust_mobile   : "Makes the element require a number",
            cust_name     : "Please specify your Customer Name",
            cust_zip      : "Makes the element require a number",
            cust_region   : "Please specify your Customer Region",
            cust_website  : "Please specify your Customer Website",


          }
         });

        
        if (!$('#user-form').valid()) // check if form is valid
        {
           return false;
        }


        var cust_type        = $('#cust_type').val();
        var cust_name        = $('#cust_name').val();
        var cust_add1        = $('#cust_add1').val();
        var cust_add2        = $('#cust_add2').val();
        var cust_country     = $('#cust_country').val();
        var cust_city        = $('#cust_city').val();
        var cust_region      = $('#cust_region').val();
        var cust_zip         = $('#cust_zip').val();
        var cust_email       = $('#cust_email').val();
        var cust_officephone = $('#cust_officephone').val();
        var cust_mobile      = $('#cust_mobile').val();
        var cust_fax         = $('#cust_fax').val();
        var cust_website     = $('#cust_website').val();

        $.ajax({
            type : "POST",
            url  : base_url+"welcome/userinformation_save",
            dataType : "JSON",
            data : {
                      cust_type:cust_type,
                      cust_name:cust_name,
                      cust_add1:cust_add1,
                      cust_add2:cust_add2,
                      cust_country:cust_country,
                      cust_city:cust_city,
                      cust_region:cust_region,
                      cust_zip:cust_zip,
                      cust_email:cust_email,
                      cust_officephone:cust_officephone,
                      cust_mobile:cust_mobile,
                      cust_fax:cust_fax,
                      cust_website:cust_website
                    },
            success: function(data){
                // console.log(data);
                $('#cust_type').val("");
                $('#cust_name').val("");
                $('#cust_add1').val("");
                $('#cust_add2').val("");
                $('#cust_country').val("");
                $('#cust_city').val("");
                $('#cust_region').val("");
                $('#cust_zip').val("");
                $('#cust_email').val("");
                $('#cust_officephone').val("");
                $('#cust_mobile').val("");
                $('#cust_fax').val("");
                $('#cust_website').val("");

          swal({
            title: "Done",
            text: " Submission Sucessfully ",
            timer: 1500,
            showConfirmButton: false,
            type: 'success'
          });


            }
        });
        return false;
    });

  
  //alert for update submission\
  $(document).on('click', '#Customerdetail_update', function(){
   swal({
     title: "Done",
     text: "Update Sucessfully",
     timer: 1500,
      showConfirmButton: false,
     type: 'success'
   });
 });

$(document).on('click', '.Customerdetail_update', function(){

           var user_id = $(this).attr("data-id");  
           $.ajax({  
               url  : base_url+"welcome/user_information_click",

                method:"POST",  
                data:{user_id:user_id},  
                dataType:"json",  
                success:function(data)  
                {
                     console.log(data.id);  
                   $('#cust_type').val(data.cust_type);  
                     $('#cust_name').val(data.cust_name); 
                     $('#cust_add1').val(data.cust_add1);  
                     $('#cust_add2').val(data.cust_add2); 
                     $('#cust_country').val(data.cust_country);  
                     $('#cust_city').val(data.cust_city); 
                     $('#cust_region').val(data.cust_region);  
                     $('#cust_zip').val(data.cust_zip); 


                    $('#cust_email').val(data.cust_email);  
                     $('#cust_officephone').val(data.cust_officephone); 
                     $('#cust_mobile').val(data.cust_mobile);  
                     $('#cust_fax').val(data.cust_fax);  
                     $('#cust_website').val(cust_website);  
                }  
           })  
      });  



//user information edit 
  $(document).on('click', '#Customerdetail_submit', function(){
        var id               = $('#user_id').val();
        var cust_type        = $('#cust_type').val();
        var cust_name        = $('#cust_name').val();
        var cust_add1        = $('#cust_add1').val();
        var cust_add2        = $('#cust_add2').val();
        var cust_country     = $('#cust_country').val();
        var cust_city        = $('#cust_city').val();
        var cust_region      = $('#cust_region').val();
        var cust_zip         = $('#cust_zip').val();
        var cust_email       = $('#cust_email').val();
        var cust_officephone = $('#cust_officephone').val();
        var cust_mobile      = $('#cust_mobile').val();
        var cust_fax         = $('#cust_fax').val();
        var cust_website     = $('#cust_website').val();
        
    $.ajax({
      type : "POST",
      url  : base_url+"welcome/user_information_edit",
      dataType : "JSON",
      data : {id:id,cust_type:cust_type,cust_name:cust_name,cust_add1:cust_add1,cust_add2:cust_add2,cust_country:cust_country,cust_city:cust_city,cust_region:cust_region,cust_zip:cust_zip,cust_email:cust_email,cust_officephone:cust_officephone,cust_mobile:cust_mobile,cust_fax:cust_fax,cust_website:cust_website},
      success: function(data){
        $("#user_id").val("");
        $("#cust_type").val("");
        $("#cust_name").val("");
        $("#cust_add1").val("");
        $("#cust_add2").val("");
        $("#cust_country").val("");
        $("#cust_city").val("");
        $("#cust_region").val("");
        $("#cust_zip").val("");
        $("#cust_email").val("");
        $("#cust_officephone").val("");
        $("#cust_mobile").val("");
        $("#cust_fax").val("");
        $("#cust_website").val("");
      }
    });
    return false;
  });
//delete for userinformation
     $(document).on('click', '.kt_del_usersinformation', function () {
     var id = $(this).attr('id');
       Swal.fire({
        title: "Are you sure?",
        text: "You will not be able to recover this Payroll  Master Entry also loss these Employee Salary Details!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel it!" }).then(result => {
        if (result.value) {

        $.ajax({
              type: "POST",
              url : base_url+'welcome/user_delete',
              data: {id:id},
              success: function(data) {
                  table.ajax.reload();
                  swal.fire("Deleted!", "Your Payroll  Master Entry has been deleted.", "success");
             }
          });
          } else {
            swal.fire("Cancelled", "Your Payroll  Master Entry is safe :)", "error");

          }
        })
     });

});

