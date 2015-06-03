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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

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
<style type="text/css">.btn {
    margin-top: 10px;
}</style>

   
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
           <a class="navbar-brand"><img src="img/logo3.png" alt=""></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
<!--   <ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Library</a></li>
  <li class="active">Data</li>
</ol> -->
  
    <div class="row" style="margin-top:10px;">
      <div class="col-sm-10 col-sm-offset-1">
        <h4>Bonjour, {{{ $username }}}. Vous disposez d'un compte de type : {{{ $type_name }}}</h4>
      </div>
    </div>
    <!-- si on est une entreprise -->
    @if($type == 1)
      <h5>Voici la liste de vos navires</h5>
      @foreach($tab_bateaux as $b)
        {{{ $b }}}
        <br/>
      @endforeach

            <!-- si on est un client -->
    @elseif($type == 2)
    test2
        <!-- si on est un employé -->
    @else
        <!-- UI # -->
    <div class="ui-248">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <!-- item -->
            <div class="item">
              <!-- Icon -->
              <div class="icon bg-red"><i class="fa fa-ship"></i></div>
              <!-- Headings -->
              <h3>Bateaux à quai</a></h3>
              <h2><span class="red">{{{ $bateaux }}}</span></h2>
              <!-- Heading with arrow -->
              <h5 class="clearfix"><a href="/ships/list">Voir tout <i class="fa fa-angle-double-right red"></i></a></h5>
              
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <!-- item -->
            <div class="item">
              <!-- Icon -->
              <div class="icon bg-green"><i class="fa fa-arrows-h"></i></div>
              <!-- Headings -->
              <h3><a href="#">Mouvements aujourd'hui</a></h3>
              <h2><a href="#" class="green">121</a></h2>
              <h5 class="clearfix">Voir tout <i class="fa fa-angle-double-right green"></i></h5>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <!-- item -->
            <div class="item">
              <!-- Icon -->
              <div class="icon bg-lblue"><i class="fa fa-archive"></i></div>
              <!-- Headings -->
              <h3><a href="#">Containeurs</a></h3>
              <h2><a href="#" class="lblue">3 504</a></h2>
              <h5 class="clearfix">Voir tout <i class="fa fa-angle-double-right blue"></i></h5>
            </div>
          </div>
                </div>
      </div>
    
    </div>
      
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-3"><a href="/ships/create" class="btn btn-primary btn-block">Créer un bateau</a></div>
          <div class="col-sm-3"><a href="/companies/create" class="btn btn-primary btn-block">Créer une compagnie</a></div>
          <div class="col-sm-3"><a href="/users/create" class="btn btn-primary btn-block">Créer un client</a></div>
          <div class="col-sm-3"><a href="/containers/create" class="btn btn-primary btn-block">Créer un conteneur</a></div>
          <div class="col-sm-3"><a href="/stops/create" class="btn btn-success btn-block">Nouvelle escale</a></div>
        </div>
      </div>
     
     <div class="col-md-10" style="margin-top:50px;">
      <h3>5 dernières arrivées dans le port :</h3>
         
     </div>
     <div class="col-md-2 text-right" style="margin-top:13px;">
      
        
     </div>

      
      
      
      
      
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Compagnie</th>
                <th>Navire</th>
                <th>Date d'entrée</th>
                <th>Date de sortie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        
             @foreach($tab_recent_arrivals as $s)
              <tr>
                <td>{{{$s->ship->company->name}}}</td>
                <td>{{{$s->ship->name}}}</td>
                <td>{{{$s->arrival}}}</td>
                <td>{{{$s->departure}}}</td>
                <td>
                  @if($s->departure == null)
                    <a class="btn btn-primary btn-sm" href="#" role="button">Signaler le départ</a>
                  @endif
                </td>
            </tr>
                @endforeach
   
        </tbody>
    </table>

    </div><!-- /.container -->
    @endif



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     
  </body>
</html>
