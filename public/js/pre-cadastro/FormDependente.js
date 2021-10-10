class FormDependente
{
    constructor() {
        this.numComponent = 0;
    }

    createHeader() {
        const h3 = document.createElement('h3');
        h3.id = 'headerDependentes'
        h3.classList = 'mb-2 mt-4 effect-title';
        h3.textContent = 'Dependentes';
        return h3;
    }

    removeHeader() {
        document.getElementById('headerDependentes').remove();
    }

    createComponent() {

        this.numComponent += 1;

        const novoDependente = document.createElement('div');
        novoDependente.classList.add('novo-dependente');
        novoDependente.id = `dependente-${this.numComponent}`;
        novoDependente.innerHTML =
        `
        <legend>Novo dependente</legend>
        <div class="row justify-content-between">
            <div class="col-sm-4">
                <div class="form-group mt-1">
                    <label for="dependente-${this.numComponent}-parentesco">Parentesco</label>
                    <select class="form-control" id="dependente-${this.numComponent}-parentesco" name="dependente-${this.numComponent}-parentesco">
                        <option value="0">Selecione</option>
                        <option>Cônjuge / Companheiro(a)</option>
                        <option>Filho(a)</option>
                        <option>Enteado(a)</option>
                        <option>Pai</option>
                        <option>Mãe</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="form-group mt-1">
                    <label for="dependente-${this.numComponent}-nome">Nome</label>
                    <input type="text" name="dependente-${this.numComponent}-nome" class="form-control" id="dependente-${this.numComponent}-nome" placeholder="Insira seu nome completo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group mt-1">
                    <label for="dependente-${this.numComponent}-genero">Gênero</label>
                    <select class="form-control" id="dependente-${this.numComponent}-genero" name="dependente-${this.numComponent}-genero">
                        <option vaue="0">Selecione</option>
                        <option value="m">Masculino</option>
                        <option value="f">Feminino</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group mt-1">
                    <label for="dependente-${this.numComponent}-dtnascimento">Data de Nascimento</label>
                    <input type="date" id="dependente-${this.numComponent}-dtnascimento" name="dtnascmento" class="form-control" id="dependente-${this.numComponent}-dtnascimento">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="form-group mt-1">
                    <label for="dependente-${this.numComponent}-cpf">CPF</label>
                    <input type="text" name="dependente-${this.numComponent}-cpf" class="form-control" id="dependente-${this.numComponent}-cpf" placeholder="Insira o cpf">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group mt-1">
                    <label for="dependente-${this.numComponent}-rg">RG</label>
                    <input type="text" name="dependente-${this.numComponent}-rg" class="form-control" id="dependente-${this.numComponent}-rg" placeholder="Insira o RG">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group mt-1">
                    <label for="dependente-${this.numComponent}-emissor">Órgão Emissor</label>
                    <input type="text" name="dependente-${this.numComponent}-emissor" class="form-control" id="dependente-${this.numComponent}-emissor" placeholder="Insira o Órgão Emissor">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group mt-1">
                    <label for="dependente-${this.numComponent}-dtemissao">Data de Emissão</label>
                    <input type="date" id="dependente-${this.numComponent}-dtemissao" name="dependente-${this.numComponent}-dtemissao" class="form-control" id="dtemissao">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group mt-1">
                    <label for="dependente-${this.numComponent}-cartao-sus">Cartão do SUS</label>
                    <input type="text" name="dependente-${this.numComponent}-cartao-sus" class="form-control" id="dependente-${this.numComponent}-cartao-sus" placeholder="Número do cartão do SUS">
                </div>
            </div>
            <div class="col-lg-8 d-flex align-items-end flex-row-reverse">
                <a href="" onclick="removerEsteDependente(event, '${novoDependente.id}')" class="btn btn-custom btn-outline-danger mt-1 form-group">
                    <i class="fa fa-trash" aria-hidden="true"></i><strong class="ml-1">Remover este dependente</strong>
                </a>
            </div>
        </div>
    `;

    return novoDependente;
    }
}
