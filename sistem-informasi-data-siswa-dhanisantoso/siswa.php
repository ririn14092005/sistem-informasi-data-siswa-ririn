<h1 class="h3 mb-3"><strong>Siswa</strong></h1>

                <div class="row">
                    <div class="col-12">
                    	<div class="card flex-fill">
                    		<div class="card-header">
                    			<a href="?page=tambahsiswa" class="btn btn-success btn-sm">+ Tambah Siswa</a>
                    		</div>
                    		<div class="card-body">
								<table class="table table-bordered table-striped table-lower">
									<thead>
										<tr>
											<th>NISN</th>
											<th>NIS</th>
											<th>Nama Siswa</th>
											<th>Tempat Lahir</th>
											<th>Tanggal Lahir</th>
										    <th>Kelas</th>
											<th>Jurusan</th>
											<th>Action</th>
										</tr>
									</thead>
									<body>
										<?php
                                        $no = 1;
                                        $query = mysqli_query($koneksi, "SELECT * FROM siswa INNER JOIN kelas ON siswa.id_kelas=kelas.id_kelas INNER JOIN jurusan ON kelas.id_jurusan=jurusan.id_jurusan");
                                        while ($data= mysqli_fetch_array($query)) {
                                            ?>
                                            <tr>
											<td><?php echo $data['nisn'] ?></td>
											<td><?php echo $data['nis'] ?></td>
											<td><?php echo $data['nama'] ?></td>
											<td><?php echo $data['tempat_lahir'] ?></td>
											<td><?php echo $data['tanggal_lahir'] ?></td>
											<td><?php echo $data['jenis_kelamin'] ?></td>
											<td><?php echo $data['nama_kelas'] ?></td>
											<td><?php echo $data['nama_jurusan'] ?></td>
											<td>
                                            <a href="?page=edit-siswa&id=<?php echo $data['nisn'] ?>" class="btn btn-warning btn-sm"><i data-feather="edit"></i></a>
                                            <a href="?page=hapus-siswa&id=<?php echo $data['nisn'] ?>" class="btn btn-danger btn-sm"><i data-feather="trash-2"></i></a>
											</td>
										</tr>
                                            <?php
                                        
                                        }
                                        ?>
									</body>
								</table>
							</div>

                    	</div>
                    </div>