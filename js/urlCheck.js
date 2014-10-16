function urlCheck() {
	if(document.URL.indexOf("/#clients") != -1)
	{
		$.ajax({url: "clients.htm",cache: false,beforeSend: function() {$('#mcontent').html('');},success: function(html){$("#mcontent").html(html);}});return false;
	}else if(document.URL.indexOf("/#partners") != -1)
	{
		$.ajax({url: "partners.htm",cache: false,beforeSend: function() {$('#mcontent').html('');},success: function(html){$("#mcontent").html(html);}});return false;
	}else if(document.URL.indexOf("/#zvernit") != -1)
	{
		$.ajax({url: "zvernit.php",cache: false,beforeSend: function() {$('#mcontent').html('');},success: function(html){$("#mcontent").html(html);}});return false;
	}else if(document.URL.indexOf("/#komentari") != -1)
	{
		$.ajax({url: "komentari.php",cache: false,beforeSend: function() {$('#mcontent').html('');},success: function(html){$("#mcontent").html(html);}});return false;
	}else if(document.URL.indexOf("/#courts") != -1)
	{
		$.ajax({url: "sudy.htm",cache: false,beforeSend: function() {$('#mcontent').html('');},success: function(html){$("#mcontent").html(html);}});return false;
	}else if(document.URL.indexOf("/#sudova_praktika") != -1)
	{
		$.ajax({url: "sudova_praktika.php",cache: false,beforeSend: function() {$('#mcontent').html('');},success: function(html){$("#mcontent").html(html);}});return false;
	}
}

	urlCheck() /* autoLoadFunction */
