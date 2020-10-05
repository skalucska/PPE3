
<div clss="form-group">
	<input class="form-control" type="text" id="search-product" value="" placeholder="Rechercher un produit" />
</div>
<div style="margin-top 20px">
	<div id="resultat_recherche"></div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
	$('#search-product').keyup(function(){
		$("#resultat_recherche").html('');

		var product = $(this).val();
		
		if(product != ""){
			$.ajax({
				type: 'GET',
				url: 'vue/recherche_product.php',
				data:'produit=' + encodeURIComponent(product),
				success: function(data){
					if(data !=""){
						$("#resultat_recherche").append(data);
					}else{
						document.getElementById('resultat_recherche').innerHTML = "<div style='font-size: 20px; text-align: center; margin-top: 10px'> Aucun produit</div>"
					}
				}
			})
		}	
	});
});



/* site https://www.youtube.com/watch?v=_EKDdNemV0k */ 