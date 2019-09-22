<?php require_once 'class/filelist.php'; ?>

<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <div class="form-new">
        <table class="file-list">
            <tr>
                <th>Codigo</th>
                <th>Arqivos</th>
                <th>Acoes<th>
            </tr>

            <?php
            $files = new Files();
            $list = $files->getDirs();

            foreach ($list as $line) {
                if ($line == ".." || $line == ".") continue;
                print '<tr>';
                print '<td>' . $line . PHP_EOL . '</td>';
                print "<td>";
                print "<table class='tableintable'>";

                $filesfromdir = $files->getFiles($line);

                foreach ($filesfromdir as $file) {
                    if ($file == ".." || $file == ".") continue;
                    print '<tr><td>' . $file . PHP_EOL; 
                    print '</td><td>';
                    print "<button class='trash-button'><i class='far fa-trash-alt'></i></button>";
                    print '</td></tr>';
                }

                print "</table>";
                print "</td>";
                print "<td>";
                print "<button class='trash-button'><i class='far fa-trash-alt'></i></button>";
                print "</td>";
                print '</tr>';
                
            }

            ?>
        </table>
    </div>
</body>

</html>