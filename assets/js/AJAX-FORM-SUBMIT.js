function submitform() {
    let clientcode = document.getElementById('client-code').value;
    let filename = document.getElementById('file-name').value;
    let text = document.getElementById('text').value;


    $.ajax({
        url: "form_process.php",
        type: "POST",
        data: {
            clientcode: clientcode,
            filename: filename,
            text: text
        },
        dataType: "html"
    }).done(function(resposta) {
        console.log(resposta);
    }).fail(function(jqXHR, textStatus) {
        console.log("Requisicao falhou: " + textStatus);
    }).always(function() {
        console.log("Enviado com sucesso!!");
    });

}