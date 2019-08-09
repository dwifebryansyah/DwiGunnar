<h1 class="uk-heading-divider uk-text-center">Gun Store</h1>
    <nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-center">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="<?= $this->Url->build([
                                'controller' => 'Pages',
                                'action' => 'index'
                            ]) ?>">Home</a></li>
            <li>
                <a href="#">Jenis</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">

                        <li class="uk-active"><a href="<?= $this->Url->build([
                                'controller' => 'Pages',
                                'action' => 'category','4'
                            ]) ?>">Shotgun</a></li>
                        <li><a href="<?= $this->Url->build([
                                'controller' => 'Pages',
                                'action' => 'category','3'
                            ]) ?>">Sniper Rifle</a></li>
                        <li><a href="<?= $this->Url->build([
                                'controller' => 'Pages',
                                'action' => 'category','2'
                            ]) ?>">Submachine Gun</a></li>
                        <li><a href="<?= $this->Url->build([
                                'controller' => 'Pages',
                                'action' => 'category','1'
                            ]) ?>">Assault Rifle</a></li>
                        <li><a href="<?= $this->Url->build([
                                'controller' => 'Pages',
                                'action' => 'category','5'
                            ]) ?>">Secondary</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="<?= $this->Url->build([
                                'controller' => 'Users',
                                'action' => 'login'
                            ]) ?>">Logout</a></li>
        </ul>
    </div>
</nav>
<br>
<div class="container">
    <div class="row">
  <div class="col-sm-7">
    <div class="card">
      <div class="card-body">
        <table class="table">
  <thead class="thead-dark">
    <?= $this->Form->create(null, ['url' => [
            'controller' => 'Orders',
            'action' => 'transaksi'
        ]]) ?>
    <tr>
      <th scope="col">gambar</th>
      <th>Name</th>
      <th scope="col">price</th>
      <th scope="col">qty</th>
      <th scope="col">catatan</th>
      <th scope="col">action</th>
    </tr>
    <?php
                                $brg = []; 
                                    foreach($barangs as $p){
                                        $brg[] = [
                                            'id' => $p->id,
                                            'name' => $p->name,
                                            'harga' => $p->harga
                                        ];
                                    }
                            ?>
  </thead>
  <tbody id="tbody">
    <?php foreach($keranjangs as $k): ?>
      <?php 
          $dirdoang = $k->barang->file_dir;
          $dir = str_replace('\\','/',$k->barang->file_dir);
      ?>
    <tr>
      <th scope="row">
        <img src="<?= $this->url->build(str_replace('webroot','',$dir) . $k->barang->file ) ?>">
      </th>
      <td hidden="true"><?= $this->Number->format($k->id) ?></td>
      <td>
        <input type="hidden" class="class-product" name="orders_details[<?= $k->barang_id ?>][barang_id]" value="<?= $k->barang_id ?>">
          <span class="uk-text-uppercase">
              <?= $k->barang->name ?>        
          </span>
        
      </td>
      <td>
        Rp <?= number_format($k->barang->harga) ?>
      </td>
      <td>
        <input type="text" class="qty-product" name="orders_details[<?= $k->barang_id ?>][qty]" value="<?= $k->qty ?>">
      </td>
      <td>
        <?= $k->catatan_pembeli ?>
        <input type="hidden" class="qty-product" name="orders_details[<?= $k->barang_id ?>][catatan_pembeli]" value="<?= $k->catatan_pembeli ?>">
      </td>
      <td>
        <a href="<?= $this->Url->build(['action' => 'delete', $k->id]) ?>">Delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
      </div>
    </div>
  </div>
  <div class="col-sm-5">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><center>Total Belanja</h5></center>
        <hr>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Total</label>
            <div class="col-sm-4">
              <input type="hidden" name="total_price" id="total-id" value="<?= $totals ?>">
              <input type="text" disabled id="total-change-id" value="Rp <?= number_format($totals) ?>">
            </div>
          </div>
        <hr>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Bayar</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="bayar" id="paid-id" placeholder="bayar">
            </div>
            <div class="col-sm-4">
              <button class="btn btn-primary" type="button" id="bayar-id">Bayar</button>
            </div>
          </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Kembalian</label>
            <div class="col-sm-8">

              <input type="text" class="form-control" readonly name="change_money" value="0" id="cm-id" placeholder="Kembalian">
            </div>
          </div>
        <center>
            <button class="btn btn-primary">Check Out</button>
        </center>
      </div>
    </div>
  </div>
  <?= $this->Form->end() ?>
</div>
</div>

<div class="fixed-bottom">
    <nav class="navbar navbar-light bg-light">
        <a href="#">&nbsp;</a>
     <div style="float: right;">
        <p>&copy; 2019 Dwi Febryansyah<p>
    </div>
    </nav>
</div>

<script type="text/javascript">
    $( document ).ready(function() {

      $('#bayar-id').on('click', function(){
            var bayar = $('#paid-id').val();
            var total = $('#total-id').val();

            var cekUang = parseInt(bayar) < parseInt(total);

            if(!cekUang){
                var kembalian = parseInt(bayar)-parseInt(total);
                $('#paid-id').attr('readonly',true)
                $('#bayar-id').attr('disabled', true)
                $('#cm-id').attr('readonly', true).val(kembalian);
            }else{
                alert('Uang anda kurang')
            }

            

            var cekKembali = $('#cm-id').val();


        })

        var barang = <?=json_encode($brg)?>;
        //console.log(product)

        function formatNumber(num) {
          return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
        }

        total();

    function total() {

                var totalHarga = 0;
                var subtotal = [];

                var tr = $("#tbody").children('tr');

                $.each(tr, function(){
                    var id = $(this).find('td .class-product').val();
                    
                    var prd = barang.find(item => item.id == id);       
                    //console.log(prd)
                    var qty = $(this).find('td .qty-product').val();
                    //console.log(prd);

                    

                    var harga = parseInt(prd.harga) * parseInt(qty);

                    //console.log(harga)

                    subtotal.push(harga);

                    totalHarga+=harga;


                });

                //console.log(totalHarga);

                $('#total-change-id').val('Rp '+ formatNumber(totalHarga) );
        }


        $('body').on('keyup', '.qty-product', function(){
            total();
        });
        });
</script>

