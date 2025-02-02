<div id="underDevelopmentCard" class="card shadow-lg" style="position: fixed; top: 20%; left: 50%; transform: translateX(-50%); width: 80%; max-width: 500px; display: none;">
  <div class="card-header bg-warning">
    <h5 class="card-title text-center mb-0">Under Development</h5>
  </div>
  <div class="card-body">
    <p>This feature is currently under development. Please check back later!</p>
  </div>
  <div class="card-footer text-center">
    <button class="btn btn-secondary" onclick="closeDevelopmentCard()">Close</button>
  </div>
</div>

<!-- Optional Styling for the Card (customize as needed) -->
<style>
  #underDevelopmentCard {
    z-index: 9999;
  }
  .card {
    border-radius: 10px;
  }
  .card-header {
    border-radius: 10px 10px 0 0;
  }
  .card-footer {
    border-radius: 0 0 10px 10px;
  }
</style>
<div class="collapse navbar-collapse" id="navbarVerticalCollapse">
    <div class="navbar-vertical-content scrollbar">
      <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
        <li class="nav-item">
          <!-- label-->
          <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
            <div class="col-auto navbar-vertical-label">Dashboard</div>
            <div class="col ps-0">
              <hr class="mb-0 navbar-vertical-divider" />
            </div>
          </div>

          <a class="nav-link {{ Request::is('upload_image_file') ? 'active' : '' }}" href="javascript:void(0);" onclick="showUnderDevelopmentCard()">
            <div class="d-flex align-items-center">
              <span class="nav-link-icon"><span class="fas fa-calendar"></span></span>
              <span class="nav-link-text ps-1">Anidote</span>
            </div>
          </a>
          <a class="nav-link {{ Request::is('upload_image_file') ? 'active' : '' }}" href="javascript:void(0);" onclick="showUnderDevelopmentCard()">
            <div class="d-flex align-items-center">
              <span class="nav-link-icon"><span class="fas fa-calendar"></span></span>
              <span class="nav-link-text ps-1">Psychology Test</span>
            </div>
          </a>
          <a class="nav-link {{ Request::is('upload_image_file') ? 'active' : '' }}" href="javascript:void(0);" onclick="showUnderDevelopmentCard()">
            <div class="d-flex align-items-center">
              <span class="nav-link-icon"><span class="fas fa-calendar"></span></span>
              <span class="nav-link-text ps-1">Counselling</span>
            </div>
          </a>
          <a class="nav-link {{ Request::is('upload_image_file') ? 'active' : '' }}" href="javascript:void(0);" onclick="showUnderDevelopmentCard()">
            {{-- <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar"></span></span><span class="nav-link-text ps-1">Upload Image</span></div> --}}
          </a>
          {{-- <a class="nav-link {{ Request::is('upload_image_file') ? 'active' : '' }}" href="{{URL::to('upload_image_file')}}" role="button">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar"></span></span><span class="nav-link-text ps-1">Anidote</span></div>
          </a>
          <a class="nav-link {{ Request::is('upload_image_file') ? 'active' : '' }}" href="{{URL::to('upload_image_file')}}" role="button">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar"></span></span><span class="nav-link-text ps-1">psychology test</span></div>
          </a>
          <a class="nav-link {{ Request::is('upload_image_file') ? 'active' : '' }}" href="{{URL::to('upload_image_file')}}" role="button">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar"></span></span><span class="nav-link-text ps-1">Upload Image</span></div>
          </a>
          <a class="nav-link {{ Request::is('upload_image_file') ? 'active' : '' }}" href="{{URL::to('upload_image_file')}}" role="button">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar"></span></span><span class="nav-link-text ps-1">Upload Image</span></div>
          </a> --}}
          {{-- <a class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}" href="{{URL::to('admin/dashboard')}}" role="button">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar"></span></span><span class="nav-link-text ps-1">Dashboard</span></div>
          </a>  
          <a class="nav-link {{ Request::is('admin/calendar') ? 'active' : '' }}" href="{{URL::to('admin/calendar')}}" role="button">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar"></span></span><span class="nav-link-text ps-1">Calendar</span></div>
          </a>
          <a class="nav-link dropdown-indicator" href="#manage" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="manage">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-slack-hash"></span></span><span class="nav-link-text ps-1">Manage</span></div>
          </a> --}}
          {{-- <ul class="nav collapse" id="manage">
            <li class="nav-item"><a class="nav-link {{ Request::is('admin/assign_adviser') ? 'active' : '' }}" href="{{URL::to('admin/assign_adviser')}}">
              <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Class</span></div>
            </a>
          </li>
          <li class="nav-item"><a class="nav-link {{ Request::is('admin/school_years') ? 'active' : '' }}" href="{{URL::to('admin/school_years')}}">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">School Year</span></div>
          </a>
        </li>
          <li class="nav-item"><a class="nav-link {{ Request::is('admin/year_level') ? 'active' : '' }}" href="{{URL::to('admin/year_level')}}">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Grade Level</span></div>
          </a>
        </li>
          <li class="nav-item"><a class="nav-link {{ Request::is('admin/section') ? 'active' : '' }}" href="{{URL::to('admin/section')}}">
              <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Section</span></div>
            </a>
          </li>

          <li class="nav-item"><a class="nav-link {{ Request::is('admin/manage_user') ? 'active' : '' }}" href="{{URL::to('admin/manage_user')}}">
              <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Manage User</span></div>
            </a>
          </li>
          
          </ul> --}}
        </li>
      </ul>
    </div>
  </div>


  <script>
    function showUnderDevelopmentCard() {
    document.getElementById('underDevelopmentCard').style.display = 'block';
  }

  // Function to close the Under Development card
  function closeDevelopmentCard() {
    document.getElementById('underDevelopmentCard').style.display = 'none';
  }
</script>

  </script>