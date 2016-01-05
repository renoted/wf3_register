<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Inscription</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Inscriptons</h1>

				<form>
					<div class="form-group">
						<label for="nom">Nom</label>
						<input type="nom" class="form-control" id="nom"  name="nom" placeholder="Nom">
					</div>
					<div class="form-group">
						<label for="prenom">Prenom</label>
						<input type="prenom" class="form-control" id="prenom"  name="prenom" placeholder="Prénom">
					</div>
					<div class="form-group">
						<label for="photo">Photo de profil</label>
						<input type="file" id="photo" name="photo">
						<p class="help-block">
							Le poids de votre photo doit être inférieur à 10 Mo.<br>
							Extensions acceptées *.jpg, *.png, *.gif	
						</p>
					</div>
					
					<button type="submit" name="submit" class="btn btn-default">Valider</button>
				</form>

			</div>

		</div>

	</div>

</body>
</html>