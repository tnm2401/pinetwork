
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
          <a href="">{{ \Illuminate\Support\Str::limit($d['source_account'], 4, $end='') }}</a>
      </td>
      @if($d['type']=='create_account')
      <td>Created Account <a class="name" href=""> {{ \Illuminate\Support\Str::limit($d['account'], 4, $end='') }}</a> with balance
        <span class="pi-coin">{{floatval($d['starting_balance'])}}</span>  π
      </td>
      @else
      <td>Pay<span class="pi-coin">{{floatval($d['amount'])}}</span> π to <a class="name" href=""> {{ \Illuminate\Support\Str::limit($d['to'], 4, $end='') }}</a></td>
      @endif
     
      <td>
       <a href=""> {{ \Carbon\Carbon::parse($d['created_at'])->diffForHumans() }}</a>
      </td>
  </tr>
  @endforeach

