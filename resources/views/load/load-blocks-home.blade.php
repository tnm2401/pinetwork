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
@foreach ($block as $b)
<tr>
    <td class="id">
    <a href="{{route('block_detail',$b['sequence'])}}"> {{$b['sequence']}}</a>
    </td>

    <td>

    <a href="">{{$b['successful_transaction_count']}}</a> / {{$b['failed_transaction_count']}}
    </td>

    <td>{{ \Carbon\Carbon::parse($b['closed_at'])->diffForHumans() }}</td>
</tr>
@endforeach