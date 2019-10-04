function submitform() {
  // Pega os valores dos campos do formulario e faz um requisicao AJAX para o form_process.php

  let clientcode = document.getElementById("client-code").value;
  let filename = document.getElementById("file-name").value;
  let text = document.getElementById("text").value;

  if (
    clientcode.trim() === "" ||
    filename.trim() === "" ||
    text.trim() === ""
  ) {
    alert("Preencha todos os campos!");
    return;
  }

  alert("Arquivo criado com sucesso!");

  $.ajax({
    url: "class/form_process.php",
    type: "POST",
    data: {
      clientcode: clientcode.trim(),
      filename: filename.trim(),
      text: text.trim()
    },
    dataType: "html"
  }).fail(function(jqXHR, textStatus) {
    alert("Houve um erro!");
  });
}
