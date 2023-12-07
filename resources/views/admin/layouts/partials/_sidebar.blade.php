<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <img src="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->site_icon }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DTMQA</span>
    </a>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Website Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.slider.list') }}" class="nav-link">
                  <i class="fas fa-file-image ml-3"></i>
                  <p class="ml-1">Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.setting.edit') }}" class="nav-link">
                  <i class="fas fa-edit ml-3"></i>
                  <p class="ml-1">Change Settings</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Administration
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.department.list') }}" class="nav-link">
                  <i class="fas fa-building ml-3"></i>
                  <p class="ml-1">Departments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.teacher.list') }}" class="nav-link">
                  <i class="fas fa-edit ml-3"></i>
                  <p class="ml-1">Teachers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.student.list') }}" class="nav-link">
                  <i class="fas fa-edit ml-3"></i>
                  <p class="ml-1">Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.location.list') }}" class="nav-link">
                  <i class="fas fa-map-marker ml-3"></i>
                  <p class="ml-1">Staff Working Locations</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.staff.list') }}" class="nav-link">
                  <i class="fas fa-briefcase ml-3"></i>
                  <p class="ml-1">Staffs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.notice.list') }}" class="nav-link">
                  <i class="fas fa-bullhorn ml-3"></i>
                  <p class="ml-1">Notices</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.news.list') }}" class="nav-link">
                  <i class="fas fa-book ml-3"></i>
                  <p class="ml-1">News</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Course-Teachers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.course.list') }}" class="nav-link">
                  <i class="fas fa-building ml-3"></i>
                  <p class="ml-1">Course</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.course-teachers.list') }}" class="nav-link">
                    <i class="nav-icon fas fa-shapes"></i>
                    <p>
                      Course-Teachers List
                    </p>
                  </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.batch.list') }}" class="nav-link">
              <i class="nav-icon fas fa-id-badge"></i>
              <p>
               Batch
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
               Quran Campus
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.quran-campus-male.edit') }}" class="nav-link">
                    <i class="nav-icon fas fa-caret-down"></i>
                    <p>
                      Quran Campus Male
                    </p>
                  </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.quran-campus-female.edit') }}" class="nav-link">
                    <i class="nav-icon fas fa-caret-down"></i>
                    <p>
                      Quran Campus Female
                    </p>
                  </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.about.edit') }}" class="nav-link">
              <i class="nav-icon fas fa-caret-down"></i>
              <p>
                About Section
              </p>
            </a>
          </li>


          {{-- <li class="nav-item">
            <a href="{{ route('admin.quran-campus-male.edit') }}" class="nav-link">
              <i class="nav-icon fas fa-caret-down"></i>
              <p>
                Quran Campus Male
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.quran-campus-female.edit') }}" class="nav-link">
              <i class="nav-icon fas fa-caret-down"></i>
              <p>
                Quran Campus Female
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="{{ route('admin.more.edit') }}" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
               More Module
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.curriculum.list') }}" class="nav-link">
              <i class="nav-icon fas fa-shapes"></i>
              <p>
                Curriculum
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.applied-student.view') }}" class="nav-link">
              <i class="nav-icon fas fa-chalkboard"></i>
              <p>
               Applied Student Data
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.job.view') }}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
               Jobs Apply By Teachers
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.online.list') }}" class="nav-link">
              <i class="nav-icon fas fa-landmark"></i>
              <p>
               Online Class
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.weekly.list') }}" class="nav-link">
              <i class="nav-icon fas fa-mosque"></i>
              <p>
               Weekly Dars
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
