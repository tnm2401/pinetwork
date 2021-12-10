<tr>
  <th>
    Account
  </th>
  <th>
    Operation
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
  @if($d['type']=='create_account')
  <td>Created Account <a class="name" href="{{route('account_detail',$d['account'])}}"> {{ \Illuminate\Support\Str::limit($d['account'], 4, $end='') }}</a> with balance
    <span class="pi-coin">{{floatval($d['starting_balance'])}}π</span>  
  </td>
  @else
  <td>Pay <span class="pi-coin">{{floatval($d['amount'])}}π</span>  to <a class="name" href="{{route('account_detail',$d['to'])}}"> {{ \Illuminate\Support\Str::limit($d['to'], 4, $end='') }}</a></td>
  @endif
 
  <td>
      {{ \Carbon\Carbon::parse($d['created_at'])->diffForHumans() }}
  </td>
</tr>
@endforeach