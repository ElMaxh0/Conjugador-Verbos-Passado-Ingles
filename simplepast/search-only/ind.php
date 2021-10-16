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
else{
    echo "Nenhuma Correspondencia a Busca ";
    echo '<br><br><br><a align="right" href="./#form"><input  class="bt bt-az" type="submit" value="Proximo Consulta "></a>';
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
    <h3> Pesquisa Iregular Verbs </h3>
    <form action="" method="get">
  <label for="fname">Verbo No Infinitivo</label>
  <input type="text" id="pesquisar" name="pesquisar"><br><br>
  <input type="submit" class="bt-vd" value="Pesquisar">
</form>';
 echo '<br><br><br><a align="right" href="./?openid=listairregulardb"><input  class="bt bt-vm" type="submit" value="Lista Irregular "></a>';
    
}