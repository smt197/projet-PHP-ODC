
			<div class="promotions">
				<h2>Référentiels</h2>
				<span>Référentiels * Création</span>
			</div>
			
<div class="referent">
					
			<div class="main">
						<?php 
								$tabInt=array();
								foreach($refDig as $referent){
									if($_SESSION["id_promotion"] == $referent["id_promotion"]){
										$tabInt[] = $referent;
									}

								}
								$refDig=$tabInt;
								foreach($refDig as $referent) :  ?>

								<div class="img">
								<span class="points">
									<ul>
										<li></li>
										<li></li>
										<li></li>
									</ul>
								</span>
								<img src="<?= $referent['image'] ?>" alt="">
								<div class="ref">
									<span><?= $referent['nom_referentiel'] ?></span> <br>
									<form action="apprenant" method="POST">
										<button class="active" type="submit" name="referenciel" value="<?= $referent['nom_referentiel'] ?>"><?= $referent['statut'] ?></button>
									</form>
									
								</div>
							</div>
					
							<?php endforeach; ?>		
								
			</div>
			
			<div class="formRef">
					<h4>Noueau Référentiel</h4>
					<span>Libelle</span> <br>
		
					<i class="fa-regular fa-user" class="first-user"></i>
					<input type="text"  class="libelle"  placeholder=" entrer le Libelle"> <br>
					<i class="fa-regular fa-user" class="twon-user"></i>
					<textarea name="text" id="desc" cols="10" rows="5" placeholder="entrer la  descrition"></textarea>
					<button class="btn">Enregistrer</button>
			</div>
</div>