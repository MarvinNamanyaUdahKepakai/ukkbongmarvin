<?php
        if(session()->get('level')== 1){
           ?>
<div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">

            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">

              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">

              <li class="nav-item dropdown">

                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">

                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>

        <div class="page-heading">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Petugas</h3>
              </div>
              
            </div>
          </div>

          <!-- Basic Tables start -->
          <section class="section">
            <div class="card">
              <div class="card-header">Data Petugas</div>
              <a href="<?=base_url('/Home/tambah_petugas/')?>" style="position: absolute; top: 10px; right: 10px;">
                        <button class="btn btn-primary">Tambah</button>
                    </a>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="table1">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                                 $no=1;
                                  foreach ($okta as $b) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $b->namapetugas?> </td>
                                        <td><?php echo $b->jk?> </td>
                                        <td><?php echo $b->alamat?> </td>
                                        <td><?php echo $b->nomortelp?> </td>
                                        <td>
                                        <a href="<?=base_url('/Home/edit_petugas/'.$b->id_petugas)?>"><button class="btn btn-primary">Edit</button></a>
                                        <a href="<?=base_url('/Home/hapus_petugas/'.$b->id_petugas)?>"><button class="btn btn-danger">Delete</button></a>    
                                        </td>

                                    </tr>
                                   <?php
                                    }
                                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <!-- Basic Tables end -->
        </div>
    <?php } ?>