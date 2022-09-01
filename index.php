<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $urlAPI = "https://swapi.dev/api/people";
            $resultado = json_decode(file_get_contents($urlAPI));
            //var_dump($resultado);

            foreach ($resultado->results as $personagem) {
                echo "Personagem: " . $personagem->name . "<br>";
                echo "Altura: " . $personagem->height . " cm" . "<br>";
                echo "Peso: " . $personagem->mass . " kg" . "<br>";
                //echo "Veículo: " . $personagem->vehicles . "<br>";

                $urlVeiculo = "https://swapi.dev/api/vehicles";
                $resultadoVeiculo = json_decode(file_get_contents($urlVeiculo));
                //var_dump($resultadoVeiculo);

                $qtdVeiculos = 0;

                foreach ($personagem->vehicles as $veiculo) {
                    echo "Veículo: " . $veiculo . "<br>";
                    $qtdVeiculos++;
                }

                if($qtdVeiculos > 0){
                    echo "Quantidade: ". $qtdVeiculos;
                }
                

                echo "<hr>";
            }
        ?>
    </body>
</html>