
function morzeFeltoro(){
var beirtSzoveg = document.getElementById("morze2").value;
beirtSzoveg = beirtSzoveg + " ";
var arr;
var morzetoro;
var i,j;
	for (i = 0; i <= beirtSzoveg.length; i++){
	for(let j = 5; j > 0; j--){
		arr = beirtSzoveg.substr(i, j);
	if (arr.length >= 5) {
		arr = arr.replace("-... ","b");
		arr = arr.replace("-.-. ","c");
		arr = arr.replace("..-. ","f");
		arr = arr.replace(".... ","h");
		arr = arr.replace(".--- ","j");
		arr = arr.replace(".-.. ","l");
		arr = arr.replace(".--. ","p");
		arr = arr.replace("--.- ","q");
		arr = arr.replace("...- ","v");
		arr = arr.replace("-..- ","x");
		arr = arr.replace("-.-- ","y");
		arr = arr.replace("--.. ","z");
		if (arr.includes(".")==false && arr.includes("-")==false){
		j=0;
		i+=2;
		}
	}
	if (arr.length == 4){
		arr = arr.replace("-.. ","d");
		arr = arr.replace("--. ","g");
		arr = arr.replace("-.- ","k");
		arr = arr.replace("--- ","o");
		arr = arr.replace(".-. ","r");
		arr = arr.replace("... ","s");
		arr = arr.replace("..- ","u");
		arr = arr.replace(".-- ","w");	
		if (arr.includes(".")==false  && arr.includes("-")==false){
		j=0;
		i++;
		}
	}
	if (arr.length <= 3){
		arr = arr.replace(".- ","a");
		arr = arr.replace(".. ","i");
		arr = arr.replace("-- ","m");
		arr = arr.replace("-. ","n");
	
		if (arr.includes(".")==false  && arr.includes("-")==false){
		j=0;
		i++;
		}
		}
	if (arr.length <= 2){
		arr = arr.replace(". ","e");
		arr = arr.replace("- ","t");
		
		if (arr.includes(".")==false  && arr.includes("-")==false){
		j=0;
		i++;
		}
	}
	  if (arr.includes(".") == false  && arr.includes("-") == false){
		morzetoro += arr;
		arr = "";
	    }
		}
	}
	morzetoro=morzetoro.replace("undefined","");
	
	document.getElementById("morzeid2").innerHTML = morzetoro;
  
}