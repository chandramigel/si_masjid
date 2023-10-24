<!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="row">

                     <?php foreach ($berita as $key => $value) { ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="<?=base_url('gambar/'.$value->gambar_berita)?>" alt="">
                                    <div class="tag">User : <?= $value->nama_user ?></div>
                                </div>
                                <div class="blog__item__text">
                                    <p><i class="fa fa-clock-o"></i><?= $value->tgl_berita ?></p>
                                    <h5><a href="<?=base_url('home/detail_berita/'.$value->slug_berita)?>"><?= substr(strip_tags($value->jdl_berita),0,100) ?></a></h5>
                                </div>
                            </div>
                        </div>
              <?php } ?>    
              <div class="col-lg-12">
                            <div class="pagination__number blog__pagination">
                               <?php
                    if (isset($paginasi)) {
                      echo $paginasi;
                    }
                    ?>
                           
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <h4>Search</h4>
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit">Search</button>
                            </form>
                        </div>

                <?php foreach ($latest_berita as $key => $value) { ?>
                        <div class="blog__sidebar__recent">
                            <h4>Recent Posts</h4>
                            <a href="#" class="blog__sidebar__recent__item">
                                <div class="blog__sidebar__recent__item__pic">
                                    <img src="<?=base_url('gambar/'.$value->gambar_berita)?>" alt="">
                                </div>
                                <div class="blog__sidebar__recent__item__text">
                                    <a href="<?=base_url('home/detail_berita/'.$value->slug_berita)?>"><?=($value->jdl_berita)?></a>
                                    <div class="time"><i class="fa fa-clock-o"></i> <span><?= $value->tgl_berita ?></div>
                                </div>
                            </a>
                    </div>

                <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
      <!-- Intro Section -->