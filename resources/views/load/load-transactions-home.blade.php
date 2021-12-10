<tr>
  <th>
      #
  </th>
  <th>
      Block
  </th>
  <th>
      Ops
  </th>
  <th>
      Time
  </th>
</tr>
@foreach ($tran as $t)
<tr>
  <td class="id">
<a href="{{route('hash_detail',$t['id'])}}">   {{ \Illuminate\Support\Str::limit($t['id'], 8, $end='...') }} </a> 
  </td>
    <td><a href="{{route('block_detail',$t['ledger'])}}">{{$t['ledger']}}</a></td>
  <td>
   {{$t['operation_count']}}
  </td>
  <td>
   {{ \Carbon\Carbon::parse($t['created_at'])->diffForHumans() }}
  </td>
</tr>
@endforeach