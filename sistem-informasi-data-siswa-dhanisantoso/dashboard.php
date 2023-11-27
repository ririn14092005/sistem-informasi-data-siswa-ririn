<h1 class="h3 mb-3" align="center"><strong>Dashboard</strong></h1>

					<div class="row">
						<div class="col-12">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Jumlah Jurusan</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="book"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">
                                                    <?php
                                                    $query = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM jurusan");
                                                    $data = mysqli_fetch_assoc($query);
                                                    echo $data['total'];
                                                    ?>
                                                </h1>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Jumlah kelas</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="home"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">
                                                <?php
                                                    $query = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM kelas");
                                                    $data = mysqli_fetch_assoc($query);
                                                    echo $data['total'];
                                                    ?>
                                                </h1>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Jumlah Siswa Laki-Laki</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="users"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">
                                                <?php
                                                    $query = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM siswa WHERE jenis_kelamin='laki-laki'");
                                                    $data = mysqli_fetch_assoc($query);
                                                    echo $data['total'];
                                                    ?>
                                                </h1>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Jumlah Siswa Perempuan</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="users"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">
                                                <?php
                                                    $query = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM siswa WHERE jenis_kelamin='perempuan'");
                                                    $data = mysqli_fetch_assoc($query);
                                                    echo $data['total'];
                                                    ?>
                                                </h1>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						
					</div>