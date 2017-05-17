<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
    <head>
        <title>Testando o custo do lançamento de exceções em aplicativos</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/scripts.js" type="text/javascript"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>

    <body>
        <?php
        /**
         * Created by PhpStorm.
         * User: Ronald
         * Date: 24/05/2015
         * Time: 16:29
         */

            include_once("class/TesteExcecao.php");

            $teste = new TesteExcecao();

            echo $teste->fazCalculo(2,3);

            echo "<h1>Testando a performance em lançamento de exceções</h1>";
            echo "<p>Usando a comparação entre números pares e ímpares fazemos o sistema lançar uma execeção sempre que
                     o valor verificado não for par. Comparamos dois parâmetros, o uso de memória e o tempo gasto para
                     realizar o processamento.
                  </p>";

        /*
            //Testando com o lançamento de exceções
            $InicialTime = microtime(TRUE);
            $InicialMem = memory_get_usage();

            $even = $odd = array();
            foreach (range(1, 100000) as $i) {
                try {
                    if (($i % 2) == 0) {
                        throw new Exception("even number");
                    } else {
                        $odd[] = $i;
                    }
                } catch (Exception $e) {
                    $even[] = $i;
                }
            }
            echo "<h2>Teste COM lançamento de exceções</h2>";
            echo "<label>Passaram:</label> " . count($odd)." tentativas<br/>";
            echo "<label>Não passaram:</label> " . count($even)." tentativas<br/>";
            echo "<label>Tempo estimado:</label> ".(microtime(TRUE) - $InicialTime)." segundos<br/>";
            echo "<label>Uso da memória:</label> ".number_format((memory_get_usage() - $InicialMem) / (1024 * 1024),'10')." MB<br/>";

            //Testando sem o lançamento de exceções
            $InicialTime = microtime(TRUE);
            $InicialMem = memory_get_usage();

            $even = $odd = array();
            foreach (range(1, 100000) as $i) {
                if ($i % 2 == 0) {
                    $even[] = $i;
                } else {
                    $odd[] = $i;
                }
            }
            echo "<h2>Teste SEM lançamento de exceções</h2>";
            echo "<label>Passaram:</label> " . count($odd)." tentativas<br/>";
            echo "<label>Não passaram:</label> " . count($even)." tentativas<br/>";
            echo "<label>Tempo estimado:</label> ".(microtime(TRUE) - $InicialTime)." segundos<br/>";
            echo "<label>Uso da memória:</label> ".number_format((memory_get_usage() - $InicialMem) / (1024 * 1024),'10')." MB<br/>";
        */
        ?>

    </body>
</html>

