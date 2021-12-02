@extends('layouts.layouts')
@section('title')
    Pi Blockexploer | Home
@endsection
@section('main')

  <div class="main sFDR sJCSB sMgT10">
      <div class="left">
          <div class="top">
              <h3>LATEST OPERATIONS</h3>
             <a href="{{route('get_payment')}}"> <span>VIEW ALL</span></a>
          </div>
          
          <table id ="latest-operations" class="">
              <tr>
                  <th>
                    Account
                  </th>
                  <th>
                    Operation
                  </th>
                  <th>
                    Time
                  </th>
              </tr>
          
              @foreach ($data as $d)
              <tr>
                  <td class="name">
                      <a href="">{{ \Illuminate\Support\Str::limit($d['source_account'], 4, $end='') }}</a>
                  </td>
                  @if($d['type']=='create_account')
                  <td>Created Account <a class="name" href=""> {{ \Illuminate\Support\Str::limit($d['account'], 4, $end='') }}</a> with balance
                    <span class="pi-coin">{{floatval($d['starting_balance'])}}π</span>  
                  </td>
                  @else
                  <td>Pay<span class="pi-coin">{{floatval($d['amount'])}}π</span>  to <a class="name" href=""> {{ \Illuminate\Support\Str::limit($d['to'], 4, $end='') }}</a></td>
                  @endif
                 
                  <td>
                   <a href=""> {{ \Carbon\Carbon::parse($d['created_at'])->diffForHumans() }}</a>
                  </td>
              </tr>
              @endforeach
            
          </table>
      
      </div>
      <div class="right">
          <div class="top">
              <h3>LATEST TRANSACTIONS</h3>
              <span>VIEW ALL</span>
          </div>
          <table id="latest-transactions">
              <tr>
                  <th>
                      #
                  </th>
                  <th>
                      Block
                  </th>
                  <th>
                      Ops
                  </th>
                  <th>
                      Time
                  </th>
              </tr>
              @foreach ($tran as $t)
              <tr>
                  <td class="id">
                <a href="">   {{ \Illuminate\Support\Str::limit($t['id'], 8, $end='...') }} </a> 
                  </td>
                
                    <td><a href="{{route('block_detail',$t['ledger'])}}">{{$t['ledger']}}</a></td>
                
                  <td>
                    <a href=""> {{$t['operation_count']}}</a>
                  </td>
                  <td>
                   <a href=""> {{ \Carbon\Carbon::parse($t['created_at'])->diffForHumans() }}</a>
                  </td>
              </tr>
              @endforeach
          </table>


          <div class="top">
            <h3>LATEST BLOCKS</h3>
            <span>VIEW ALL</span>
        </div>
        <table id="latest-blocks">
            <tr>
                <th>
                    #
                </th>
                <th>
                    Transactions
                </th>
                <th>
                    Time
                </th>
            </tr>
               @foreach ($block as $b)
            <tr>
                <td class="id">
                 <a href="{{route('block_detail',$b['sequence'])}}"> {{$b['sequence']}}</a>  
                </td>
              
                <td>
                  
                   <a href="">{{$b['successful_transaction_count']}}</a> / {{$b['failed_transaction_count']}} 
                  </td>
                 
                  <td><a href="">{{ \Carbon\Carbon::parse($b['closed_at'])->diffForHumans() }}</a></td>
            </tr>
            @endforeach
        </table>
      </div>
      
  </div>
</div>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
   $('#latest-operations').load('{{route("load-operation")}}');
   $('#latest-transactions').load('{{route("load-transactions-home")}}');
   $('#latest-blocks').load('{{route("load-blocks-home")}}');
}, 8000); // refresh every 10000 milliseconds
</script>
@endsection