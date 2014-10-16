function validSearch(){
	ValueSearch = document.getElementById('searchg');
	if (ValueSearch.value !='' && ValueSearch != undefined){
		if (ValueSearch.value.length>3){
			document.forms.submit();
		}else{
			alert('Слово для пошуку має бути довше, ніж 3 літери!');
		}
	}else{
		alert('Введіть слово для пошуку!');
	}
}