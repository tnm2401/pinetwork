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
     <a href=""> {{$b['sequence']}}</a>  
    </td>
  
    <td>
      
       <a href="">{{$b['successful_transaction_count']}}</a> / {{$b['failed_transaction_count']}} 
      </td>
     
      <td><a href="">{{ \Carbon\Carbon::parse($b['closed_at'])->diffForHumans() }}</a></td>
</tr>
@endforeach