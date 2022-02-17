<?php

use GuzzleHttp\Client;

namespace GuzzleHttp;

$client = new Client();
$resposta = $client->request('GET', 'http://alura.com.br/https://cursos.alura.com.br/search?query=php');

$html = $resposta->getBody();