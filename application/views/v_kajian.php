
			<!-- End Intro Section -->
			<!-- Contact Section -->
			<section class="padding ptb-xs-40">
				<div class="container">
					<div class="row">					
						<div class="col-lg-12">
							<div class="headeing pb-30">
								<div class="section-title">
                            <h2>Info Kajian</h2>
                        </div>
								<span class="b-line l-left line-h"></span>
							</div>			
							<div class="col-lg-12">
								<table class="table table-bordered">
									<thead class="dark-bg">
										<tr>					
											<th class="text-center">NO</th>
											<th class="text-center">Nama Kajian </th>
											<th class="text-center">Hari </th>
											<th class="text-center">Nama Ustad </th>
											<th class="text-center">Pembahasan </th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($kajian as $key => $value) { ?>
											
									
										<tr>
											<td class="text-center"> <?= $no++ ?> </td>
											<td><?= $value->nm_kajian?> </td>
											<td><?= $value->hari?> </td>
											<td><?= $value->nm_ustad?> </td>
											<td><?= $value->pembahasan?> </td>
											
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
			