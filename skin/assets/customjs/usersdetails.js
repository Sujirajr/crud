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
  
    $(document).on('click','.Customerdetail_submit',function(){

  // $(document).on('click','.Customerdetail_submit',function(e) {
    alert("F");

    $id=$("#id").val($(this).data('id'));
    $cust_type=$("#cust_type").val($(this).data('cust_type'));
    $cust_name=$("#cust_name").val($(this).data('cust_name'));
    $cust_add1=$("#cust_add1").val($(this).data('cust_add1'));
    $cust_add2=$("#cust_add2").val($(this).data('cust_add2'));
    $cust_country=$("#cust_country").val($(this).data('cust_country'));
    $cust_city=$("#cust_city").val($(this).data('cust_city'));
    $cust_region=$("#cust_region").val($(this).data('cust_region'));
    $cust_zip=$("#cust_zip").val($(this).data('cust_zip'));
   $cust_email= $("#cust_email").val($(this).data('cust_email'));
    $cust_officephone=$("#cust_officephone").val($(this).data('cust_officephone'));
    $cust_mobile=$("#cust_mobile").val($(this).data('cust_mobile'));
    $cust_fax=$("#cust_fax").val($(this).data('cust_fax'));
   $cust_website= $("#cust_website").val($(this).data('cust_website'));



    // var id=$(this).attr("id");
    // var cust_type=$(this).attr("cust_type");
    // var cust_name=$(this).attr("cust_name");
    // var cust_add1=$(this).attr("cust_add1");
    // var cust_add2=$(this).attr("cust_add2");
    // var cust_country=$(this).attr("cust_country");
    // var cust_city=$(this).attr("cust_city");
    // var cust_region=$(this).attr("cust_region");
    // var cust_zip=$(this).attr("cust_zip");
    // var cust_email=$(this).attr("cust_email");
    // var cust_officephone=$(this).attr("cust_officephone");
    // var cust_mobile=$(this).attr("cust_mobile");
    // var cust_fax=$(this).attr("cust_fax");
    // var cust_website=$(this).attr("cust_website");



    //             $('#id').val(id);

    //             $('#cust_type').val(cust_type);
    //             $('#cust_name').val(cust_name);
    //             $('#cust_add1').val(cust_add1);
    //             $('#cust_add2').val(cust_add2);
    //             $('#cust_country').val(cust_country);
    //             $('#cust_city').val(cust_city);
    //             $('#cust_region').val(cust_region);
    //             $('#cust_zip').val(cust_zip);
    //             $('#cust_email').val(cust_email);
    //             $('#cust_officephone').val(cust_officephone);
    //             $('#cust_mobile').val(cust_mobile);
    //             $('#cust_fax').val(cust_fax);
    //             $('#cust_website').val(cust_website);



     $.ajax({
            type : "POST",
            url  : base_url+"welcome/user_information_click",
            dataType : "JSON",
            data : {
                      id:id,
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
                // $('#cust_type').val("");
                // $('#cust_name').val("");
                // $('#cust_add1').val("");
                // $('#cust_add2').val("");
                // $('#cust_country').val("");
                // $('#cust_city').val("");
                // $('#cust_region').val("");
                // $('#cust_zip').val("");
                // $('#cust_email').val("");
                // $('#cust_officephone').val("");
                // $('#cust_mobile').val("");
                // $('#cust_fax').val("");
                // $('#cust_website').val("");


            }
        });
        return false;

  });


//user information edit 
  $(document).on('click', '.Updation_information', function(){
        var id               = $('#id').val();
        var cust_type        = $('#cust_type').val();
        var cust_name        = $('#cust_name').val();
        var cust_add1        = $('#cust_addr1').val();
        var cust_add2        = $('#cust_addr2').val();
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
        $("#id").val("");
        $("#cust_type").val("");
        $("#cust_name").val("");
        $("#cust_addr1").val("");
        $("#cust_addr2").val("");
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

