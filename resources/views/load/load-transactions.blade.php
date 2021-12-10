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
       
        <a href="{{route('hash_detail',$d['hash'])}}">{{ \Illuminate\Support\Str::limit($d['hash'], 8, $end='...') }}</a>
    </td>
   
    <td class="name"> <a href="{{route('account_detail',$d['source_account'])}}">{{ \Illuminate\Support\Str::limit($d['source_account'], 4, $end='') }}</a></td>              
    <td class="id">
        <a href="{{route('block_detail',$d['ledger'])}}">{{$d['ledger']}}</a>
    </td>
    <td>
        {{$d['operation_count']}}
    </td>
    <td>
        {{ \Carbon\Carbon::parse($d['created_at'])->diffForHumans() }}
    </td>
    
</tr>

@endforeach