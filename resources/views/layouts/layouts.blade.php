

<!DOCTYPE html>
<html lang="en">
    @include('layouts.header')
    <body class="preloading">
        <div id="loader" class="loader">
            <div class="loader-inner">
             
                <img class="spin" src="{{asset("assets")}}/img/logo.png" alt="">
              </div>


          </div>
        <div class="s-container">

         <div class="tool">
            <a onclick=location=URL>
                <div  class="systemMenu">
                  <i class="fas fa-sync-alt"></i> Refresh
                </div>
            </a>
                <div class="search">
                    <input class="form-control" type="text" placeholder="Search by Account / Transaction / ...">
                    <button><i class="fas fa-search"></i></button>
                </div>
            </div>
          
    @yield('main')
    @include('layouts.footer')

</body>

</html>