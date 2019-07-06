<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="{{asset('css')}}/login.css" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="{{asset('images')}}/logo.png" id="icon" alt="" />
    </div>

    <!-- Login Form -->
    <form method="post" action="" enctype="multipart/form-data">
    	{{csrf_field()}}
      <input type="text" id="login" class="fadeIn second" name="name" placeholder="User Name"/>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password"/>
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>
  </div>
	@if($errors->any())
  	<ul>
	    @foreach($errors->all() as $error)
	      <li style="color: red;">{{$error}}</li>
	    @endforeach
  	</ul>
	@endif
	@if(session('message'))
      <div class="alert alert-success col-5">
        {{session('message')}}
      </div>
    @endif
</div>
</body>
</html>
<script>
  // $("input").prop('required',true);
</script>