function submitform() {
    let clientcode = document.getElementById('client-code').value;
    let filename = document.getElementById('file-name').value;
    let text = document.getElementById('text').value;

    console.log(clientcode);
    console.log(filename);
    console.log(text);

    if (clientcode.trim() === "" || filename.trim() === "" || text.trim() === "") {
        alert("Preencha todos os campos!");
        return;
    }

    alert("Arquivo criado com sucesso!");

    $.ajax({
        url: "class/form_process.php",
        type: "POST",
        data: {
            clientcode: clientcode,
            filename: filename,
            text: text
        },
        dataType: "html"
    }).fail(function(jqXHR, textStatus) {
        alert("Houve um erro!");
    })

}