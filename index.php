<html>
<body>
    <form action="file_create.php" method="POST">
            <label for="client-code">Client code</label>
            <input id="client-code" name="client-code" type="number" required>
            <label for="file-name">File name</label>
            <input id="file-name" name="file-name" maxlength="15" type="text" required>
            <label for="text">Text</label>
            <textarea id="text" name="text" required ></textarea>
            <button type="submit">Submit</button>
    </form>
    
</body>
</html>