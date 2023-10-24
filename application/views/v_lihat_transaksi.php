
			<!-- End Intro Section -->
			<!-- Contact Section -->
			<section class="padding ptb-xs-40">
				<div class="container">
					<div class="row">					
						<div class="col-lg-12">
							<div class="headeing pb-30">
								<div class="section-title">
                            <h2>Daftar Keuangan</h2>
                        </div>
								<span class="b-line l-left line-h"></span>
							</div>			
							<div class="col-lg-12">
								<table class="table table-bordered">
									<thead class="dark-bg">
										<tr>					
											<th class="text-center">NO</th>
											<th class="text-center">Nama Donatur </th>
											<th class="text-center">Jenis Donatur </th>
											<th class="text-center">Tanggal </th>
											<th class="text-center">Keterangan </th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($transaksi as $key => $value) { ?>
											
									
										<tr>
											<td class="text-center"> <?= $no++ ?> </td>
											<td><?= $value->nama?> </td>
											<td><?= $value->id_jenis?> </td>
											<td><?= $value->tanggal?> </td>
											<td><?= $value->keterangan?> </td>
											
										</tr>
									<?php 	}?>
									</tbody>
								</table>
							</div>
						</div>	
					</div>
				</div>
				<!-- Map Section -->

			</section>
			