function closeModal(a, b) {
    $('#myModal').hide();
    var modalWindow = document.getElementById('iframeModalWindow');
    modalWindow.src = "";
}

function openmodal(a, b) {
    console.log(a);
    console.log(b);

    $('#myModal').show();
    var modalWindow = document.getElementById('iframeModalWindow');

    modalWindow.src = "edit.php?dir=" + a + "&filename=" + b;
}