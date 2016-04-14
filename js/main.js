// Controlleur principal
control = window.control || {};


(function(){


	/*
	* Stats du jeu
	*/
	if (!control["stats"]) {
		control.stats = {};
	}

	// Compte de vies bonus récoltées
	Object.defineProperty(control.stats, "nbCoeur", {
		value : 			0,
		writable : 			true,
		configurable : 		false,
		enumerable : 		false
	});

	if (!localStorage.nbCoeur) {
		localStorage.nbCoeur = control.stats.nbCoeur;
	}

	// Compte du nombre d'ours récoltés
	Object.defineProperty(control.stats, "nbOurs", {
		value :				0,
		writable :			true,
		configurable : 		false,
		enumerable : 		false
	});

	if (!localStorage.nbOurs) {
		localStorage.nbOurs = control.stats.nbOurs;
	}

	// Nombre de morts
	Object.defineProperty(control.stats, "nbMort", {
		value : 			0,
		writable : 			true,
		configurable : 		false,
		enumerable : 		false
	});

	if (!localStorage.nbMort) {
		localStorage.nbMort = control.stats.nbMort;
	}

	// Pouvoirs débloqués
	Object.defineProperty(control.stats, "pouvoir", {
		value : {
			invis: 			{value: 0},
			dormir: 		{value: 0},
			coder: 			{value: 1}
		},
		writable : 			true,
		configurable : 		false,
		enumerable : 		false
	});

	if (!localStorage.invis) {
		localStorage.invis = control.stats.pouvoir.invis;
	}

	// Scoring
	Object.defineProperty(control.stats, "score", {
		value : 			0,		
		writable : 			true,
		configurable : 		false,
		enumerable : 		false
	});

	if (!localStorage.score) {
		localStorage.score = control.stats.score;
	}

	// Badges
	Object.defineProperty(control.stats, "badges", {
		value : {
			badgeCoeur : 	0,
			badgeOurs : 	0,
			badgeMort : 	0,
			badgeTemps : 	0,
			badgeScore : 	0
		},
		writable : 			true,
		configurable : 		false,
		enumerable : 		false
	});



	/*
	* Gestion des données
	*/
	if (!control["gestion"]) {
		control.gestion = {};
	}

	Object.defineProperty(control.gestion, "ajouterCoeur", {
		value : function() {
			var coeurs = control.stats.nbCoeur;
			if (coeurs === undefined) {
				coeurs = 0;
			}
			if (coeurs > 20 && control.stats.badges.badgeCoeur < 1) {
				control.gestion.updateBadge("coeur", 1);
				console.log("Badge coeur[1] Débloqué !");
			}
			if (coeurs > 50 && control.stats.badges.badgeCoeur < 2) {
				control.gestion.updateBadge("coeur", 2);
				console.log("Badge coeur[2] Débloqué !");
			}
			if (coeurs > 100 && control.stats.badges.badgeCoeur < 3) {
				control.gestion.updateBadge("coeur", 3);
				console.log("Badge coeur[3] Débloqué !");
			}
			control.stats.nbCoeur++;
			localStorage.nbCoeur++;

			return("Coeur récolté ! [" + control.stats.nbCoeur + "]" );
		}
	});

	Object.defineProperty(control.gestion, "ajouterOurs", {
		value : function() {
			var ours = control.stats.nbOurs;
			if (ours === undefined) {
				ours = 0;
			}
			if (ours > 20 && control.stats.badges.badgeOurs < 1) {
				control.gestion.updateBadge("ours", 1);
				console.log("Badge ours[1] Débloqué !");
			}
			if (ours > 50 && control.stats.badges.badgeOurs < 2) {
				control.gestion.updateBadge("ours", 2);
				console.log("Badge ours[2] Débloqué !");
			}
			if (ours > 100 && control.stats.badges.badgeOurs < 3) {
				control.gestion.updateBadge("ours", 3);
				console.log("Badge ours[3] Débloqué !");
			}
			control.stats.nbOurs++;
			localStorage.nbOurs++;
			return("Ours capturé ! [" + control.stats.nbOurs + "]" );
		}
	});

	Object.defineProperty(control.gestion, "ajouterMort", {
		value : function() {
			var morts = control.stats.nbMort;
			if (morts === undefined) {
				morts = 0;
			}
			if (morts > 5 && control.stats.badges.badgeMort < 1) {
				control.gestion.updateBadge("mort", 1);
				console.log("Badge mort[1] Débloqué !");
			}
			if (morts > 13 && control.stats.badges.badgeMort < 2) {
				control.gestion.updateBadge("mort", 2);
				console.log("Badge mort[2] Débloqué !");
			}
			if (morts > 34 && control.stats.badges.badgeMort < 3) {
				control.gestion.updateBadge("mort", 3);
				console.log("Badge mort[3] Débloqué !");
			}
			control.stats.nbMort++;
			localStorage.nbMort++;
			return("Vous êtes morts ! [" + control.stats.nbMort + "]" );
		}
	});

	Object.defineProperty(control.gestion, "gainInvis", {
		value : function() {
			control.stats.pouvoir.invis = 1;
			localStorage.invis = 1;
			return("Pouvoir d'invisibilité débloqué ! [" + control.stats.pouvoir.invis + "]" );
		}
	});

	Object.defineProperty(control.gestion, "updateScore", {
		value : function(currentScore) {
			if (currentScore === undefined) {
				currentScore = 0;
			}

			var score = control.stats.score;
			if (score === undefined) {
				score = 0;
			}
			if (score > 2000 && control.stats.badges.badgeScore < 1) {
				control.gestion.updateBadge("score", 1);
				console.log("Badge score[1] Débloqué !");
			}
			if (score > 6000 && control.stats.badges.badgeScore < 2) {
				control.gestion.updateBadge("score", 2);
				console.log("Badge score[2] Débloqué !");
			}
			if (score > 8000 && control.stats.badges.badgeScore < 3) {
				control.gestion.updateBadge("score", 3);
				console.log("Badge score[3] Débloqué !");
			}

			control.stats.score += currentScore;
			localStorage.score++;
			return("Le score a été mis à jour ! [" + control.stats.score + "]" );
		}
	});

	// Gestion des badges déverouillés
	Object.defineProperty(control.gestion, "updateBadge", {
		value : function(currentBadge, grade) {

			switch(currentBadge) {
				case "coeur":
					control.stats.badges.badgeCoeur = grade;
					break;
				case "ours":
					control.stats.badges.badgeOurs = grade;
					break;
				case "mort":
					control.stats.badges.badgeMort = grade;
					break;
				case "temps":
					control.stats.badges.badgeTemps = grade;
					break;
				case "score":
					control.stats.badges.badgeScore = grade;
					break;
			}
			return("Nouveau badge débloqué ! [" + grade + "]" );
		}
	});


	// Récupération du score du jeu
	function GetScore(score) {
		control.gestion.updateScore(score);
		$.ajax({
			url: "score.php",
			type: 'POST',
			data: 'score=' + localStorage.score,
			dataType: "text/plain",
			success: function() {
				console.log("Score enregistré !");
			},
			error: function() {
				console.log("Problème lors de la sauvegarde");
			}
		});

	}

	



})()