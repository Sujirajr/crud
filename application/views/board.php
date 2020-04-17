
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
      var KanbanTest = new jKanban({
        element: "#myKanban",
        gutter: "40px",
        widthBoard: "150px",
        itemHandleOptions:{
          enabled: true,
        },
        click: function(el) {
         // console.log("Trigger on all items click!");
        },
        dropEl: function(el, target, source, sibling){
        	console.log(el.getAttribute('data-name'));
        	console.log(source.parentElement.getAttribute('data-id'));
        	console.log('-');
         console.log(target.parentElement.getAttribute('data-id'));
        //  console.log(el, target, source, sibling)
        },
        
        
        boards: [
          {
            id: "_todo",
            title: "To Do",
            class: "info,good",
            dragTo: ["_working"],
            item: [
              {
                id: "_test_delete",
                name: "1",
                title: "Try drag this",
                drag: function(el, source) {
                  //console.log("START DRAG: " + el.dataset.eid);
                },
                dragend: function(el) {
                 // console.log("END DRAG: " + el.dataset.eid);
                },
                drop: function(el) {
                 // console.log("DROPPED: " + el.dataset.eid);
                }
              },
              {
                title: "Try Click This!",
                click: function(el) {
                //  alert("click");
                },
                class: ["peppe", "bello"]
              }
            ]
          },
          {
            id: "_working",
            title: "Working",
            class: "warning",
            item: [
              {
                title: "Do Something!"
              },
              {
                title: "Run?"
              }
            ]
          },
          {
            id: "_done",
            title: "Done",
            class: "success",
            dragTo: ["_working"],
            item: [
              {
                title: "All right"
              },
              {
                title: "Ok!"
              }
            ]
          }
        ]
      });

      var toDoButton = document.getElementById("addToDo");
      toDoButton.addEventListener("click", function() {
        KanbanTest.addElement("_todo", {
          title: "Test Add"
        });
      });

     

     
    </script>


