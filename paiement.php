<!DOCTYPE html>
<html>
<head>
	<title>Choisir un moyen de paiement</title>

    <style>
		#header {
			height: 80px;
			background-color: #0066cc;
			color: white;
			position: relative;
		}
		#header .logo {
			position: absolute;
			left: 20px;
			top: 20px;
			font-size: 30px;
		}
		#header .logo .holiday {
			color: white;
		}
		#header .logo .inn {
			color: #ffd700;
		}
	</style>
	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
		}
		.container {
			margin: 50px auto;
			max-width: 500px;
			background-color: #f2f2f2;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
		}
		h1 {
			text-align: center;
			margin-bottom: 30px;
		}
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type=text] {
			padding: 10px;
			width: 100%;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 20px;
			box-sizing: border-box;
		}
		input[type=radio] {
			margin-right: 10px;
		}
		.btn {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			margin-top: 20px;
		}
		.btn:hover {
			background-color: #3e8e41;
		}
		p {
			text-align: center;
			margin-top: 20px;
		}
		.success {
			color: green;
		}
		.warning {
			color: orange;
		}
		.error {
			color: red;
		}
	</style>
	<script type="text/javascript">
		function submitForm() {
			// Vérification du choix de paiement
			var mobileMoney = document.getElementById("mobileMoney").checked;
			var bank = document.getElementById("bank").checked;
			var onSite = document.getElementById("onSite").checked;

			if (!mobileMoney && !bank && !onSite) {
				alert("Veuillez choisir un moyen de paiement.");
				return false;
			}

			// Vérification du montant
			var amount = document.getElementById("amount").value;

			if (amount < 10) {
				alert("Le montant doit être supérieur ou égal à 10.");
				return false;
			}

			// Validation du formulaire
			alert("Formulaire soumis avec succès !");

			return true;
		}
	</script>
</head>
<body>
<header id="header">
		<div class="logo">
			<span class="holiday">HOLIDAY</span><span class="inn">INN</span>
		</div>
	</header>
	
	<div class="container">
		<h1>Choisir un moyen de paiement</h1>
		<form method="post" onsubmit="return submitForm()">
			<label>Montant à payer (en XOF) :</label>
			<input type="text" id="amount" name="amount" placeholder="10 000" required>

			<label>Sélectionnez un moyen de paiement :</label>
			<label><input type="radio" id="mobileMoney" name="payment" value="mobileMoney" required> Mobile Money</label>
			<label><input type="radio" id="bank" name="payment" value="bank"> Service bancaire</label>
			<label><input type="radio" id="onSite" name="payment" value="onSite"> Payer sur place</label>

			<div id="availability-agileits">
		<div class="col-md-12 book-form-left-w3layouts">
			<a href="admin/reservation.php">
				<h2>PAYER</h2>
			</a>
		</div>
		</form>

		<p id="info" class="success"></p>
	</div>
</body>
</html>

<?php 
if (isset($_POST['moyen_de_paiement'])) {
	$moyen_de_paiement = $_POST['moyen_de_paiement'];
	switch ($moyen_de_paiement) {
		case 'mobile_money':
			echo "Vous avez choisi de payer par mobile money";
			break;
		case 'service_bancaire':
			echo "Vous avez choisi de payer par service bancaire";
			break;
		case 'payer_sur_place':
			echo "Vous avez choisi de payer sur place. Vous avez 24 heures pour effectuer le paiement.";
			break;
		default:
			echo "Veuillez sélectionner un moyen de paiement";
			break;
	}
}
?>