<!doctype html>
<html lang="pt-br">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Pesquisa Aluno !</title>
</head>
<body>
	<?php include_once '../Util/NavBar.php'; ?>

	<div class="container-table">

		<table class="table table-striped" id="tabelPAcientes">
			<caption>Lista de alunos cadastrados</caption>
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nome</th>
					<th scope="col">Matricula</th>
					<th scope="col">CPF</th>
					<th scope="col">Email</th>
					<th scope="col">Turma</th>
					<th scope="col"> </th>
				</tr>
			</thead>
			<tbody>
				<?php  
				require '../Banco/conexao.php';

				$banco = new Banco("localhost","psico","root","");

				$banco->query("SELECT IDALUNO, NOMEALUNO , MATRICULAALUNO , CPFALUNO, EMAILALUNO, TURMAALUNO FROM  aluno");

				foreach ($banco->result() as $aluno): ?>
					<tr>
						<td><?php echo $aluno['IDALUNO']; ?></td>
						<td><?php echo $aluno['NOMEALUNO']; ?></td>
						<td><?php echo $aluno['MATRICULAALUNO']; ?></td>
						<td><?php echo $aluno['CPFALUNO']; ?></td>
						<td><?php echo $aluno['EMAILALUNO']; ?></td>
						<td><?php echo $aluno['TURMAALUNO']; ?></td>
						<td>
							<div class="btn-group" role="group" aria-label="Basic example">
								<button type="button" class="btn btn-secondary">Editar</button>
								<button type="button" class="btn btn-secondary">Apagar</button>
							</div>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>    

	</div>

	<?php include_once '../Util/Footer.php'; ?>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php  
//require '../Banco/conexao.php';

//$banco = new Banco("localhost","psico","root","");

//$banco->query("SELECT NOMEALUNO , MATRICULAALUNO , CPFALUNO FROM  aluno");

//foreach ($banco->result() as $aluno) {



//	echo var_dump($aluno);

//}

?>