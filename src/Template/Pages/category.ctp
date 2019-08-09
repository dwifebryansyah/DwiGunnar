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
<div class="uk-child-width-1-3@m uk-grid-small" uk-grid >
	<?php foreach($kategoribarang as $barang): ?>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
            <?php 
                $dirdoang = $barang->file_dir;
                $dir = str_replace('\\','/',$barang->file_dir);
			?>
            <a href="<?= $this->Url->build(['action' => 'viewCategory',$barang->id]) ?>">
                <img src="<?= $this->url->build(str_replace('webroot','',$dir) . $barang->file ) ?>">    
            </a>
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">
                	<?= $barang->name ?>
                </h3>
                <p>
                	Rp
                	<?= number_format($barang->harga) ?>
                </p>
            </div>
        </div>
    </div>
	<?php endforeach; ?>
    
</div>
<br><br><br><br>
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

<script type="text/javascript">
  $( document ).ready(function() {

    var url = window.location.href;
    
      var urls = url.split('localhost/pos_app/pages/category/');
      
      var titleCategory = urls[1];
      //console.log(titleCategory);

      //var param = urls[1].split('edit');
      $('#title-category').text(titleCategory);
  });
</script>