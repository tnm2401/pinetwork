@extends('layouts.layouts')
@section('title')
    Pi Blockexploer | Home
@endsection
@section('main')

  <div class="s-container main sFDR sJCSB sMgT10">
      
        <div class="latest-operation">
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
                        <a href="{{route('account_detail',$d['source_account'])}}">{{ \Illuminate\Support\Str::limit($d['source_account'], 4, $end='') }}</a>
                    </td>
                    @if($d['type']=='create_account')
                    <td>Created Account <a class="name" href="{{route('account_detail',$d['account'])}}"> {{ \Illuminate\Support\Str::limit($d['account'], 4, $end='') }}</a> with balance
                        <span class="pi-coin">{{floatval($d['starting_balance'])}}π</span>
                    </td>
                    @else
                    <td>Pay <span class="pi-coin">{{floatval($d['amount'])}}π</span>  to <a class="name" href="{{route('account_detail',$d['to'])}}"> {{ \Illuminate\Support\Str::limit($d['to'], 4, $end='') }}</a></td>
                    @endif
            
                    <td>
                        {{ \Carbon\Carbon::parse($d['created_at'])->diffForHumans() }}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

        <div class="latest-transaction">
            <div class="top">
                <h3>LATEST TRANSACTIONS</h3>
             <a href="{{route('get_transactions')}}"> <span>VIEW ALL </span></a>
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
                  <a href="{{route('hash_detail',$d['id'])}}">   {{ \Illuminate\Support\Str::limit($t['id'], 8, $end='...') }} </a> 
                    </td>
                      <td><a href="{{route('block_detail',$t['ledger'])}}">{{$t['ledger']}}</a></td>
                    <td>
                     {{$t['operation_count']}}
                    </td>
                    <td>
                     {{ \Carbon\Carbon::parse($t['created_at'])->diffForHumans() }}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="latest-block">
            <div class="top">
                <h3>LATEST BLOCKS</h3>
                <a href="{{route('get_blocks')}}">   <span>VIEW ALL</span> </a>
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
            
                    <td>{{ \Carbon\Carbon::parse($b['closed_at'])->diffForHumans() }}</td>
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
    }, 90000); // refresh every 10000 milliseconds
</script>
@endsection