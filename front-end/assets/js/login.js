
var btnSignin = document.querySelector("#signin");
var btnSignup = document.querySelector("#signup");

var body = document.querySelector("body");


btnSignin.addEventListener("click", function () {
   body.className = "sign-in-js"; 
});

btnSignup.addEventListener("click", function () {
    body.className = "sign-up-js";
})

document.querySelector("#form-lead").addEventListener("submit", async (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);
    const response = await fetch("../back-end/controllers/lead_controller.php", {
        method: "POST",
        body: formData
    });
    const result = await response.json();
    if (result.status === "success") {
        alert("Cadastro realizado com sucesso!");
    } else {
        alert("Erro ao cadastrar.");
    }
});