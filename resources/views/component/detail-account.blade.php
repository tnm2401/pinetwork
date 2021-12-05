@extends('layouts.layouts')
@section('title')
    Pi Blockexploer | User
@endsection
@section('main')
<div class="main sFDR sJCSB sMgT10">
    <div class="space">
        <div class="top">
            <h3>Tài khoản</h3>
            <span class="paginate">json</span>
        </div>
        <table>
           
            <tr>
                <td>
                    Public Key:
                </td>
                <td>
                    GCJ3QTQTAG6NEIJUBE3726YXGSHDX6OX4STLUNLZSWPPLS6A5PCBGACN
                </td>
            </tr>
            <tr>
                <td>
                    Home Domain:
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    Subentry Count:
                </td>
                <td>
                    0
                </td>
            </tr>
        </table>
    </div>

    <div class="space">
        <div class="top">
            <a href="">Số dư</a>
            <a href="">Thanh toán</a>
            <a href="">Offers</a>
            <a href="">Trades</a>
            <a href="">Hiệu ứng</a>
            <a href="">Hoạt động</a>
            <a href="">Giao dịch</a>
            <a href="">Ký kết</a>
            <a href="">Cờ</a>
            <a href="">Dữ liệu</a>
        </div>
        <table>
           
            <tr>
                <td>
                    Tài sản
                </td>
                <td>
                    Cân đối
                </td>
                <td>
                    Giới hạn
                </td>
            </tr>
            <tr>
                <td>
                    Test-π
                </td>
                <td>
                    28.241
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