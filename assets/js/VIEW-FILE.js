function viewfile(dir, filename) {

    console.log(dir);
    console.log(filename);

    $.ajax({
        async: false,
        url: "edit.php",
        type: "POST",
        data: {
            dir: dir,
            filename: filename
        },
        dataType: "html"
    }).done(function(resposta) {
        console.log(resposta);
        location.href = "edit.php?dir=" + dir + "&filename=" + filename + "";
    }).fail(function(jqXHR, textStatus) {
        alert("Houve um erro!");
    })



}