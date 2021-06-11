
function morze(){
var beirtSzoveg = document.getElementById("morze1").value;
var morze = beirtSzoveg;
var i;
	for (i = 0; i < beirtSzoveg.length; i++){
		morze = morze.replace("a",".- ");
		morze = morze.replace("b","-... ");
		morze = morze.replace("c","-.-. ");
		morze = morze.replace("d","-.. ");
		morze = morze.replace("e",". ");
		morze = morze.replace("f","..-. ");
		morze = morze.replace("g","--. ");
		morze = morze.replace("h",".... ");
		morze = morze.replace("i",".. ");
		morze = morze.replace("j",".--- ");
		morze = morze.replace("k","-.- ");
		morze = morze.replace("l",".-.. ");
		morze = morze.replace("m","-- ");
		morze = morze.replace("n","-. ");
		morze = morze.replace("o","--- ");
		morze = morze.replace("p",".--. ");
		morze = morze.replace("q","--.- ");
		morze = morze.replace("r",".-. ");
		morze = morze.replace("s","... ");
		morze = morze.replace("t","- ");
		morze = morze.replace("u","..- ");
		morze = morze.replace("v","...- ");
		morze = morze.replace("w",".-- ");
		morze = morze.replace("x","-..- ");
		morze = morze.replace("y","-.-- ");
		morze = morze.replace("z","--.. ");
		
}
document.getElementById("morzeid").innerHTML = morze;
}