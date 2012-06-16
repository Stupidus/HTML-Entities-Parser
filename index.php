<!DOCTYPE html>
	<article>
		<p>
			Transformez un texte brut en entit&eacute;s HTML pour 
			&eacute;viter tout probl&egrave;me d&#039;encodage ou 
			pour pourvoir &eacute;crire du code source 
			non-interpr&eacute;table par les navigateurs
		</p>
		<textarea id="ParserIn" style="width:99%;" rows="10" name="texte"></textarea>
		<br/>
		<fieldset><legend>Sortie</legend><span id="ParserTexte"></span></fieldset>
		<br/>
		<input type="button" id="ParserParse" value="Parser le texte"/>
	<script type="text/javascript">		
		$("#ParserParse").click(function(){        
			parse($("textarea").val());
		});

		$("textarea").keyup(function(){        
			parse($("textarea").val());
		});
			$.ajax({
				type: 'POST',
				url: "parser.php",
				data: { texte: textToParse},
				success: function(data){
					$("#ParserTexte").text(data);
				}
			});	
		}
	</script>