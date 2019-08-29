<div class="pcoded-main-container">
	<div class="pcoded-wrapper">
		<div class="pcoded-content">
			<div class="pcoded-inner-content"> 
				<div class="page-header">
					<div class="page-block">
						<div class="row align-items-center">
							<div class="col-md-12">
								<div class="page-header-title">
									<h5 class="m-b-10">Dashboard</h5>
								</div>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">
										<i class="feather icon-home"></i></a></li>
										<li class="breadcrumb-item"><a href="javascript:">Dashboard</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div> 
					<div class="main-body">
						<div class="page-wrapper"> 
							<div class="row"> 
								<div class="col-md-12 col-xl-4">
									<div class="card theme-bg visitor">
										<div class="card-block text-center">
											<img class="img-female" src="<?php echo base_url() ?>prabotan/admin/images/user/user-1.png" alt="visitor-user">
											<h5 class="text-white m-0">TOTAL VISITORS</h5>
											<?php  
											$yesterday = date('Y-m-d',strtotime("-1 days")); 
											$this->db->where('date', $yesterday);
											$get_yesterday = $this->db->get('visitor')->row();
											if (empty($get_yesterday)) {
												$yesterday = 0;
											}else{
												$yesterday = $get_yesterday->count;
											}
											$this->db->where('date', date('Y-m-d'));
											$get_count = $this->db->get('visitor')->row();
											if (empty($get_count)) {
												$today = 0;
											}else{
												$today = $get_count->count;
											}
											?>
											<h3 class="text-white m-t-20 f-w-300">
											<?= (int)$today;  ?>
											</h3>
											<?php 
											if((int)$today >= (int)$yesterday){ ?>
											<span class="text-white">More than Yesterday</span>
											<?php 
										}else{ 
											?>
											<span class="text-white">Less than Yesterday</span>
											<?php 
										} ?>
											<img class="img-men" src="<?php echo base_url() ?>prabotan/admin/images/user/user-2.png" alt="visitor-user">
										</div>
									</div> 
								</div>
								<!-- <div class="col-md-6 col-xl-4">
									<div class="card user-card">
										<div class="card-block">
											<h5 class="f-w-400 m-b-15">Doktor Politik</h5>
											
											<span class="text-muted"><label class="label theme-bg text-white f-12 f-w-400">Yearly Increase</label></span>
										</div>
									</div>
								</div> -->
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>