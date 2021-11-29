@extends('layouts.layouts')
@section('title')
    Pi Blockexploer | Transaction
@endsection
@section('main')

<div class="main sFDR sJCSB sMgT10">
    <div class="space">
        <div class="top">
            <h3>TRANSACTION <span>{{$data['hash']}}</span></h3>
        </div>
        <table>
           
            <tr>
                <td>
                    Time
                </td>
                <td>
                    {{ \Carbon\Carbon::parse($data['created_at'])->toDateTimeString() }}
                </td>
            </tr>
            <tr>
                <td>
                    Fee
                </td>
                <td>
                    {{$data['fee_charged']/1000000}} π
                </td>
            </tr>
            <tr>
                <td>
                    Block
                </td>
                <td>
                    {{$data['ledger']}}
                </td>
            </tr>
            <tr>
                <td colspan="2">Memo ({{$data['memo_type']}})</td>
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
                   <a href="">{{ \Illuminate\Support\Str::limit($data['source_account'], 4, $end='') }}</a>
                </td>
                <td>
                    @if($data['_link']=='payments')
                    Pay<span class="pi-coin">{{floatval($data['amount'])}}</span> π to <a class="name" href=""> {{ \Illuminate\Support\Str::limit($data['to'], 4, $end='') }}</a>
                    @else
                    Thanh toán 20 Test-π đến <a href="">GD32</a>
                    @endif
                </td>
                <td>
                    26/11/2021 15:42
                </td>
            </tr>
        </table>
    </div>
</div>


@endsection