
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-md-7">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="p-5">
                                <div class="text-center">
                                    <?php echo $this->Html->image('logo.png', ['class' => 'col-md-5']); ?>
                                    <br>
                                    <br>
                                    <h1 class="h4 text-gray-900 mb-4">Form Login!</h1>
                                </div>
                                <?= $this->Form->create(null) ?>
                                    <div class="form-group">
                                        <h6>&nbsp;&nbsp;Email</h6>
                                        <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="">
                                        
                                    </div>
                                    <div class="form-group">
                                        <h6>&nbsp;&nbsp;Password</h6>
                                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="">
                                        
                                    </div>
                                    <button class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                               <?= $this->Form->end() ?>
                                <hr>
                                <div class="text-center">
                                    <a href="add">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<div class="fixed-bottom">
    <nav class="navbar navbar-light bg-light">
        <a href="">&nbsp;</a>
     <div style="float: right;">
        <p>&copy; 2019 Dwi Febryansyah<p>
    </div>
    </nav>
</div>
