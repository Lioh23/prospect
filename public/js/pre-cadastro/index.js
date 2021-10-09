const btnNovoDependente = document.querySelector('#add-dependente');
const divDependentes = document.querySelector('.dependentes');
const formPreCadastro = document.querySelector('#formPreCadastro');
const formDependente = new FormDependente();
const formData = {};

// exibir outro formulário de dependentes
btnNovoDependente.onclick = function() {

    if(!formDependente.numComponent) {

        divDependentes.appendChild(formDependente.createHeader(), );
        divDependentes.appendChild(formDependente.createComponent());
    } else {

        divDependentes.appendChild(formDependente.createComponent());
    }
}

// Remover o dependente
function removerEsteDependente(event, id) {

    event.preventDefault();
    document.getElementById(id).remove();
}

// criar um objeto com todos os meus dados de formulário
// console.log(formPreCadastro.nome)
formPreCadastro.onsubmit = async function(event) {
    event.preventDefault();
    const inputs = document.querySelectorAll('input, select');
    const valueInputs = [];

    inputs.forEach( (element, index) => {
        valueInputs.push( element.value.trim() );
    });

    const [token, nome, genero, dtnascimento, cpf,
        rg, emissor, dtemissao, cartaoSus, email,
        telefone1, telefone2, logradouro, numero,
        complemento, bairro, cidade, uf] = valueInputs;

    const titular = {
        nome, genero, dtnascimento, cpf,
        rg, emissor, dtemissao, cartaoSus, email,
        telefone1, telefone2, logradouro, numero,
        complemento, bairro, cidade, uf
    }
    formData.titular = {...(titular)};


    // capturar os dependentes
    if(inputs.length >= 20) {

        const dependentes = [];
        const inputDependentes = Array.from(inputs).slice(18, inputs.length - 1);
        inputDependentes.forEach( (input, index) => {
            if(index %9 == 0) {
                // pegando todos os inputs de dependente
                const arrInputsDependente = inputDependentes.slice(index, index+9);

                // pegando apenas os valores dos campos de dependentes
                const arrValuesDependente = arrInputsDependente.map( element => element.value.trim() );
                const[parentesco, nome, genero, dtnascimento, cpf,
                    rg, emissor, dtemissao, cartaoSus ] = arrValuesDependente;

                // transformando os campos em objeto
                const dependente = {
                    parentesco, nome, genero, dtnascimento, cpf,
                    rg, emissor, dtemissao, cartaoSus
                }
                dependentes.push(dependente)
            }
        });

        formData.dependentes = dependentes;
    }


    const response = await fetch('/store', {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-Token": $('input[name="_token"]').val()
        },
        credentials: "same-origin",
        method: "post",
        body: JSON.stringify(formData)
    });

    const data = await response.json();

    console.log(data);
}
