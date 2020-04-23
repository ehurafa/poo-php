<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'ContaBanco.php';
            
            $p1 = new ContaBanco;
            $p2 = new ContaBanco;
            
            $p1->abrirConta("CC");
            $p1->setDono('Jubileu');
            $p1->setNumConta('111222');
             $p1->depositar(155);
             $p1->sacar(193);
            $p2->abrirConta("CP");
            $p2->setDono('Creusa');
            $p2->sacar(1000);
            $p2->depositar(135);
            
            $p1->pagarMensal();
            $p2->pagarMensal();
            
            $p1->fecharConta();
            $p2->fecharConta();
            
          
            print_r($p1);
           
            print_r($p2);          
            
            
        ?>
        
        </pre>
    </body>
</html>
