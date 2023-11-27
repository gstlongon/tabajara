class Painel {
    constructor() {
        this.init()
    }

    register() {

        const registerBtn = document.querySelector('.admin__submit')
        const registerClose = document.querySelector('.close')
        const input = document.querySelectorAll('.admin__input')

        registerClose.addEventListener('click', () => {
            
            input.forEach(field => {
                field.value = ""
            })

        })
    
    }


    async buscaCep(cep) {
        if (!cep) {
            alert("CEP não fornecido.");
            return;
        }

        cep = cep.replace(/\D/g, ''); 
        if (cep.length !== 8) {
            alert("CEP inválido. O CEP deve conter 8 números.");
            return;
        }

        console.log(`Buscando CEP ${cep}`);
        try {
            const response = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
            const json = await response.json();

            if (json.error) {
                alert("CEP não localizado.");
            } else {
                console.log("Resposta:", json);
                document.querySelector('.txtlog').value = json.logradouro || '';
                document.querySelector('.txtbairro').value = json.bairro || '';
                document.querySelector('.txtcidade').value = json.localidade || '';
                document.querySelector('.txtuf').value = json.uf || '';
            }
        } catch (error) {
            console.error("Ocorreu um erro ao buscar o CEP:", error);
            alert("Ocorreu um erro ao buscar o CEP. Tente novamente mais tarde.");
        }
    }

    campoCep() {
        document.addEventListener("DOMContentLoaded", () => {
            const btnCons = document.querySelector(".txtcep");
            console.log(btnCons)
            btnCons.addEventListener("focusout", () => {
                const c = btnCons.value;
                this.buscaCep(c);
            });
        })
    
    }
    
    async postForm(url,form){
        let data = Object.fromEntries(new FormData(form));
        const response = await axios.post(url,data);
        return response;
    }

    //get       <- servidor 
    //post      -> servidor
    //put       -> servidor (update)

    envia(){
        let url="register-item.php";
        let form = document.querySelector("#register__item");
        const input = document.querySelectorAll('.admin__input')
        this.postForm(url,form).then(res=>{
            if(res.data.codigo=="1"){
                Swal.fire({
                    title: 'Sucesso',
                    text: res.data.texto,
                    icon: 'success',
                    confirmButtonText: 'OK'
                    });

                    input.forEach(field => {
                        field.value = ""
                    })
            }

            else {
                Swal.fire({
                    title: 'Erro',
                    text: res.data.texto,
                    icon: 'error',
                    confirmButtonText: 'OK'
                    })
            }
        })
    }

    submit() {
        document.querySelector("#item__submit").addEventListener("click", () => {
            this.envia();
        });
    }


    init() {
        this.register()
        // this.campoCep()
        this.submit()
        // this.checkPassword()
    }
}

new Painel



function abrirFormularioPromocao(itemId, valorAtual, precoAntigo) {
    const novoValor = prompt("Digite o novo valor:");

    if (novoValor !== null) {
        novoValor = parseFloat(novoValor);

        if (!isNaN(novoValor) && novoValor <= valorAtual) {
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    location.reload();
                }
            };
            
            const url = "promocao-edit.php?item_id=" + itemId + "&novo_valor=" + novoValor;
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
        } else {
            alert("O novo valor deve ser menor ou igual ao valor atual.");
        }
    }
}

function mostrarDetalhesItem(itemId) {
    const detalhesItem = document.getElementById('detalhesItem' + itemId);
    if (detalhesItem.style.display === 'none') {
        detalhesItem.style.display = 'block';
    } else {
        detalhesItem.style.display = 'none';
    }
}

function deleteCategory(categoryId) {
    if (confirm("Tem certeza de que deseja apagar esta categoria?")) {
        $.ajax({
            type: "POST",
            url: "categoria-rem.php",
            data: { delete_category: categoryId },
            success: function(response) {
                $(".admin__category-list").load(location.href + " .admin__category-list>*", "");
            },
            error: function(xhr, status, error) {
                alert("Erro ao excluir categoria: " + xhr.responseText);
            }
        });
    }
}

function deleteItem(itemId) {
    if (confirm("Tem certeza de que deseja apagar este item?")) {
        $.ajax({
            type: "POST",
            url: "item-rem.php",
            data: { delete_item: itemId },
            success: function(response) {
                $(".admin__itens-list").load(location.href + " .admin__itens-list>*", "");
            },
            error: function(xhr, status, error) {
                alert("Erro ao excluir item: " + xhr.responseText);
            }
        });
    }
}

