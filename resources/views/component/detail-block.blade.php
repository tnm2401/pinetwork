@extends('layouts.layouts')
@section('title')
    Pi Blockexploer | Ledger {{$data['2']['sequence']}}
@endsection
@section('main')
<div class="main sFDR sJCSB sMgT10">
    <div class="space">
        <div class="top">
            <h3>BLOCK <span>{{$data['2']['sequence']}}</span></h3>
            {{-- <span class="paginate">json</span> --}}
        </div>
        <div class="row">
            <div class="mini-tab">
                <table>
           
                    <tr>
                        <td>
                            Time
                        </td>
                        <td>
                            {{ \Carbon\Carbon::parse($data['2']['closed_at'])->toDateTimeString() }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Hash
                        </td>
                        <td class="id">
                            {{$data['2']['hash']}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Prev Hash	
                        </td>
                        <td class="id">
                          <a href=""> {{$data['2']['prev_hash']}}</a> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Operations	
                        </td>
                        <td>
                            {{$data['2']['operation_count']}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Transactions Failed	
                        </td>
                        <td>
                            {{$data['2']['failed_transaction_count']}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Max Transactions	
                        </td>
                        <td>
                            {{$data['2']['max_tx_set_size']}}
                        </td>
                    </tr>
                </table>
            </div>
            <div class="mini-tab">
                <table>
           
                    <tr>
                        <td>
                            Base Fee	
                        </td>
                        <td>
                            {{$data['2']['base_fee_in_stroops']/10000000}} π
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Base Reserve
                        </td>
                        <td>
                            {{$data['2']['base_reserve_in_stroops']/10000000}} π
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Fee Pool
                        </td>
                        <td>
                            {{($data['2']['fee_pool'])}} π
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Total Coins	
                        </td>
                        <td>
                            {{number_format(($data['2']['total_coins']))}} π
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Protocol Version	
                        </td>
                        <td>
                            {{($data['2']['protocol_version'])}} π
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="space">
        <div class="top">
            <h3>Transactions  ({{$data['2']['operation_count']}})</h3>
        </div>
        <table>
            <tr>
                <td>
                    #
                </td>
                <td>
                    Source
                </td>
                <td>
                    Operations
                </td>
                <td>
                    Time
                </td>
            </tr>
            @foreach ($data['1'] as $d)
            <tr>
                <td>
                    <a href="{{route('hash_detail',$d['hash'])}}">{{$d['hash']}}</a>
                </td>
                <td class="name">
                    <a href="">{{ \Illuminate\Support\Str::limit($d['source_account'], 4, $end='') }}</a>
                </td>
                <td>
                    {{$d['operation_count']}}
                </td>
                <td>
                    <a href=""> {{ \Carbon\Carbon::parse($d['created_at'])->diffForHumans() }}</a>
                </td>
            </tr>
            @endforeach
           
        </table>
    </div>
</div>
<script type="text/javascript">
    var auto_refresh = setInterval(
    function ()
    {
       $('#latest-transactions').load('{{route("load_transactions")}}');
    
    }, 10000); // refresh every 10000 milliseconds
    </script>
@endsection