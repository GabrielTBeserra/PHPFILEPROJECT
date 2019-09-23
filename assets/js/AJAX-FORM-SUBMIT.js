function submitform() {
    let clientcode = document.getElementById('client-code').value;
    let filename = document.getElementById('file-name').value;
    let text = document.getElementById('text').value;

    $.ajax({
        url: "class/form_process.php",
        type: "POST",
        data: {
            clientcode: clientcode,
            filename: filename,
            text: text
        },
        dataType: "html"
    }).done(function(resposta) {
        alert("Arquivo criado com sucesso!");
    }).fail(function(jqXHR, textStatus) {
        alert("Houve um erro!");
    })

}