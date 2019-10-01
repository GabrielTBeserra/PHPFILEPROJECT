function deletefile(dir, file) {
    let filename = decodeURIComponent(file);


    let conf = confirm("Deseja realmente apagar ?");

    if (!conf) return;

    console.log(dir);
    console.log(filename);

    $.ajax({
        url: "class/deletefile.php",
        type: "POST",
        data: {
            dir: dir,
            filename: filename,
        },
        dataType: "html"
    }).done(function(resposta) {
        console.log(resposta);
        alert("Apagado com sucesso!");

        location.reload();
    }).fail(function(jqXHR, textStatus) {
        alert("Houve um erro!");
    })



}