<main class="container">
    
    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                  Register
                </div>
                <div class="card-body">
                    <?= form_open('register', ['method' => 'POST']) ?>
                        <div class="form-group mb-3" >
                            <label for="">Nama</label>
                            <?= 
                            form_input('name', $input->name, ['class' => 'form-control', 'required' => true, 'autofocus' => true, 'placeholder' => 'Masukkan Nama Lengkap']);
                            ?>

                            <?= form_error('name') ?>

                        </div>
                        <div class="form-group mb-3" >
                          <label for="">Email</label>
                          <?= 
                            
                            form_input ([ 'type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Masukkan Alamat Email',
                            'required' => true]) ;
                            
                          ?>
                          
                          <?= form_error('email') ?>

                      </div>
                        <div class="form-group mb-3" >
                            <label for="">Password</label>
                            <?=  
                            
                            form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Masukkan Password Minimal 4 Karakter', 'required' => true]); 
                            
                            ?>
                            <?= form_error('password') ?>
                        </div>
                        <div class="form-group mb-3" >
                          <label for="">Konfirmasi Password</label>
                          <?= form_password('password_confirmation', '', ['class' => 'form-control', 'placeholder' => 'Masukkan Konfirmasi Password', 'required' => true]); ?> 
                            <?= form_error('password_confirmation') ?>
                      </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    <?= form_close() ?>
                </div>
              </div>
        </div>
    </div>
    
</main>