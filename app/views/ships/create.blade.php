<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/starter-template.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    
   <script>
      $(document).ready(function() {
    $('#example').DataTable({
        searching: false,
        paging:false,
        info:false
    });
        
} );</script>
   
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="navbar-brand"><img src="/img/logo3.png" alt=""></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container" style)"margin:15px">

      <form action="/ships/store" method="post" id='form-create-ship'>

          <div class="row">
            <div class="col-sm-10 col-sm-offset-1"><h1>Création d'un nouveau bateau</h1></div>
          </div>
          <div class="row">
          <div class="col-sm-6 col-sm-offset-3 form-group">
              <input type="text" name="name" placeholder="Nom" class="form-control" /> </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3 form-group">
              <input type="number" name="capacity" placeholder="Capacité" class="form-control" />
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3 ">
              <select class="form-control" name="company">
                @foreach($tab_companies as $c)
                  <option value={{{$c->id}}}>{{{$c->name}}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="row" style="margin-top:10px;">
            <div class="col-sm-3 col-sm-offset-6"><a onclick="$('#form-create-ship').submit();" class="btn btn-primary btn-block">Créer le bateau</a></div>
          </div>
      
      </form>

    </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     
  </body>
</html>
