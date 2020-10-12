<!DOCTYPE html>
<html>
<head>
	<title>ALL4SPORT</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../vue/css/style1.css" type="text/css" media="screen" charset="utf-8">
</head>


<style>
.center {
  display: block;
  text-align: center;
  margin-top:20%;
}
.milieu{
    display: block;
  text-align: center;
}
</style>



<h1 class="center"><em>Devinez ce qu'il vous attend ! <em></h1>
<br>
<h2 class="milieu"><em>Et oui<em></h2>
<br>
<h2 class="milieu"><em>Toujours plus de nouveau SPORT<em></h2>

    
    <div></div>


<script id="image_posi">
window.onload = function () {
  var backgroundImg=["../vue/img/Golf.jpg",
                    "../vue/img/muscu.jpg",
                    "../vue/img/foot.jpg",
                    "../vue/img/randonnee.jpg",
                    "../vue/img/tennis.jpg",
                    "../vue/img/rugby.jpg",
                    "../vue/img/basketball.jpg"
                    ]
  
    setInterval(changeImage, 5000);
   function changeImage() {   
    var i = Math.floor((Math.random() * 6));
    
    document.body.style.backgroundImage = "url('"+backgroundImg[i]+"')";
    
  }
}
</script>