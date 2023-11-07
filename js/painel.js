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