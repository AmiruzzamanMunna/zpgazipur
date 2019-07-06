<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<title>@yield('title')</title>
<base href="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
@yield('css')
<!-- bootstrap -->
<script type="text/javascript" src="{{asset('js')}}/javascript/jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="{{asset('js')}}/javascript/bootstrap/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script> -->
<!-- end -->
<link href="{{asset('css')}}/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="{{asset('js')}}/javascript/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
<script src="https://kit.fontawesome.com/8c9262f7a5.js"></script>
<script src="{{asset('js')}}/javascript/jquery/datetimepicker/moment/moment.min.js" type="text/javascript"></script>
<script src="{{asset('js')}}/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js" type="text/javascript"></script>
<script src="{{asset('js')}}/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<link href="{{asset('js')}}/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />
<link type="text/css" href="{{asset('css')}}/stylesheet.css" rel="stylesheet" media="screen" />
<script src="{{asset('js')}}/javascript/common.js" type="text/javascript"></script>
@yield('script')
</head>
<body>
  @if(Session::has('loggedAdmin'))
<div id="container">
<header id="header" class="navbar navbar-static-top">
  <div class="container-fluid">
    <!-- <div id="header-logo" class="navbar-header">
      <a href="{{route('admin.index')}}" class="navbar-brand">
        <img src="{{asset('images')}}/Edumaster_resized.png" id="logoimage" alt="OpenCart" title="OpenCart" />
      </a>
    </div> -->
    <a href="#" id="button-menu" class="hidden-md hidden-lg"><span class="fa fa-bars"></span></a>     
    <ul class="nav navbar-nav navbar-right">
      @foreach($admins as $admin)
      <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- <img src="{{asset('images')}}/profile-45x45.png" alt="Hishab Super" title="hishab" id="user-profile" class="img-circle" /> -->{{$admin->name}} <i class="fa fa-caret-down fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-right">
          <li><a href=""><i class="fa fa-user-circle-o fa-fw"></i> Your Profile</a></li>
          <li role="separator" class="divider"></li>
          <li class="dropdown-header">Stores</li>
          <li><a href="http://localhost:8080/edumaster/" target="_blank">{{$admin->name}}</a></li>
          <!-- <li><a href="http://localhost:81/hishabone" target="_blank">Hishab One</a></li> -->
        </ul>
      </li>
      <li><a href="{{route('login.logout')}}"><i class="fa fa-sign-out"></i> <span class="hidden-xs hidden-sm hidden-md">Logout</span></a></li>
      @endforeach
    </ul>
  </div>
