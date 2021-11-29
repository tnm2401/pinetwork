<tr>
  <th>
      #
  </th>
  <th>
      Source
  </th>
  <th>
      Block
  </th>
  <th>
      Operations
  </th>
  <th>
      Time
  </th>
</tr>

@foreach ($data as $d)

<tr>
  <td >
     
      <a href="">{{ \Illuminate\Support\Str::limit($d['hash'], 8, $end='...') }}</a>
  </td>
 
  <td class="name"> <a href="">{{ \Illuminate\Support\Str::limit($d['source_account'], 4, $end='') }}</a></td>              
  <td class="id">
      <a href="">{{$d['ledger']}}</a>
  </td>
  <td>
      <a href="">{{$d['operation_count']}}</a>
  </td>
  <td>
      <a href=""> {{ \Carbon\Carbon::parse($d['created_at'])->diffForHumans() }}</a>
  </td>
  
</tr>
@endforeach