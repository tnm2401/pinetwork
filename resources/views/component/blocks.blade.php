@extends('layouts.layouts')
@section('title')
    Pi Blockexploer | Blocks
@endsection
@section('main')
<div class="s-container main sFDR sJCSB sMgT10">
    <div class="space">
        
        <div class="top">
            <h3>BLOCK</h3>
            <form action="{{route('post_blocks')}}" method="POST">
            @csrf
            <button class="none" type="submit"> <span>PREVIOUS PAGE  <i class="fas fa-arrow-circle-right"></i></span></button>
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
           
            @foreach ($data as $d)
           
            <tr>
                <td >
                    <a href="{{route('block_detail',$d['sequence'])}}">{{$d['sequence']}}</a>
                </td>
                <td>
                    <a href="{{route('block_detail',$d['sequence'])}}">{{$d['successful_transaction_count']}}</a> successful  / <span style="color: #ff6363;">{{$d['failed_transaction_count']}}</span> failed
                </td>
                <td>
                    {{ \Carbon\Carbon::parse($d['closed_at'])->diffForHumans() }}
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
       $('#latest-blocks').load('{{route("load_blocks")}}');
    
    }, 60000); // refresh every 10000 milliseconds
    </script>
@endsection