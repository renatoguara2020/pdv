<?php 

//VARIAVEIS GLOBAIS
$nome_sistema = "PDV FREITAS";

$url_sistema = "http://localhost/pdv/"; //é preciso configurar essa url para gerar os relatorios, ela deve apontar para a raiz do seu dominio (https://www.google.com/) com a barra no final e o protocolo http ou https de acordo com seu dominio no inicio.

$telefone_sistema = "(31) 97527-5084";
$endereco_sistema = "Rua X Nº 200 Centro - BH - MG";
$rodape_relatorios = "Sistema Desenvolvido por Hugo Vasconcelos do Portal Hugo Cursos!";

//VARIAVEIS PARA O BANCO DE DADOS LOCAL
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'pdv';


//VARIAVEIS DE CONFIGURAÇÕES DO SISTEMA

$relatorio_pdf = 'Sim'; //Se você utilizar sim ele vai gerar os relatórios utilizando a biblioteca do dompdf configurada para o PHP 8.0, se você utilizar outra versão do PHP ou do DOMPDF pode ser que ele não gere o relatório da forma correta, caso você utilize não ele vai gerar o relatório html.

 ?>