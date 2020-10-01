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

<script>
window.onload = function () {
  var backgroundImg=["../vue/img/Golf.jpg",
                    "../vue/img/muscu.jpg",
                    "../vue/img/foot.jpg",
                    "../vue/img/randonnée.jpg",
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