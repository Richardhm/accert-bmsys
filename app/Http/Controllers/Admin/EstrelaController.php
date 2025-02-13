<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstrelaController extends Controller
{
    // public function index()
    // {
    //     $mesAtualN = date('n');
    //     $mes_atual = date("m");
    //     $ano_atual = date("Y");

    //     $semestre = ($mesAtualN < 7) ? 1 : 2;
    //     $semestreAtual = "";
    //     if ($semestre == 1) {
    //         // Primeiro semestre (de janeiro a junho)
    //         $startDate = $ano_atual . "-01-01";
    //         $endDate = $ano_atual . "-06-30";
    //         $semestreAtual = "1/".date("Y");

    //         $ranking_semestre = DB::select("

    //                 select
    //                     users.name as usuario,
    //                       users.image AS imagem,
    //                       (
    //                                  (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
    //                                       INNER JOIN contratos ON contratos.cliente_id = clientes.id

    //                                       where clientes.user_id = comissoes.user_id AND
    //                                       contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)

    //                       ) as quantidade,
    //                       (
    //                                  (select if(sum(valor_adesao)>0,sum(valor_adesao),0) from clientes
    //                                       INNER JOIN contratos ON contratos.cliente_id = clientes.id

    //                                       where clientes.user_id = comissoes.user_id AND
    //                                       contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)
    //                       ) as valor,
    //                       (
    //                                  (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
    //                                       INNER JOIN contratos ON contratos.cliente_id = clientes.id
    //                                       where clientes.user_id = comissoes.user_id AND
    //                                       contratos.created_at BETWEEN '$startDate' AND '$endDate'
    //                                       AND
    //                                       MONTH(contratos.created_at) = 1 AND
    //                                       contratos.plano_id = 1)
    //                       ) as janeiro,
    //                         (
    //                               (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
    //                                   INNER JOIN contratos ON contratos.cliente_id = clientes.id
    //                                   where clientes.user_id = comissoes.user_id AND
    //                                   contratos.created_at BETWEEN '$startDate' AND '$endDate'
    //                                   AND
    //                                   MONTH(contratos.created_at) = 2 AND
    //                                   contratos.plano_id = 1)
    //                     ) as fevereiro,
    //                     (
    //                         (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
    //                           INNER JOIN contratos ON contratos.cliente_id = clientes.id
    //                           where clientes.user_id = comissoes.user_id AND
    //                           contratos.created_at BETWEEN '$startDate' AND '$endDate'
    //                           AND
    //                           MONTH(contratos.created_at) = 3 AND
    //                           contratos.plano_id = 1)
    //                     ) as marco,
    //                     (
    //                         (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 	        INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 	        where clientes.user_id = comissoes.user_id AND
				// 	        contratos.created_at BETWEEN '$startDate' AND '$endDate'
				// 	        AND
				// 	        MONTH(contratos.created_at) = 4 AND
				// 	        contratos.plano_id = 1)
    //                     ) as abril,
		  //              (
    //                         (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 	        INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 	        where clientes.user_id = comissoes.user_id AND
				// 	        contratos.created_at BETWEEN '$startDate' AND '$endDate'
				// 	        AND
				// 	        MONTH(contratos.created_at) = 5 AND
				// 	        contratos.plano_id = 1)
    //                     ) as maio,
    //  	            (
    //                     (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 	    INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 	    where clientes.user_id = comissoes.user_id AND
				// 	    contratos.created_at BETWEEN '$startDate' AND '$endDate'
				// 	    AND
				// 	    MONTH(contratos.created_at) = 6 AND
				// 	    contratos.plano_id = 1)
    //                 ) as junho,
				//     CASE
    //     			    WHEN (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 		INNER JOIN contratos ON contratos.cliente_id = clientes.id

				// 		where clientes.user_id = comissoes.user_id AND
				// 		contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1) >= 150 AND

				// 		(select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 		INNER JOIN contratos ON contratos.cliente_id = clientes.id

				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)

				// 			   <= 190 THEN 'tres_estrelas'
    //     			    WHEN
				// 	    (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)
				// 	        >=
				// 	        191 AND
				// 	          (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)
				// 	            <=
				// 	            250
				// 	  THEN 'quatro_estrelas'
    //     			WHEN
				// 	   (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id

				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1) > 250

				// 	   THEN 'cinco_estrelas'
    //     			ELSE 'nao_classificado'
    // 			END AS status,

				// CASE
    //     			WHEN
				// 	  (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id

				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)

				// 	  >= 150
				// 	  AND
				// 	  (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)
				// 	  <= 190
				// 	  THEN
				// 	  191 -
				// 	  (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)
    //     			WHEN
				// 	  (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)
				// 	  >= 191
				// 	  AND
				// 	  (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)
				// 	  <= 250
				// 	  THEN
				// 	  251 -
				// 	  (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)
    //     				WHEN
				// 	  (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1) > 250
				// 	  THEN 'Atingiu a meta'
    //     			ELSE 150 - (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id

				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)
    // 			END AS falta
    //         from comissoes
    //         inner join users on users.id = comissoes.user_id
    //         group by user_id order by quantidade desc
    //         ");



    //     } else {
    //         // Segundo semestre (de julho a dezembro)
    //         $startDate = $ano_atual . "-07-01";
    //         $endDate = $ano_atual . "-12-31";
    //         $semestreAtual = "2/".date("Y");
            
    //         $ranking_semestre = DB::select("

    //                 select
    //                     users.name as usuario,
    //                       users.image AS imagem,
    //                       (
    //                                  (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
    //                                       INNER JOIN contratos ON contratos.cliente_id = clientes.id

    //                                       where clientes.user_id = comissoes.user_id AND
    //                                       contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)

    //                       ) as quantidade,
    //                       (
    //                                  (select if(sum(valor_adesao)>0,sum(valor_adesao),0) from clientes
    //                                       INNER JOIN contratos ON contratos.cliente_id = clientes.id

    //                                       where clientes.user_id = comissoes.user_id AND
    //                                       contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)
    //                       ) as valor,
    //                       (
    //                                  (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
    //                                       INNER JOIN contratos ON contratos.cliente_id = clientes.id
    //                                       where clientes.user_id = comissoes.user_id AND
    //                                       contratos.created_at BETWEEN '$startDate' AND '$endDate'
    //                                       AND
    //                                       MONTH(contratos.created_at) = 1 AND
    //                                       contratos.plano_id = 1)
    //                       ) as janeiro,
    //                         (
    //                               (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
    //                                   INNER JOIN contratos ON contratos.cliente_id = clientes.id
    //                                   where clientes.user_id = comissoes.user_id AND
    //                                   contratos.created_at BETWEEN '$startDate' AND '$endDate'
    //                                   AND
    //                                   MONTH(contratos.created_at) = 2 AND
    //                                   contratos.plano_id = 1)
    //                     ) as fevereiro,
    //                     (
    //                         (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
    //                           INNER JOIN contratos ON contratos.cliente_id = clientes.id
    //                           where clientes.user_id = comissoes.user_id AND
    //                           contratos.created_at BETWEEN '$startDate' AND '$endDate'
    //                           AND
    //                           MONTH(contratos.created_at) = 3 AND
    //                           contratos.plano_id = 1)
    //                     ) as marco,
    //                     (
    //                         (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 	        INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 	        where clientes.user_id = comissoes.user_id AND
				// 	        contratos.created_at BETWEEN '$startDate' AND '$endDate'
				// 	        AND
				// 	        MONTH(contratos.created_at) = 4 AND
				// 	        contratos.plano_id = 1)
    //                     ) as abril,
		  //              (
    //                         (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 	        INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 	        where clientes.user_id = comissoes.user_id AND
				// 	        contratos.created_at BETWEEN '$startDate' AND '$endDate'
				// 	        AND
				// 	        MONTH(contratos.created_at) = 5 AND
				// 	        contratos.plano_id = 1)
    //                     ) as maio,
    //  	            (
    //                     (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 	    INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 	    where clientes.user_id = comissoes.user_id AND
				// 	    contratos.created_at BETWEEN '$startDate' AND '$endDate'
				// 	    AND
				// 	    MONTH(contratos.created_at) = 6 AND
				// 	    contratos.plano_id = 1)
    //                 ) as junho,
				//     CASE
    //     			    WHEN (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 		INNER JOIN contratos ON contratos.cliente_id = clientes.id

				// 		where clientes.user_id = comissoes.user_id AND
				// 		contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1) >= 150 AND

				// 		(select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 		INNER JOIN contratos ON contratos.cliente_id = clientes.id

				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)

				// 			   <= 190 THEN 'tres_estrelas'
    //     			    WHEN
				// 	    (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)
				// 	        >=
				// 	        191 AND
				// 	          (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)
				// 	            <=
				// 	            250
				// 	  THEN 'quatro_estrelas'
    //     			WHEN
				// 	   (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id

				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1) > 250

				// 	   THEN 'cinco_estrelas'
    //     			ELSE 'nao_classificado'
    // 			END AS status,

				// CASE
    //     			WHEN
				// 	  (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id

				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)

				// 	  >= 150
				// 	  AND
				// 	  (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)
				// 	  <= 190
				// 	  THEN
				// 	  191 -
				// 	  (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)
    //     			WHEN
				// 	  (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)
				// 	  >= 191
				// 	  AND
				// 	  (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)
				// 	  <= 250
				// 	  THEN
				// 	  251 -
				// 	  (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)
    //     				WHEN
				// 	  (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id
				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1) > 250
				// 	  THEN 'Atingiu a meta'
    //     			ELSE 150 - (select if(sum(quantidade_vidas)>0,sum(quantidade_vidas),0) from clientes
				// 			  INNER JOIN contratos ON contratos.cliente_id = clientes.id

				// 			  where clientes.user_id = comissoes.user_id AND
				// 			  contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1)
    // 			END AS falta
    //         from comissoes
    //         inner join users on users.id = comissoes.user_id
    //         group by user_id order by quantidade desc
    //         ");
            
            
            
            
            
            
            
            
            
            
            
            
    //     }





    //     return view("admin.pages.estrela.index",[
    //         "ranking" => $ranking_semestre,
    //         "semestre" => $semestre,
    //         "ano_atual" => $ano_atual
    //     ]);
    // }
    
    
    public function index()
    {
        $mesAtualN = date('n');
        $mes_atual = date("m");
        $ano_atual = date("Y");

        $semestre = ($mesAtualN < 7) ? 1 : 2;
        $semestreAtual = "";
        if ($semestre == 1) {
            $mesAtualN = date('n');
            $ano_atual = date("Y");

            $semestre = ($mesAtualN < 7) ? 1 : 2;
            $startDate = ($semestre == 1) ? "$ano_atual-01-01" : "$ano_atual-07-01";
            $endDate = ($semestre == 1) ? "$ano_atual-06-30" : "$ano_atual-12-31";
            $semestreAtual = "$semestre/$ano_atual";

            $ranking_semestre = DB::select("
        SELECT
            users.name AS usuario,
            users.image AS imagem,
            COALESCE(SUM(IF(MONTH(contratos.created_at) = 1, clientes.quantidade_vidas, 0)), 0) AS janeiro,
            COALESCE(SUM(IF(MONTH(contratos.created_at) = 2, clientes.quantidade_vidas, 0)), 0) AS fevereiro,
            COALESCE(SUM(IF(MONTH(contratos.created_at) = 3, clientes.quantidade_vidas, 0)), 0) AS marco,
            COALESCE(SUM(IF(MONTH(contratos.created_at) = 4, clientes.quantidade_vidas, 0)), 0) AS abril,
            COALESCE(SUM(IF(MONTH(contratos.created_at) = 5, clientes.quantidade_vidas, 0)), 0) AS maio,
            COALESCE(SUM(IF(MONTH(contratos.created_at) = 6, clientes.quantidade_vidas, 0)), 0) AS junho,
            COALESCE(SUM(clientes.quantidade_vidas), 0) AS quantidade,
            COALESCE(SUM(contratos.valor_adesao), 0) AS valor,
            CASE
                WHEN SUM(clientes.quantidade_vidas) >= 150 AND SUM(clientes.quantidade_vidas) <= 190 THEN 'tres_estrelas'
                WHEN SUM(clientes.quantidade_vidas) >= 191 AND SUM(clientes.quantidade_vidas) <= 250 THEN 'quatro_estrelas'
                WHEN SUM(clientes.quantidade_vidas) > 250 THEN 'cinco_estrelas'
                ELSE 'nao_classificado'
            END AS status,
            CASE
                WHEN SUM(clientes.quantidade_vidas) >= 150 AND SUM(clientes.quantidade_vidas) <= 190 THEN 191 - SUM(clientes.quantidade_vidas)
                WHEN SUM(clientes.quantidade_vidas) >= 191 AND SUM(clientes.quantidade_vidas) <= 250 THEN 251 - SUM(clientes.quantidade_vidas)
                WHEN SUM(clientes.quantidade_vidas) > 250 THEN 'Atingiu a meta'
                ELSE 150 - SUM(clientes.quantidade_vidas)
            END AS falta
        FROM comissoes
        INNER JOIN users ON users.id = comissoes.user_id
        INNER JOIN contratos ON contratos.id = comissoes.contrato_id
        INNER JOIN clientes ON clientes.id = contratos.cliente_id
        WHERE contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1
        GROUP BY comissoes.user_id, users.name, users.image
        ORDER BY quantidade DESC
    ");


        } else {
            // Segundo semestre (de julho a dezembro)
            $startDate = $ano_atual . "-07-01";
            $endDate = $ano_atual . "-12-31";
            $semestreAtual = "2/".date("Y");
            $ranking_semestre = DB::select("
        SELECT
            users.name AS usuario,
            users.image AS imagem,
            COALESCE(SUM(IF(MONTH(contratos.created_at) = 7, clientes.quantidade_vidas, 0)), 0) AS julho,
            COALESCE(SUM(IF(MONTH(contratos.created_at) = 8, clientes.quantidade_vidas, 0)), 0) AS agosto,
            COALESCE(SUM(IF(MONTH(contratos.created_at) = 9, clientes.quantidade_vidas, 0)), 0) AS setembro,
            COALESCE(SUM(IF(MONTH(contratos.created_at) = 10, clientes.quantidade_vidas, 0)), 0) AS outubro,
            COALESCE(SUM(IF(MONTH(contratos.created_at) = 11, clientes.quantidade_vidas, 0)), 0) AS novembro,
            COALESCE(SUM(IF(MONTH(contratos.created_at) = 12, clientes.quantidade_vidas, 0)), 0) AS dezembro,
            COALESCE(SUM(clientes.quantidade_vidas), 0) AS quantidade,
            COALESCE(SUM(contratos.valor_adesao), 0) AS valor,
            CASE
                WHEN SUM(clientes.quantidade_vidas) >= 150 AND SUM(clientes.quantidade_vidas) <= 190 THEN 'tres_estrelas'
                WHEN SUM(clientes.quantidade_vidas) >= 191 AND SUM(clientes.quantidade_vidas) <= 250 THEN 'quatro_estrelas'
                WHEN SUM(clientes.quantidade_vidas) > 250 THEN 'cinco_estrelas'
                ELSE 'nao_classificado'
            END AS status,
            CASE
                WHEN SUM(clientes.quantidade_vidas) >= 150 AND SUM(clientes.quantidade_vidas) <= 190 THEN 191 - SUM(clientes.quantidade_vidas)
                WHEN SUM(clientes.quantidade_vidas) >= 191 AND SUM(clientes.quantidade_vidas) <= 250 THEN 251 - SUM(clientes.quantidade_vidas)
                WHEN SUM(clientes.quantidade_vidas) > 250 THEN 'Atingiu a meta'
                ELSE 150 - SUM(clientes.quantidade_vidas)
            END AS falta
        FROM comissoes
        INNER JOIN users ON users.id = comissoes.user_id
        INNER JOIN contratos ON contratos.id = comissoes.contrato_id
        INNER JOIN clientes ON clientes.id = contratos.cliente_id
        WHERE contratos.created_at BETWEEN '$startDate' AND '$endDate' AND contratos.plano_id = 1
        GROUP BY comissoes.user_id, users.name, users.image
        ORDER BY quantidade DESC
    ");
            
        }





        return view("admin.pages.estrela.index",[
            "ranking" => $ranking_semestre,
            "semestre" => $semestre,
            "ano_atual" => $ano_atual
        ]);
    }
    
    
    
}
