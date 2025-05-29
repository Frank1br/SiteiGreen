document.querySelector("#form-contato").addEventListener("submit", async (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);
    const response = await fetch("../back-end/controllers/contato_controller.php", {
        method: "POST",
        body: formData
    });
    const result = await response.json();
    if (result.status === "success") {
        window.location.href = "obrigado.php";
    } else {
        alert("Erro ao enviar mensagem.");
    }
});