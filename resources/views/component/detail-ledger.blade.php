@extends('layouts.layouts')
@section('title')
    Pi Blockexploer | Transaction Detail
@endsection
@section('main')
<div class="main sFDR sJCSB sMgT10">
    <div class="space">
        <div class="top">
            <h3>LEDGER <span>4818880</span></h3>
            <span class="paginate">json</span>
        </div>
        <div class="row">
            <div class="mini-tab">
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
                            Hash
                        </td>
                        <td class="id">
                            aaeec895fc4ebf30da8182f753a3bb55331fbd307446a1f062426a18b427e4fc
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Trước Hash
                        </td>
                        <td class="id">
                            aaeec895fc4ebf30da8182f753a3bb55331fbd307446a1f062426a18b427e4fc
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Hoạt động
                        </td>
                        <td>
                            5
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Transactions.failed
                        </td>
                        <td>
                            0
                        </td>
                    </tr>
                    <tr>
                        <td>
                            max.transaction
                        </td>
                        <td>
                            1000 per block
                        </td>
                    </tr>
                </table>
            </div>
            <div class="mini-tab">
                <table>
           
                    <tr>
                        <td>
                            base.fee
                        </td>
                        <td>
                            0,01 Test-π
                        </td>
                    </tr>
                    <tr>
                        <td>
                            base.reserve
                        </td>
                        <td>
                            10 Test-π
                        </td>
                    </tr>
                    <tr>
                        <td>
                            fee.pool
                        </td>
                        <td>
                            219.273,322 Test-π
                        </td>
                    </tr>
                    <tr>
                        <td>
                            total.coins
                        </td>
                        <td>
                            100.000.000.000 Test-π
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Phiên bản Nghị định thư
                        </td>
                        <td>
                            15
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="space">
        <div class="top">
            <h3>Giao dịch (5)</h3>
        </div>
        <table>
            <tr>
                <td>
                    #
                </td>
                <td>
                    source.account
                </td>
                <td>
                    Hoạt động
                </td>
                <td>
                    Thời gian
                </td>
            </tr>
            <tr>
                <td>
                    <a href="">aaeec895fc4ebf30da8182f753a3bb55331fbd307446a1f062426a18b427e4fc</a>
                </td>
                <td class="name">
                    <a href="">GD32</a>
                </td>
                <td>
                    1
                </td>
                <td>
                    13 giờ trước
                </td>
            </tr>
            <tr>
                <td class="name" colspan="4">
                    <a href="">csv-export</a>
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