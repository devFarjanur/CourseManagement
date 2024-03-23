<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          p<span>Learning</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="dashboard.html" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#instructor" role="button" aria-expanded="false" aria-controls="instructor">
              <i class="link-icon" data-feather="user"></i>
              <span class="link-title">Instructor</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="instructor">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="" class="nav-link">All Instructor</a>
                </li>
                <li class="nav-item">
                  <a href="pages/email/read.html" class="nav-link">Add Instructor</a>
                </li>
                <li class="nav-item">
                  <a href="pages/email/compose.html" class="nav-link">Edit Instructor</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#student" role="button" aria-expanded="false" aria-controls="student">
              <i class="link-icon" data-feather="user"></i>
              <span class="link-title">Student</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="student">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/advanced-ui/cropper.html" class="nav-link">All Student</a>
                </li>
                <li class="nav-item">
                  <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Add Student</a>
                </li>
                <li class="nav-item">
                  <a href="pages/advanced-ui/sortablejs.html" class="nav-link">Edit Student</a>
                </li>
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#course" role="button" aria-expanded="false" aria-controls="course">
              <i class="link-icon" data-feather="book"></i>
              <span class="link-title">Course</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="course">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('admin.course') }}" class="nav-link">All Course</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.add.course') }}" class="nav-link">Add Course</a>
                </li>
                <li class="nav-item">
                  <a href="pages/advanced-ui/sortablejs.html" class="nav-link">Edit Course</a>
                </li>
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a href="pages/apps/chat.html" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Chat</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/apps/calendar.html" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Calendar</span>
            </a>
          </li>
          
        </ul>
      </div>
    </nav>