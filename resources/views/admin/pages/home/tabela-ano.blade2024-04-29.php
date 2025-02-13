<thead>

<tr>

    <th colspan="4" class="bg-warning">
        <select name="ranking_ano" id="ranking_ano" class="ranking_ano w-100 text-center bg-warning font-weight-bold" style="border:none;">
            <option value="">Ano</option>
            <option value="2023" {{$ano == 2023 ? 'selected' : ''}}>2023</option>
            <option value="2024" {{$ano == 2024 ? 'selected' : ''}}>2024</option>
        </select>
    </th>
</tr>

</thead>
<tbody>
@php
    $i=0;
@endphp
@foreach($ranking as $r)

    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$r->usuario}}</td>
        <td>{{$r->quantidade}}</td>
        <td>{{number_format($r->valor,2,",",".")}}</td>
    </tr>
@endforeach
</tbody>
