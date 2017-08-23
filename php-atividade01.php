<!DOCTYPE HTML>
<html>
  <head>
    <meta charset= 'utf-8'>
      <title>
       Exercicio PHP
      </title>
  </head>
    <body>
      <h1> PHP - Atividade 01 </h1>
        <p> 
          Considerando que A seja igual a 10 e B seja igual a 20, eis os seguintes: 
        </p>
      <table border style="solid">
        <tr>
          <td>
            Operacao
          </td>
          <td>
            Resultado
          </td>
        </tr>
        <tr>
          <td>
            A+B
          </td>
          <td>
            <?php
              $A = 10;
              $B = 20;
              $Resultado = $A + $B;
              $Potencia = pow($B, $A); 
              echo $Resultado;
            ?>
          </td>
        </tr>
        <tr>
          <td>
            A-B
          </td>
          <td>
            <?php
              $Resultado = $A - $B;
              echo $Resultado;
            ?>
          </td>
        </tr>
        <tr>
          <td>
            AxB
          </td>
          <td>
            <?php
              $Resultado = $A * $B;
              echo $Resultado;
            ?>
          </td>
        </tr>
        <tr>
          <td>
            A/B
          </td>
          <td>
            <?php
              $Resultado = $A / $B;
              echo $Resultado;
            ?>
          </td>
        </tr>
        <tr>
          <td>
            B <sup>
              A
              </sup>
          </td>
          <td>
            <?php
            echo number_format($Potencia, 0, ',', '.');
            ?>
          </td>
        </tr>
      </table>
        
    
    
    
    </body>


















</html>
