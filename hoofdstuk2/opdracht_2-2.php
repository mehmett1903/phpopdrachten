<?php
$text1 = "Hallo";
$text2 = "een makkelijke taal ";
$text3 = "toch zo'n makkelijke taal";
$text4 = "wat is ";
$text5 = "PHP ";
$text6 = "Nooit gedacht dat ";
$text7 = "De installatie is best ingewikkeld";
$text8 = "Fijn ";
$text9 = "? ";
$text10 = ". ";
$text11 = ", ";
$text12 = "<br>";
$text13 = "is ";
$text14 = "vind je toch ";
$text15 = "toch ";
?>

<p>
    <?php
    echo $text1 . $text11 . $text12 .
        $text4 . $text5 . $text3 . $text10 . $text12 .
        $text7 . $text10 . $text8 . $text15 . $text9 . $text12 .
        $text6 . $text5 . $text3 . $text10;
    ?>
</p>

<?php
echo $text1 . $text11 . $text12 .
    $text8 . $text15 . "dat" . $text5 . "zo'n makkelijk taal is" . $text10 . $text12 .
    $text7 . $text10 . "vind je niet" . $text9;
?>
