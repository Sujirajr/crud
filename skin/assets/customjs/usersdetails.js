    /*******************************************************************************
     * Author : Bincy                                                              *
     * Detail : User Information save,update,delete
     * Date   : 24-04-2020                                                         *
     *******************************************************************************/
$(document).ready(function() {
    var table = $('#userdetails_list').DataTable({
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

// save new Customer details
  $(document).on('click', '#Customerdetail_submit', function(){

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


            }
        });
        return false;
    });

//alert for submission
  $(document).on('click', '#Customerdetail_submit', function(){
   swal({
     title: "Done",
     text: " Submission Sucessfully ",
     timer: 1500,
      showConfirmButton: false,
     type: 'success'
   });
 });
  
  //alert for update submission
  $(document).on('click', '#Customerdetail_update', function(){
   swal({
     title: "Done",
     text: "Update Sucessfully",
     timer: 1500,
      showConfirmButton: false,
     type: 'success'
   });
 });

$('.kt_update_usersinformation').on('click',function(){
    $("#edit_id").val($(this).data('id'));
    $("#edit_type").val($(this).data('cust_type'));
    $("#edit_name").val($(this).data('cust_name'));
    $("#edit_addr1").val($(this).data('cust_add1'));
    $("#edit_addr2").val($(this).data('cust_add2'));
    $("#edit_country").val($(this).data('cust_country'));
    $("#edit_city").val($(this).data('cust_city'));
    $("#edit_region").val($(this).data('cust_region'));
    $("#edit_zip").val($(this).data('cust_zip'));
    $("#edit_email").val($(this).data('cust_email'));
    $("#edit_officephone").val($(this).data('cust_officephone'));
    $("#edit_mobile").val($(this).data('cust_mobile'));
    $("#edit_fax").val($(this).data('cust_fax'));
    $("#edit_website").val($(this).data('cust_website'));

  });



//user information edit 
  $(document).on('click', '#Customerdetail_update', function(){
        var id               = $('#edit_id').val();
        var cust_type        = $('#edit_type').val();
        var cust_name        = $('#edit_name').val();
        var cust_add1        = $('#edit_addr1').val();
        var cust_add2        = $('#edit_addr2').val();
        var cust_country     = $('#edit_country').val();
        var cust_city        = $('#edit_city').val();
        var cust_region      = $('#edit_region').val();
        var cust_zip         = $('#edit_zip').val();
        var cust_email       = $('#edit_email').val();
        var cust_officephone = $('#edit_officephone').val();
        var cust_mobile      = $('#edit_mobile').val();
        var cust_fax         = $('#edit_fax').val();
        var cust_website     = $('#edit_website').val();
        
    $.ajax({
      type : "POST",
      url  : base_url+"welcome/user_information_edit",
      dataType : "JSON",
      data : {id:id,cust_type:cust_type,cust_name:cust_name,cust_add1:cust_add1,cust_add2:cust_add2,cust_country:cust_country,cust_city:cust_city,cust_region:cust_region,cust_zip:cust_zip,cust_email:cust_email,cust_officephone:cust_officephone,cust_mobile:cust_mobile,cust_fax:cust_fax,cust_website:cust_website},
      success: function(data){
        $("#edit_id").val("");
        $("#edit_type").val("");
        $("#edit_name").val("");
        $("#edit_addr1").val("");
        $("#edit_addr2").val("");
        $("#edit_country").val("");
        $("#edit_city").val("");
        $("#edit_region").val("");
        $("#edit_zip").val("");
        $("#edit_email").val("");
        $("#edit_officephone").val("");
        $("#edit_mobile").val("");
        $("#edit_fax").val("");
        $("#edit_website").val("");
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

