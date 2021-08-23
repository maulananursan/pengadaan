            <div class="sidebar">
              <!-- Sidebar user (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                  <img src="{{asset('/adminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                    @if(\Session::has('nama'))
                        <a href="#" class="d-block">{{Session::get('nama')}}</a>
                     @endif
                  </div>
                </div>
                <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                   <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-database"></i>
                      <p>
                        Data Master
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview" style="margin-left: 15px;">
                      <li class="nav-item">
                        <a href="/listAdmin" class="nav-link">
                          <i class="far fa-user nav-icon"></i>
                          <p>Admin</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/listSup" class="nav-link">
                          <i class="fas fa-people-carry nav-icon"></i>
                          <p>Supplier</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/listPengadaan" class="nav-link">
                          <i class="fas fa-money-check-alt nav-icon"></i>
                          <p>Pengadaan</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="/pengajuan" class="nav-link">
                      <i class="nav-icon fas fa-list"></i>
                      <p>
                        Pengajuan
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/laporanPengajuan" class="nav-link">
                      <i class="nav-icon fas fa-list"></i>
                      <p>
                       Laporan Pengajuan
                      </p>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>