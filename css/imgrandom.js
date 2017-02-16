var speed = 1000;
		var Pic = new Array(); 
		Pic[0] = 'css/1.jpg';
		Pic[1] = 'css/2.jpg';
		Pic[2] = 'css/3.jpg';
		Pic[3] = 'css/4.jpg';
		Pic[4] = 'css/5.jpg';

		var t;
		var x = 0;
		var p = Pic.length;

		var preLoad = new Array();
		for (i = 0; i < p; i++){
		preLoad[i] = new Image();
		preLoad[i].src = Pic[i];
		}

	function bgslideshow(){
		if (document.body){
			document.body.background = Pic[x];
			x = x + 1
			if (x > (p-1)) x=0
			t = setTimeout('bgslideshow()', speed)
		}
	}