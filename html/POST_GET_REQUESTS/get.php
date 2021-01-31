<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php

        function show_list($news) {
            echo '<html>';
            echo '<head>';
            echo '<title>Paskutinės naujienos</title>';
            echo '</head>';
            echo '<body>';
            echo '<h1 style="text-align: center">Naujienos';
            echo '</h1>';
            echo '<ul>';

            for ($i = 0; $i < count($news); $i++) {
                echo '<li>';
                echo '<a href="get.php?id=' . ($i + 1) . '">';
                echo $news[$i];
                echo '</a>';
                echo '</li>';
                echo '</ul>';
                echo '</body>';
                echo '</html>';

            }
        }

        function show_items($news, $id) {
            echo '<html>';
            echo '<head>';
            echo '<title>Paskutinės naujienos</title>';
            echo '</head>';
            echo '<body>';
            echo '<a href="get.php">Sugrizti prie naujienu saraso</a>';
            echo '<p>';
            echo $news[$id - 1];
            echo '</p>';
            echo 'Bla bla bla';
            echo '</p>';
            echo '</body>';
            echo '</html>';
        }

        $news = array();
        $news[0] = 'Pirma naujiena';
        $news[1] = 'Antra naujiena';
        $news[2] = 'Trecia naujiena';

        if(isset($_GET['id'])) {
            show_items($news, $_GET['id']);
        } else {
            show_list($news);

        }

        ?>
    
    </body>
</html>