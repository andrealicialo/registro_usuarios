document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("registroForm");

    form.addEventListener("submit", function (event) {
        let password = document.querySelector("input[name='password']");
        let confirmPassword = document.querySelector("input[name='confirm_password']");
        
        if (password.value !== confirmPassword.value) {
            alert("⚠️ Las contraseñas no coinciden.");
            event.preventDefault();
        }
    });
});
