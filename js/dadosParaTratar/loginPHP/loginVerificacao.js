
document.getElementById("botaoEntrar").addEventListener("click", function() {

    var inputLogin = document.querySelector("#inputLogin").value;
    var inputSenha = document.querySelector("#inputSenhaLogin").value;
    console.log(inputLogin);

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                
                var mensagemElement = document.querySelector("#mensagem");

                if (response.loginExiste) {
                    window.location.href = './registro.php';
                } else {
                    mensagemElement.innerHTML = "Login NÃO existe na base de dados.";
                }

                mensagemElement.removeAttribute("hidden");
            } else {
                console.error("Erro na requisição: " + xhr.status);
            }
        }
    };

    xhr.open("POST", "../adata_controler/loginCheck.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
    var data = "login=" + encodeURIComponent(inputLogin) + "&senha=" + encodeURIComponent(inputSenha);
    xhr.send(data);
});



// document.getElementById("botaoEntrar").addEventListener("click", function() {
//     // Quando o botão é clicado, envie o formulário
//     document.querySelector("form").submit();
// });