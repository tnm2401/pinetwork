<tr>
    <th>
        Account
    </th>
    <th>
        Payment
    </th>
    <th>
        Transaction
    </th>
    <th>
        Type
    </th>
    <th>
        Time
    </th>
</tr>

@foreach ($data as $d)

<tr>
    <td class="name">
        <a href="{{route('account_detail',$d['source_account'])}}">{{ \Illuminate\Support\Str::limit($d['source_account'], 4, $end='') }}</a>
    </td>
    @if($d['type']=='payment')
    <td>Pay <span class="pi-coin">{{floatval($d['amount'])}}π</span> to <a class="name" href="{{route('account_detail',$d['to'])}}"> {{ \Illuminate\Support\Str::limit($d['to'], 4, $end='') }}</a></td>
    @else
    <td>Created Account <a class="name" href="{{route('account_detail',$d['account'])}}"> {{ \Illuminate\Support\Str::limit($d['account'], 4, $end='') }}</a> with balance
        <span class="pi-coin">{{floatval($d['starting_balance'])}}π</span>   </td>
    @endif
    <td class="id">
     <a href="{{route('hash_detail',$d['transaction_hash'])}}">{{$d['transaction_hash']}}</a>   
    </td>
    <td>
      {{ ($d['type']=='payment') ? 'Payment' : 'Create Account' }}
    </td>
    <td>
       {{ \Carbon\Carbon::parse($d['created_at'])->diffForHumans() }}
    </td>
    
</tr>

@endforeach