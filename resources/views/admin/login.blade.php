<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Mark Law | Dashboard</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="mobile-web-app-capable" content="yes">
  @include('partials.csslinks')
</head>
<body>
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
              <input type="text" name="email" placeholder="Username">
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
            <!--  <div class="ui message">
              New to us? <a href="https://s.codepen.io/voltron2112/debug/PqrEPM?">Register</a>
            </div> -->
          </div>
        </div>
      </div>
    @include('partials.footer') 
  @include('partials.scripts')
</body>
</html>



