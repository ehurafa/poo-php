<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 04</title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            
            $c1 = new Caneta("Bic", 0.5, "Azul");
            //$c1->setModelo('Caneta BIC');
            //$c1->modelo = "BIC";
            //$c1->setPonta(0.20);
                  
            // "<pre>";
            //print_r($c1);
            //echo "</pre>"; 
            
            //print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
            
            print_r($c1);
        ?>
    </body>
</html>
