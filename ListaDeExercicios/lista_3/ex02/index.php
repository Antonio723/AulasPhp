<?php
    function procurarNome(array $nomes, $nomeProcura){
        foreach($nomes as $nome){
            if($nome == $nomeProcura){
                return 'true';
            }
        }
        return 'false';
    }

    $aluno = ["Alex","Diego","Brayan","Italo","Matheus","Mateus"];
    echo procurarNome($aluno,"Mateus");
?>