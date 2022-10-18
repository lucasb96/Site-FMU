function validarFormulario(){
    var nomePessoa = document.forms["formCadastro"]["nome"].value;
    var generoPessoa = document.forms["formCadastro"]["genero"].value;
    var dataNasc = document.forms["formCadastro"]["datanasc"].value;
    var cpfPessoa = document.forms["formCadastro"]["cpf"].value;
    var telefonePessoa = document.forms["formCadastro"]["telefone"].value;
    var emailPessoa = document.forms["formCadastro"]["email"].value;
    var senhaPessoa = document.forms["formCadastro"]["senha"].value;
    if (nomePessoa == "") {
        alert("Favor informar o seu nome!");
        return false;     
    }
    if (generoPessoa == "") {
        alert("Favor informar o gênero");
        return false;
    }
    if (dataNasc == ""){
        alert("Favor informar data de nascimento!");
        return false;
    }
    if (cpfPessoa == ""){
        alert("Favor informar CPF!");
        return false;
    }
    if (telefonePessoa == ""){
        alert("Favor informar telefone!");
        return false;
    }
    if (emailPessoa == ""){
        alert("Favor informar e-mail para cadastro!");
        return false;
    }
    if (senhaPessoa == ""){
        alert("Favor cadastrar senha!");
        return false;
    }
    else{
        alert("Olá, " + nomePessoa + "! Cadastro realizado com sucesso!");
        return true;
    }
}