<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <title>Dukros biudžetas</title>
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <h2>Dukros biudžetas</h2>
        

        <?php 

        $dukra_islaidos = array(
            array(
                'nr' => 1,
                'preke' => 'Sijonas',
                'kiekis' => 1,
                'kaina' => '15.00'
            ),
                array(
                'nr' => 2,
                'preke' => 'Vaikiška knygelė',
                'kiekis' => 1,
                'kaina' => '20.50'
                ),
                array(
                'nr' => 3,
                'preke' => 'Pratybos',
                'kiekis' => 3,
                'kaina' => '21.00'
                ),
                array(
                'nr' => 4,
                'preke' => 'Žaislas "Panda"',
                'kiekis' => 1,
                'kaina' => '4.00'
                ),
                array(
                'nr' => 5,
                'preke' => 'Guminukai ',
                'kiekis' => 1,
                'kaina' => '1.00'
            )
                );

         $viso_islaidos = 0;
         foreach($dukra_islaidos as $islaidos) {
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
            for($i = 0; $i < count($dukra_islaidos); ++$i) {
                echo '<tr>';
                echo '<td>' . $dukra_islaidos[$i]['nr'].'</td>';
                echo '<td>' . $dukra_islaidos[$i]['preke'].'</td>';
                echo '<td>' . $dukra_islaidos[$i]['kiekis'].'</td>';
                echo '<td>' . $dukra_islaidos[$i]['kaina'] / $dukra_islaidos[$i]['kiekis'].'</td>';
                echo '<td>' . $dukra_islaidos[$i]['kaina'].'</td>';
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
