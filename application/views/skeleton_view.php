<?php $this->load->view("common/header"); ?>
			<link href="<?php echo back_skin; ?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />			
     	<div class="kt-subheader  kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title"><?php echo $title;?></h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									
									<div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
										<input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
										<span class="kt-input-icon__icon kt-input-icon__icon--right">
											<span><i class="flaticon2-search-1"></i></span>
										</span>
									</div>
								</div>

               <div class="kt-subheader__toolbar">
									<div class="kt-subheader__wrapper">
										<a href="#" class="btn kt-subheader__btn-secondary">Today</a>
										<a href="#" class="btn kt-subheader__btn-secondary">Month</a>
										<a href="#" class="btn kt-subheader__btn-secondary">Year</a>
										<a href="#" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip" title="Select dashboard daterange" data-placement="left">
											<span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Today</span>&nbsp;
											<span class="kt-subheader__btn-daterange-date" id="kt_dashboard_daterangepicker_date">Aug 16</span>
											<i class="flaticon2-calendar-1"></i>
										</a>
										<div class="dropdown dropdown-inline" data-toggle-="kt-tooltip" title="Quick actions" data-placement="left">
											<a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
													</g>
												</svg>

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

												<!--begin::Nav-->
												<ul class="kt-nav">
													<li class="kt-nav__head">
														Add anything or jump to:
														<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-drop"></i>
															<span class="kt-nav__link-text">Order</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
															<span class="kt-nav__link-text">Ticket</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
															<span class="kt-nav__link-text">Goal</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-new-email"></i>
															<span class="kt-nav__link-text">Support Case</span>
															<span class="kt-nav__link-badge">
																<span class="kt-badge kt-badge--brand kt-badge--rounded">5</span>
															</span>
														</a>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__foot">
														<a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
														<a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
													</li>
												</ul>
	
												<!--end::Nav-->
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid" style="width:100%">

						<div class="row">
								<div class="alert alert-light alert-elevate" role="alert" style="width:100%">
								
								<div class="alert-text"><span class="kt-font-success kt-font-boldest"></span>
									 

   <!-- start acourdium -->

<div class="kt-portlet " style="margin-bottom: 0px !important;">

<div class="kt-portlet__body" style="padding: 0px !important;">
<!--begin::Accordion-->
<div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample6">
<div class="card">
<div class="card-header" id="headingOne6">
<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne6" aria-expanded="false" aria-controls="collapseOne6">
<i class="flaticon-pie-chart-1"></i> User Information Add Details
</div>
</div>
<div id="collapseOne6" class="collapse" aria-labelledby="headingOne6" data-parent="#accordionExample6" style="">
<div class="card-body">


<div class="kt-portlet">
<div class="kt-portlet__head">
<div class="kt-portlet__head-label">
<h3 class="kt-portlet__head-title">
Add New User
</h3>
</div>
</div>
 
<!--begin::Form-->
<form class="kt-form kt-form--label-right" id="user-form" method="POST">
<input type="hidden" name="id" value="<?php echo isset($view[0]->id) ? $view[0]->id : ''  ?>">
<div class="kt-portlet__body">
<div class="form-group row">
<div class="col-lg-4">
<label> Customer Type:</label>
<input type="text" class="form-control" placeholder="Enter Customer Type " id="cust_type" name="cust_type" >

</div>
<div class="col-lg-4">
<label>Customer Name:</label>
<input type="text" class="form-control" placeholder="Enter Customer Name" id="cust_name" name="cust_name">
</div>
<div class="col-lg-4">
<label>Customer Country :</label>
<input type="text" class="form-control" placeholder="Enter Customer Country" id="cust_country" name="cust_country">

</div>
</div>  
<div class="form-group row">
<div class="col-lg-4">
<label>Customer City:</label>
<input type="text" class="form-control" placeholder="Enter  City" id="cust_city" name="cust_city">
</div>
<div class="col-lg-4">
<label>Customer Region:</label>
<input type="text" class="form-control" placeholder="Enter Customer Region " id="cust_region" name="cust_region">
</div>
<div class="col-lg-4">
<label class="">Customer Zip:</label>
<input type="text" class="form-control" placeholder="Enter Customer  Zip"id="cust_zip" name="cust_zip">
</div>
</div>  
<div class="form-group row">
<div class="col-lg-4">
<label>Customer Email:</label>
<input type="text" class="form-control" placeholder="Enter Customer  Email" id="cust_email" name="cust_email">
</div>
<div class="col-lg-4">
<label>Customer Office Phone:</label>
<input type="text" class="form-control" placeholder="Enter Customer   Office Phone " id="cust_officephone" name="cust_officephone">
</div>
<div class="col-lg-4">
<label class="">Customer  Mobile Number:</label>
<input type="text" class="form-control" placeholder="Enter  Customer  Mobile Number" id="cust_mobile" name="cust_mobile">
</div>
</div>  

