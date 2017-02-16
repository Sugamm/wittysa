<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<style type="text/css">
	body{margin: 0px;background:#000;color: #CCC};
	div #pagetop { position: fixed;background:#333;padding: 20px;font-size: 36px;width: 100%;border-bottom: #000 1px solid;}
	div #thumbnailbax {float: left; margin-top: 82px; width: 120px; background: #292929 ; }
	div #thumbnailbax > div {width: 100px; height: 80px;overflow: hidden;margin: 10px; cursor: pointer;}
	div #thumbnailbax > div  > img {width: 100px;}
	div #pictureframe {position: fixed; left: 140px; top: 100px; width: 700px; height: 500px;}

	</style>
	<script type="text/javascript">
	// Json is javascript object notation , we call also use as a multiple array
	// var ob1 = {user:"John" ,age:22,country:"US"};
	// var ob2 = {user:"sugam" ,age:27,country:"USA"};
	// var ob3 = {user:"pratap" ,age:30,country:"India"};
	// var ob4 = { u1:ob1,u2:ob2,u3:ob3 };
	// document.write(ob1.user+" is "+ob1.age+" years old and he lives in"+ob1.country);
	document.getElementById('pagetop').innerHTML="Dynamic JSON Ajax Image Gallery!!";
	function ajax_json_gallery(folder){
	var thumbnailbax = document.getElementById("thumbnailbax");
	var pictureframe.innerHTML = document.getElementById("pictureframe");
    var hr = new XMLHttpRequest();
    hr.open("POST", "json_gallery_data.php", true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var d = JSON.parse(hr.responseText);
		    pictureframe.innerHTML = '<img src = "'+d.img1.src+'">';
			thumbnailbax.innerHTML = "";
			for(var o in d){
				if (d[o].src) {};
				thumbnailbax.innerHTML +='<div onclick="putinframe(\"'+d[o].src+'\')"<img src="'+d[o].src'"></div>';
			}
	    }
    }
	    hr.send("folder="+folder);
	    thumbnailbax.innerHTML = "Loader.gif";
	}
	function putinframe(src){
		var pictureframe = document.getElementById("pictureframe");
		pictureframe.innerHTML = '<img src = "'+src+'">';
	}
	</script>
</head>
<body>
<div id="pagetop"></div>
<div id= "thumbnailbax"></div>
<div id="pictureframe"></div>
<script type="text/javascript">ajax_json_gallery('img');</script>
</body>
</html>