@extends('layouts.layouts')
@section('title')
    Pi Blockexploer | Transaction {{$data['2']['hash']}}
@endsection
@section('main')

<div class="s-container main sFDR sJCSB sMgT10">
    <div class="space">
        <div class="top">
            <h3>TRANSACTION <span>{{$data['2']['hash']}}</span></h3>
        </div>
        <table>
           
            <tr>
                <td>
                    Time
                </td>
                <td>
        
                    {{ \Carbon\Carbon::parse($data['2']['created_at'])->setTimezone($tz)->format('m-d-Y h:i:s A') }} <br>                   
                </td>
            </tr>
            <tr>
                <td>
                    Fee
                </td>
                <td>
                    {{$data['2']['fee_charged']/1000000}} π
                </td>
            </tr>
            <tr>
                <td>
                    Block
                </td>
                <td>
                    <a href="{{route('block_detail',$data['2']['ledger'])}}">{{$data['2']['ledger']}}</a>
                </td>
            </tr>
            <tr>
                <td colspan="2">Memo ({{$data['2']['memo_type']}})</td>
            </tr>
        </table>
    </div>

    <div class="space">
        <div class="top">
            <h3>Operations (1)</h3>
        </div>
        <table>
           
            <tr>
                <td>
                    Account
                </td>
                <td>
                    Operation
                </td>
                <td>
                    Time
                </td>
            </tr>
            <tr>
                <td class="name">
                   <a href="">{{ \Illuminate\Support\Str::limit($data['1']['source_account'], 4, $end='') }}</a>
                </td>
                <td>
                    @if($data['1']['type_i'] != 0)
                    Pay<span class="pi-coin">{{floatval($data['1']['amount'])}}</span> π to <a class="name" href=""> {{ \Illuminate\Support\Str::limit($data['1']['to'], 4, $end='') }}</a>
                    @else
                    Created Account <a href="">{{ \Illuminate\Support\Str::limit($data['1']['account'], 4, $end='') }}</a> with balance {{floatval($data['1']['starting_balance'])}}
                    @endif
                </td>
                <td>
                    <a href=""> {{ \Carbon\Carbon::parse($data['1']['created_at'])->diffForHumans() }}</a>
                </td>
            </tr>
        </table>
    </div>
</div>


@endsection