<?php
	function escape($valeur)
	{
		return htmlspecialchars($valeur, ENT_QUOTES, 'UTF-8', false);
	}
?>
<html lang="fr">
	<body>
	<h1>
		Salut, <?php if(!empty($_POST['participant'])) {echo escape($_POST['participant']);} ?>!
	</h1>
	<h2>Sous-titre</h2>
	<h2>Sous-titre</h2>
	<h3>Sous-titre tertiaire</h3>
	<h4>Sous-sous titre</h4>
	<p>Ceci est une balise paragaphre.</p>
	<p>En voici une autre, et vous avez vu? Ca revient à la ligne.</p>
	<p>Grâce à la balise &lt;br&gt; <br/> on peut retourner aussi à la ligne. <br/> </p>
</body>
</html>
