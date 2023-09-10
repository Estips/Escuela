const LoginButton = document.getElementById("login");
const Wrapper = document.getElementById("wrapper");

const Login = document.getElementById("Login");
let LoginTF = false;
let opacity = 0;
const changeOpacity = () =>{
    for(let i = 0; i <= 2; i++){
        setTimeout(() => {
            opacity += 0.5;
            Wrapper.style.opacity = opacity;
        }, i * 100);
    }
}

const reverbOpacity = () =>{
    for(let i = 2; i>=0; i--){
        setTimeout(() =>{
            opacity -= 0.5;
            Wrapper.style.opacity = opacity;
        }, i * 100);
    }
}
Wrapper.style.opacity = 0;
Wrapper.style.display = "none";

/*Login.addEventListener("submit", ()=>{
    if(email === "email@gmail.com" &&  password === "12345"){
        console.log("FUNCA");
    }else{
        console.log("NO FUNCA :(");
    }
})*/


LoginButton.addEventListener("click", ()=>{
    if(LoginTF==false){
        Wrapper.style.display = "block";
        changeOpacity();
        LoginTF = true;
    }else if(LoginTF==true){
        reverbOpacity();
        LoginTF = false;
        Wrapper.style.display = "none";
    }
})

