<!DOCTYPE html>
<html>
 <head>
  <meta charset=utf-8>
  <title>Create a newsletter in laravel 7.24</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
 </head>
 <body>
  <div >
  @if (\Session::has('success'))
   <div >
    <p>{{ \Session::get('success') }}</p>
   </div><br />
   @endif
   @if (\Session::has('failure'))
   <div >
    <p>{{ \Session::get('failure') }}</p>
   </div><br />
   @endif
   <h2>Laravel Newsletter</h2><br/>
   <form method="post" action="{{url('newsletter')}}">
    @csrf
    </div>
    <div >
 
      <div class="container">
       <label for="Email">Email:</label>
       <input type=text name=email>
      </div>
     </div>
    <div >
     <div ></div>
     <div class="container" >
      <button type=submit name="submit" >Subscribe</button>
     </div>
    </div>
   </form>
  </div>
 </body>
</html>