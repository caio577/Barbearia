<!DOCTYPE html>
<html>
	<head>
		<meta charset='UTF-8' />
		<title>Babearia IFSP 2020</title>
	</head>
	<body>
        <a href="agenda.php">Agenda</a>
        <hr />
        <h2>Agendamento Barbearia</h2>
		<form method="post" action="recebe_agenda.php">
            <input type="text" name="nome" placeholder="Nome..." />
            <br />
            <input type="email" name="email" placeholder="Email..." />
            <br />
            <input type="text" name="telefone" placeholder="Telefone..." />
            <br />
            <label>Data:</label>
            <input type="date" name="data" />
            <br />
            <input type="number" name = "hora" step="1" min="07" max="17" placeholder="Hora" />
            :
            <input type="number" step="15" name="minuto" min="00" max="45" placeholder="Min"/>
            <br />
            <input type="submit" value="Agendar" />
	</body>
</html>