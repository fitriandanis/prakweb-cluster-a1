<?php 
    function faktorial($bil){
        $faktor = 1;
        for($i=$bil; $i>0; $i--)
        {
            $faktor=$faktor*$i;
        }
        return $faktor;
    }
?>
    <form action ="" method ="POST">
        <label for ="bil">Bilangan:</label>
        <input type ="number" name ="bil" id ="bil">
        <button type ="submit" name ="subBut">Hitung!</button>
    </form>
<?php 
    if (isset($_POST['subBut']))
    {
        echo faktorial($_POST['bil']);
    }
?>