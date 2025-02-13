@extends('adminlte::page')
@section('title', 'Dashboard')


@section('content_top_nav_right')
    <li class="nav-item"><a class="nav-link text-white" href="{{route('orcamento.search.home')}}">Tabela de Preço</a></li>
    <li class="nav-item"><a class="nav-link text-white" href="{{route('home.administrador.consultar')}}">Consultar</a></li>
    <a class="nav-link" data-widget="fullscreen" href="#" role="button"><i class="fas fa-expand-arrows-alt text-white"></i></a>
@stop

@section('content')

    <div class="d-flex justify-content-center text-center text-white mt-1" style="background-color:#123449;border-radius:5px;font-size:0.875em;">
        Dashboard Abril 2024
    </div>



    <div class="d-flex w-100" style="flex-wrap: wrap;">


        <div class="d-flex w-100 justify-content-between my-1 header_info">

            <div class="d-flex" style="width:16%;">

                <div class="small-box bg-warning w-100 mb-0">
                    <div class="d-flex h-100 w-100">
                        <h5 class="quantidade_vidas text-white ml-1 mt-1">
                            <span style="color:black;">{{$quantidade_vidas}}</span>
                        </h5>
                        <p class="text-white mx-auto d-flex align-self-center">
                            <span style="color:black;">Total</span>
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user fa-sm"></i>
                    </div>
                    <div href="#" class="small-box-footer text-right text-white">
                        <span class="mr-2" style="color:black;">R$ {{number_format($total_valor,2,",",".")}}</span>
                    </div>
                </div>


            </div>

            <div class="d-flex" style="width:16%;">

                <div class="small-box bg-warning w-100 mb-0">
                    <div class="d-flex h-100 w-100">
                            <h5 class="total_individual_quantidade_vidas text-white ml-1 mt-1 text-dark" style="color:black;">
                                <span style="color:black;">{{$total_individual_quantidade_vidas}}</span>
                            </h5>
                            <p class="text-white mx-auto d-flex align-self-center text-dark" style="color:black;">
                                <span style="color:black;">Individual</span>
                            </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user fa-sm"></i>
                    </div>
                    <div href="#" class="small-box-footer text-right text-white mr-2 text-dark">
                        <span class="mr-2" style="color:black;">R$ {{number_format($total_individual,2,",",".")}}</span>
                    </div>
                </div>

            </div>

            <div class="d-flex" style="width:16%;">


                <div class="small-box bg-warning w-100 mb-0">
                    <div class="d-flex h-100 w-100">
                        <h5 class="total_coletivo_quantidade_vidas text-white ml-1 mt-1">
                            <span style="color:black;">{{$total_coletivo_quantidade_vidas}}</span>
                        </h5>
                        <p class="text-white mx-auto d-flex align-self-center">
                            <span style="color:black;">Coletivo</span>
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user fa-sm"></i>
                    </div>
                    <div href="#" class="small-box-footer text-right text-white mr-2 text-dark">
                        <span class="mr-2" style="color:black;">R$ {{number_format($total_coletivo,2,",",".")}}</span>
                    </div>
                </div>


            </div>

            <div class="d-flex" style="width:16%;">

                <div class="small-box bg-warning w-100 mb-0">
                    <div class="d-flex h-100 w-100">
                        <h5 class="total_super_simples_quantidade_vidas text-white ml-1 mt-1">
                            <span style="color:black;">{{$total_super_simples_quantidade_vidas}}</span>
                        </h5>
                        <p class="text-white mx-auto d-flex align-self-center">
                            <span style="color:black;">Super Simples</span>
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user fa-sm"></i>
                    </div>
                    <div class="small-box-footer text-right text-white mr-2 text-dark">
                        <span class="mr-2" style="color:black;">R$ {{number_format($total_super_simples,2,",",".")}}</span>
                    </div>
                </div>

            </div>

            <div class="d-flex" style="width:16%;">

                <div class="small-box bg-warning w-100 mb-0">
                    <div class="d-flex h-100 w-100">
                        <h5 class="total_coletivo_quantidade_vidas text-white ml-1 mt-1">
                            <span style="color:black;">0</span>
                        </h5>
                        <p class="text-white mx-auto d-flex align-self-center">
                            <span style="color:black;">PME</span>
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user fa-sm"></i>
                    </div>
                    <div class="small-box-footer text-right text-white mr-2 text-dark">
                        <span class="mr-2" style="color:black;">R$ 0,00</span>

                    </div>
                </div>

            </div>

            <div class="d-flex" style="width:16%;">

                <div class="small-box bg-warning w-100 mb-0">
                    <div class="d-flex h-100 w-100">
                        <h5 class="total_coletivo_quantidade_vidas text-white ml-1 mt-1">
                            <span style="color:black;">0</span>
                        </h5>
                        <p class="text-white mx-auto d-flex align-self-center">
                            <span style="color:black;">Sindicato</span>
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user fa-sm"></i>
                    </div>
                    <div href="#" class="small-box-footer text-right text-white mr-2 text-dark">
                        <span class="mr-2" style="color:black;">R$ 0,00</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="d-flex w-100 justify-content-between" style="margin:0;padding:0;">

        <div class="d-flex" style="flex-basis:40%;flex-direction:column;margin:0;padding:0;">

            <div class="d-flex w-100 justify-content-between" style="margin:0;padding:0;">

                <table class="table table-sm border bg-white tabela_mes mb-0" style="width:33%;">
                    <thead>
                    <tr class="w-100 text-center ">
                        <th colspan="3" class="bg-warning text-white">
                            <select name="escolher_mes" id="escolher_mes" class="escolher_mes w-100 text-center font-weight-bold bg-warning">
                                <option>Mês</option>
                                @php
                                    // Mapeamento dos nomes dos meses
                                    $meses = [
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
                                    $anoAtual = date('Y');

                                    // Obtém o ano passado
                                    $anoPassado = $anoAtual - 1;

                                    // Obtém o mês atual
                                    $mesAtual = date('m');

                                    // Loop para adicionar os meses do ano passado
                                    for ($mes = 1; $mes <= 12; $mes++) {
                                        $mesFormatado = str_pad($mes, 2, '0', STR_PAD_LEFT);
                                        $optionValue = "$mesFormatado/$anoPassado";
                                        $optionLabel = $meses[$mesFormatado] . "/$anoPassado";
                                        echo "<option value=\"$optionValue\">$optionLabel</option>";
                                    }

                                    // Loop para adicionar os meses de 2024 até o mês atual
                                    for ($mes = 1; $mes <= $mesAtual; $mes++) {
                                        $mesFormatado = str_pad($mes, 2, '0', STR_PAD_LEFT);
                                        $optionValue = "$mesFormatado/$anoAtual";
                                        $optionLabel = $meses[$mesFormatado] . "/$anoAtual";
                                        $selected = ($mesFormatado == $mesAtual && $anoAtual == $anoAtual) ? 'selected text-center' : '';
                                        echo "<option value=\"$optionValue\" $selected>$optionLabel</option>";
                                    }
                                @endphp
                            </select>
                        </th>
                    </tr>

                    </thead>
                    <tbody>

                    <tr>
                        <td>Individual</td>
                        <td class="total_individual_quantidade_vidas_mes text-center">{{$total_individual_quantidade_vidas}}</td>
                        <td class="total_individual_mes text-right">
                            <span class="mr-1">{{number_format($total_individual,2,",",".")}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Coletivo</td>
                        <td class="total_coletivo_quantidade_vidas_mes text-center">{{$total_coletivo_quantidade_vidas}}</td>
                        <td class="total_coletivo_mes text-right">
                            <span class="mr-1">{{number_format($total_coletivo,2,",",".")}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Sup. Simples</td>
                        <td class="total_super_simples_quantidade_vidas_mes text-center">{{$total_super_simples_quantidade_vidas}}</td>
                        <td class="total_super_simples_mes text-right">
                            <span class="mr-1">{{number_format($total_super_simples,2,",",".")}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Sindipão</td>
                        <td class="total_sindipao_quantidade_vidas_mes text-center">{{$total_sindipao_quantidade_vidas}}</td>
                        <td class="total_sindipao_mes text-right">
                            <span class="mr-1">{{number_format($total_sindipao,2,",",".")}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Sindimaco</td>
                        <td class="total_sindimaco_quantidade_vidas_mes text-center">{{$total_sindimaco_quantidade_vidas}}</td>
                        <td class="total_sindimaco_mes text-right">
                            <span class="mr-1">{{number_format($total_sindimaco,2,",",".")}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Sincofarma</td>
                        <td class="total_sincofarma_quantidade_vidas_mes text-center">{{$total_sincofarma_quantidade_vidas}}</td>
                        <td class="total_sincofarma_mes text-right">
                            <span class="mr-1">{{number_format($total_sincofarma,2,",",".")}}</span>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Total</th>
                        <th class="quantidade_vidas_mes text-center">{{$quantidade_vidas}}</th>
                        <th class="total_valor_mes text-right">
                            <span class="mr-1">{{number_format($total_valor,2,",",".")}}</span>
                        </th>
                    </tr>
                    </tfoot>
                </table>

                <table class="table border bg-white tabela_semestre mb-0" style="width:33%;">
                    <thead>
                    <tr class="w-100 text-center">

                        <th colspan="3" class="bg-warning text-white">
                            <select name="escolher_semestre" id="escolher_semestre" class="escolher_semestre w-100 text-center bg-warning font-weight-bold" style="border:none;">
                                <option value="0">Semestre</option>
                                @php
                                    // Obtém o ano atual
                                    $anoAtual = date('Y');

                                    // Obtém o ano passado
                                    $anoPassado = $anoAtual - 1;

                                    // Obtém o semestre atual (1 ou 2)
                                    $semestreAtual = (date('n') <= 6) ? 1 : 2;

                                    // Loop para adicionar os semestres do ano passado
                                    for ($semestre_i = 1; $semestre_i <= 2; $semestre_i++) {
                                        $optionValue = "$semestre_i/$anoPassado";
                                        $optionLabel = "$semestre_i Semestre de $anoPassado";
                                        echo "<option value=\"$optionValue\">$optionLabel</option>";
                                    }

                                    // Loop para adicionar os semestres deste ano até o semestre atual
                                    for ($semestre = 1; $semestre <= $semestreAtual; $semestre++) {
                                        $optionValue = "$semestre/$anoAtual";
                                        $optionLabel = "$semestre Semestre de $anoAtual";
                                        $selected = ($semestre == $semestreAtual && $anoAtual == $anoAtual) ? 'selected' : '';
                                        echo "<option value=\"$optionValue\" $selected>$optionLabel</option>";
                                    }


                                @endphp
                            </select>
                        </th>
                    </tr>

                    </thead>
                    <tbody>

                    <tr>
                        <td>Individual</td>
                        <td class="total_individual_quantidade_vidas_semestre text-center">{{$total_individual_quantidade_vidas_semestre}}</td>
                        <td class="total_individual_valor_semestre_valor text-right">
                            <span class="mr-1">{{number_format($total_individual_semestre,2,",",".")}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Coletivo</td>
                        <td class="total_coletivo_quantidade_vidas_semestre text-center">{{$total_coletivo_quantidade_vidas_semestre}}</td>
                        <td class="total_coletivo_valor_semestre_valor text-right">
                            <span class="mr-1">{{number_format($total_coletivo_semestre,2,",",".")}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Sup. Simples</td>
                        <td class="total_super_simples_quantidade_vidas_semestre text-center">{{$total_super_simples_quantidade_vidas_semestre}}</td>
                        <td class="total_super_simples_valor_semestre_valor text-right">
                            <span class="mr-1">{{number_format($total_ss_semestre,2,",",".")}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Sindipão</td>
                        <td class="total_sindipao_quantidade_vidas_semestre text-center">{{$total_sindipao_quantidade_vidas_semestre}}</td>
                        <td class="total_sindipao_valor_semestre_valor text-right">
                            <span class="mr-1">{{number_format($total_sindipao_semestre,2,",",".")}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Sindimaco</td>
                        <td class="total_sindimaco_quantidade_vidas_semestre text-center">{{$total_sindimaco_quantidade_vidas_semestre}}</td>
                        <td class="total_sindimaco_valor_semestre_valor text-right">
                            <span class="mr-1">{{number_format($total_sindimaco_semestre,2,",",".")}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Sincofarma</td>
                        <td class="total_sincofarma_quantidade_vidas_semestre text-center">{{$total_sincofarma_quantidade_vidas_semestre}}</td>
                        <td class="total_sincofarma_valor_semestre_valor text-right">
                            <span class="mr-1">{{number_format($total_sincofarma_semestre,2,",",".")}}</span>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Total</th>
                        <th class="quantidade_vidas_semestre">{{$total_quantidade_vidas_semestre}}</th>
                        <th class="quantidade_valor_semestre text-right">
                            <span class="mr-1">{{number_format($total_valor_semestre,2,",",".")}}</span>
                        </th>
                    </tr>
                    </tfoot>
                </table>

                <table class="table border bg-white tabela_escolher_ano mb-0" style="width:33%;">
                    <thead>
                    <tr class="w-100 text-center">
                        <th colspan="3" class="bg-warning text-white">
                            <select name="escolher_ano" id="escolher_ano" class="escolher_ano text-center w-100 bg-warning text-white font-weight-bold" style="border:none;">
                                <option value="">Anos</option>
                                <option value="2023" {{$ano_atual == 2023 ? 'selected' : ''}}>2023</option>
                                <option value="2024" {{$ano_atual == 2024 ? 'selected' : ''}}>2024</option>
                            </select>
                        </th>
                    </tr>

                    </thead>
                    <tbody>

                    <tr>
                        <td class="plano-col">Individual</td>
                        <td class="total_individual_quantidade_vidas_ano qtd-col text-center">{{$total_individual_quantidade_vidas_ano}}</td>
                        <td class="total_individual_ano valor-col text-right">
                            <span class="mr-1">{{number_format($total_individual_ano,2,",",".")}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="plano-col">Coletivo</td>
                        <td class="total_coletivo_quantidade_vidas_ano qtd-col text-center">{{$total_coletivo_quantidade_vidas_ano}}</td>
                        <td class="total_coletivo_ano valor-col text-right">
                            <span class="mr-1">{{number_format($total_coletivo_ano,2,",",".")}}</span>
                        </td>
                    </tr>




                    <tr>
                        <td class="plano-col">Sup. Simples</td>
                        <td class="total_super_simples_quantidade_vidas_ano qtd-col text-center">{{$total_super_simples_quantidade_vidas_ano}}</td>
                        <td class="total_super_simples_ano valor-col text-right">
                            <span class="mr-1">{{number_format($total_ss_ano,2,",",".")}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="plano-col">Sindipão</td>
                        <td class="total_sindipao_quantidade_vidas_ano qtd-col text-center">{{$total_sindipao_quantidade_vidas_ano}}</td>
                        <td class="total_sindipao_ano valor-col text-right">
                            <span class="mr-1">{{number_format($total_sindipao_ano,2,",",".")}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="plano-col">Sindimaco</td>
                        <td class="total_sindimaco_quantidade_vidas_ano qtd-col text-center">{{$total_sindimaco_quantidade_vidas_ano}}</td>
                        <td class="total_sindimaco_ano valor-col text-right">
                            <span class="mr-1">{{number_format($total_sindimaco_ano,2,",",".")}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="plano-col">Sincofarma</td>
                        <td class="total_sincofarma_quantidade_vidas_ano qtd-col text-center">{{$total_sincofarma_quantidade_vidas_ano}}</td>
                        <td class="total_sincofarma_ano valor-col text-right">
                            <span class="mr-1">{{number_format($total_sincofarma_ano,2,",",".")}}</span>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Total</th>
                        <th class="quantidade_vidas_ano text-center">{{$total_quantidade_vidas_ano}}</th>
                        <th class="total_vidas_ano text-right">
                            <span class="mr-1">{{number_format($total_valor_ano,2,",",".")}}</span>
                        </th>
                    </tr>
                    </tfoot>
                </table>
            </div>

            <div class="w-100 grafico_content mt-1" style="margin:0;padding:0;">
                <div id="chart_div" style="width:100%;"></div>
                <div id="select_div" style="margin:0;padding:0;">
                    <select name="selecao_ano" id="selecao_ano" class="text-center" style="margin:0;padding:0;">
                        <option value="">--Ano--</option>
                        <option value="2023" {{$ano_atual == 2023 ? "selected" : ""}}>2023</option>
                        <option value="2024" {{$ano_atual == 2024 ? "selected" : ""}}>2024</option>
                    </select>
                </div>
                <div class="w-50 justify-content-around content_legenda">
                    <span class="d-flex align-items-center">
                        <span>Individual</span>
                        <span class="ml-1" style="background:#1b9e77;width:10px;height:10px;"></span>
                    </span>
                    <span class="d-flex align-items-center">
                        <span>Coletivo</span>
                        <span class="ml-1" style="background:#d95f02;width:10px;height:10px;"></span>
                    </span>
                    <span class="d-flex align-items-center">
                        <span>Empresarial</span>
                        <span class="ml-1" style="background:#7570b3;width:10px;height:10px;"></span>
                    </span>
                </div>
                <div class="total_janeiro">0</div>
                <div class="total_fevereiro">0</div>
                <div class="total_marco">0</div>
                <div class="total_abril">0</div>
                <div class="total_maio">0</div>
                <div class="total_junho">0</div>
                <div class="total_julho">0</div>
                <div class="total_agosto">0</div>
                <div class="total_setembro">0</div>
                <div class="total_outubro">0</div>
                <div class="total_novembro">0</div>
                <div class="total_dezembro">0</div>
            </div>

        </div>

        <div class="d-flex" style="flex-basis:59%;flex-direction:column;">
            <div class="bg-white p-1 d-flex align-items-center" style="border-radius:5px;">
                <h5 class="d-flex align-items-center my-auto w-100">
                    <span class="d-flex justify-content-end" style="flex-basis:60%;">Ranking Vendedor</span>
                    <span class="d-flex justify-content-end" style="flex-basis:40%;">
                        <i class="fas fa-medal"></i>
                    </span>

                </h5>
            </div>

            <div class="d-flex my-1 ranking_classificacao">
                @foreach(collect($ranking_mes)->take(5) as $r)

                    <div class="small-box bg-info w-100 mb-0 mr-1 d-flex">
                        <div class="d-flex justify-content-between w-100 h-75">
                            <div class="text-white d-flex flex-wrap align-content-between ml-1 font-weight-bold w-50">
                                <span class="w-100">{{$loop->iteration}}º</span>
                                <span class="w-100 mb-2" style="font-size:0.55em;">{{$r->usuario}}</span>
                            </div>
                            <div class="d-flex justify-content-end" style="width:50%;">
                                @if(file_exists("storage/".$r->image))
                                    <img src="{{asset("storage/".$r->image)}}" alt="{{$r->usuario}}" title="{{$r->usuario}}" class="mr-2 my-auto" style="border-radius:50%;width:70%;height:80%;">
                                @else
                                    <span style="font-size:0.7em;" class="mr-2 my-auto">{{$r->usuario}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="small-box-footer d-flex justify-content-between" style="font-size:0.8em;">
                            <span class="ml-1">{{$r->quantidade}} Vidas</span>
                            <span class="mr-2">R$ {{number_format($r->valor,2,",",".")}}</span>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex w-100 justify-content-between">
                <div class="content_table">
                    <table class="table table-sm border bg-white tabela_ranking_mes" style="width:100%;">
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
                                            echo "<option value=\"$optionValueRanking\">$optionLabelRanking</option>";
                                        }

                                        // Loop para adicionar os meses de 2024 até o mês atual
                                        for ($mesR = 1; $mesR <= $mesAtualRanking; $mesR++) {
                                            $mesFormatadoR = str_pad($mesR, 2, '0', STR_PAD_LEFT);
                                            $optionValueR = "$mesFormatadoR/$anoAtualRanking";
                                            $optionLabelR = $mesesRanking[$mesFormatadoR] . "/$anoAtualRanking";
                                            $selectedRanking = ($mesFormatadoR == $mesAtualRanking && $anoAtualRanking == date('Y')) ? 'selected' : '';
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
                        @foreach($ranking_mes as $r)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$r->usuario}}</td>
                                <td>{{$r->quantidade}}</td>
                                <td>{{number_format($r->valor,2,",",".")}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="content_table">
                <table class="table table-sm border bg-white tabela_semestral" style="width:100%;">
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
                                        $optionLabelSemestre = "$semestre_s Semestre de $anoPassadoSemestre";
                                        echo "<option value=\"$optionValueSemestre\">$optionLabelSemestre</option>";
                                    }

                                    // Loop para adicionar os semestres deste ano até o semestre atual
                                    for ($semestre_a = 1; $semestre_a <= $semestreAtualSemestre; $semestre_a++) {
                                        $optionValue_a = "$semestre_a/$anoAtualSemestre";
                                        $optionLabel_a = "$semestre_a Semestre de $anoAtualSemestre";
                                        $selected_a = ($semestre_a == $semestreAtualSemestre && $anoAtualSemestre == date('Y')) ? 'selected' : '';
                                        echo "<option value=\"$optionValue_a\" $selected_a>$optionLabel_a</option>";
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
                    @foreach($ranking_semestre as $r)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$r->usuario}}</td>
                            <td>{{$r->quantidade}}</td>
                            <td>{{number_format($r->valor,2,",",".")}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                <div class="content_table">
                <table class="table table-sm border bg-white tabela_ranking_ano" style="width:100%;">
                    <thead>

                    <tr>

                        <th colspan="4" class="bg-warning">
                            <select name="ranking_ano" id="ranking_ano" class="ranking_ano w-100 text-center bg-warning font-weight-bold" style="border:none;">
                                <option value="">Ano</option>
                                <option value="2023" {{$ano_atual == 2023 ? 'selected' : ''}}>2023</option>
                                <option value="2024" {{$ano_atual == 2024 ? 'selected' : ''}}>2024</option>
                            </select>
                        </th>
                    </tr>

                    </thead>
                    <tbody>
                    @php
                        $i=0;
                    @endphp
                    @foreach($ranking_ano as $r)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$r->usuario}}</td>
                            <td>{{$r->quantidade}}</td>
                            <td>{{number_format($r->valor,2,",",".")}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>



            </div>




        </div>




    </div>

    <input type="hidden" id="janeiro_individual" value="{{$total_individual_quantidade_vidas_janeiro}}">
    <input type="hidden" id="fevereiro_individual" value="{{$total_individual_quantidade_vidas_fevereiro}}">
    <input type="hidden" id="marco_individual" value="{{$total_individual_quantidade_vidas_marco}}">
    <input type="hidden" id="abril_individual" value="{{$total_individual_quantidade_vidas_abril}}">
    <input type="hidden" id="maio_individual" value="{{$total_individual_quantidade_vidas_maio}}">
    <input type="hidden" id="junho_individual" value="{{$total_individual_quantidade_vidas_junho}}">
    <input type="hidden" id="julho_individual" value="{{$total_individual_quantidade_vidas_julho}}">
    <input type="hidden" id="agosto_individual" value="{{$total_individual_quantidade_vidas_agosto}}">
    <input type="hidden" id="setembro_individual" value="{{$total_individual_quantidade_vidas_setembro}}">
    <input type="hidden" id="outubro_individual" value="{{$total_individual_quantidade_vidas_outubro}}">
    <input type="hidden" id="novembro_individual" value="{{$total_individual_quantidade_vidas_novembro}}">
    <input type="hidden" id="dezembro_individual" value="{{$total_individual_quantidade_vidas_dezembro}}">

    <input type="hidden" id="janeiro_coletivo" value="{{$total_coletivo_quantidade_vidas_janeiro}}">
    <input type="hidden" id="fevereiro_coletivo" value="{{$total_coletivo_quantidade_vidas_fevereiro}}">
    <input type="hidden" id="marco_coletivo" value="{{$total_coletivo_quantidade_vidas_marco}}">
    <input type="hidden" id="abril_coletivo" value="{{$total_coletivo_quantidade_vidas_abril}}">
    <input type="hidden" id="maio_coletivo" value="{{$total_coletivo_quantidade_vidas_maio}}">
    <input type="hidden" id="junho_coletivo" value="{{$total_coletivo_quantidade_vidas_junho}}">
    <input type="hidden" id="julho_coletivo" value="{{$total_coletivo_quantidade_vidas_julho}}">
    <input type="hidden" id="agosto_coletivo" value="{{$total_coletivo_quantidade_vidas_agosto}}">
    <input type="hidden" id="setembro_coletivo" value="{{$total_coletivo_quantidade_vidas_setembro}}">
    <input type="hidden" id="outubro_coletivo" value="{{$total_coletivo_quantidade_vidas_outubro}}">
    <input type="hidden" id="novembro_coletivo" value="{{$total_coletivo_quantidade_vidas_novembro}}">
    <input type="hidden" id="dezembro_coletivo" value="{{$total_coletivo_quantidade_vidas_dezembro}}">

    <input type="hidden" id="janeiro_empresarial" value="{{$totalContratoEmpresarialJaneiro}}">
    <input type="hidden" id="fevereiro_empresarial" value="{{$totalContratoEmpresarialFevereiro}}">
    <input type="hidden" id="marco_empresarial" value="{{$totalContratoEmpresarialMarco}}">
    <input type="hidden" id="abril_empresarial" value="{{$totalContratoEmpresarialAbril}}">
    <input type="hidden" id="maio_empresarial" value="{{$totalContratoEmpresarialMaio}}">
    <input type="hidden" id="junho_empresarial" value="{{$totalContratoEmpresarialJunho}}">
    <input type="hidden" id="julho_empresarial" value="{{$totalContratoEmpresarialJulho}}">
    <input type="hidden" id="agosto_empresarial" value="{{$totalContratoEmpresarialAgosto}}">
    <input type="hidden" id="setembro_empresarial" value="{{$totalContratoEmpresarialSetembro}}">
    <input type="hidden" id="outubro_empresarial" value="{{$totalContratoEmpresarialOutubro}}">
    <input type="hidden" id="novembro_empresarial" value="{{$totalContratoEmpresarialNovembro}}">
    <input type="hidden" id="dezembro_empresarial" value="{{$totalContratoEmpresarialDezembro}}">



@stop

@section('css')
    <style>

        .content_table {height:430px;overflow:auto;width:33%;border-radius:5px;}







        /* Estilo da barra de rolagem */
        .content_table::-webkit-scrollbar {
            width: 5px; /* Largura da barra de rolagem */
        }

        /* Estilo da "trilha" da barra de rolagem */
        .content_table::-webkit-scrollbar-track {
            background: #f1f1f1; /* Cor de fundo da trilha */
            border-radius: 5px; /* Raio das bordas da trilha */
        }

        /* Estilo do "polegar" da barra de rolagem */
        .content_table::-webkit-scrollbar-thumb {
            background: #ffc107; /* Cor do polegar da barra de rolagem */
            border-radius: 5px; /* Raio das bordas do polegar */
        }

        /* Estilo do "polegar" da barra de rolagem quando o mouse passa por cima */
        .content_table::-webkit-scrollbar-thumb:hover {
            background: #555; /* Cor do polegar da barra de rolagem ao passar o mouse */
        }



        .small-box {
            height:90px !important;
        }

        .small-box .icon > i.fas {
            font-size: 30px !important;
        }

        .header_info .small-box > .small-box-footer {
            position:absolute !important;
            width:100% !important;
            bottom:0px !important;
            font-size:0.8em !important;
        }

        .ranking_classificacao .small-box .small-box-footer {
            position:absolute !important;
            width:100% !important;
            bottom:0px !important;
        }

        .header_info .small-box > .small-box-footer .inner p {
            font-size:0.7em !important;

        }

        .header_info .small-box > .small-box-footer .inner h5 {
            font-size:0.8em !important;

        }

        .table th, .table td {padding: 0.35rem !important;vertical-align: middle;font-size:0.75em;}

        #select_div {position: relative;top: -310px;left: 510px;z-index: 1000;display:none;}
        .content_legenda {z-index: 1000;position:absolute;left:150px;top:30px;font-size:0.7em;display:none;}
        .grafico_content {position:relative;width:100%;margin:0;padding:0;height:315px;}
        .total_janeiro {position: absolute;top: 280px;left: 50px;z-index: 1000;font-size:0.6em;color:#666f76;display:none;}
        .total_fevereiro {position: absolute;top: 280px;left: 100px;z-index: 1000;font-size:0.6em;color:#666f76;display:none;}
        .total_marco {position: absolute;top: 280px;left: 145px;z-index: 1000;font-size:0.6em;color:#666f76;display:none;}
        .total_abril {position: absolute;top: 280px;left: 190px;z-index: 1000;font-size:0.6em;color:#666f76;display:none;}
        .total_maio {position: absolute;top: 280px;left: 240px;z-index: 1000;font-size:0.6em;color:#666f76;display:none;}
        .total_junho {position: absolute;top: 280px;left: 285px;z-index: 1000;font-size:0.6em;color:#666f76;display:none;}
        .total_julho {position: absolute;top: 280px;left: 332px;z-index: 1000;font-size:0.6em;color:#666f76;display:none;}
        .total_agosto {position: absolute;top: 280px;left: 375px;z-index: 1000;font-size:0.6em;color:#666f76;display:none;}
        .total_setembro {position: absolute;top: 280px;left: 423px;z-index: 1000;font-size:0.6em;color:#666f76;display:none;}
        .total_outubro {position: absolute;top: 280px;left: 469px;z-index: 1000;font-size:0.6em;color:#666f76;display:none;}
        .total_novembro {position: absolute;top: 280px;left: 515px;z-index: 1000;font-size:0.6em;color:#666f76;display:none;}
        .total_dezembro {position: absolute;top: 280px;left: 563px;z-index: 1000;font-size:0.6em;color:#666f76;display:none;}

        .tabela_semestre .plano-col {width: 65% !important;}
        .tabela_semestre .qtd-col {width: 5% !important;}
        .tabela_semestre .valor-col {width: 30% !important;}

        .tabela_escolher_ano .plano-col {width: 65% !important;}
        .tabela_escolher_ano .qtd-col {width: 5% !important;}
        .tabela_escolher_ano .valor-col {width: 30% !important;}





        .tabela_mes .plano-col {width: 65% !important;}
        .tabela_mes .qtd-col {width: 5% !important;}
        .tabela_mes .valor-col {width: 30% !important;}

        .escolher_mes {
            border: none;

        }

        /* Estilo para adicionar uma borda quando o select está focado */
        .escolher_mes:focus {
            outline: none;

        }

        .total-label {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            font-size: 12px;
            font-weight: bold;
            color: #000;
        }


    </style>

@stop


@section('js')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>



        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("body").on('change',"#ranking_ano",function(){
                let valor = $(this).val();
                $.ajax({
                    url:"{{route('dashboard.ranking.ano')}}",
                    method:"POST",
                    data: {
                        valor
                    },
                    success:function(res) {

                        $(".tabela_ranking_ano").slideUp('slow',function(){
                            $(".tabela_ranking_ano").html(res).slideDown('slow');
                        });
                    }
                })
            });


            $("body").on('change',"#ranking_mes",function(){
                let valor = $(this).val();
                $.ajax({
                    url:"{{route('dashboard.ranking.mes')}}",
                    method:"POST",
                    data: {
                        valor
                    },
                    success:function(res) {

                        $(".tabela_ranking_mes").slideUp('slow',function(){
                            $(".tabela_ranking_mes").html(res).slideDown('slow');
                        });
                    }
                })
            });

            $("body").on('change',"#ranking_semestral",function(){
                let valor = $(this).val();
                $.ajax({
                    url:"{{route('dashboard.ranking.semestral')}}",
                    method:"POST",
                    data: {
                        valor
                    },
                    success:function(res) {
                        $(".tabela_semestral").slideUp('slow',function(){
                            $(".tabela_semestral").html(res).slideDown('slow');
                        });
                    }
                })
            });


            $(".escolher_ano").on('change',function(){
                let ano = $(this).val();
                $.ajax({
                    url:"{{route('dashboard.ano')}}",
                    method:"POST",
                    data: {
                        ano
                    },
                    success:function(res) {
                        $(".total_coletivo_ano").text(res.total_coletivo);
                        $(".total_individual_ano").text(res.total_individual);
                        $(".total_super_simples_ano").text(res.total_ss);
                        $(".total_sindipao_ano").text(res.total_sindipao);
                        $(".total_sindimaco_ano").text(res.total_sindimaco);
                        $(".total_sincofarma_ano").text(res.total_sincofarma);
                        $(".total_vidas_ano").text(res.total_valor);

                        $(".total_coletivo_quantidade_vidas_ano").text(res.total_coletivo_quantidade_vidas);
                        $(".total_individual_quantidade_vidas_ano").text(res.total_individual_quantidade_vidas);
                        $(".total_super_simples_quantidade_vidas_ano").text(res.total_super_simples_quantidade_vidas);
                        $(".total_sindipao_quantidade_vidas_ano").text(res.total_sindipao_quantidade_vidas);
                        $(".total_sindimaco_quantidade_vidas_ano").text(res.total_sindimaco_quantidade_vidas);
                        $(".total_sincofarma_quantidade_vidas_ano").text(res.total_sincofarma_quantidade_vidas);
                        $(".quantidade_vidas_ano").text(res.quantidade_vidas_ano);
                    }
                })
            });




            $(".escolher_semestre").on('change',function(){
                let semestre = $(this).val();
                $.ajax({
                    url:"{{route('dashboard.semestre')}}",
                    method:"POST",
                    data: {
                        semestre
                    },
                    success:function(res) {
                        $(".total_coletivo_quantidade_vidas_semestre").text(res.total_coletivo_quantidade_vidas);
                        $(".total_individual_quantidade_vidas_semestre").text(res.total_individual_quantidade_vidas);
                        $(".total_super_simples_quantidade_vidas_semestre").text(res.total_super_simples_quantidade_vidas);
                        $(".total_sindipao_quantidade_vidas_semestre").text(res.total_sindipao_quantidade_vidas);
                        $(".total_sindimaco_quantidade_vidas_semestre").text(res.total_sindimaco_quantidade_vidas);
                        $(".total_sincofarma_quantidade_vidas_semestre").text(res.total_sincofarma_quantidade_vidas);
                        $(".quantidade_vidas_semestre").text(res.total_semestre);

                        $(".total_individual_valor_semestre_valor").text(res.total_individual);
                        $(".total_coletivo_valor_semestre_valor").text(res.total_coletivo);
                        $(".total_super_simples_valor_semestre_valor").text(res.total_ss);
                        $(".total_sindipao_valor_semestre_valor").text(res.total_sindipao);
                        $(".total_sindimaco_valor_semestre_valor").text(res.total_sindimaco);
                        $(".total_sincofarma_valor_semestre_valor").text(res.total_sincofarma);



                    }
                })
            });


            $(".escolher_mes").on('change',function(){
               let mes_ano = $(this).val();
               $.ajax({
                  url:"{{route('dashboard.mes')}}",
                  method:"POST",
                  data: {
                      mes_ano
                  },
                  success:function(res) {

                      $(".total_coletivo_quantidade_vidas_mes").text(res.total_coletivo_quantidade_vidas);
                      $(".total_individual_quantidade_vidas_mes").text(res.total_individual_quantidade_vidas);
                      $(".total_super_simples_quantidade_vidas_mes").text(res.total_super_simples_quantidade_vidas);
                      $(".total_sindipao_quantidade_vidas_mes").text(res.total_sindipao_quantidade_vidas);
                      $(".total_sindimaco_quantidade_vidas_mes").text(res.total_sindimaco_quantidade_vidas);
                      $(".total_sincofarma_quantidade_vidas_mes").text(res.total_sincofarma_quantidade_vidas);
                      $(".quantidade_vidas_mes").text(res.quantidade_vidas_mes);


                      $(".total_coletivo_mes").text(res.total_coletivo);
                      $(".total_individual_mes").text(res.total_individual);
                      $(".total_super_simples_mes").text(res.total_ss);
                      $(".total_sindipao_mes").text(res.total_sindipao);
                      $(".total_sindimaco_mes").text(res.total_sindimaco);
                      $(".total_sincofarma_mes").text(res.total_sincofarma);
                      $(".total_valor_mes").text(res.total_valor);



                  }

               });
            });

            $("body").on('change','#selecao_ano',function(){
                let ano = $(this).val();
                $.ajax({
                   url:"{{route('grafico.mudar.ano')}}",
                   method:"POST",
                   data: {
                       ano
                   },
                   success:function(res) {
                       $("#janeiro_individual").val(res.total_individual_quantidade_vidas_janeiro);
                       $("#fevereiro_individual").val(res.total_individual_quantidade_vidas_fevereiro);
                       $("#marco_individual").val(res.total_individual_quantidade_vidas_marco);
                       $("#abril_individual").val(res.total_individual_quantidade_vidas_abril);
                       $("#maio_individual").val(res.total_individual_quantidade_vidas_maio);
                       $("#junho_individual").val(res.total_individual_quantidade_vidas_junho);
                       $("#julho_individual").val(res.total_individual_quantidade_vidas_julho);
                       $("#agosto_individual").val(res.total_individual_quantidade_vidas_agosto);
                       $("#setembro_individual").val(res.total_individual_quantidade_vidas_setembro);
                       $("#outubro_individual").val(res.total_individual_quantidade_vidas_outubro);
                       $("#novembro_individual").val(res.total_individual_quantidade_vidas_novembro);
                       $("#dezembro_individual").val(res.total_individual_quantidade_vidas_dezembro);

                       $("#janeiro_coletivo").val(res.total_coletivo_quantidade_vidas_janeiro);
                       $("#fevereiro_coletivo").val(res.total_coletivo_quantidade_vidas_fevereiro);
                       $("#marco_coletivo").val(res.total_coletivo_quantidade_vidas_marco);
                       $("#abril_coletivo").val(res.total_coletivo_quantidade_vidas_abril);
                       $("#maio_coletivo").val(res.total_coletivo_quantidade_vidas_maio);
                       $("#junho_coletivo").val(res.total_coletivo_quantidade_vidas_junho);
                       $("#julho_coletivo").val(res.total_coletivo_quantidade_vidas_julho);
                       $("#agosto_coletivo").val(res.total_coletivo_quantidade_vidas_agosto);
                       $("#setembro_coletivo").val(res.total_coletivo_quantidade_vidas_setembro);
                       $("#outubro_coletivo").val(res.total_coletivo_quantidade_vidas_outubro);
                       $("#novembro_coletivo").val(res.total_coletivo_quantidade_vidas_novembro);
                       $("#dezembro_coletivo").val(res.total_coletivo_quantidade_vidas_dezembro);

                       $("#janeiro_empresarial").val(res.totalContratoEmpresarialJaneiro);
                       $("#fevereiro_empresarial").val(res.totalContratoEmpresarialFevereiro);
                       $("#marco_empresarial").val(res.totalContratoEmpresarialMarco);
                       $("#abril_empresarial").val(res.totalContratoEmpresarialAbril);
                       $("#maio_empresarial").val(res.totalContratoEmpresarialMaio);
                       $("#junho_empresarial").val(res.totalContratoEmpresarialJunho);
                       $("#julho_empresarial").val(res.totalContratoEmpresarialJulho);
                       $("#agosto_empresarial").val(res.totalContratoEmpresarialAgosto);
                       $("#setembro_empresarial").val(res.totalContratoEmpresarialSetembro);
                       $("#outubro_empresarial").val(res.totalContratoEmpresarialOutubro);
                       $("#novembro_empresarial").val(res.totalContratoEmpresarialNovembro);
                       $("#dezembro_empresarial").val(res.totalContratoEmpresarialDezembro);
                       setInterval(drawChart(),1000);
                   }
                });
            });

            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var janeiro_individual = parseInt($("#janeiro_individual").val());
                var fevereiro_individual = parseInt($("#fevereiro_individual").val());
                var marco_individual = parseInt($("#marco_individual").val());
                var abril_individual = parseInt($("#abril_individual").val());
                var maio_individual = parseInt($("#maio_individual").val());
                var junho_individual = parseInt($("#junho_individual").val());
                var julho_individual = parseInt($("#julho_individual").val());
                var agosto_individual = parseInt($("#agosto_individual").val());
                var setembro_individual = parseInt($("#setembro_individual").val());
                var outubro_individual = parseInt($("#outubro_individual").val());
                var novembro_individual = parseInt($("#novembro_individual").val());
                var dezembro_individual = parseInt($("#dezembro_individual").val());

                var janeiro_coletivo = parseInt($("#janeiro_coletivo").val());
                var fevereiro_coletivo = parseInt($("#fevereiro_coletivo").val());
                var marco_coletivo = parseInt($("#marco_coletivo").val());
                var abril_coletivo = parseInt($("#abril_coletivo").val());
                var maio_coletivo = parseInt($("#maio_coletivo").val());
                var junho_coletivo = parseInt($("#junho_coletivo").val());
                var julho_coletivo = parseInt($("#julho_coletivo").val());
                var agosto_coletivo = parseInt($("#agosto_coletivo").val());
                var setembro_coletivo = parseInt($("#setembro_coletivo").val());
                var outubro_coletivo = parseInt($("#outubro_coletivo").val());
                var novembro_coletivo = parseInt($("#novembro_coletivo").val());
                var dezembro_coletivo = parseInt($("#dezembro_coletivo").val());

                var janeiro_empresarial = parseInt($("#janeiro_empresarial").val());
                var fevereiro_empresarial = parseInt($("#fevereiro_empresarial").val());
                var marco_empresarial = parseInt($("#marco_empresarial").val());
                var abril_empresarial = parseInt($("#abril_empresarial").val());
                var maio_empresarial = parseInt($("#maio_empresarial").val());
                var junho_empresarial = parseInt($("#junho_empresarial").val());
                var julho_empresarial = parseInt($("#julho_empresarial").val());
                var agosto_empresarial = parseInt($("#agosto_empresarial").val());
                var setembro_empresarial = parseInt($("#setembro_empresarial").val());
                var outubro_empresarial = parseInt($("#outubro_empresarial").val());
                var novembro_empresarial = parseInt($("#novembro_empresarial").val());
                var dezembro_empresarial = parseInt($("#dezembro_empresarial").val());

                let total_janeiro = janeiro_individual + janeiro_coletivo + janeiro_empresarial;
                let total_fevereiro = fevereiro_individual + fevereiro_coletivo + fevereiro_empresarial;
                let total_marco = marco_individual + marco_coletivo + marco_empresarial;
                let total_abril = abril_individual + abril_coletivo + abril_empresarial;
                let total_maio = maio_individual + maio_coletivo + maio_empresarial;
                let total_junho = junho_individual + junho_coletivo + junho_empresarial;
                let total_julho = julho_individual + julho_coletivo + julho_empresarial;
                let total_agosto = agosto_individual + agosto_coletivo + agosto_empresarial;
                let total_setembro = setembro_individual + setembro_coletivo + setembro_empresarial;
                let total_outubro = outubro_individual + outubro_coletivo + outubro_empresarial;
                let total_novembro = novembro_individual + novembro_coletivo + novembro_empresarial;
                let total_dezembro = dezembro_individual + dezembro_coletivo + dezembro_empresarial;

                $(".total_janeiro").each(function(){
                    if(total_janeiro >= 10) {
                        $(this).css({left:"45px"}).text(total_janeiro)
                    } else {
                        $(this).text(total_janeiro)
                    }
                }).show();

                $(".total_fevereiro").each(function(){
                    if(total_fevereiro >= 10) {
                        $(this).css({left:"92px"}).text(total_fevereiro)
                    } else {
                        $(this).text(total_fevereiro)
                    }
                }).show();

                $(".total_marco").each(function(){
                    if(total_marco >= 10) {
                        $(this).css({left:"138px"}).text(total_marco)
                    } else {
                        $(this).text(total_marco)
                    }
                }).show();

                $(".total_abril").each(function(){
                    if(total_abril >= 10) {
                        $(this).css({left:"185px"}).text(total_abril)
                    } else {
                        $(this).text(total_abril);
                    }
                }).show();

                $(".total_maio").each(function(){
                    if(total_maio >= 10) {
                        $(this).css({left:"234px"}).text(total_maio)
                    } else {
                        $(this).text(total_maio);
                    }
                }).show();

                $(".total_junho").each(function(){
                    if(total_junho >= 10) {
                        $(this).css({left:"280px"}).text(total_junho)
                    } else {
                        $(this).text(total_junho);
                    }
                }).show();

                $(".total_julho").each(function(){
                    if(total_julho >= 10) {
                        $(this).css({left:"328px"}).text(total_julho)
                    } else {
                        $(this).text(total_julho);
                    }
                }).show();

                $(".total_agosto").each(function(){
                    if(total_agosto >= 10) {
                        $(this).css({left:"370px"}).text(total_agosto)
                    } else {
                        $(this).text(total_agosto);
                    }
                }).show();

                $(".total_setembro").each(function(){
                    if(total_setembro >= 10) {
                        $(this).css({left:"418px"}).text(total_setembro)
                    } else {
                        $(this).text(total_setembro);
                    }
                }).show();

                $(".total_outubro").each(function(){
                    if(total_outubro >= 10) {
                        $(this).css({left:"464px"}).text(total_outubro)
                    } else {
                        $(this).text(total_outubro);
                    }
                }).show();

                $(".total_novembro").each(function(){
                    if(total_novembro >= 10) {
                        $(this).css({left:"510px"}).text(total_novembro)
                    } else {
                        $(this).text(total_novembro);
                    }
                }).show();

                $(".total_dezembro").each(function(){
                    if(total_dezembro  >= 10) {
                        $(this).css({left:"558px"}).text(total_dezembro)
                    } else {
                        $(this).text(total_dezembro);
                    }
                }).show();


                $("#select_div").show('slow');


                $(".content_legenda").css({"display":"flex"});



                var data = google.visualization.arrayToDataTable([
                    ['Mês', 'Individual', 'Coletivo', 'Empresarial'],
                    ['Jan', janeiro_individual, janeiro_coletivo, janeiro_empresarial],
                    ['Fev', fevereiro_individual, fevereiro_coletivo, fevereiro_empresarial],
                    ['Mar', marco_individual, marco_coletivo, marco_empresarial],
                    ['Abr', abril_individual, abril_coletivo, abril_empresarial],
                    ['Mai', maio_individual, maio_coletivo, maio_empresarial],
                    ['Jun', junho_individual, junho_coletivo, junho_empresarial],
                    ['Jul', julho_individual, julho_coletivo, julho_empresarial],
                    ['Ago', agosto_individual, agosto_coletivo, agosto_empresarial],
                    ['Set', setembro_individual, setembro_coletivo, setembro_empresarial],
                    ['Out', outubro_individual, outubro_coletivo, outubro_empresarial],
                    ['Nov', novembro_individual, novembro_coletivo, novembro_empresarial],
                    ['Dez', dezembro_individual, dezembro_coletivo, dezembro_empresarial]
                ]);



                var options = {
                    title: 'Ranking Vendas Anual',
                    bars: 'vertical',
                    legend: {position:'none'},
                    height: 315,
                    colors: ['#1b9e77', '#d95f02', '#7570b3']
                };
                var chart = new google.charts.Bar(document.getElementById('chart_div'));
                chart.draw(data, google.charts.Bar.convertOptions(options));
            }




        });
    </script>
@stop
