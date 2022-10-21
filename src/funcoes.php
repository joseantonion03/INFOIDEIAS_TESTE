<?php

namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano = 0): int
    {
        return intval($ano / 100) + (($ano % 100 ? 1 : $ano) % 10 ? 1 : 0);
    }

    /*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23


     * */

    public function PrimoAnterior(int $numero): int
    {
        $results = 0;
        $numeroAnterior = 0;
        for ($i = 1; $i <= $numero; $i++) {
            $numeroPrimoAnterior = 0;

            for ($x = $i; $x >= 1; $x--) {
                if (($i % $x) == 0) {
                    $numeroPrimoAnterior++;
                }
            }

            if ($numeroPrimoAnterior == 2) {
                $numeroAnterior = $results;
                $results = $i;
            }
        }
        return $numero === $results ? $numeroAnterior : $results;
    }

    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior(array $arr): int
    {
        $numeroAnterior = 0;
        $numeroAtual = 0;

        foreach ($arr as $elementArray) :
            foreach ($elementArray as $value) :
                if ($value > $numeroAtual) {
                    $numeroAnterior = $numeroAtual;
                    $numeroAtual = $value;
                }
            endforeach;
        endforeach;

        return $numeroAnterior;
    }


    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     */

    public function SequenciaCrescente(array $arr): bool
    {

        if ($this->FirstNumberSequenciaCrescente($arr)) {
            return true;
        }


        for ($i = 0; $i < count($arr); $i++) {
            $numeroAnterior = null;
            $newArray = $arr;
            unset($newArray[$i]);
            $total = 0;
            foreach ($newArray as $value) {
                if ($value > $numeroAnterior) {
                    $numeroAnterior = $value;
                    $total++;
                }
            }
            if (count($newArray) == $total) {
                return true;
            }
        }
        return false;
    }
    
    public function FirstNumberSequenciaCrescente(array $arr)
    {
        $numeroAnterior = null;
        foreach ($arr as $key => $value) {
            if (($key === 0 && $value !== 0) && $value > $numeroAnterior) {
                return false;
            }
            $numeroAnterior = $value;
        }
        return true;
    }
}
