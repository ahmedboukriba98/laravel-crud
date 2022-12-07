<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>ISIMS-STUDENT</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   </head>
   <body>
      <nav class="navbar navbar-light bg-light">
         <div class="container-fluid">
            <button type="button" class="btn btn-primary position-relative">
               ISIMS
               <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                 <span class="visually-hidden"></span>
               </span>
             </button>
         </div>
       </nav>
       <br>
      <div class="container">
         @yield('content')
      </div>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
      
      
   </body>
</html>