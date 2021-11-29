<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="16x16"  href="{{asset('assets')}}/favicons/favicon-32x32.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{asset("assets")}}/css/style.css"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+2:wght@100;200;300;400;700;800&display=swap" rel="stylesheet">
</head>
<div class="header">
  <nav>
      <ul>
          <li>
              <a href="{{route('index')}}"><img src="{{asset('assets')}}/img/logo.png" alt=""></a>
          </li>
          <li>
              <a href="{{route('get_payment')}}">PAYMENT</a>
          </li>
          <li>
              <a href="{{route('get_transactions')}}">TRANSACTIONS</a>
          </li>
          <li>
              <a href="{{route('get_blocks')}}">BLOCK</a>
          </li>
          
      </ul>
  </nav>
  {{-- <div class="x">
      <a class="x-btn sMgR20" href="">TESTNET</a>
      <div class="lang">LANG
          <i class="far"> ...    
              <div class="list">
                  <a href="">Vietnamese</a>
                  <a href="">United States</a>
                  <a href="">Japanese</a>
                  <a href="">Chinese</a>
              </div>
          </i>
      </div>
  </div> --}}
</div>
