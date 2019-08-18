// source pour l'inspiration: http://www.guillaumevoisin.fr/developpement/tutoriel-realiser-un-diaporama-simple-avec-jquery
(function($){
	$.fn.diaporama = function(options) {

		var defaults = {
			delay: 3,
			animationSpeed: "normal",
			controls:true
		};
				
		var options = $.extend(defaults, options);
		
		this.each(function(){
		
                // On attribue à la variable obj, l'objet courant (le diaporama courant)
                var obj = $(this);
 
                // On teste si il y a plus d'une image, sinon le diaporama n'est pas nécessaire
                if($(obj).find("li").length > 1){
 
                // On va exécuter la fonction nextElt à chaque intervalle de temps
                var inter = setInterval(function(){nextElt(options)}, (options.delay*1000));
 
                // On enregistre le sens de rotation
                var sens = "right";
 
                // Par défaut, le diaporama n'est pas en pause
                var pause = false;
 
                // On cache tous les éléments de la liste
                $(obj).find("li").hide();
 
                // Le premier élément s'affiche progressivement et se voit attribuer la classe "active"
                $(obj).find("li:first-child").addClass("active").fadeIn(options.animationSpeed);
                }
				
				// Controls
				
                if(options.controls)
                {
                    // On insère après la liste un <div> contenant les boutons "précédent", "suivant" et "pause"
                    $(obj).after("<div class='diaporama_controls'><div class='btns'><a href='#' class='prev'>Prec.</a> <a href='#' class='pause'>Pause</a> <a href='#' class='next'>Suiv.</a></div></div>");
                 
                    // On définit l'action click pour le bouton "précédent"
                    // La méthode siblings() permet de trouver les éléments "frères" de l'élément courant
                    $(obj).siblings().find(".prev").click(function(){
                        // On supprime l'intervalle automatique de transition d'image
                        clearInterval(inter);
                 
                        // On appelle la fonction qui affiche l'image précédente
                        prevElt(options);
                 
                        // Si le diaporama n'est pas sur pause, on relance l'affichage automatique
                        if(!pause)
                            inter = setInterval(function(){prevElt(options)}, (options.delay*1000));
                 
                        // On définit le sens à gauche
                        sens = "left";
                    });
                 
                    // On applique la même méthode ou presque au bouton "suivant" (dans l'autre sens)
                    $(obj).siblings().find(".next").click(function(){
                        clearInterval(inter);
                        nextElt(options);
                        if(!pause)
                            inter = setInterval(function(){nextElt(options)}, (options.delay*1000));
                        sens = "right";
                    });
                 
                    // Si on appuie sur "pause", on définit deux actions
                    $(obj).siblings().find(".pause").toggle(
                 
                        // On change l'image de fond du bouton via la classe "play"
                        function(){
                            $(this).removeClass("pause").addClass("play");
                 
                            // On supprime l'intervalle
                            clearInterval(inter);
                 
                            // On positionne le booléen à true
                            pause = true;
                        },
                        function(){
                 
                            // On remet l'image originale
                            $(this).removeClass("play").addClass("pause");
                 
                            // On relance le diaporama dans le sens où il était
                            inter = setInterval(function(){ (sens == "right")?nextElt(options):prevElt(options)}, (options.delay*1000));
                            pause = false;
                        }
                    );
                }
				
				// Affiche l'élément suivant
				
                function nextElt(options)
                {
                    // On cache de manière progressive l'image active
                    $(obj).find("li.active").fadeOut(options.animationSpeed);
                 
                    // Si l'image active courante n'est pas la dernière image de la liste
                    if(!$(obj).find("li.active").is(":last-child"))
                    {
                        // Alors on cherche l'image suivante (".next()"), on lui ajoute la class "active",
                        // et on retire cette classe à l'image précedente (l'ancienne image active)
                        $(obj).find("li.active").next().addClass("active").prev().removeClass("active");
                 
                        // On affiche la nouvelle image active progressivement
                        $(obj).find("li.active").fadeIn(options.animationSpeed);
                    }
                    // L'image est la dernière de la liste
                    else
                    {
                        // On fait la même chose mais en prenant la première image de la liste via le sélecteur "first-child"
                        $(obj).find("li:first-child").addClass("active").fadeIn(options.animationSpeed);
                        $(obj).find("li:last-child").removeClass("active");
                    }
                }
				
				// Affiche l'élément précédent
				
				function prevElt(options)
				{
					$(obj).find("li.active").fadeOut(options.animationSpeed);
					
					if(!$(obj).find("li.active").is(":first-child"))
					{
						$(obj).find("li.active").prev().addClass("active").next().removeClass("active");
						$(obj).find("li.active").fadeIn(options.animationSpeed);
						
					}
					else
					{
						$(obj).find("li:last-child").addClass("active").fadeIn(options.animationSpeed);
						$(obj).find("li:first-child").removeClass("active");
					}
				}
			});
		
		return this;
	};
})(jQuery)