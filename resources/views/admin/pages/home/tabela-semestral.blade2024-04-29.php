<thead>
<tr>
    <th colspan="4" class="bg-warning">
        <select name="ranking_semestral" id="ranking_semestral" class="w-100 text-center bg-warning font-weight-bold" style="border:none;">
            <option value="">Semestre</option>
            @php
                // Obtém o ano atual
                $anoAtualSemestre = date('Y');

                // Obtém o ano passado
                $anoPassadoSemestre = $anoAtualSemestre - 1;

                // Obtém o semestre atual (1 ou 2)
                $semestreAtualSemestre = (date('n') <= 6) ? 1 : 2;



                // Loop para adicionar os semestres do ano passado
                for ($semestre_s = 1; $semestre_s <= 2; $semestre_s++) {
                    $optionValueSemestre = "$semestre_s/$anoPassadoSemestre";
                    $optionLabelSemestre = "$semestre_s semestre de $anoPassadoSemestre";
                    $s = $semestre_as == $optionValueSemestre ? 'selected' : '';
                    echo "<option value=\"$optionValueSemestre\" $s>$optionLabelSemestre</option>";
                }

                // Loop para adicionar os semestres deste ano até o semestre atual
                for ($semestre_a = 1; $semestre_a <= $semestreAtualSemestre; $semestre_a++) {
                    $optionValue_a = "$semestre_a/$anoAtualSemestre";
                    $optionLabel_a = "$semestre_a semestre de $anoAtualSemestre";
                    $s = $semestre_as == $optionValue_a ? 'selected' : '';
                    echo "<option value=\"$optionValue_a\" $s>$optionLabel_a</option>";
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
