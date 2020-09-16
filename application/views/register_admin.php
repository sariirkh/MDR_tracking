<body class="bg-gradient-primary">

	<div class="container up">

		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-xl-10 col-lg-12 col-md-9">

				<div class="card o-hidden border-0 shadow-lg my-5" data-aos="fade">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
									</div>
									
									<form action="<?php echo base_url('admin/proses_regis'); ?>" class="user" method="POST" id="register_admin" novalidate >

                                        <!-- email 
                                        <div class="form-group">
										<input type="text" class="form-control form-control-user" id="exampleInputNama" aria-describedby="nama_admin" placeholder="Nama..." name="nama_admin">
											<div class="invalid-feedback">
												Harap isi nama anda.
											</div>
										</div>
                                        <div class="form-group">
										<input type="text" class="form-control form-control-user" id="exampleInputUsername" aria-describedby="user_admin" placeholder="Username..." name="user_admin">
											<div class="invalid-feedback">
												Harap isi username anda.
											</div>
										</div>
										<div class="form-group">
										<input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="password" name="password">
											<div class="invalid-feedback">
												Harap isi password anda.
											</div>
                                        </div>
                                        
										<div class="form-group">
										<input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="email" placeholder="Email..." name="email">
											<div class="invalid-feedback">
												Harap isi alamat email anda.
											</div>
                                        </div> -->
                                    
                                        <div class="form-group">
                                            <input name="nama_admin"type="text" class="form-control form-control-user" id="exampleNama" placeholder="Nama">
                                        </div>
                                        <div class="form-group">
                                            <input name="user_admin" type="text" class="form-control form-control-user" id="exampleUsername" placeholder="Username">
                                        </div>
                                                                        
                                    
                                        <div class="form-group">
                                            <input type="password1" class="form-control form-control-user" id="examplePassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input name="password" type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                                        </div>
                                    
                                    
                                        <div class="form-group">
                                            <input name="email"type="text" class="form-control form-control-user" id="exampleEmail" placeholder="Email">
                                        </div>
                                    
                      

										<input type="submit" class="btn btn-primary btn-user btn-block" value="Submit"
											name="register">

										<hr>
										<a href="<?= base_url(); ?>" class="btn btn-google btn-user btn-block">
											<i class="fas fa-home"></i> Kembali Ke Homepage
										</a>
									</form>

									<hr>

									<div class="text-center">
										<a class="small" href="<?= base_url('login'); ?>">Sudah punya akun, Login!</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>
