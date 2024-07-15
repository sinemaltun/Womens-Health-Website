function validateForm() {
    const usernameField = document.getElementById('username');
    const passwordField = document.getElementById('password');
    const textField = document.getElementById('textbox');

    let username = '';
    let password = '';
    let text = '';

    // Get values only if fields exist
    if (usernameField) {
        username = usernameField.value;
    }
    if (passwordField) {
        password = passwordField.value;
    }
    if (textField) {
        text = textField.value;
    }

    // Validate fields
    let emptyField = false;
    if (usernameField && username.trim() === '') {
        emptyField = true;
    }
    if (passwordField && password.trim() === '') {
        emptyField = true;
    }
    if (textField && text.trim() === '') {
        emptyField = true;
    }

    if (emptyField) {
        alert('Please fill in all fields.');
        return false;
    }

    // Harmful characters
    var harmfulCharacters = /[<>"';&()\/\\=+%]/;
    let invalidField = false;
    if (usernameField && harmfulCharacters.test(username)) {
        invalidField = true;
    }
    if (passwordField && harmfulCharacters.test(password)) {
        invalidField = true;
    }
    if (textField && harmfulCharacters.test(text)) {
        invalidField = true;
    }

    if (invalidField) {
        alert('Fields cannot contain certain special characters.');
        return false;
    }

    return true; // Validation passes
}
