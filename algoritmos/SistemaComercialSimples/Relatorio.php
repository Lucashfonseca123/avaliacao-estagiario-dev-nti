<?php 
	require ('Conexao.php');

	$i = 0;
	$tot = 0;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Relatório</title>
</head>
<body> 
     <?php 
         $sql = mysqli_query($con,"SELECT codigo, quantidade FROM cliente") or die("Erro");    //Faz uma consulta na tabela cliente
      ?>
      <h4>
      <?php
          echo "<br>***** LISTA PRODUTOS DO CLIENTE *****";
      ?>
      </h4>         
      <?php
          while($dados=mysqli_fetch_assoc($sql))                          //Seta em $dados todos os valores da consulta
             {
               echo "<br>Codigo produto : " .$dados['codigo'].'<br>';
               echo "Quantidade produto: " .$dados['quantidade']." unidades.".'<br>';
          }
      ?> 
      <br>
      <hr/>
      <h4>
      <?php
         echo "<br>***** LISTA PRODUTOS DISPONÍVEL NO MERCADO *****";
      ?>
      </h4>
      <?php
         $sql = mysqli_query($con,"SELECT codigo, quantidade FROM cliente") or die("Erro");    //Faz uma consulta em clientes para fazer o preço
         while($dados=mysqli_fetch_assoc($sql)){                         //$dados recebe todo o conteudo da consulta
           $sql2 = mysqli_query($con,"SELECT nome, codigo, valor_unit, quantidade FROM produto") or die("Erro"); //Consulta em produto
           while($dados2=mysqli_fetch_assoc($sql2))                        //$dados2 recebe todo o conteudo da consulta
             { 
             if($i==0){                                    //If para printar apenas 1 vez cada 
                  echo "<br>Nome: " .$dados2['nome'].'<br>';
                  echo "Codigo: " .$dados2['codigo'].'<br>';
                  echo "Valor unitario: " .$dados2['valor_unit'].'<br>';
                  echo "Quantidade no mercado: " .$dados2['quantidade']." unidades.".'<br>';
                  echo "Data: ";
                  echo date('d/m/Y H:i:s');
                  echo "<br>";
                     if ($dados2['quantidade'] < $dados['quantidade']) {           //Testa se quantidade de produto pedida pelo cliente, existe no coméricio
                     echo "<br>Produto ".$dados2['nome']." atende requisitos do cliente, porém, menor quantidade disponivel. <br>";
                     }
              }
              if($dados['codigo'] == $dados2['codigo'] ){                 // Testa se o dado que o cliente quer existe nos produtos
                  if ($dados['quantidade']<11){   
                      $tot += ((double) $dados2['valor_unit'] * (double) $dados['quantidade']);   
                  }
                  if ($dados['quantidade']>10 &$dados['quantidade']<21) {
                      $desconto = ($dados2['valor_unit']*5)/100;
                      $tot += ((double) $dados2['valor_unit']-$desconto)* (double) $dados['quantidade'];  //Aplica descontos de 5%
                  }
                  if ($dados['quantidade']>20 &$dados['quantidade']<31) {
                      $desconto = ($dados2['valor_unit']*10)/100;                     //Aplica descontos de 10%
                      $tot += ((double) $dados2['valor_unit']-$desconto)* (double) $dados['quantidade'];
                  }
                  if ($dados['quantidade']>30 &$dados['quantidade']<41) {
                      $desconto = ($dados2['valor_unit']*20)/100;                     //Aplica descontos de 20%
                      $tot += ((double) $dados2['valor_unit']-$desconto)* (double) $dados['quantidade'];
                  } 
              }
           }
        $i++; 
        }
    ?>
    <br>
    <hr/>
    <h4>
    <?php
        echo "<br>***** PRODUTOS VENDIDOS *****";
    ?>
   </h4>
    <?php
        $sql = mysqli_query($con,"SELECT codigo, quantidade FROM cliente") or die("Erro"); 
        while($dados=mysqli_fetch_assoc($sql)){                         //$dados recebe todo o conteudo da consulta
              $sql2 = mysqli_query($con,"SELECT nome, codigo, valor_unit, quantidade FROM produto") or die("Erro"); //Consulta em produto
              while($dados2=mysqli_fetch_assoc($sql2)) {
                 if($dados['codigo'] == $dados2['codigo'] ){ 
                 echo "<br>Numero da venda ".$dados2['codigo'];
                 echo "<br>Data: ";
                 echo date('d/m/Y H:i:s');
                 echo "<br>Nome: " .$dados2['nome'].'<br>';
                 echo "Quantidade: " .$dados['quantidade']." unidades." .'<br>';
                 }   
              }                       
        }
    ?>
    <br><hr />
    <?php
    ?>
    <h3><?php echo "Total: ".number_format($tot, 2, '.', '')." R$"; ?><br><br><br></h3>
</body>
</html>
