function validateForm() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const message = document.getElementById('message').value;
    if (name === '' || email === '' || phone === '' || message === '') {
        alert('Por favor, completa todos los campos.');
        return false;
    }
    return true;
}
