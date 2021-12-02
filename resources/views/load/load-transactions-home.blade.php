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
  <a href="">   {{ \Illuminate\Support\Str::limit($t['id'], 8, $end='...') }} </a> 
    </td>
  
      <td><a href="">{{$t['ledger']}}</a></td>
  
    <td>
      <a href=""> {{$t['operation_count']}}</a>
    </td>
    <td>
     <a href=""> {{ \Carbon\Carbon::parse($t['created_at'])->diffForHumans() }}</a>
    </td>
</tr>
@endforeach