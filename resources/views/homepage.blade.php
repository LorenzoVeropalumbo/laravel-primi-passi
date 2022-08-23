<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Style -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <style>
    *{
      box-sizing: border-box;
      padding: 0;
      margin: 0;
    }


    html, body {
      background-color: #fff;
      color: #636b6f;
      font-family: 'Nunito', sans-serif;
      font-weight: 200;
      height: 100vh;
      margin: 0;
    }

    .full-height {
      height: 100vh;
      background-image: url('https://cdn1.parksmedia.wdprapps.disney.com/media/blog/wp-content/uploads/2022/07/u8y4t7o2yut9piut35ger-1024x576.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    h1{
      text-align: center; 
      font-size: 42px;
      color: white;
      padding-bottom: 15px;
    }

    a{
      text-decoration: none;
      color: white;
      font-size: 30px;
      padding: 0 20px;
    }

    a:hover{
      color: red;
      background-color: white;
      border-radius: 20px;
      border: 1px solid red;
    }

    .nav-align{
      text-align: center;
    }

  </style>
</head>
<body>
  <div class="full-height">
  <div>
    <h1>FANTASTILANDIA</h1>
    <div class="nav-align">
      @if(count($NavBarlinks) > 0)
        @foreach($NavBarlinks as $NavBarlink)
        <a href="{{ $NavBarlink['link'] }}">{{ $NavBarlink['name'] }}</a>
        @endforeach
      @else
          <div>Non liks</div>        
      @endif 
    </div> 
  </div> 
  
  
  </div>
</body>
</html>