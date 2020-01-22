<?php

/**
 * O objetivo desse desafio é se conectar ao banco de dados e mostrar os dados em forma de um relacionamento
 * entre estado e cidade, você é livre para fazer como quiser mas deve ser usado apenas PHP puro,
 * pesquisa na internet são livres.
 *
 * O Resultado deve ser o seguinte, ordernado por ordem alfabetica tanto os estados quanto a cidades
 * Estado
 * - Cidade
 * - Cidade [...]
 * Estado
 * - Cidade
 * - Cidade [...]
 */
$link = mysqli_connect('0.0.0.0:33060', 'root', 'secret', 'entrevista');

die(print_r($link));
