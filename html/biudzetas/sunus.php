<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <title>Sūnaus biudžetas</title>
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <h2>Sūnaus biudžetas</h2>
        

        <?php 

        $sunus_islaidos = array(
            array(
                'nr' => 1,
                'preke' => 'Vaikiška knygelė',
                'kiekis' => 1,
                'kaina' => '5.00'
            ),
                array(
                'nr' => 2,
                'preke' => 'Saldainiai',
                'kiekis' => 1,
                'kaina' => '1.50'
                ),
                array(
                'nr' => 3,
                'preke' => 'Kamuolys',
                'kiekis' => 2,
                'kaina' => '15.00'
                ),
                array(
                'nr' => 4,
                'preke' => 'Sąsiuviniai',
                'kiekis' => 5,
                'kaina' => '1.20'
                ),
                array(
                'nr' => 5,
                'preke' => 'Lego',
                'kiekis' => 1,
                'kaina' => '30.00'
            )
                );

         $viso_islaidos = 0;
         foreach($sunus_islaidos as $islaidos) {
             $viso_islaidos += $islaidos['kaina'];
         }
                ?>  

        <table>
            <th>Nr.</th>
            <th>Prekė</th>
            <th>Kiekis</th>
            <th>Prekės vnt kaina</th>
            <th>Kaina Eur.</th>

        <?php
            for($i = 0; $i < count($sunus_islaidos); ++$i) {
                echo '<tr>';
                echo '<td>' . $sunus_islaidos[$i]['nr'].'</td>';
                echo '<td>' . $sunus_islaidos[$i]['preke'].'</td>';
                echo '<td>' . $sunus_islaidos[$i]['kiekis'].'</td>';
                echo '<td>' . $sunus_islaidos[$i]['kaina'] / $sunus_islaidos[$i]['kiekis'].'</td>';
                echo '<td>' . $sunus_islaidos[$i]['kaina'].'</td>';
                echo '</tr>';
            }
         
            ?>
            <tr>
                <td colspan="4">IŠLAIDOS</td>
                <td>
                    <?php
                        echo $viso_islaidos;
                    ?>
                </td>
            </tr>  

        </table>
    </body>
</html>
