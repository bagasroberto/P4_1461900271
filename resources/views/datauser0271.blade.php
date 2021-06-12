<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/mycss.css')}}">
  <title>1461900271</title>
</head>
<body>
  <body>
    <div class="container-fluid">
      <div class="header">
        <nav class="navbar navbar-default navbar-static-top" style="margin-bottom:0px;">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" s>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
              <b><a class="navbar-brand">PRAKTIKUM PTW 1461900271</a></b>
            </div>

            <!-- komponen navbar lainnya (link, tombol, teks, dsb -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="/databuku">Data Buku</a></li>
                <li><a href="/rakbuku">Rak Buku</a></li>
                <li><a href="\datauser">User</a></li>           
              </ul>

            </div>
           </div><!-- /.container -->
        </nav>
      <div class="body" style="margin-top:40px">
        <div class="container">
          <section id="check">
            <div class="row">
              <div class="col-md-12">
                <h2 class="judul" align="center">Data User</h2>
                <br>
              </div>
            </div>
   <div class="card-body">
    <div class="row">
      <center>

     <div class="col-md-8">

      <br><br>
     </div>
    </div>
</center>
      <button>Tambah Data</button>
<br>
   <div class="mt-3" style="max-height: 340px; overflow-y: auto;">
     <table class="table table-bordered">
      <br>
      <center>
      <tr>
       <th>No</th>
       <th>Nama</th>
       <th>Username</th>
       <th>Password</th>
       <th>Action</th>
      </tr></center>
            @foreach ($item as $key => $i)
      <tr>
       <td>{{$key+1}}</td>
       <td>{{ $i->nama }}</td>
       <td>{{ $i->username }}</td>
       <td>{{ $i->password }}</td>
       <td>
         <button>Edit</button>
         <button>Hapus</button>
       </td>            
      @endforeach
      </tr>
     </table>   
    </div>
   </div>           
    </div>
     <div class="card col-md-8 mx-auto mt-3">
  </div>
 </div>

  </body>

</html>