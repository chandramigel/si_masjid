	 <section class="rooms spad">
        <div class="container">
            <div class="row">
                <?php foreach ($sapra as $key => $value) { ?>
                <div class="col-lg-6 p-0 order-lg-2 order-md-2 col-md-6">
                    <div class="room__pic__slider owl-carousel">
                      <!--   <div class="room__pic__item set-bg" data-setbg="<?=base_url('sampul/'.$value->sampul)?>" width ="120px"	></div> -->
                       <figure>
												<img src="<?=base_url('sampul/'.$value->sampul)?>" width ="50px" alt="">
											</figure> 
                    </div>
                </div>
                <div class="col-lg-6 p-0 order-lg-1 order-md-1 col-md-6">
                    <div class="room__text">
                        <h3>Sarana & Prasarana</h3>
                        <ul>
                            <li><span><?= $value->nama_sapra?></li>
                        </ul>
                    </div>
                </div>

				<?php } ?>
            </div>
        </div>
    </section>


