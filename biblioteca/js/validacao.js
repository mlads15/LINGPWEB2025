function validacao() {

    //capturar os valores informados pelo usuario

    var titulo = document.getElementById('titulo').value;
    var autor = document.querySelector('#autor').value;
    var genero = document.getElementById('genero').value;
    var paginas = document.getElementById('paginas').value;

    // alert(titulo+ ' - ' +autor+ ' - ' +genero+ ' - ' +paginas);

    erros = [];
    if (titulo == '') {

        erros.push('Informe o título!');

    } if (autor == '') {

        erros.push('Informe o autor!');

    } if (genero == '') {

        erros.push('Informe o gênero!');

    } if (paginas == '') {

        erros.push('Informe o número de páginas!');

    }

    if(erros.length > 0) {

        // alert(erros.join("\n"));

        document.getElementById('divErros').innerHTML = erros.join("<br>");
        return false; 

    }

    return true;

}

function caracteres() {

    var titulo = document.getElementById('titulo').value;

    erros = [];

    if (strlen($titulo) < 3) {

        erros.push('Utilize no mínimo três (3) caracteres!');

    } else if (strlen($titulo) > 50) {

        erros.push('Utilize no máximo cinquenta (50) caracteres!');

    }

}