<?php
/**
 * Requisitos:
 *  - Utilizar PHP puro (7.3)
 *  - Javascript (Puro, Jquery, Vue ou de sua preferência)
 *  - HTML, CSS.
 *
 * Tarefa:
 * 1 - Criar um formulário em HTML com os dados:
 *   - CEP (text com máscara)
 *     Logradouro (text)
 *     Número (text)
 *     Bairro (text)
 *     Estado (select com os dados do banco)
 *     Cidade (select com os dados do banco)
 * 2 - Ao preencher o campo CEP o sistema deverá autocomplentar os dados (utilizando o banco de dados local, não é permitido utilizar um webservice ou api pronta)
 * 3 - Para os CEP's 99999999 12345678 não será retornado nenhum resultado, nesse caso o usuário poderá preencher as informações e ao clicar em salvar deverá incluir esse novo CEP na base de dados
 * 4 - O campo estado e cidade deverão estar interligados, ou seja, ao selecionar o estado deverá filtrar as cidades correspondentes
 * 5 - O campo cidade e estado deverão ser trazidos em ordem alfabética
 * 6 - Não deverá ser permitido salvar um CEP já existente
 * 7 - Ao incluir um novo CEP na base, ao preencher novamente no formulário deverá trazer os dados salvos (autocomplete)
 *
 * CEP para teste - 14010-070
 *
 * O que será avaliado:
 *   - Lógica de programação
 *   - Clareza na resolução do problema
 */
$link = mysqli_connect('0.0.0.0:33060', 'root', 'secret', 'entrevista');

die(print_r($link));
