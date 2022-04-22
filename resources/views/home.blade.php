<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <ul>
      @foreach($trains as $train)
      <li class="treno">
        <div>
          {{$train['azienda']}} <br>
        </div>
        <div>
          {{$train['codice_treno']}}
        </div>
        <div>
          {{$train['stazione_di_partenza']}}
        </div>
        <div>
          {{$train['stazione_di_arrivo']}}
        </div>
        <div>
          {{$train['orario_di_arrivo']}}
        </div>
        <div>
          {{$train['orario_di_partenza']}}
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</body>
</html>