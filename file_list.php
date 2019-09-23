<?php require_once 'class/filelist.php'; ?>

<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src='.\assets\js\DELETE-FILE.js'></script>
    <script src='.\assets\js\EDIT-FILE.js'></script>
    <script src='.\assets\js\modal-control.js'></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <div class="menu-bar">
        <div class="menu-itens">
        <a class="menu-iten" href="index.php">Cadastrar</a>
        <a class="menu-iten" href="file_list.php">Listar</a>
        </div>
    </div>

    <div class="form-new">
        <table class="file-list">
            <tr>
                <th>Codigo</th>
                <th>Arqivos</th>
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
                    //print "<button class='view-button' onclick=viewfile('" . $line . "','" . $file . "');><i class='fas fa-pencil'></i></button>";
                    print "<button class='view-button' onclick=teste('" . $line . "','" . $file . "');><i class='fa fa-eye'></i></button>";
                    print "<button class='trash-button' onclick=deletefile('" . $line . "','" . $file . "');><i class='far fa-trash-alt'></i></button>";
                    print '</td></tr>';
                }

                print "</table>";
                print "</td>";
                print "</td>";
                print '</tr>';
            }

            ?>
        </table>
        <div id="modalwindow" class="modal">
            <div class="modal-header">
                <button type="button" class="close-button" onclick=closeModal()>&times;</button>
            </div>
            <iframe id="iframeModalWindow" height="80%" width="80%" src="" class="iframestyle" name="iframe_modal"></iframe>
        </div>
    </div>
</body>

</html>