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
    <section>
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
                        print '</td><td><div>';
                        print "<button class='actionbutton' onclick=openmodal('" . rawurlencode($line) . "','" . rawurlencode($file) . "');><i class='fa fa-eye'></i></button>";
                        print "<button class='actionbutton' onclick=deletefile('" . rawurlencode($line) . "','" . rawurlencode($file) . "');><i class='far fa-trash-alt'></i></button>";
                        print '</div></td></tr>';
                    }

                    print "</table>";
                    print "</td>";
                    print "</td>";
                    print '</tr>';
                }

                ?>
            </table>

            <div id="editModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick=closeModal()>&times;</span>
                    <iframe scrolling="no" id="srcModal" height="100%" width="100%" src="" name="edit-modal"></iframe>
                </div>
            </div>
        </div>
    </section>
</body>

</html>