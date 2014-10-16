function validSearch(){
	ValueSearch = document.getElementById('searchg');
	if (ValueSearch.value !='' && ValueSearch != undefined){
		if (ValueSearch.value.length>3){
			document.forms.submit();
		}else{
			alert('The word for searching must be more, than 3 letters!');
		}
	}else{
		alert('Enter your word for searching!');
	}
}