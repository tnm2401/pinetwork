@extends('layouts.layouts')
@section('title')
    Pi Blockexploer | Payments
@endsection
@section('main')
<div class="s-container main sFDR sJCSB sMgT10">
    <div class="space">
        
        <div class="top">
            <h3>PAYMENTS</h3>
            <form action="{{route('post_payment')}}" method="POST">
            @csrf
            <button class="none" type="submit"> <span>PREVIOUS PAGE  <i class="fas fa-arrow-circle-right"></i></span></button>
        </div>
        <table class="tableRpHideColD" id="latest-payments">
            <tr>
                <th>
                    Account
                </th>
                <th>
                    Payment
                </th>
                <th>
                    Transaction
                </th>
                <th>
                    Type
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
                @if($d['type']=='payment')
                <td>Pay <span class="pi-coin">{{floatval($d['amount'])}}π</span> to <a class="name" href="{{route('account_detail',$d['to'])}}"> {{ \Illuminate\Support\Str::limit($d['to'], 4, $end='') }}</a></td>
                @else
                <td>Created Account <a class="name" href="{{route('account_detail',$d['account'])}}"> {{ \Illuminate\Support\Str::limit($d['account'], 4, $end='') }}</a> with balance
                    <span class="pi-coin">{{floatval($d['starting_balance'])}}π</span>   </td>
                @endif
                <td class="id">
                 <a href="{{route('hash_detail',$d['transaction_hash'])}}">{{$d['transaction_hash']}}</a>   
                </td>
                <td>
                  {{ ($d['type']=='payment') ? 'Payment' : 'Create Account' }}
                </td>
                <td>
                   {{ \Carbon\Carbon::parse($d['created_at'])->diffForHumans() }}
                </td>
                
            </tr>
            
            @endforeach
          
           <input type="text" hidden value="{{$d['paging_token']}}" name="previous" id=""> 
        </form>
        </table>
    </div>
</div>

<script type="text/javascript">
    var auto_refresh = setInterval(
    function ()
    {
       $('#latest-payments').load('{{route("load_payment")}}');
    
    }, 20000); // refresh every 10000 milliseconds
    </script>
@endsection