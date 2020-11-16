<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <title>Mamos biudžetas</title>
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <h2>Mamos biudžetas</h2>
        

        <?php 

        $mama_islaidos = array(
            array(
                'nr' => 1,
                'preke' => 'Veido kremas',
                'kiekis' => 1,
                'kaina' => '20.00'
            ),
                array(
                'nr' => 2,
                'preke' => 'Plaukų kondicionierius',
                'kiekis' => 1,
                'kaina' => '10.50'
                ),
                array(
                'nr' => 3,
                'preke' => 'Marškiniai',
                'kiekis' => 1,
                'kaina' => '24.99'
                ),
                array(
                'nr' => 4,
                'preke' => 'Vitaminas C',
                'kiekis' => 1,
                'kaina' => '10.00'
                ),
                array(
                'nr' => 5,
                'preke' => 'Latte',
                'kiekis' => 1,
                'kaina' => '2.40'
            )
                );

         $viso_islaidos = 0;
         foreach($mama_islaidos as $islaidos) {
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
            for($i = 0; $i < count($mama_islaidos); ++$i) {
                echo '<tr>';
                echo '<td>' . $mama_islaidos[$i]['nr'].'</td>';
                echo '<td>' . $mama_islaidos[$i]['preke'].'</td>';
                echo '<td>' . $mama_islaidos[$i]['kiekis'].'</td>';
                echo '<td>' . $mama_islaidos[$i]['kaina'] / $mama_islaidos[$i]['kiekis'].'</td>';
                echo '<td>' . $mama_islaidos[$i]['kaina'].'</td>';
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
