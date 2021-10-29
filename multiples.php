<?php

function multiples($number){
    $sum = 0;


    for ($i = 0; $i <= $number; $i++){
        if ($i % 3 == 0)
            $sum+= $i;
        else if ($i % 5 == 0)
            $sum += $i;
    }

    echo $sum;
}

?>

<form action="/multiples.php">
    <input type="number" name="number">
    <input type="submit">
</form>

<?php if (isset($_GET["number"]) ): ?>

The Sum is: <?php multiples($_GET["number"]); ?>

<?php endif;?>