<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
      <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/AdamsAppleRecipeCustomer.css') }}">
  </head>
  <body>
    <div class="container">
        <div class="row my-5">
            <!--First columnn-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn">

                    <!--Card image-->
                    <h1 "card-title">Adam`s apple</h1>
                    <img class="img-fluid" src="{{ url('img/AdamsAppleLarge.jpg') }}" alt="Card image cap">
                    <ul>
                      <li>Arbata 60 ml</li>
                      <li>Nefiltruotos obuolių sultys 90 ml</li>
                      <li>Medus 2 arbat. šaukštel.</li>
                      <li>Citrinų sultys 10 ml</li>
                      <li>Cinamono lazdelė1 vnt.</li>
                      <li>Obuolio grežinėlis 1 vnt.</li>
                    </ul>
                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <a href="{{ url('/home') }}" class="btn btn-info">Grįžti</a>
                        <a href="{{ url('/pranesimas') }}" class="btn btn-info">Gaminti</a>
                    </div>

                </div>
                <!--/.Card-->
            </div>
              </div>
                </div>
  </body>
</html>
