@extends('layouts.layouts')
@section('title')
    Pi Blockexploer | Account {{$data['2']['id']}}
@endsection
@section('main')
<div class="s-container main sFDR sJCSB sMgT10">
    <div class="space">
        <div class="top">
            <h3>Account</h3>
            {{-- <span class="paginate">json</span> --}}
        </div>
        <table>
           
            <tr>
                <td>
                    Public Key:
                </td>
                <td>
                    {{$data['2']['id']}}
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
                    {{$data['2']['subentry_count']}}
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
                  <h3>Balances</h3>
              </div>
                <table>
                    <tr>
                        <td>
                            Asset
                        </td>
                        <td>
                            Balance
                        </td>
                        <td>
                            Limit
                        </td>
                    </tr>
                    <tr>
                        <td>
                            π
                        </td>
                        <td>
                            {{floatval($data['2']['balances']['0']['balance'])}}
                        </td>
                        <td>
                           
                        </td>
                    </tr>
                </table>
            </div>
            <div class="tab-pane">
                <div class="top">
                    <h3>Payments</h3>
                    <button>Next page</button>
                </div>
              <table>
                <tr>
                    <td>
                        Account
                    </td>
                    <td>
                        Payment
                    </td>
                    <td>
                        Transaction
                    </td>
                    <td>
                        Type
                    </td>
                    <td>
                        Time
                    </td>
                </tr>
                @foreach ($data['payments'] as $d)
                    <tr>
                    <td class="name">
                        <a href="">{{ \Illuminate\Support\Str::limit($d['source_account'], 4, $end='') }}</a>
                    </td>
                    <td>
                        @if($d['type_i'] != 0)
                        Pay <span class="pi-coin">{{floatval($d['amount'])}}</span> π to <a class="name" href=""> {{ \Illuminate\Support\Str::limit($d['to'], 4, $end='') }}</a>
                        @else
                        Created Account <a href="">{{ \Illuminate\Support\Str::limit($d['account'], 4, $end='') }}</a> with balance {{floatval($d['starting_balance'])}}
                        @endif
                    </td>
                    <td class="id">
                       <a href="{{route('hash_detail',$d['transaction_hash'])}}"> {{$d['transaction_hash']}}   </a> 
                    </td>
                    <td>
                        {{ ($d['type_i']==1) ? 'Payment' : 'Create Account' }}
                    </td>
                    <td>
                        <a href="#"> {{ \Carbon\Carbon::parse($d['created_at'])->diffForHumans() }}</a>
                    </td>
                </tr>
                @endforeach
                
            </table>
            </div>
            <div class="tab-pane">
                <div class="top">
                    <h3>Offers</h3>
                    <button>Next Page</button>
                </div>
              <table>
                @if(!$data['offer'])
                <tr>
                    <td>
                        Sell
                    </td>
                    <td>
                        Buy
                    </td>
                    <td>
                        Amount
                    </td>
                    <td>
                        Price
                    </td>
                </tr>
               
                @foreach ($data['offer'] as $d)
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
                @endforeach
                @else
                <tr>
                       <td>
                        No offers
                       </td>
                </tr>
                @endif
            </table>
            </div>
            <div id="trades" class="tab-pane">
              <h3>Trades</h3>
              <p>No trade</p>
            </div>
            <div id="hieu-ung" class="tab-pane fade">
                <div class="top">
                    <h3>EFFECTS</h3>
                    <button>Next Page</button>
                </div>
              <table>
                <tr>
                    <td>
                        Type
                    </td>
                    <td>
                        Details
                    </td>
                    <td>
                        Transaction
                    </td>
                    <td>
                        Time
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
                   
                </tr>
            </table>
            </div>
            <div id="hoat-dong" class="tab-pane">
                <div class="top">
                    <h3>OPERATIONS</h3>
                    <button>Next Page</button>
                </div>
                <form action="">
                    Filter for Operation Type:
                    <select name="" id="">
                        <option value="1">Xin lỗi tình yêu</option>
                    </select>
                </form>  
                <table>
                    <tr>
                        <td>
                           Account
                        </td>
                        <td>
                            Operation
                        </td>
                        <td>
                            Transaction
                        </td>
                        <td>
                            Type
                        </td>
                        <td>
                            Time
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
                    <h3>TRANSACTIONS</h3>
                    <button>Trang sau</button>
                </div>
                <table>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            Block
                        </td>
                        <td>
                            Operations
                        </td>
                        <td>
                            Time
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
                                    Key
                                </td>
                                <td>
                                    Weight
                                </td>
                                <td>
                                    Type
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
                        <h4>Thresholds</h4>
                        <table>
                            <tr>
                                <td>Low</td>
                                <td>Medium</td>
                                <td>High</td>
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
                    <tr><td>Name</td><td>Value</td></tr>
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