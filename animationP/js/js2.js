var sw = true;

function transition () {
	if(sw){
		document.getElementById("center").className = "end";
	}else{
		document.getElementById("center").className = "begin";
	}
	sw = !sw;
}