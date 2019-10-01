<?php
    $code = $_GET['dir'];
    $file = $_GET['filename'];
    $filename = substr($file, 0, strrpos($file, "."));
    $textdir = dirname(__FILE__) . "/class/users/" . $code . "/" . $file;
    $file = fopen($textdir, "r") or die("Unable to open file!");
    $text = fgets($file);
    fclose($file);
?>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/AJAX-FORM-SUBMIT.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <section>
    <div class="form-new">
        <form method="POST">
            <label for="client-code">Client code</label>
            <input id="client-code" class="input-form" name="client-code" type="number" value="<?php echo $code ?>" readonly>
            <br />
            <label for="file-name">File name</label>
            <input id="file-name" class="input-form" name="file-name" maxlength="15" value="<?php echo $filename ?>" type="text" readonly>
            <br />
            <label for="text">Text</label>
            <textarea id="text" class="input-form" name="text" required><?php echo $text ?></textarea>
            <br />
            <button type="submit" class="edit-button" onclick="submitform();">Salvar</button>
        </form>
    </div>
    </section>
</body>

</html>