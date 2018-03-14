@extends('admin.layout')
  @section('dashboard_content')
  <div id="login_body">
    <div class="ui middle aligned center aligned grid">
      <div class="column">
        <h2 class="ui image header">
          <div class="content">
           <a class="hvr-ripple-out" href="/"><img src="img/logo.png" alt="logo"/></a>
         </div>
       </h2>
       <form action="#" method="get" class="ui large form">
        <div class="ui stacked secondary  segment">
          <div class="field">
           <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="username" placeholder="Username">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
           <i class="lock icon"></i>
           <input type="password" name="password" placeholder="Password">
         </div>
       </div>
       <div class="ui fluid large submit button">Access</div>
     </div>
     <div class="ui error message"></div>
   </form>
 </div>
</div>
</div>
@endsection