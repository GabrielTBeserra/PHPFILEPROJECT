<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/AJAX-FORM-SUBMIT.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body>
    <div class="form-new">
        <form method="POST">
            <label for="client-code">Client code</label>
            <input id="client-code" name="client-code" type="number" required>
            <label for="file-name">File name</label>
            <input id="file-name" name="file-name" maxlength="15" type="text" required>
            <label for="text">Text</label>
            <textarea id="text" name="text" required></textarea>
            <button type="button" onclick="submitform();">Submit</button>
        </form>
    </div>
</body>

</html>