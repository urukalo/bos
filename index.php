<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        require './vendor/autoload.php';

        $fleet = new bos\fleet();
        
        $fleet->addShip(new bos\Interceptor());
        $fleet->addShip(new bos\Leviathan());
        $fleet->addShip(new bos\Dreadnought());
        $fleet->addShip(new bos\Transport());
        $fleet->addShip(new bos\Recreation());
        $fleet->addShip(new bos\Interceptor(TRUE));
        $fleet->addShip(new bos\Interceptor());
        $fleet->addShip(new bos\Leviathan());
        $fleet->addShip(new bos\Dreadnought(true));
        $fleet->addShip(new bos\Transport());
        $fleet->addShip(new bos\Recreation());
        $fleet->addShip(new bos\Interceptor());
        
        //var_dump($fleet);
        
        echo "<br> Attack Formation: <br>";
        
        echo $fleet->attackFormation();
        
        echo "<br><br> Eskort Formation: <br>";
        
        echo $fleet->eskortFormation();
        

        
        ?>
    </body>
</html>
