<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <div class="container">
            <a class="navbar-brand" href="#">UMKM Desa Tanjung</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/index.html">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false">Manage</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown10">
                        <li><a class="dropdown-item" href="<?= base_url('category') ?>">Kategori</a></li>
                        <li><a class="dropdown-item" href="/admin-product.html">Product</a></li>
                        <li><a class="dropdown-item" href="/admin-order.html">Order</a></li>
                        <li><a class="dropdown-item" href="/admin-users.html">Pengguna</a></li>

                    </ul>
                </li>
              </ul>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="/cart.html"> <i class="fas fa-shopping-cart"> </i>Cart (0)</a>
                </li>
                <?php  if(!$this->session->userdata('is_login')) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/login') ?>">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/register') ?>">Register</a>
                  </li>

                <?php else : ?>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown11" data-bs-toggle="dropdown" aria-expanded="false"> <?= $this->session->userdata('name')  ?> </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown11">
                        <li><a class="dropdown-item" href="/profiles.html">Profile</a></li>
                        <li><a class="dropdown-item" href="/orders.html">Orders</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('/logout') ?>">Logout</a></li>
                    </ul>
                </li>

                <?php endif ?>
              </ul>
            </div>
          </div>
        </nav>