<section class="wrapper">
<h3 align="center">Kelola Data Produk</h3>
<div class="row-lg-9">
<p>
	<div class="btn-group btn-group-justified">
		<div class="btn-group">
		<a href="<?php echo site_url()?>/admin/dashboard/Produk" class="btn btn-info">Data Produk</a>
		</div>
		<div class="btn-group">
		<a href="<?php echo site_url()?>/admin/dashboard/tambahproduk" class="btn btn-info">Tambah Produk</a>
		</div>
	</div>
</p>
</div>
   <div class="row-lg-9">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	<h4 class="mb"><i class="fa fa-angle-right"></i> Input Data Produk</h4><hr>

          <?php echo form_open_multipart("admin/dashboard/proses_tambah_produk","class='form-horizontal style-form'");?> 
					<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">KODE PRODUK</label>
                              <div class="col-sm-2">
                              <input type="text" class="form-control" name="idProduk" />
					</div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">KATEGORI</label>
                              <div class="col-sm-3">
								<select name="idKategori" class="form-control">
									<?php foreach($tambahproduk as $k):?>
									<option value='<?php echo $k->idKategori?>'><?php echo $k->namaKategori;?> </option>
									<?php endforeach ?>
								</select>
					</div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">NAMA PRODUK</label>
                              <div class="col-sm-4">
                              <input type="text" class="form-control" name="namaProduk" <?php echo set_value('namaProduk'); ?> />
					</div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">HARGA</label>
                              <div class="col-sm-3">
                              <input type="text" class="form-control" name="harga" />
					</div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">UKURAN</label>
                              <div class="col-sm-3">
                              <input type="text" class="form-control" name="ukuran" />
					</div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">STOK</label>
                              <div class="col-sm-2">
                              <input type="text" class="form-control" name="stok" />
					</div></div>
					<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">KETERANGAN</label>
                              <div class="col-sm-4">
                              <input type="text" class="form-control" name="deskripsi" />
					</div>
                          </div>
					
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">FOTO</label>
                              <div class="col-sm-4">
                              <input type="file" name="userfile" value="<?php echo set_value('userfile'); ?>" size="10" />

      <?php echo "<font color='red'>$error</font>";?>
                    </div>  
                              </div></div><hr>
					<?php echo form_submit(array('value'=>'Simpan','class' =>'btn btn-theme', 'name'=>'submit','id'=>'submit')); ?>
					
					</form>
					</div>
					</div>
					</div>
					</section>