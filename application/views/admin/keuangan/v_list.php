<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
        <h2><?= $title ?></h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>   
        </ul>
        <div class="clearfix"></div>
            </div>
            
            <a href="<?= base_url('transaksi/add'); ?>"class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah</a>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <?php
                                if ($this->session->flashdata('pesan')) {
                        echo '<div class="alert alert-success alert-dismissible " role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                </button>';
                            echo $this->session->flashdata ('pesan');
                            echo '</div>';
                        }
                        ?>
                        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                            <thead>
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
                                
                                <td>
                                <a href="<?= base_url('kajian/edit/'.$value->id_kajian)?>" class ="btn btn-xs btn-primary"> <i class="fa fa-pencil"> </i></a>
                                <a href="<?= base_url('kajian/delete/'.$value->id_kajian)?>" onclick="return confirm('Apakah Data Ingin Dihapus..?')" class ="btn btn-xs btn-danger"> <i class="fa fa-trash"> </i></a>
                                </td>
                                </tr>
                        <?php } ?>
                            </tbody>
                            </table>
                    </div>
                    </div>
                </div>
        </div>
    </div>
</div>
</div>
