const LoginButton = document.getElementById("login");
const Wrapper = document.getElementById("wrapper");
const ComoFunciona = document.getElementById("ComoFunciona");
const ComoFuncionaBtn = document.getElementById("ComoFuncionaBtn");

const Login = document.getElementById("Login");
let LoginTF = false;
let opacity = 0;

const changeOpacity = (element) => {
    element.style.display = "block";
    for (let i = 0; i <= 2; i++) {
        setTimeout(() => {
            opacity += 0.5;
            element.style.opacity = opacity;
        }, i * 100);
    }
};

const reverbOpacity = (element) => {
    for (let i = 2; i >= 0; i--) {
        setTimeout(() => {
            opacity -= 0.5;
            element.style.opacity = opacity;
        }, i * 100);
    }
    setTimeout(() => {
        element.style.display = "none";
    }, 300);
};

Wrapper.style.opacity = 0;
Wrapper.style.display = "none";
ComoFunciona.style.opacity = 0;
ComoFunciona.style.display = "none";

LoginButton.addEventListener("click", () => {
    if (LoginTF === false) {
        Wrapper.style.display = "absolute";
        changeOpacity(Wrapper);
        LoginTF = true;
    } else if (LoginTF === true) {
        Wrapper.style.display = "none";
        reverbOpacity(Wrapper);
        LoginTF = false;
    }
});

ComoFuncionaBtn.addEventListener("click", () => {
    if (ComoFunciona.style.display === "none") {
        ComoFunciona.style.display = "block";
        changeOpacity(ComoFunciona);
    } else {
        reverbOpacity(ComoFunciona);
    }
});

// Mostrar el contenido del div ComoFunciona
const contenidoComoFunciona = document.querySelector(".ComoFunciona p");
contenidoComoFunciona.style.display = "block";


