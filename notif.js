function showPopup() {
    const popup = document.getElementById('popup');
    popup.classList.add('show'); 

    setTimeout(() => {
        popup.classList.remove('show');
    }, 3500);
}
