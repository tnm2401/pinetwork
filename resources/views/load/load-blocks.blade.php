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
        <a href="">{{$d['sequence']}}</a>
    </td>
    <td>
        <a href="">{{$d['successful_transaction_count']}}</a> successful  / {{$d['failed_transaction_count']}} failed
    </td>
    <td>
        <a href=""> {{ \Carbon\Carbon::parse($d['closed_at'])->diffForHumans() }}</a>
    </td>
    
</tr>

@endforeach
