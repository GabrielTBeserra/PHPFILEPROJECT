function closeModal(a, b) {
    $('#modalwindow').hide();
    var modalWindow = document.getElementById('iframeModalWindow');
    modalWindow.src = "";
}

function teste(a, b) {
    $('#modalwindow').show();
    var modalWindow = document.getElementById('iframeModalWindow');

    modalWindow.src = "edit.php?dir=" + a + "&filename=" + b;
}