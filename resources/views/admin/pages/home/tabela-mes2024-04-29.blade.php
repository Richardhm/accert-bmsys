<thead>
<tr>
    <th colspan="4" class="bg-warning">
        <select name="ranking_mes" id="ranking_mes" class="w-100 text-center bg-warning font-weight-bold" style="border:none;">
            <option value="">Mês</option>

            @php
                // Mapeamento dos nomes dos meses
                $mesesRanking = [
                    '01' => 'Janeiro',
                    '02' => 'Fevereiro',
                    '03' => 'Março',
                    '04' => 'Abril',
                    '05' => 'Maio',
                    '06' => 'Junho',
                    '07' => 'Julho',
                    '08' => 'Agosto',
                    '09' => 'Setembro',
                    '10' => 'Outubro',
                    '11' => 'Novembro',
                    '12' => 'Dezembro',
                ];

                // Obtém o ano atual
                $anoAtualRanking = date('Y');

                // Obtém o ano passado
                $anoPassadoRanking = $anoAtualRanking - 1;

                // Obtém o mês atual
                $mesAtualRanking = date('m');

                // Loop para adicionar os meses do ano passado
                for ($mesRanking = 1; $mesRanking <= 12; $mesRanking++) {
                    $mesFormatadoRanking = str_pad($mesRanking, 2, '0', STR_PAD_LEFT);
                    $optionValueRanking = "$mesFormatadoRanking/$anoPassadoRanking";
                    $optionLabelRanking = $mesesRanking[$mesFormatadoRanking] . "/$anoPassadoRanking";
                    $selectedRankingMes = ($mesFormatadoRanking == $mes && $anoPassadoRanking == $ano) ? 'selected' : '';
                    echo "<option value=\"$optionValueRanking\" $selectedRankingMes>$optionLabelRanking</option>";
                }

                // Loop para adicionar os meses de 2024 até o mês atual
                for ($mesR = 1; $mesR <= $mesAtualRanking; $mesR++) {
                    $mesFormatadoR = str_pad($mesR, 2, '0', STR_PAD_LEFT);
                    $optionValueR = "$mesFormatadoR/$anoAtualRanking";
                    $optionLabelR = $mesesRanking[$mesFormatadoR] . "/$anoAtualRanking";
                    $selectedRanking = ($mesFormatadoR == $mes && $anoAtualRanking == $ano) ? 'selected' : '';
                    echo "<option value=\"$optionValueR\" $selectedRanking>$optionLabelR</option>";
                }
            @endphp
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
