<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>page d'accueil</title>
	<!-- l'appel de base_url() vous permet de recupérer le chemin de votre site web  -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>

</head>
<body>
    <!-- <div class="nav navbar navbar-default navbar-fixed-top">
        <ul class="nav navbar-nav">
			<!-- l'appel de base_url() vous permet de recupérer le chemin de votre site web  
            <li><a href="<?php echo base_url(); ?>Test/index">Menu page test</a></li>
            <li><a href="<?php echo base_url(); ?>Test/getID/1">Menu page test 2</a></li>
        </ul>
    </div> -->
	<div class="container py-5">

		<h1 class="text-center">SAMANE MVC TODO</h1>

        <?php
            if (isset($ok)) {
                if ($ok == 1) {
                    echo '<div class="alert alert-succes col-md-6 col-md-offset-3">Donnees ajoutees</div>';
                }
            }
        ?>

		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card mb-5">
					<div class="card-body">
						<form action="<?php echo base_url(); ?>Todo/addTodo" method="POST">
							<input type="text" class="form-control" name="text"/>
						</form>
					</div>

					<div class="card">
						<div class="card-header text-center">
							Liste
						</div>


						<ul class="list-group list-group-plush">
                            <?php foreach ($data['todos'] as $todo) { ?>
                                <li class="list-group-item">
                                    <?= $todo["text"] ?>
                                    <a href="<?php echo base_url() ?>Todo/deleteTodo?id=<?= $todo["id"] ?>" class="badge badge-danger float-right">Delete</a>
                                    <a href="<?php echo base_url() ?>Todo/editTodo?id=<?= $todo["id"] ?>" class="badge badge-warning float-right">Edit</a>								
                                </li>
                            <?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>