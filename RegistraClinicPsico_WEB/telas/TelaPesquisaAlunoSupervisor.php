<!doctype html>
<html lang="pt-br">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../css/style.css">

	<title>Pesquisa Vinculo Aluno - Supervisor!</title>
</head>

<body>
	<?php include_once '../Util/NavBar.php'; ?>

	<div class="table-responsive" style="margin-left: 20px; margin-top: 50px;">

		<table class="table table-striped">
			<caption>Lista de vinculos Aluno - Supervisor</caption>
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Aluno</th>
					<th scope="col">Supervisor</th>
					<th scope="col">Data</th>
					<th scope="col"> </th>
				</tr>
			</thead>
			<tbody>
				<?php
				require '../Banco/conexao.php';

				$banco = new Banco("localhost", "psico", "root", "");

				$banco->query("SELECT * FROM aluno JOIN vincularalunosupervisor ON aluno.IDALUNO = vincularalunosupervisor.aluno_idAluno JOIN supervisor ON supervisor.idSupervisor = vincularalunosupervisor.supervisor_idSupervisor");

				foreach ($banco->result() as $vinculo) : ?>
				<tr>
					<td><?php echo $vinculo['idVincularAlunosSupervisor']; ?></td>
					<td><?php echo $vinculo['NOMEALUNO']; ?></td>
					<td><?php echo $vinculo['nomeSupervisor']; ?></td>
					<td><?php echo $vinculo['dataInicioSupervisao']; ?></td>
					<td>
						<a href="TelaAlunoSupervisor.php?editar=<?php echo $vinculo['idVincularAlunosSupervisor']; ?>" class="btn btn-primary" style="background-color: #26619c">Editar</a>
						<button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#excluir<?php echo $vinculo['idVincularAlunosSupervisor']; ?>">Excluir</button>
						<div class="modal fade" id="excluir<?php echo $vinculo['idVincularAlunosSupervisor']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-body">
										<p>Você realmente deseja excluir <strong><?php echo $vinculo['idVincularAlunosSupervisor']; ?></strong>?
									</div>
									<div class="modal-footer">
										<a href="../Atendimento/DeletarAlunoSupervisor.php?deletar=<?php echo $vinculo['idVincularAlunosSupervisor']; ?>" class="btn btn-danger">Excluir</a>
										<button type="button" class="btn btn-primary" data-dismiss="modal">Não</button>
									</div>
								</div>
							</div>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

	</div>

	<?php include_once '../Util/Footer.php'; ?>
	<script>
		$('#myModal').modal('show')
	</script>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>