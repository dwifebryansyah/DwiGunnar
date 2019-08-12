<div class="container">
	  <br>
    <hr>
    <h1 class="uk-text-center">Gun Store</h1>
    <h3 class="uk-text-center">Nota Penjualan</h3>
    <h3 class="uk-text-center">Jl. Nyenang Kota Indah</h3>
    <hr>
    <table class="table">
	  <thead class="thead-light">
	    <tr>
	      <th scope="col">No</th>
	      <th scope="col">Nama</th>
	      <th scope="col">Jenis</th>
	      <th scope="col">Harga</th>
	      <th scope="col">Jumlah</th>
	      <th scope="col">Total</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php foreach($od as $hilih): ?>
	  	<?php //dd($hilih); ?>
	  	<?= 
	  		$harga = $hilih->barang->harga * $hilih->qty;
	  	?>
	    <tr>
	      <th scope="row">1</th>
	      <td><?= $hilih->barang->name ?></td>
	      <td><?= $hilih->barang->category->nama ?></td>
	      <td><?= $hilih->barang->harga ?></td>
	      <td><?= $hilih->qty ?></td>
	      <td><?= $harga ?></td>
	    </tr>
	    <?php endforeach; ?>
	  </tbody>
</table>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Total</label>
    <div class="col-sm-7">
    	<input type="hidden" value="">
    </div>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputPassword" value="<?= $orders->total_price  ?>" style="float: right;">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Bayar</label>
    <div class="col-sm-7">
    	<input type="hidden">
    </div>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputPassword" value="<?= $orders->bayar  ?>" style="float: right;">
    </div>
  </div>

  <hr>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Kembalian</label>
    <div class="col-sm-7">
    	<input type="hidden">
    </div>
    <div class="col-sm-3">
      <input type="text" class="form-control" value="<?= $orders->change_money  ?>" style="float: right;">
    </div>
  </div>
  <hr>
  			<center><?php echo $this->Html->image('barcode.png', ['class' => 'col-md-1']); ?></center>
  			<p class="uk-text-center">JDKWJAP0821</p>
  			<h6 class="uk-text-center">BARANG YANG SUDAH DIBELI TIDAK DAPAT DI KEMBALIKAN</h6>
  			<h6 class="uk-text-center">SIMPAN RESI INI SEBAGAI BUKTI TRANSAKSI YANG SAH</h6>
  	<div class="form-group row" style="float: right;">
  		<div class="col-sm-10">
  		</div>
  		<div class="col-sm-1">
  		<button class="btn btn-danger" id="kembali">Kembali</button>
  		</div>
  		<div class="col-sm-1">
 		 <button class="btn btn-primary" id="cetak">Print</button>
 		</div>
	</div>
</div>

<br><br><BR>


<div class="fixed-bottom">
    <nav class="navbar navbar-light bg-light">
        <a href="#">&nbsp;</a>
     <div style="float: right;">
        <p>&copy; 2019 Dwi Febryansyah<p>
    </div>
    </nav>
</div>

<script type="text/javascript">
	$('#cetak').on('click',function(){
	window.print();	
	})
	
	$('#kembali').on('click',function(){
	document.location.href='../keranjangs/';	
	})

</script>