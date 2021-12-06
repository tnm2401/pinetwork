@extends('layouts.layouts')
@section('title')
    Pi Blockexploer | User
@endsection
@section('main')
<div class="s-container main sFDR sJCSB sMgT10">
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
        
        <div class="tabs">
            <div class="tab-item active">Số dư</a></div>
            <div class="tab-item"> Thanh toán</a></div>
            <div class="tab-item"> Offers</a></div>
            <div class="tab-item"> Trades</a></div>
            <div class="tab-item"> Hiệu ứng</a></div>
            <div class="tab-item"> Hoạt động</a></div>
            <div class="tab-item"> Giao dịch</a></div>
            <div class="tab-item"> Ký kết</a></div>
            <div class="tab-item"> Cờ</a></div>
            <div class="tab-item"> Dữ liệu</a></div>
            <div class="line"></div>
          </div>

          <div class="tab-content">
            <div class="tab-pane active">
              <div class="top">
                  <h3>Số dư</h3>
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
            <div class="tab-pane">
                <div class="top">
                    <h3>Thanh toán</h3>
                    <button>Trang sau</button>
                </div>
                <table>
                    <tr>
                        <td>
                            Tài khoản
                        </td>
                        <td>
                            payments
                        </td>
                        <td>
                            Giao dịch
                        </td>
                        <td>
                            Kiểu
                        </td>
                        <td>
                            Thời gian
                        </td>
                    </tr>
                    <tr>
                        <td class="name">
                            GCOR
                        </td>
                        <td>
                            Đã tạo Tài khoản GBJ5 với số dư <span class="pi-coin">100</span>
                        </td>
                        <td class="id">
                            5001E571C0369F24625BE5BA4AD321ADB941AE46FB655546D65CA931F4714EC7JSON    
                        </td>
                        <td>
                            create_account
                        </td>
                        <td>
                            1 phút trước
                        </td>
                    </tr>
                </table>
            </div>
            <div class="tab-pane">
                <div class="top">
                    <h3>Offers</h3>
                    <button>Trang sau</button>
                </div>
              <table>
                <tr>
                    <td>
                        Bán
                    </td>
                    <td>
                        buy
                    </td>
                    <td>
                        Số tiền
                    </td>
                    <td>
                        Giá bán
                    </td>
                </tr>
                <tr>
                    <td>
                        GCOR[<a>OPDA</a>]
                    </td>
                    <td>
                        Test-π
                    </td>
                    <td>
                        0.0001000    
                    </td>
                    <td>
                        0.0010000
                    </td>
                </tr>
            </table>
            </div>
            <div id="trades" class="tab-pane">
              <h3>Trades</h3>
              <p>No trade</p>
            </div>
            <div id="hieu-ung" class="tab-pane fade">
                <div class="top">
                    <h3>Hiệu ứng</h3>
                    <button>Trang sau</button>
                </div>
              <table>
                <tr>
                    <td>
                        Kiểu
                    </td>
                    <td>
                        detail
                    </td>
                    <td>
                        Giao dịch
                    </td>
                    <td>
                        Thời gian
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        account_debited
                    </td>
                    <td>
                        Số tiền: 100 Test-π
                    </td>
                    <td class="id">
                        7B11F527355E34D4B850097757C643991220A27341A8312AF856F16833C23E96JSON    
                    </td>
                    <td>
                        1 phút trước
                    </td>
                    <td>
                        <a href="">JSON</a>
                    </td>
                </tr>
            </table>
            </div>
            <div id="hoat-dong" class="tab-pane">
                <div class="top">
                    <h3>Hoạt động</h3>
                    <button>Trang sau</button>
                </div>
                <form action="">
                    filter.for-operation-type
                    <select name="" id="">
                        <option value="1">Xin lỗi tình yêu</option>
                    </select>
                </form>  
                <table>
                    <tr>
                        <td>
                            Tài khoản
                        </td>
                        <td>
                            Hoạt động
                        </td>
                        <td>
                            Giao dịch
                        </td>
                        <td>
                            Kiểu
                        </td>
                        <td>
                            Thời gian
                        </td>
                    </tr>
                    <tr>
                        <td class="name">
                            <a href="">CGOR</a>
                        </td>
                        <td>
                            Đã tạo Tài khoản GC75 với số dư 100
                        </td>
                        <td class="id">
                            ac0293ee321c6bd8a0da7f03f24b75a3a06e6aefdd5de882b33e51c1a0a41c8c    
                        </td>
                        <td>
                            create_account
                        </td>
                        <td>
                            1 phút trước
                        </td>
                    </tr>
                </table>    
            </div>
            <div id="giao-dich" class="tab-pane">
                <div class="top">
                    <h3>Giao dịch</h3>
                    <button>Trang sau</button>
                </div>
                <table>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            Ledger
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
                            ac0293ee321c6bd8a0da7f03f24b75a3a06e6aefdd5de882b33e51c1a0a41c8c
                        </td>
                        <td>
                            4960352
                        </td>
                        <td>
                            1    
                        </td>
                        <td>
                            10 phút trước
                        </td>
                    </tr>
                </table>
            </div>
            <div id="ky-ket" class="tab-pane">
              <h3>Ký kết</h3>
                <div class="ky-ket">
                    <div class="detail">
                        <table>
                            <tr>
                                <td>
                                    Chìa khóa
                                </td>
                                <td>
                                    Cân nặng
                                </td>
                                <td>
                                    Kiểu
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="">GCOR</a>
                                </td>
                                <td>
                                    1
                                </td>
                                <td>
                                    ed25519_public_key
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="nguong">
                        <h4>Ngưỡng</h4>
                        <table>
                            <tr>
                                <td>Thấp</td>
                                <td>Trung bình</td>
                                <td>Cao</td>
                            </tr>
                            <tr>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div id="co" class="tab-pane">
              <h3>Cờ</h3>
                <table>
                    <tr><td>Tên</td><td>Giá trị</td></tr>
                    <tr><td>auth_required</td><td>false</td></tr>
                </table>
            </div>
            <div id="du-lieu" class="tab-pane">
              <h3>Dữ liệu</h3>
                <p>No data</p>
            </div>
          </div>

        
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