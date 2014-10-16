function urlCheck() {
	if(document.URL.indexOf("/index_eng#clients_eng") != -1)
	{
		$.ajax({url: "clients_eng.htm",cache: false,beforeSend: function() {$('#mcontent').html('');},success: function(html){$("#mcontent").html(html);}});return false;
	}else if(document.URL.indexOf("/index_eng#partners_eng") != -1)
	{
		$.ajax({url: "partners_eng.htm",cache: false,beforeSend: function() {$('#mcontent').html('');},success: function(html){$("#mcontent").html(html);}});return false;
	}else if(document.URL.indexOf("/index_eng#mind") != -1)
	{
		$.ajax({url: "zvernit_eng.php",cache: false,beforeSend: function() {$('#mcontent').html('');},success: function(html){$("#mcontent").html(html);}});return false;
	}else if(document.URL.indexOf("/index_eng#comments") != -1)
	{
		$.ajax({url: "komentari_eng.php",cache: false,beforeSend: function() {$('#mcontent').html('');},success: function(html){$("#mcontent").html(html);}});return false;
	}else if(document.URL.indexOf("/index_eng#courts_eng") != -1)
	{
		$.ajax({url: "sudy_eng.htm",cache: false,beforeSend: function() {$('#mcontent').html('');},success: function(html){$("#mcontent").html(html);}});return false;
	}
}

	urlCheck() /* autoLoadFunction */
