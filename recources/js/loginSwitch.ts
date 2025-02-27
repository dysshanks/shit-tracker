document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.getElementById("loginForm") as HTMLElement;
    const registerForm = document.getElementById("registerForm") as HTMLElement;
    const showRegister = document.getElementById("showRegister") as HTMLElement;
    const showLogin = document.getElementById("showLogin") as HTMLElement;

    showRegister.addEventListener("click", (e) => {
        e.preventDefault();
        loginForm.style.animation = "fadeOut 0.5s forwards";
        setTimeout(() => {
            loginForm.style.display = "none";
            registerForm.style.display = "block";
            registerForm.style.animation = "fadeIn 0.5s forwards";
        }, 500);
    });

    showLogin.addEventListener("click", (e) => {
        e.preventDefault();
        registerForm.style.animation = "fadeOut 0.5s forwards";
        setTimeout(() => {
            registerForm.style.display = "none";
            loginForm.style.display = "block";
            loginForm.style.animation = "fadeIn 0.5s forwards";
        }, 500);
    });
});
