// Volume Inicial player HTML5
document.getElementById("player_html5").volume=0.2;
var player = document.getElementById('player');
var pause = document.getElementById('pause');


function fplay(){

	if(player.style.display = "inline"){

		document.getElementById('player').style.display = 'none';
		document.getElementById('pause').style.display = 'inline';

	}else{

		document.getElementById('player').style.display = 'inline';
		document.getElementById('pause').style.display = 'none';

	}
}


function fpause(){

	if(pause.style.display = "inline"){

		document.getElementById('player').style.display = 'inline';
		document.getElementById('pause').style.display = 'none';

	}else{

		document.getElementById('player').style.display = 'none';
		document.getElementById('pause').style.display = 'inline';

	}
}


document.addEventListener("DOMContentLoaded", function(){
	var audio = document.getElementById("audio");		

	document.getElementById("play").addEventListener("click", function(){
		audio.play();
	}, false);

	document.getElementById("pause").addEventListener("click", function(){
		audio.pause();
		console.log("pause");
	}, false);

	document.getElementById("volume").addEventListener("mousemove", function(){
		var volume = document.getElementById("volume").value;
		audio.volume = volume;
		console.log(volume);
	}, false);

}, false);