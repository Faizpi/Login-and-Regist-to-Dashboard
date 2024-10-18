function showPopup(message, isError) {
    const popup = document.getElementById('popup');
    popup.textContent = message;
    popup.classList.add('show');
    if (isError) {
        popup.classList.add('error');
    } else {
        popup.classList.remove('error');
    }

    setTimeout(() => {
        popup.classList.remove('show');
    }, 3500);
}

function resetUsers() {
    const form = document.getElementById('registrasiForm');
    const resetInput = document.createElement('input');
    resetInput.type = 'hidden';
    resetInput.name = 'reset';
    form.appendChild(resetInput);
    form.submit();
}
