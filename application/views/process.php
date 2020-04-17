
 <?php $this->load->view("common/header"); ?>
<link href="<?php echo back_skin; ?>assets/css/pages/wizard/wizard-1.css" rel="stylesheet" type="text/css" />
<link href="<?php echo back_skin; ?>assets/plugins/custom/kanban/kanban.bundle.css" rel="stylesheet" type="text/css" />
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
						<!-- end:: Content Head -->

						<!-- begin:: Content -->
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">


							<!-- begin:: Main Content -->


						<!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h4 class="kt-font-boldest">Recruitment Pipline for Job ID #123</h4>
								</div>
								<div class="kt-subheader__toolbar">
									<a href="#" class="btn btn-default btn-bold">
										Back </a>
								</div>
							</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-portlet">
								<div class="kt-portlet__body kt-portlet__body--fit">
									<div class="kt-grid  kt-wizard-v1 kt-wizard-v1--white" id="kt_projects_add" data-ktwizard-state="step-first">


								<div class="kt-container" style="text-align: center;margin-top: 3%;">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h4 class="kt-font-boldest"><span class="kt-font-success">Recruitment Method </span>: <span class="kt-font-danger"> Agency </span></h4>
								</div>
							</div>
						</div>
					
					<hr></hr>

										<div class="kt-grid__item">

											<!--begin: Form Wizard Nav -->
											<div class="kt-wizard-v1__nav">
												<div class="kt-wizard-v1__nav-items">

													<!--doc: Replace A tag with SPAN tag to disable the step link click -->
													<div class="kt-wizard-v1__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
														<div class="kt-wizard-v1__nav-body">
															<div class="kt-wizard-v1__nav-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--xl">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
																	</g>
																</svg> </div>
															<div class="kt-wizard-v1__nav-label">
																Stage 1
															</div>
														</div>
													</div>
													<div class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
														<div class="kt-wizard-v1__nav-body">
															<div class="kt-wizard-v1__nav-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--xl">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" fill="#000000" opacity="0.3" />
																		<path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" fill="#000000" />
																	</g>
																</svg> </div>
															<div class="kt-wizard-v1__nav-label">
																	Stage 2
															</div>
														</div>
													</div>
													<div class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
														<div class="kt-wizard-v1__nav-body">
															<div class="kt-wizard-v1__nav-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--xl">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero" />
																		<circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
																	</g>
																</svg> </div>
															<div class="kt-wizard-v1__nav-label">
																	Stage 3
															</div>
														</div>
													</div>
													<div class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
														<div class="kt-wizard-v1__nav-body">
															<div class="kt-wizard-v1__nav-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--xl">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
																		<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
																	</g>
																</svg> </div>
															<div class="kt-wizard-v1__nav-label">
																Review
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end: Form Wizard Nav -->
										</div>
										<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v1__wrapper">

											<!--begin: Form Wizard Form-->
											<form class="kt-form" id="kt_projects_add_form">

												<!--begin: Form Wizard Step 1-->
												<div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
													<div class="kt-section kt-section--first">
														<div class="kt-wizard-v1__form">
<!--kamban-->

							<div class="row">
								<div class="col-lg-12">
									<div class="kt-portlet">
										<div class="kt-portlet__body">
											<div id="kanban2"></div>
										</div>
									</div>
								</div>
							</div>

							<!-- kamban -->


														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 1-->

												<!--begin: Form Wizard Step 2-->
												<div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
													<div class="kt-section kt-section--first">
														<div class="kt-wizard-v1__form">
															<!--kamban-->

							<div class="row">
								<div class="col-lg-12">
									<div class="kt-portlet">
										<div class="kt-portlet__body">
											<div id="kanban22"></div>
										</div>
									</div>
								</div>
							</div>

							<!-- kamban -->

														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 2-->

												<!--begin: Form Wizard Step 3-->
												<div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v1__form">
															<!--kamban-->

							<div class="row">
								<div class="col-lg-12">
									<div class="kt-portlet">
										<div class="kt-portlet__body">
											<div id="kanban222"></div>
										</div>
									</div>
								</div>
							</div>

							<!-- kamban -->

														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 3-->

												<!--begin: Form Wizard Step 4-->
												<div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
													<div class="kt-heading kt-heading--md">Completed Stages</div>
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v1__review">


															<div class="kt-wizard-v1__review-item">
																<div class="kt-wizard-v1__review-title">
																	Stage 1 &nbsp; &nbsp; <button type="button" class="btn btn-outline-success">Completed</button>
																</div>
																<div class="kt-wizard-v1__review-content">
																</div>
															</div>


																		<div class="kt-wizard-v1__review-item">
																<div class="kt-wizard-v1__review-title">
																	Stage 2 &nbsp; &nbsp; <button type="button" class="btn btn-outline-success">Completed</button>
																</div>
																<div class="kt-wizard-v1__review-content">
																</div>
															</div>

																		<div class="kt-wizard-v1__review-item">
																<div class="kt-wizard-v1__review-title">
																	Stage 3 &nbsp; &nbsp; <button type="button" class="btn btn-outline-danger">Pending</button>
																</div>
																<div class="kt-wizard-v1__review-content">
																</div>
															</div>



														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 4-->

												<!--begin: Form Actions -->
												<div class="kt-form__actions">
													<div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
														Previous
													</div>
													<div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
														Submit
													</div>
													<div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
														Next Step
													</div>
												</div>

												<!--end: Form Actions -->
											</form>

											<!--end: Form Wizard Form-->
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- end:: Content -->
					


							<!-- End:: Main Content -->
						

						<?php  $this->load->view("common/footer"); ?>

<script src="<?php echo back_skin; ?>assets/js/pages/custom/projects/add-project.js" type="text/javascript"></script>
<script src="<?php echo back_skin; ?>assets/plugins/custom/kanban/kanban.bundle.js" type="text/javascript"></script>
<script src="<?php echo back_skin; ?>assets/js/pages/components/extended/kanban-board.js" type="text/javascript"></script>