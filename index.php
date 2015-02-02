<!DOCTYPE html>
<html>
<head>
	<title>HTML Entites Parser</title>
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
	<h1>HTML Entites Parser</h1>
	<article>
		<p>
			Parse a raw text in HTML entities to avoid any encoding problem or to display non-interpretable source code for browsers
		</p>
		<textarea id="ParserIn" style="width:99%;" rows="10" name="texte"></textarea>
		<br/>
		<fieldset><legend>Output</legend><span id="ParserTexte"></span></fieldset>
		<br/>
		<input type="button" id="ParserParse" value="Parse text"/>
	</article>
	<script type="text/javascript">		
		$("#ParserParse").click(function(){        
			parse($("textarea").val());
		});
		$("textarea").keyup(function(){        
			parse($("textarea").val());
		});		
		function parse(textToParse) {
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
</body>
</html>
