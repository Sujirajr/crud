
 <?php $this->load->view("common/header"); ?>
				<link href="<?php echo back_skin; ?>assets/plugins/custom/kanban/kanban.bundle.css" rel="stylesheet" type="text/css" />		
<script src="<?php echo back_skin; ?>assets/plugins/custom/kanban/kanban.bundle.js" type="text/javascript"></script>
     	<div class="kt-subheader  kt-grid__item" id="kt_subheader"></div>
						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

							

							<!-- begin:: Main Content -->
    <div id="myKanban"></div>
    


							<!-- End:: Main Content -->
						

						<?php  $this->load->view("common/footer"); ?>

 <script>
 // var board=array();
  var board=<?php echo $st; ?>;
 
      var KanbanTest = new jKanban({
        element: "#myKanban",
        gutter: "0",
        itemHandleOptions:{
          enabled: true,
        },
        click: function(el) {
          console.log("Trigger on all items click!");
        },
        dropEl: function(el, target, source, sibling){
          callajax(el.getAttribute('data-job_id'),el.getAttribute('data-process_id'));
        /*	console.log(el.getAttribute('data-name'));
        	console.log(source.parentElement.getAttribute('data-id'));
        	console.log('-');
         console.log(target.parentElement.getAttribute('data-id'));*/
        //  console.log(el, target, source, sibling)
        },
        
        
        boards: board,
      });

      var toDoButton = document.getElementById("addToDo");
      toDoButton.addEventListener("click", function() {
        KanbanTest.addElement("_todo", {
          title: "Test Add"
        });
      });

     function callajax(job_id,process_id){
alert('Ajax call & Update'+' for job id - '+job_id +' process id - '+process_id);
     }


 
    </script>
   


