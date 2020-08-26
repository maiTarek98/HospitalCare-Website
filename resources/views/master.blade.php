<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
</head>
<style>
    
body {
    background-color: #f5f5f5
     }
.col-md-6{
    margin-top: 140px;
    background-color: #fffefe;
    padding: 40px;
}
.bg-red, .callout.callout-danger, .alert-danger, .alert-error, .label-danger, .modal-danger .modal-body {
    background-color: #dd4b39 !important;
}
    .callout {
    border-radius: 3px;
    margin: 0 0 5px 0;
    padding: 3px 10px 10px 10px;
    border-left: 5px solid #eee;
}
    .callout.callout-danger
    {
            color: #fff !important;
    }
</style>
<body>

    <div class="container">

        <div class="row">
       @yield('content');        

    </div>
    <!-- /.container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    </div>
    
</body>

</html>
