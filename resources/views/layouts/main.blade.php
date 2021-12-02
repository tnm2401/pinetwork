@extends('layouts.layouts')
@section('main')
<div class="container body">
    <div class="pace-cover"></div>
    <div id="st-container" class="st-container st-effect">
      <div class="main_containers">

        <!-- TOP SECONDARY NAVIGATION -->
        <div class="top_nav">
          <div class="nav_menu">
            <ul class="nav navbar-nav navbar-left">
             
            </ul> <!-- top menu ul -->
            <ul class="nav navbar-nav navbar-right">
              {{-- <li class="button-night-mode">
                  <button type="button" class="btn btn-sm btn-toggle" data-toggle="button" aria-pressed="true" autocomplete="off">
                    <div class="handle"></div>
                  </button>
                </li> --}}
              <li class="search-wrap">
                <a href="javascript:;" id="btn-search" class="search-nav">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </a>
              </li>
              <li class="language">
                <a href="javascript:;" class="lang-swich dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="assets/images/united-kingdom.svg" alt="uk">
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="javascript:;"><img src="assets/images/france.svg" alt="fr"><span>France</span></a></li>
                  <li><a href="javascript:;"><img src="assets/images/germany.svg" alt="de"><span>Germany</span></a></li>
                  <li><a href="javascript:;"><img src="assets/images/italy.svg" alt="it"><span>Italy</span></a></li>
                  <li><a href="javascript:;"><img src="assets/images/spain.svg" alt="es"><span>Spain</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <!-- PAGE CONTENT -->
        <div class="right_col" role="main">
      
         
          <div class="row chart-section1">
            <div class="col-md-12">
              <div class="panel panel-default table-transactions">
                <div class="panel-heading padding_30">
                  <h3 class="no-margin">Recent Blocks</h3>
                </div>
                <div class="panel-body padding_30">
                  <table class="table table-striped no-margin">
                    <tbody>
                      <tr>
                        <th>#</th>
                        <th>Transactions</th>
                        <th>Time</th>
                     
                      </tr>
                    @foreach ($data as $d)
                    <tr>
                      <td>
                        <a href="crypto_address.html">{{$d['sequence']}}</a>
                      </td>
                      <td>	{{$d['successful_transaction_count']}} successful / {{$d['failed_transaction_count']}} failed</td>
                      <td> {{ \Carbon\Carbon::parse($d['closed_at'])->diffForHumans() }}</td>
                    </tr>
                  
                    @endforeach
                     

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default table-transactions">
                <div class="panel-heading padding_30">
                  <h3 class="no-margin">Latest Transactions</h3>
                </div>
                <div class="panel-body padding_30">
                  <table class="table table-striped no-margin">
                    <tbody>
                      <tr id="latest-txs">
                        <th>Transaction Hash</th>
                        <th>Source</th>
                        <th>Block</th>
                        <th>Operations</th>
                        <th>Time</th>
                        <th>Status</th>
                      </tr>
                      <tr class="new-tx">
                        <td>
                          <a href="search.html">
                            8d2c7b06afa0
                          </a>
                          ...
                        </td>
                        <td>0.0126281 BTC</td>
                        <td>
                          <time class="timeago" datetime="2018-02-01T13:38:01Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
                        </td>
                        <td>1</td>
                        <td>59&nbsp;seconds ago</td>
                        <td><span class="label label-success">Confirmed</span></td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <a href="#" class="scrollToTop"><i class="fa fa-chevron-up text-white" aria-hidden="true"></i></a>
        </div>
@endsection