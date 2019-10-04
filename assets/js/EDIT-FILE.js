function viewfile(dir, file) {
  let filename = decodeURIComponent(file);
  console.log(dir);
  console.log(filename);

  let link = (location.href =
    "edit.php?dir=" + dir + "&filename=" + filename + "");
  let url = link.replace(" ", "%20");
  $.ajax({
    async: false,
    url: "edit.php",
    type: "POST",
    data: {
      dir: dir,
      filename: filename
    },
    dataType: "html"
  })
    .done(function(resposta) {
      console.log(resposta);
    })
    .fail(function(jqXHR, textStatus) {
      alert("Houve um erro!");
    });
}
