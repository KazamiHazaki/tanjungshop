<main class="container">
    
    <?php $this->load->view('layouts/_alert'); ?>

    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                  <span>Tambah Category</span>
                  <a href="<?= base_url('category/create') ?>" class="btn btn-sm btn-secondary">Tambah</a>
                  <div class="float-end">
                    <form action="" >
                      <div class="input-group">
                        <input type="text" name="search" class="form-control form-control-sm text-center" placeholder="Cari" value="">
                        <button class="btn btn-primary btn-sm" type="submit"><i class="fas fa-search"></i></button>
                        <button class="btn btn-primary btn-sm"><i class="fas fa-eraser"></i></button>
                      </div>
                     
                    </form>
                  </div>
                </div>
                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Title</th>
                          <th scope="col">Slug</th>
                          <th scope="col"></th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 0; foreach ($content as $row) : $no++;?>
                        <tr>
                          <td ><?= $no ?></td>
                          <td><?= $row->title ?></td>
                          <td><?= $row->slug ?></td>
                          <td>

                              <?= form_open("category/delete/$row->id", ['method' => 'POST']) ?>

                              <?= form_hidden('id', $row->id) ?>
                              
                              <a href="<?= base_url("category/edit/$row->id")?> " class="btn btn-md "><i class="fas fa-edit text-info"></i></a>
                              <button class="btn btn-md " onclick="return confirm('Are You Sure?')"><i class="fas fa-trash text-danger"></i></button>
                              <?= 
                              form_close();
                              ?>
                          </td>
                        </tr>
                       <?php  endforeach ?>
                      </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                      <?= $pagination ?>
                    </nav>
                </div>
              </div>
        </div>
    </div>
    
</main>