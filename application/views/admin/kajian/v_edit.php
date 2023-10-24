<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Data Kajian</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />                
              <?php 
              echo form_open_multipart('kajian/edit/'.$kajian->id_kajian); ?>

            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Kajian <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                <input type="text" value ="<?= $kajian->nm_kajian?>" name = "nm_kajian" required="required" placeholder="Nama Kajian" class="form-control ">
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align"> Hari <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                <input type="text" value ="<?= $kajian->hari?>" name = "hari" required="required" placeholder="Hari " class="form-control ">
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Ustad <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                <input type="text" value ="<?= $kajian->nm_ustad?>" name = "nm_ustad" required="required" placeholder="Nama Ustad" class="form-control ">
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Pembahasan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                <input type="text" value ="<?= $kajian->pembahasan?>" name = "pembahasan" required="required" placeholder="Pembahasan" class="form-control ">
                </div>
            </div>
            <div class="ln_solid"></div>
            <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button class="btn btn-primary" type="reset">Reset</button>
                </div>
            </div>

            <?php echo form_close();  ?>
            </div>
        </div>
    </div>
</div>
</div>