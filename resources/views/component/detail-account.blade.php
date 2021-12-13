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
        <table class="account-detail">
            <tr>
                <td class="detail-title">
                    Public Key:
                </td>
                <td class="idRp detail-content">
                    <a href="">{{$data['2']['id']}}</a>
                </td>
            </tr>
            <tr>
                <td class="detail-title">
                    Home Domain:
                </td>
                <td class="detail-content">
                    
                </td>
            </tr>
            <tr>
                <td class="detail-title">
                    Subentry Count:
                </td>
                <td class="detail-content">
                    {{$data['2']['subentry_count']}}
                </td>
            </tr>
        </table>
    </div>

    <div class="space">
        
        <div class="tabs">
            <div class="tab-item active">Balances</a></div>
            <div class="tab-item"> Payments</a></div>
            <div class="tab-item"> Offers</a></div>
            <div class="tab-item"> Trades</a></div>
            <div class="tab-item"> Effects</a></div>
            {{-- <div class="tab-item"> Operations</a></div> --}}
            <div class="tab-item"> Transactions</a></div>
            <div class="tab-item"> Signing</a></div>
            <div class="tab-item"> Flags</a></div>
            <div class="tab-item"> Data</a></div>
            <div class="line"></div>
          </div>

          <div class="tab-content">
            <div class="tab-pane active">
              <div class="top">
                  <h3>BALANCES</h3>
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
                    <h3>PAYMENTS</h3>
                    {{-- <button>Next page</button> --}}
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
                        <a href="{{route("account_detail",$d['source_account'])}}">{{ \Illuminate\Support\Str::limit($d['source_account'], 4, $end='') }}</a>
                    </td>
                    <td>
                        @if($d['type_i'] != 0)
                        Pay <span class="pi-coin">{{floatval($d['amount'])}}</span> π to <a class="name" href="{{route('account_detail',$d['to'])}}"> {{ \Illuminate\Support\Str::limit($d['to'], 4, $end='') }}</a>
                        @else
                        Created Account <a href="{{route('account_detail',$d['account'])}}">{{ \Illuminate\Support\Str::limit($d['account'], 4, $end='') }}</a> with balance {{floatval($d['starting_balance'])}}
                        @endif
                    </td>
                    <td class="id">
                       <a href="{{route('hash_detail',$d['transaction_hash'])}}"> {{$d['transaction_hash']}}   </a> 
                    </td>
                    <td>
                        {{ ($d['type_i']==1) ? 'Payment' : 'Create Account' }}
                    </td>
                    <td>
                        {{ \Carbon\Carbon::parse($d['created_at'])->diffForHumans() }}
                    </td>
                </tr>
                @endforeach
                
            </table>
            </div>
            <div class="tab-pane">
                <div class="top">
                    <h3>OFFERS</h3>
                    {{-- <button>Next Page</button> --}}
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
                <div class="top">
                    <h3>TRADES</h3>
                    {{-- <button>Next Page</button> --}}
                </div>
              <table>
                @if(!$data['trade'])
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
               
                @foreach ($data['trade'] as $d)
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
                        No trades
                       </td>
                </tr>
                @endif
            </table>
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
                @foreach ($data['effect'] as $e)
                <tr>
                    @if($e['type_i']==10)
                    <td>
                        Signer Created
                    </td>
                    <td>
                        Public Key: <a class="name" href="{{route('account_detail',$e['account'])}}">{{ \Illuminate\Support\Str::limit($e['public_key'], 4, $end='') }}</a> ; Weight: {{$e['weight']}}
                    </td>
                    @elseif($e['type_i']==0)
                    <td>
                        Account Created
                    </td>
                    <td>
                        Amount <span class="pi-coin">{{floatval($e['starting_balance'])}}π</span>
                    </td>
                    @elseif($e['type_i']==2)
                    <td>
                        Account Credited
                    </td>
                    <td>
                        Amount <span class="pi-coin">{{floatval($e['amount'])}}π</span>
                    </td>
                    @elseif($e['type_i']==3)
                    <td>
                        Account Debited
                    </td>
                    <td>
                        Amount <span class="pi-coin">{{floatval($e['amount'])}}π</span>
                    </td>
                    @endif
                    <td class="id">
                       
                        @php
                        $id = $e['_links']['operation']['href'];
                        $get_effect_operation = Http::get($id)->json();
                        $hashdt = collect($get_effect_operation);
                       @endphp
                       <a href="{{route('hash_detail',$hashdt['transaction_hash'])}}"> {{ \Illuminate\Support\Str::limit($hashdt['transaction_hash'], 8, $end='...') }} </a>
                    </td>
                    <td>
                        {{ \Carbon\Carbon::parse($e['created_at'])->setTimezone($tz)->diffForHumans() }}
                    </td>
                </tr>
                @endforeach
            </table>
            </div>
            
            {{-- <div id="hoat-dong" class="tab-pane">
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
                   
                    @foreach ($data['payments'] as $d)
                    <tr>
                    <td class="name">
                        <a href="{{route("account_detail",$d['source_account'])}}">{{ \Illuminate\Support\Str::limit($d['source_account'], 4, $end='') }}</a>
                    </td>
                    <td>
                        @if($d['type_i'] != 0)
                        Pay <span class="pi-coin">{{floatval($d['amount'])}}</span> π to <a class="name" href="{{route('account_detail',$d['to'])}}"> {{ \Illuminate\Support\Str::limit($d['to'], 4, $end='') }}</a>
                        @else
                        Created Account <a href="{{route('account_detail',$d['account'])}}">{{ \Illuminate\Support\Str::limit($d['account'], 4, $end='') }}</a> with balance {{floatval($d['starting_balance'])}}
                        @endif
                    </td>
                    <td class="id">
                       <a href="{{route('hash_detail',$d['transaction_hash'])}}"> {{$d['transaction_hash']}}   </a> 
                    </td>
                    <td>
                        {{ ($d['type_i']==1) ? 'Payment' : 'Create Account' }}
                    </td>
                    <td>
                        {{ \Carbon\Carbon::parse($d['created_at'])->setTimezone($tz)->diffForHumans() }}
                    </td>
                </tr>
                @endforeach
                </table>    
            </div> --}}
           
            <div id="giao-dich" class="tab-pane">
                <div class="top">
                    <h3>TRANSACTIONS</h3>
                {{-- <button>Next Page</button> --}}
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
                    @foreach ($data['transaction'] as $t)
                    <tr>
                        <td class="idRp">
                            <a href="{{route('hash_detail',$t['id'])}}">{{$t['id']}}</a>
                        </td>
                        <td>
                            <a href="{{route('block_detail',$t['ledger'])}}">{{$t['ledger']}}</a>
                        </td>
                        <td>
                            {{$t['operation_count']}}
                        </td>
                        <td>
                            {{ \Carbon\Carbon::parse($t['created_at'])->SetTimezone($tz)->diffForHumans() }}
                        </td>
                    </tr>
                    @endforeach
                 
                </table>
            </div>
            <div id="ky-ket" class="tab-pane">
                <div class="top">
                    <h3>SIGNING</h3>
                </div>
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
                                    <a href="{{route('account_detail',$data['2']['signers']['0']['key'])}}">{{ \Illuminate\Support\Str::limit($data['2']['signers']['0']['key'], 4, $end='') }}</a>
                                </td>
                                <td>
                                    {{$data['2']['signers']['0']['weight']}}
                                </td>
                                <td>
                                    {{$data['2']['signers']['0']['type']}}
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
                                <td> {{$data['2']['thresholds']['low_threshold']}}</td>
                                <td> {{$data['2']['thresholds']['med_threshold']}}</td>
                                <td> {{$data['2']['thresholds']['high_threshold']}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div id="co" class="tab-pane">
                <div class="top">
                    <h3>FLAGS</h3>
                </div>
                <table>
                    <tr><td>Name</td><td>Value</td></tr>
                    <tr><td>auth_required</td><td>{{ $data['2']['flags']['auth_required']==false ? 'False' : 'True' }}</td></tr>
                    <tr><td>auth_revocable	</td><td> {{ $data['2']['flags']['auth_revocable']==false ? 'False' : 'True' }}</td></tr>
                    <tr><td>auth_immutable</td><td>{{ $data['2']['flags']['auth_immutable']==false ? 'False' : 'True' }}</td></tr>
                </table>
            </div>
            <div id="du-lieu" class="tab-pane">
                <div class="top">
                    <h3>DATA</h3>
                </div>
                <p>No data</p>
            </div>
          </div>

        
    </div>
</div>
@endsection