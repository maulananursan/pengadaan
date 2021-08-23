            <div class="sidebar">
              <!-- Sidebar user (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                  <img src="{{asset('/adminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                    @if(\Session::has('nama_usaha'))
                        <a href="#" class="d-block">{{Session::get('nama_usaha')}}</a>
                     @endif
                  </div>
                </div>
                <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                  <li class="nav-item">
                    <a href="/" class="nav-link">
                      <i class="nav-icon fas fa-home"></i>
                      <p>
                        Halaman Depan
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/listSuplier" class="nav-link">
                      <i class="nav-icon fas fa-list"></i>
                      <p>
                        Pengajuan
                      </p>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a href="/riwayatPengajuan" class="nav-link">
                      <i class="nav-icon fa fa-history"></i>
                      <p>
                        Riwayat
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/pengajuanSelesai" class="nav-link">
                      <i class="nav-icon fas fa-check-square"></i>
                      <p>
                        Pengajuan Selesai
                      </p>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>