<h1 class="h3 mb-3"><strong>Jurusan</strong></h1>
                

                <div class="row">
                    <div class="col-12">
                    	<div class="card flex-fill">
                    		<div class="card-header">
                    			<a href="?page=tambahjurusan" class="btn btn-success btn-sm">+ Tambah Jurusan</a>
                    		</div>
                    		<div class="card-body">
								<table class="table table-bordered table-striped table-lower">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Jurusan</th>
											<th>Action</th>
										</tr>
									</thead>
									<body>
										<?php
                                        $no = 1;
                                        $query = mysqli_query($koneksi, "SELECT * FROM jurusan");
                                        while ($data = mysqli_fetch_array($query)) {
                                            ?>
                                            <tr>
											<td><?php echo $no ?></td>
											<td><?php echo $data['nama_jurusan'] ?></td>
											<td>
												<a href="?page=edit-jurusan&id=<?php echo $data['id_jurusan'] ?>" class="btn btn-warning btn-sm"><i data-feather="edit"></i></a>
												<a href="?page=hapus-jurusan&id=<?php echo $data['id_jurusan'] ?>" class="btn btn-danger btn-sm rounder"><i data-feather="trash-2"></i></a>
											</td>
										</tr>
                                            <?php
                                            $no++;
                                        }
                                        ?>
									</body>
								</table>
							</div>

                    	</div>
                    </div> 