</header>
<nav id="column-left">
  <div id="navigation"><span class="fa fa-bars"></span> Navigation</div>
    <ul id="menu">
      <li id="menu-dashboard"><a href="{{route('admin.index')}}"><i class="fa fa-dashboard fw"></i> Dashboard</a>        
      </li>
      <li id="menu-dashboard"> 
        <a href="#collapse5" data-toggle="collapse" class="parent collapsed"><i class="fa fa-cog fw"></i>Admin</a>
        <ul id="collapse5" class="collapse">
          <li>
            <a href="{{route('admin.adminList')}}"><i class="fa fa-dashboard fw"></i>Admin List</a> 
          </li>
        </ul>       
      </li>
      <li id="menu-dashboard"> 
        <a href="#collapse1" data-toggle="collapse" class="parent collapsed"><i class="fa fa-cog fw"></i> Notice</a>
        <ul id="collapse1" class="collapse">
          <li>
            <a href="{{route('admin.noticeList')}}"><i class="far fa-flag-alt"></i>Notice</a> 
          </li>
        </ul>       
      </li>
      <li id="menu-extension">
        <a href="#collapse4" data-toggle="collapse" class="parent collapsed"><i class="fa fa-puzzle-piece fw"></i>Course</a>
        <ul id="collapse4" class="collapse">
          <li>    
            <a href="{{route('admin.courselist')}}">Course</a>
          </li>
        </ul>
      </li>
      <li id="menu-extension">
        <a href="#collapse9" data-toggle="collapse" class="parent collapsed"><i class="fa fa-puzzle-piece fw"></i>Session</a>
        <ul id="collapse9" class="collapse">
          <li>    
            <a href="{{route('admin.sessionList')}}">Session</a>
          </li>
        </ul>
      </li>
      <li id="menu-extension">
        <a href="#collapse6" data-toggle="collapse" class="parent collapsed"><i class="fa fa-puzzle-piece fw"></i>Employee</a>
        <ul id="collapse6" class="collapse">
          <li>    
            <a href="{{route('stuff.stuffList')}}">Employee</a>
          </li>
        </ul>
      </li>
      <li id="menu-extension">
        <a href="#collapse7" data-toggle="collapse" class="parent collapsed"><i class="fa fa-puzzle-piece fw"></i>Application</a>
        <ul id="collapse7" class="collapse">
          <li>    
            <a href="{{route('application.applicationList')}}">Application</a>
          </li>
        </ul>
      </li>
      <li id="menu-extension">
        <a href="#collapse8" data-toggle="collapse" class="parent collapsed"><i class="fa fa-puzzle-piece fw"></i>Student Course List</a>
        <ul id="collapse8" class="collapse">
          <li>    
            <a href="{{route('admin.studentCourseList')}}">Student Course List</a>
          </li>
          <li>    
            <a href="{{route('admin.approved')}}">Approved Student List</a>
          </li>
          <li>    
            <a href="{{route('admin.pending')}}">Pending Student List</a>
          </li>
          <li>    
            <a href="{{route('admin.cancel')}}">Cancel Student List</a>
          </li>
        </ul>
      </li>
      <li id="menu-system">
        <a href="#collapse2" data-toggle="collapse" class="parent collapsed"><i class="fa fa-cog fw"></i>Pages</a> 
        <ul id="collapse2" class="collapse">
          <li> 
            <a href="{{route('admin.allPostList')}}">Pages</a>
          </li>
          <li> 
            <a href="{{route('admin.navMenu')}}">Add Navigation Category</a>
          </li>
          <li> 
            <a href="{{route('admin.navSubMenu')}}">Add Navigation Sub Category</a>
          </li>
          <li> 
            <a href="{{route('admin.imageList')}}">Image Slider</a>
          </li>
          <li> 
            <a href="{{route('admin.addCategory')}}">Page Category</a>
          </li>
          <li> 
            <a href="{{route('admin.otherPageList')}}">Other Pages</a>
          </li>
          <li> 
            <a href="{{route('admin.gallaryImage')}}">Gallary</a>
          </li>
          <li>
            <a href="#collapse2-1" data-toggle="collapse" class="parent collapsed">Designation</a>
            <ul id="collapse2-1" class="collapse">
              <li>
                <a href="{{route('admin.viewDesignation')}}">View Designation</a>
              </li>
              <li>
                <a href="">User Groups</a>
              </li>
              <li>
                <a href="">API</a>
              </li>
            </ul>
          </li>
          <!-- <li>
            <a href="#collapse2-2" data-toggle="collapse" class="parent collapsed">Maintenance</a>
            <ul id="collapse2-2" class="collapse">
              <li>
                <a href="http://localhost:8080/edumaster/index.php?route=tool/backup&amp;user_token=pfcUl2bkbhkNG1D1DDoBnl9KGeBKN159">Backup / Restore</a>
              </li>
              <li>
                <a href="http://localhost:8080/edumaster/index.php?route=tool/upload&amp;user_token=pfcUl2bkbhkNG1D1DDoBnl9KGeBKN159">Uploads</a>
              </li>
              <li>
                <a href="http://localhost:8080/edumaster/index.php?route=tool/log&amp;user_token=pfcUl2bkbhkNG1D1DDoBnl9KGeBKN159">Error Logs</a>
              </li>
            </ul>
          </li> -->
        </ul>
      </li>
      <li id="menu-report">
        <a href="#collapse3" data-toggle="collapse" class="parent collapsed"><i class="fa fa-bar-chart-o fw"></i> Reports</a>        
      </li>
    </ul>
</nav>

@yield('container')

    

</div>
<footer id="footer"><a href="http://www.onelimitedbd.com">ONE</a> &copy; 2019-2029 All Rights Reserved.<br />Version 1.0.1.1</footer></div>
</body>
@endif
<script type="text/javascript"><!--
$('#button-setting').on('click', function() {
  $.ajax({
    url: 'index.php?route=common/developer&user_token=pfcUl2bkbhkNG1D1DDoBnl9KGeBKN159',
    dataType: 'html',
    beforeSend: function() {
      $('#button-setting').button('loading');
    },
    complete: function() {
      $('#button-setting').button('reset');
    },
    success: function(html) {
      $('#modal-developer').remove();
      
      $('body').prepend('<div id="modal-developer" class="modal">' + html + '</div>');
      
      $('#modal-developer').modal('show');
    },
    error: function(xhr, ajaxOptions, thrownError) {
      alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
    }
  }); 
}); 
</script> 
</html>
