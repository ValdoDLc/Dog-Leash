 // Fuciones para el Menu Desplegable //
function mostrar(){
    document.getElementById('Menu-Desplegable').classList.add('Open')
}
function ocultar(){
    document.getElementById('Menu-Desplegable').classList.remove('Open')
}

function validateForm() {
    let emailInput = document.getElementById('email');
    let passwordInput = document.getElementById('password');
    let emailRegex = /\S+@\S+\.\S+/;
    let passwordRegex = /^(?=.*[A-Z])(?=.*\d).{8,}$/;

    if (!emailRegex.test(emailInput.value)) {
        alert('Por favor, ingresa una dirección de correo electrónico válida.');
        return false;
    }

    if (!passwordRegex.test(passwordInput.value)) {
        alert('La contraseña debe tener al menos 8 caracteres, una mayúscula y un dígito.');
        return false;
    }

    return true;
}