function deletePromocao(itemId) {
    if (confirm("Tem certeza de que deseja apagar este item?")) {
        $.ajax({
            type: "POST",
            url: "promocao-rem.php",
            data: { promocao: itemId },
            success: function(response) {
                $(".admin__promocao-list").load(location.href + " .admin__promocao-list>*", "");
            },
            error: function(xhr, status, error) {
                alert("Erro ao excluir item: " + xhr.responseText);
            }
        });
    }
}

function editCategory(categoryId) {
    const novoNome = prompt("Digite o novo nome da categoria:");

    if (novoNome !== null) {
        $.ajax({
            type: "POST",
            url: "categoria-edit.php",
            data: {
                edit_category: categoryId,
                novo_nome: novoNome
            },
            success: function(response) {                  
                $(".admin__category-list").load(location.href + " .admin__category-list>*", "");
            },
            error: function(xhr, status, error) {
                alert("Erro ao editar categoria: " + xhr.responseText);
            }
        });
    }
}

function abrirFormularioEdicao(itemId, itemName, itemValue, itemDescription, itemStatus, categoryId, itemPhoto) {
    const modalId = "formularioEdicaoModal_" + itemId;

    $("#" + modalId).remove();

    const formularioEdicao = `
        <div class="modal fade" id="${modalId}" tabindex="-1" role="dialog" aria-labelledby="${modalId}Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content text-center mx-auto">
                    <div class="modal-header">
                        <h5 class="modal-title" id="${modalId}Label">Editar Item</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formularioEdicao">
                            <label for="novoNome">Nome:</label>
                            <input type="text" id="novoNome" value="${itemName}" class="form-control">
                            <br>

                            <label for="novoValor">Valor:</label>
                            <input type="number" id="novoValor" value="${itemValue}" class="form-control">
                            <br>

                            <label for="novaDescricao">Descrição:</label>
                            <textarea id="novaDescricao" class="form-control">${itemDescription}</textarea>
                            <br>

                            <label for="novoStatus">Status:</label>
                            <select id="novoStatus" class="form-control">
                                <option value="1" ${itemStatus == 1 ? 'selected' : ''}>Disponível</option>
                                <option value="0" ${itemStatus == 0 ? 'selected' : ''}>Indisponível</option>
                            </select>
                            <br>

                            <label>Foto Atual:</label>
                            <img src="img2/${itemPhoto}" alt="Foto Atual" style="max-width: 100px; max-height: 100px;">
                            <br>

                            <label for="novaFoto">Nova Foto:</label>
                            <input type="file" id="novaFoto" accept="image/*" class="form-control-file">
                            <br>

                            <button type="button" class="btn btn-primary" onclick="enviarEdicao(${itemId}, '${itemPhoto}')">Salconst Edições</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    `;

    $('body').append(formularioEdicao);

    $('#' + modalId).modal('show');
}

function enviarEdicao(itemId, fotoAntiga) {
    const novoNome = document.getElementById('novoNome').value;
    const novoValor = document.getElementById('novoValor').value;
    const novaDescricao = document.getElementById('novaDescricao').value;
    const novoStatus = document.getElementById('novoStatus').value;
    const novaFoto = document.getElementById('novaFoto').files[0];

    const formData = new FormData();
    formData.append('edit_item', itemId);
    formData.append('novo_nome', novoNome);
    formData.append('novo_valor', novoValor);
    formData.append('nova_descricao', novaDescricao);
    formData.append('novo_status', novoStatus);
    formData.append('nova_foto', novaFoto);

    $.ajax({
        type: "POST",
        url: "item-edit.php", 
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            $("#itemList").load(location.href + " #itemList>*", "");
            $('#formularioEdicaoModal_' + itemId).modal('hide');
        },
        error: function(xhr, status, error) {
            alert("Erro ao editar item: " + xhr.responseText);
        }
    });
}

function filterItems(categoryId) {
    const itemList = document.getElementById("itemList");
    const items = itemList.getElementsByClassName("item-item");
    
    for (const i = 0; i < items.length; i++) {
        const item = items[i];
        const categories = item.className.match(/item-category-\d+/);
        
        if (categories) {
            categories = categories[0].split("-")[2];
            
            if (categories == categoryId || categoryId == 0) {
                item.style.display = "";
            } else {
                item.style.display = "none";
            }
        }
    }
}

function searchCategories() {
    var input, filter, ul, li, categoryName, i, txtValue;
    input = document.getElementById('searchCategory');
    filter = input.value.toUpperCase();
    ul = document.querySelector('.admin__category-list ul');
    li = ul.getElementsByTagName('li');

    for (i = 0; i < li.length; i++) {
        categoryName = li[i].textContent || li[i].innerText;

        if (categoryName.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = '';
        } else {
            li[i].style.display = 'none';
        }
    }
}