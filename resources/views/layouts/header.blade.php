<head>
@include('layouts.seo')
<link rel="icon" type="image/png" sizes="16x16"  href="{{asset('assets')}}/favicons/favicon-32x32.png">
  <title>@yield('title')</title>
  {{-- main css ↓ --}}
  <link rel="stylesheet" href="{{asset("assets")}}/css/style.css">
</head>
<div class="header">
  <div class="s-container header-data">
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
  </div>
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
