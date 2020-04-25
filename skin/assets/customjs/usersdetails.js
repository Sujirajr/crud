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
            url  : base_url+"welcome/costchildsave",
            dataType : "JSON",
            data : {cust_type:cust_type,cust_name:cust_name,cust_add1:cust_add1,cust_add2:cust_add2,cust_country:cust_country,cust_city:cust_city,cust_region:cust_region,cust_zip:cust_zip,cust_email:cust_email,cust_officephone:cust_officephone,cust_mobile:cust_mobile,cust_fax:cust_fax,cust_website:cust_website},
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
});

    