// Faz o controle do modal da janela de edicao
function closeModal(a, b) {
  $("#editModal").hide();
  var modalWindow = document.getElementById("srcModal");
  modalWindow.src = "";
}

function openmodal(a, b) {
  $("#editModal").show();
  var modalWindow = document.getElementById("srcModal");

  modalWindow.src = "edit.php?dir=" + a + "&filename=" + b;
}
