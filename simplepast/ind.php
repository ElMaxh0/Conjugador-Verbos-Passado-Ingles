<?php
if (isset($_GET['pesquisar'])){
$pesquisar=$_GET['pesquisar'];
$pesquisar2=$_GET['openid'];
$lista= "lista";
include ('conexao.php');
$consulta = "SELECT * FROM irregulasvb WHERE infinitive LIKE '%$pesquisar%' LIMIT 755";
$query4=mysqli_query($conexao, $consulta);
$count4=mysqli_num_rows($query4);
if ($count4 !=0 ){
    echo '<br><br><br>Resultado de consulta ao banco de dados de verbos iregulares ';
        echo '<br><br><br><table><tr><td>Infinitivo</td><td>Simple Past</td><td>Past Participe</td><td>TraducaooBrazuka</td></tr>';
        while($rows_cursos = mysqli_fetch_array($query4)){
        echo '<tr><td>';
        echo $rows_cursos['infinitive'];
        echo '</td><td>';
        echo $rows_cursos['simplepast'];
        echo '</td><td>';
        echo $rows_cursos['pastparticipe'];
        echo '</td><td>';
        echo $rows_cursos['brazukas'];
        echo '</td><td></tr>';
        

	}
    echo '</table>';
    echo '</center>';
    echo '<br><br><br><a align="right" href="./#form"><input  class="bt bt-az" type="submit" value="Proximo Consulta "></a>';
}
elseif ($count4 ==0 ){
    $vogais = array('a','e','i','o','u');
    $consoantes = array('b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z');
        $letraaletra = str_split($pesquisar);
        $numletras= count($letraaletra);
        $ultimaletra=$numletras-1;
        $penultimaletra=$numletras-2;
        $antepenultima=$numletras-3;
        $expressao =$letraaletra[$ultimaletra];
        $expressao2 =$letraaletra[$penultimaletra];
        $expressao3 =$letraaletra[$antepenultima];
        if ((in_array($expressao2, $vogais))&&($expressao == y)){
            echo '<br>Verbo No Infinitivo <br>';
            echo $pesquisar; 
            echo '<br>Verbo no passado Simples <br>';
                $y1=$pesquisar."ed";
                echo $y1;
                echo '<br><a align="right" href="./#form"><input  class="bt bt-az" type="submit" value="Proximo Consulta "></a>';
                include ('transbt.php');
        }
        elseif((in_array($expressao2, $vogais))&&(in_array($expressao3, $consoantes))&&(in_array($expressao, $consoantes))){
            echo '<br>Verbo No Infinitivo <br>';
            $y1=$google;
            $google=$cvc.'ed';
            echo $pesquisar;
            echo '<br>Verbo no passado   <br>';
            $cvc= $pesquisar.$expressao;
            echo  '<p>'.$cvc.'ed';
            echo '<br><br><br><br><br><a align="right" href="./#form"><input  class="bt bt-az" type="submit" value="Proximo Consulta "></a><br><br><br><br>';
            include ('transbt.php');
        }
        elseif ((in_array($expressao2, $vogais))&&($expressao == y)){
            echo '<br>Verbo No Infinitivo <br>';
            echo $pesquisar; 
            echo '<br>Verbo no passado  <br>';
                $y1=$pesquisar."ed";
                echo $y1;
                echo '<br><a align="right" href="./#form"><input  class="bt bt-az" type="submit" value="Proximo Consulta "></a>';
                include ('transbt.php');
        }
       elseif ($expressao == y){
        echo '<br>Verbo No Infinitivo <br>';
        echo $pesquisar;
        echo '<br>Verbo no passado   <br>';
    
        $y=rtrim($pesquisar, y);
        $y1=$y."ied";
        echo $y1;
        echo '<br><a align="right" href="./#form"><input  class="bt bt-az" type="submit" value="Proximo Consulta "></a>';
        include ('transbt.php');
       }
        elseif ($expressao == e){
        echo '<br>Verbo No Infinitivo  <br> ';
        echo $pesquisar;
        echo '<br>Verbo no passado   <br>';
        
        $y=$pesquisar;
        $y1=$y."d";
        echo $y1;
        echo '<br><a align="right" href="./#form"><input  class="bt bt-az" type="submit" value="Proximo Consulta "></a>';
        include ('transbt.php');
       }
       else{
            echo '<br>Verbo No Infinitivo   <br>';
            echo $pesquisar;
            echo '<br>Verbo no passado    <br>';
           echo $pesquisar.'ed';
           echo '<p> Padrao Nao Cadastrado usando padrao geral </p>';
           echo '<br><a align="right" href="./#form"><input  class="bt bt-az" type="submit" value="Proximo Consulta "></a>';
           include ('transbt.php');
       }
}
}
elseif(isset($_GET['openid'])){
$pesquisar=$_GET['pesquisar'];
$pesquisar2=$_GET['openid'];
$lista= "lista";
include ('conexao.php');
$consulta = "SELECT * FROM irregulasvb WHERE infinitive LIKE '$pesquisar%' LIMIT 755";
$query4=mysqli_query($conexao, $consulta);
$count4=mysqli_num_rows($query4);
     echo '<br><br><br>Resultado de consulta ao banco de dados de verbos iregulares ';
     echo '<br><br>Lista Completa ';
        echo '<br><br><br><center><table><tr><td>Infinitivo</td><td>Simple Past</td><td>Past Participe</td><td>TraducaooBrazuka</td></tr>';
        while($rows_cursos = mysqli_fetch_array($query4)){
        echo '<tr><td>';
        echo $rows_cursos['infinitive'];
        echo '</td><td>';
        echo $rows_cursos['simplepast'];
        echo '</td><td>';
        echo $rows_cursos['pastparticipe'];
        echo '</td><td>';
        echo $rows_cursos['brazukas'];
        echo '</td><td></tr>';
        

	}
    echo '<br><br><br><a align="right" href="./#form"><input  class="bt bt-az" type="submit" value="Proximo Consulta "></a>';

	}
else{
    echo '
    <h3>Conjugador Automatico de Verbos  </h3>
    <form action="./" method="get">
  <label for="fname">Verbo No Infinitivo</label>
  <input type="text" id="pesquisar" name="pesquisar"><br><br>
  <input type="submit" class="bt-vd" value="Pesquisar">
</form>';
 echo '<br><br><br><a align="right" href="./?openid=listairregulardb"><input  class="bt bt-vm" type="submit" value="Lista Irregular "></a>';
    
}