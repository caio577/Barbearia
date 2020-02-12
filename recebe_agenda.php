<?php
    function verifica_arquivo_existente(){
        if(!file_exists($arquivo)){
            $arquivo = fopen($arquivo,"w+");
            $xml = "<?xml version='1.0'>";
            $xml .="<agendamentos>";
            $xml .="</agendamentos>";
            fwrite($arquivo,$xml);
            fclose($arquivo);
        }

    }

    function adicionar_agendamento($valores, $arquivo) {
        $xml = simplexml_load_file($arquivo);
        $filho = $xml->addchild('agendamento','');
        $filho->addchild('nome', $valores["nome"]);
        $filho->addchild('email', $valores["email"]);
        $filho->addchild('telefone', $valores["telefone"]);
        $filho->addchild('data', $valores["data"]);
        $filho->addchild('hora', $valores["hora"]);
        $filho->addchild('minuto', $valores["minuto"]);
        file_put_contents($arquivo, $xml->asXML())
    }

    verifica_arquivo_existente("agendamentos.xml");

    adicionar_agendamentos($_POST,"agendamentos.xml");

?>
 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>barbearia IFSP 2020</title>
</head>

<body>
    <a href="form_agenda.php">Cadastrar Novo Agendamento</a>
    <a href="agenda.php">Agenda</a>    
</body>
</html>