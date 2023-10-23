popularTabelaTrabalhos();
document
  .getElementById("btnSalvarAlteracaoItem")
  .addEventListener("click", function () {
    var tituloItem = document.querySelector("#tituloItem").value;
    var descricaoItem = document.querySelector("#descricaoItem").value;
    var tamanhoItem = document.querySelector("#tamanhoItem").value;
    var estiloItem = document.querySelector("#estiloItem").value;
    var precoItem = document.querySelector("#precoItem").value;
    var imagemItem = document.querySelector("#imagemItem");
    var imagemItemCheck = document.querySelector("#imagemItem").value;

    if (
      tituloItem &&
      descricaoItem &&
      tamanhoItem &&
      estiloItem &&
      precoItem &&
      imagemItemCheck
    ) {
      var formData = new FormData();
      formData.append("titulo", tituloItem);
      formData.append("descricao", descricaoItem);
      formData.append("tamanho", tamanhoItem);
      formData.append("estilo", estiloItem);
      formData.append("preco", precoItem);
      formData.append("imagem", imagemItem.files[0]);

      console.log(imagemItem);

      var xhr = new XMLHttpRequest();

      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
          if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);

            var mensagemElement = document.querySelector("#messageError");

            if (response.imagemCadastrada) {
              mensagemElement.innerHTML = "Trabalho REGISTRADO com sucesso";
              popularTabelaTrabalhos();
            } else {
              mensagemElement.innerHTML = "Não foi possivel REGISTRAR";
              console.error("Erro na requisição: " + xhr.status);
            }

            mensagemElement.removeAttribute("hidden");
          } else {
            console.error("Erro na requisição: " + xhr.status);
          }
        }
      };

      xhr.open("POST", "../../adata_controler/cadastrarNovoTrabalho.php", true);
      // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      // var data = (formData);
      xhr.send(formData);
    } else {
      var mensagemElement = document.querySelector("#messageError");
      mensagemElement.innerHTML = "Não foi possivel REGISTRAR";
      mensagemElement.removeAttribute("hidden");
    }
  });






function popularTabelaTrabalhos() {
  var div = document.querySelector("#divItensPostados");
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        var response = JSON.parse(xhr.responseText);

        var mensagemElement = document.querySelector("#messageError");

        if (response.length > 0) {
          // Manipule os dados aqui
          var htmlToAppend = ""; // Declare a variável htmlToAppend para armazenar o HTML

          for (var i = 0; i < response.length; i++) {
            var item = response[i];
            // Monte o HTML com base nos dados
            htmlToAppend += `
              <div class="card mb-4 draggable" draggable="true">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="d-flex flex-column h-100">
                        <span id="idItem" value="${item.ID}"></span>
                      <label for="titulo">titulo</label>
                      <input name="titulo" id="tituloItem" class="form-control bg-gradient-secondary px-3 text-white" value="${item.Nome}"></input>
    
                      <label for="descricao">descricao</label>
                      <input id="descricaoItem" name="descricao" class="form-control bg-gradient-secondary px-3 text-white" value="${item.Descricao}"></input>
    
                      <label for="tamanho" >tamanho</label>
                      <div class="d-flex justify-content-center align-items-center">
                      <span class="form-control w-25 bg-gradient-primary px-1 text-white">Centimetros</span><input id="tamanhoItem" name="tamanho" class="form-control bg-gradient-secondary px-3 text-white" value="${item.Tamanho}" class="mb-5">
                      </div>
    
                      <label for="estilo" >estilo</label>
                      <input id="estiloItem" name="estilo" class="form-control bg-gradient-secondary px-3 text-white" value="${item.Estilo}" class="mb-5">
    
                      <label for="preco" >Preço</label>
                      <div class="d-flex justify-content-center align-items-center">
                      <span class="form-control w-25 bg-gradient-primary px-3 text-white">R$:</span><input id="precoItem" name="preco" class="form-control bg-gradient-secondary px-3 text-white" value="${item.Valor}" class="mb-5">
                      </div>
                      
                      </input>
                      <button id="btnSalvarAlteracaoItem2" name="btnSalvarAlteracaoItem2" class="text-body btn text-sm font-weight-bold mb-0 icon-move-right mt-auto">
                    Salvar
                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                  </button>
                    </div>
                  </div>
                  <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                    <div class="bg-gradient-primary border-radius-lg h-100">
                      
                      <div
                      class="position-relative d-flex align-items-center justify-content-center h-100"
                      >
                      <img
                      class="w-100 h-100 position-relative z-index-2 pt-4"
                          src="../${item.caminho}"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              `;
          }

          // Adicione o HTML gerado à div existente
          div.innerHTML = htmlToAppend;
        } else {
          mensagemElement.innerHTML = "Não foi possível encontrar dados.";
        }

        mensagemElement.removeAttribute("hidden");
      } else {
        console.error("Erro na requisição: " + xhr.status);
      }
    }
  };

  xhr.open("GET", "../../adata_controler/popularTabelaAdministrador.php", true); // Altere o URL para o seu arquivo PHP
  xhr.send();
}


document.querySelector("#btnSalvarAlteracaoItem2").addEventListener("click", function(){

    var tituloItem = document.querySelector("#tituloItem").value;
    var descricaoItem = document.querySelector("#descricaoItem").value;
    var tamanhoItem = document.querySelector("#tamanhoItem").value;
    var estiloItem = document.querySelector("#estiloItem").value;
    var precoItem = document.querySelector("#precoItem").value;
    var idItem = document.querySelector("#idItem").value;
    console.log(tituloItem);

    var formData = new FormData();
      formData.append("titulo", tituloItem);
      formData.append("descricao", descricaoItem);
      formData.append("tamanho", tamanhoItem);
      formData.append("estilo", estiloItem);
      formData.append("preco", precoItem);
      formData.append("id", idItem);


});
