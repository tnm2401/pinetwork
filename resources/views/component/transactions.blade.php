@extends('layouts.layouts')
@section('title')
    Pi Blockexploer | Transactions
@endsection
@section('main')
<div class="s-container main sFDR sJCSB sMgT10">
    <div class="space">
        
        <div class="top">
            <h3>TRANSACTION</h3>
            <form action="{{route('post_transactions')}}" method="POST">
            @csrf
            <button class="none" type="submit"> <span>PREVIOUS PAGE  <i class="fas fa-arrow-circle-right"></i></span></button>
        </div>
        <table id="latest-transactions">
            <tr>
                <th>
                    #
                </th>
                <th>
                    Source
                </th>
                <th>
                    Block
                </th>
                <th>
                    Operations
                </th>
                <th>
                    Time
                </th>
            </tr>
           
            @foreach ($data as $d)
           
            <tr>
                <td >
                   
                    <a href="{{route('hash_detail',$d['hash'])}}">{{ \Illuminate\Support\Str::limit($d['hash'], 8, $end='...') }}</a>
                </td>
               
                <td class="name"> <a href="{{route('account_detail',$d['source_account'])}}">{{ \Illuminate\Support\Str::limit($d['source_account'], 4, $end='') }}</a></td>              
                <td class="id">
                    <a href="{{route('block_detail',$d['ledger'])}}">{{$d['ledger']}}</a>
                </td>
                <td>
                    {{$d['operation_count']}}
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
       $('#latest-transactions').load('{{route("load_transactions")}}');
    
    }, 5000); // refresh every 10000 milliseconds
    </script>
@endsection