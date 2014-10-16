$("a.an").click(function(){
	var newId = $(this).attr("newid");
	var date = $(this).attr("date");
	var title = $(this).attr("ttitle");
	var fulltext = $(this).attr("fulltext");
	$("ul.news_list br").remove();
	$("ul.news_list li[newId]").hide();
	setTimeout(function(){
		$("ul.news_list li[newId="+newId+"]").fadeIn(500);
	},500);
	$("li[newId="+newId+"]").html('<text style="color:#0b75b2; text-align:right;">'+date+'</text><br><br><br><h3 style="color:#0b75b2;">'+title+'</h3><br><br>'+fulltext+'<br><br><a href="#" class="komentari" style="color:red; text-align:center;"><<<<< Назад</a>');
	$('.komentari').click(function(){$.ajax({url: "komentari_eng.php",cache: false,beforeSend: function() {$('#mcontent').html('');},success: function(html){$("#mcontent").html(html);}});return false;});
});

$("input.coments").blur(function(){
	var id = $(this).attr('id');
	var title = $(this).val();
	$.ajax({ // описываем наш запрос
		type: "POST", // будем передавать данные через POST
		dataType: "json", // указываем, что нам вернется JSON
		url: "/ajax_eng", // запрос отправляем на контроллер Ajax метод addarticle
		data: "id="+id+"&title="+title, // передаем данные из формы
		success: function(response) { // когда получаем ответ
			if (response.code == 'error') // если вернулся статус с ошибкой
			{
				alert('unSuccess!');
			}
			if (response.code == 'success') // если вернулся статус успешного добавления статьи в БД
			{
				
			}
		}
	});
});

$("textarea.coments").blur(function(){
	var id = $(this).attr('id');
	var n = $(this).val();
	$.ajax({ // описываем наш запрос
		type: "POST", // будем передавать данные через POST
		dataType: "json", // указываем, что нам вернется JSON
		url: "/ajax_eng", // запрос отправляем на контроллер Ajax метод addarticle
		data: "id="+id+"&n="+n, // передаем данные из формы
		success: function(response) { // когда получаем ответ
			if (response.code == 'error') // если вернулся статус с ошибкой
			{
				alert('unSuccess!');
			}
			if (response.code == 'success') // если вернулся статус успешного добавления статьи в БД
			{
				
			}
		}
	})
});

$("a.coments").click(function(){
	var id = $(this).attr('id');
	var input = "input.coments#"+id;
	var textarea = "textarea.coments#"+id;
	var a = "a.coments#"+id;	
	$.ajax({ // описываем наш запрос
		type: "POST", // будем передавать данные через POST
		dataType: "json", // указываем, что нам вернется JSON
		url: "/ajax2_eng", // запрос отправляем на контроллер Ajax метод addarticle
		data: "id="+id, // передаем данные из формы
		success: function(response) { // когда получаем ответ
			if (response.code == 'error') // если вернулся статус с ошибкой
			{
				alert('unSuccess!');
			}
			if (response.code == 'success') // если вернулся статус успешного добавления статьи в БД
			{
				$(input).slideUp();
				$(textarea).slideUp();
				$(a).remove();
			}
		}
	})
	return false;
});