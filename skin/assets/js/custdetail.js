$(document).ready(function() {
// <----------------------------------------------------------------------------------------->
    $.fn.dataTable.ext.errMode = 'none';

    var datatable= $('#datatable-users_information').dataTable({
            // "bDestroy": true,
            "processing": true,
             "serverSide": true,
            "scrollX": true,
             "order": [],
            "ajax": {
                url : base_url+'Welcome/get_users',
                type : 'POST'
            },
        "fnDrawCallback": function(settings){
        $('[data-toggle="tooltip"]').tooltip();          
        },

         
            
        
      }).yadcf([
       {column_number : 2,text_data_delimiter: ",", filter_type: "auto_complete" },
       {column_number : 3, text_data_delimiter: ",", filter_type: "auto_complete"},
       {column_number : 4, text_data_delimiter: ",", filter_type: "auto_complete"},
       {column_number : 5,text_data_delimiter: ",", filter_type: "auto_complete" },
       {column_number : 6, text_data_delimiter: ",", filter_type: "auto_complete"},
       {column_number : 7, text_data_delimiter: ",", filter_type: "auto_complete"},
       {column_number : 9, text_data_delimiter: ",", filter_type: "auto_complete"},
       {column_number : 10, text_data_delimiter: ",", filter_type: "auto_complete"},

       
    // {column_number : 9,text_data_delimiter: ",", filter_type: "auto_complete"}
      ]);



});

