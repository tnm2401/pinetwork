@extends('layouts.layouts')
@section('title')
    Pi Blockexploer | Transaction Detail
@endsection
@section('main')
<div class="main sFDR sJCSB sMgT10">
    <div class="space">
        <div class="top">
            <h3>Giao dịch <span>1C487BBF7EB8E0776C517FC862E69CE38B3C0181AA4916F7354A99F22A3F8673</span></h3>
            <span class="paginate">json</span>
        </div>
        <table>
           
            <tr>
                <td>
                    Thời gian
                </td>
                <td>
                    26/11/2021 15:42
                </td>
            </tr>
            <tr>
                <td>
                    Chi phí
                </td>
                <td>
                    0.01 Test-π
                </td>
            </tr>
            <tr>
                <td>
                    Ledger
                </td>
                <td>
                    4823269
                </td>
            </tr>
            <tr>
                <td colspan="2">Memo (Text)</td>
            </tr>
        </table>
    </div>

    <div class="space">
        <div class="top">
            <h3>Hoạt động (1)</h3>
        </div>
        <table>
           
            <tr>
                <td>
                    Tài khoản
                </td>
                <td>
                    Hoạt động
                </td>
                <td>
                    Thời gian
                </td>
            </tr>
            <tr>
                <td class="name">
                    <a href="">JCSB</a>
                </td>
                <td>
                    Thanh toán 20 Test-π đến <a href="">GD32</a>
                </td>
                <td>
                    26/11/2021 15:42
                </td>
            </tr>
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