<div class="form-group row">
<div class="col-lg-4">
<label>Customer Fax:</label>
<input type="text" class="form-control" placeholder="Enter Customer Fax" id="cust_fax" name="cust_fax" >
</div>
<div class="col-lg-4">
<label>Customer Website:</label>
<input type="text" class="form-control" placeholder="Enter Customer Website" id="cust_website" name="cust_website">
</div>
<div class="col-lg-4">
<label>Customer Address:</label>
<textarea class="form-control edited" rows="1" id="cust_add1" name="cust_add1" placeholder="Enter Your Address"></textarea>

</div>
</div> 

<div class="form-group row">

<div class="col-lg-4">
<label class=""> Customer Address2:</label>
<textarea class="form-control edited" rows="1" id="cust_add2" name="cust_add2" placeholder="Enter Your Address"></textarea>
</div>

</div>  
 </div>
 <div class="kt-portlet__foot">
<div class="kt-form__actions">
<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-8">
<!-- <button type="submit" class="btn btn-primary float-right mr-2" id="Customerdetail_submit">Submit</button> -->

<button type="submit" id="Customerdetail_submit" class="btn btn-primary float-right mr-2"><?php echo isset($view[0]->id) ? 'Update' : 'Submit' ?></button>

<button type="reset" class="btn btn-secondary float-right mr-2">Cancel</button></div>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
</div>
</div>
</div>
</form>
<!--end::Form-->
</div>
</div>
</div>
</div>
</div>
<!--end::Accordion-->
</div>

						<!-- end:: acourdium  -->

								</div>
							</div>
							</div>
						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						

							<div class="alert alert-light alert-elevate" style="width:100%" role="alert">
								
<div ng-controller="users" data-ng-init="usersInformation()" class="container">
	<div class="row">
		<div class="add_panel" style="display: none">
			<a ng-click="addModal();" class="model_form btn btn-primary">
				<i class="glyphicon glyphicon-plus"></i> Add User</a>
            <div class="clearfix"></div>
		</div>
		<div class="table-responsive">
		
					    <table id="userdetails_list" class="table table-no-border" cellspacing="0" width="100%" style="text-align: left">

				<thead>
					<tr>
						<th>S.No</th>
						<th>Action</th>

						<th>Customer Type</th>
						<th>Customer Name</th>
						<th>Address1</th>
						<th>Address2</th>
						<th>Country</th>
						<th>City</th>
						<th>Region</th>
						<th>Zip</th>
						<th>Email</th>
						<th>Office Phone</th>
						<th>Mobile</th>
						<th>Fax Number</th>
						<th>Website</th>
					</tr>
				</thead>
				<tbody></tbody>
				
			</table>
		</div>
		</div>
    
    
<!-- Form modal -->
 
<!-- /form modal -->     
</div>
	</div>

							<!-- begin:: Main Content -->

							<!-- End:: Main Content -->
				


						<?php  $this->load->view("common/footer"); ?>

	<script src="<?php echo back_skin; ?>assets/lib/jquery.mockjax.js"></script>
	<script src="<?php echo back_skin; ?>assets/lib/jquery.form.js"></script>
	<script src="<?php echo back_skin; ?>assets/dist/jquery.validate.js"></script>


<script src="<?php echo back_skin; ?>assets/customjs/usersdetails.js"></script>
<script src="<?php echo back_skin; ?>assets/plugins/custom/datatables/jquery.dataTables.min.js"></script>




<!------->

<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js "></script>

<!------->

<script src="<?php echo back_skin; ?>assets/js/pages/components/extended/sweetalert2.js" type="text/javascript"></script>

<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js" type="text/javascript"></script>

 

<style type="text/css">
	.table-responsive {
      overflow-x: inherit !important;
     }
     .odd-row{
     	background-color: #0097ff14;
     }
     .error{
     color: #e73d4a;
     }
</style>
