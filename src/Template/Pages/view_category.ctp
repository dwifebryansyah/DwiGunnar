<div class="container">
	   <br>
    <hr>
    <h1 class="uk-heading-divider uk-text-center">Gun Store</h1>
    <br>
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
            <li><a href="users/login">Logout</a></li>
        </ul>
    </div>
</nav>
<br>
<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
    <?php foreach($productCategory as $pc): ?>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <?php 
      	        $dirdoang = $pc->file_dir;
      	        $dir = str_replace('\\','/',$pc->file_dir);
      	    ?>
      	    <img src="<?= $this->url->build(str_replace('webroot','',$dir) . $pc->file ) ?>">
        </div>
    	
    </div>
    <div>
        <div class="uk-card uk-card-secondary uk-card-body ">
            <br>
            <br>
            <h5 class="uk-card uk-card-dark uk-text-center uk-text-uppercase" >
            	Nama Senjata : <?= $pc->name ?>
            </h5>
            <br>
            <h5 class="uk-card uk-card-dark uk-text-center uk-text-uppercase">
            	Harga&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $pc->harga ?>
            </h5>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-secondary uk-card-body">
            <?= $this->Form->create(null, ['url' => [
            	'controller' => 'Pages',
            	'action' => 'viewCategory'
            ]]) ?>
            	<input type="hidden" name="barang_id" value="<?= $pc->id ?>">
            	<input type="hidden" name="price" value="<?= $pc->harga ?>">
            	<p>Jumlah</p>
			    <input class="uk-input uk-width-1-2" name="qty" type="number" placeholder="Jumlah Barang">
			    <p>Catatan Pembeli</p>
			    <input class="uk-input uk-width-1-2" name="catatan_pembeli" type="textarea" placeholder="Catatan">
			    <br>
			    <br>
            	<button class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Beli&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
			<?= $this->Form->end() ?>
			
        </div>
    </div>
    <?php endforeach; ?>
</div>
<div class="fixed-bottom">
	<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="<?= $this->Url->build(['controller' => 'Keranjangs', 'action' => 'index']) ?>">
    <?php echo $this->Html->image('icon.jpg', ['class' => 'col-md-1']); ?>
    <?= array_sum($res); ?> Items
  </a>
    <div style="float: right;">
        <p>&copy; 2019 Dwi Febryansyah<p>
    </div>
    </nav>
</div>
</div>

