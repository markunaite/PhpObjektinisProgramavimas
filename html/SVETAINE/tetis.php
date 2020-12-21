<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <title>Tėčio biudžetas</title>
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <h2>Tėčio biudžetas</h2>
        

        <?php 

        $tetis_islaidos = array(
            array(
                'nr' => 1,
                'preke' => 'Automobilio langų skystis',
                'kiekis' => 1,
                'kaina' => '5.00'
            ),
                array(
                'nr' => 2,
                'preke' => 'Šampūnas',
                'kiekis' => 1,
                'kaina' => '5.50'
                ),
                array(
                'nr' => 3,
                'preke' => 'Gira',
                'kiekis' => 2,
                'kaina' => '1.78'
                ),
                array(
                'nr' => 4,
                'preke' => 'Vyriškas skutimosi rinkinys GILLETTE ',
                'kiekis' => 1,
                'kaina' => '22.39'
                ),
                array(
                'nr' => 5,
                'preke' => 'Termosas ',
                'kiekis' => 1,
                'kaina' => '7.00'
            )
                );

         $viso_islaidos = 0;
         foreach($tetis_islaidos as $islaidos) {
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
            for($i = 0; $i < count($tetis_islaidos); ++$i) {
                echo '<tr>';
                echo '<td>' . $tetis_islaidos[$i]['nr'].'</td>';
                echo '<td>' . $tetis_islaidos[$i]['preke'].'</td>';
                echo '<td>' . $tetis_islaidos[$i]['kiekis'].'</td>';
                echo '<td>' . $tetis_islaidos[$i]['kaina'] / $tetis_islaidos[$i]['kiekis'].'</td>';
                echo '<td>' . $tetis_islaidos[$i]['kaina'].'</td>';
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
