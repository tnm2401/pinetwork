<tr>
    <th>
        #
    </th>
    <th>
        Transactions
    </th>
    <th>
        Time
    </th>
</tr>

@foreach ($data as $d)

<tr>
    <td >
        <a href="{{route('block_detail',$d['sequence'])}}">{{$d['sequence']}}</a>
    </td>
    <td>
        <a href="{{route('block_detail',$d['sequence'])}}">{{$d['successful_transaction_count']}}</a> successful  / <span style="color: #ff6363;">{{$d['failed_transaction_count']}}</span> failed
    </td>
    <td>
        {{ \Carbon\Carbon::parse($d['closed_at'])->diffForHumans() }}
    </td>
    
</tr>

@endforeach