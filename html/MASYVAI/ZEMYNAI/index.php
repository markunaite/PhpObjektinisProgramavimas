<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="uft-8">
        <title>Zemynai</title>
    </head>
    <body>

      <?php

      $arr = array(
          'Europa' => array ('Australija', 'Vokietija', 'Ispanija'),
          'Azija' => array ('Kinija', 'Laosas', 'Malaizija'),
            'Afrika' => array('Kenija', 'Egiptas', 'Libija')
          );

          echo '<pre>';
            print_r($arr);
          echo '</pre>';

          foreach($arr as $Key=>$family) {
              echo "<h2>$Key</h2>"."<ul>";
              foreach($family as $salis) {
                  echo "<li>$salis</li>";
              }
              echo "</ul>";
          }
          ?>

    </body>
</html>