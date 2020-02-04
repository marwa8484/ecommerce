{*  Shopping Template  *}
 
{include_php file ="connection/connection.php"}
 
<!DOCTYPE html>
<html lang="en">
<head>
{include file="header.tpl"}
</head>
<body>

<div class="container">
	<form method="post" action="add_to_card.php" id="cardform">
    <h3 class="h3">shopping </h3>
	<div class="row">
	{foreach from=$content_content item=product}
	    <div class="col-md-3 col-sm-6 mb-5">
            <div class="product-grid ">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="{$product.first_image}">
                        <img class="pic-2" src="{$product.second_image}">
                    </a>
					{$imageValue= "image"|cat:{$product.id}}
					<input type="hidden" name={$imageValue} value={$product.first_image} >
                    <ul class="social">
					<div class="form-group">
					{$quantityValue= "quantity"|cat:{$product.id}}

						<li>quantity<input type="number" id={$quantityValue} name={$quantityValue} value=""class="form-control" min=0  max={$product.quantity} ></li>
                   </div>
				    </ul>
                    <span class="product-new-label">quantity</span>
                    <span class="product-discount-label">{$product.quantity}</span>
                </div>
                <div class="product-content">
					{$nameValue= "name"|cat:{$product.id}}
					<input type="hidden" name={$nameValue} value={$product.name} >
					<h3 class="title">{$product.name}</h3>
					{$codeValue= "code"|cat:{$product.id}}
					<input type="hidden" name={$codeValue} value={$product.code} >
					<h6 class="title">{$product.code}</h6>
					{$descriptionValue= "description"|cat:{$product.id}}
					<input type="hidden" name={$descriptionValue} value={$product.description} >
					<h5 class="title">{$product.description}</h5>
					{$priceValue= "price"|cat:{$product.id}}
					<input type="hidden" name={$priceValue} value={$product.price} >
					{$currencyValue= "currency"|cat:{$product.id}}
					<input type="hidden" name={$currencyValue} value={$product.currency} >
                    <div class="price">{$product.price}{$product.currency}
                    </div>
					<div class="form-group"> 
					+ Add To Cart 
                   <input type="checkbox" name="addToCard[]" value="{$product.id}" class="form-control">
				   </div>
                </div>
            </div>
		</div>
		{/foreach}
    </div>
	<div class="row">
	<div class="col-md-12 "> <div class="pt-8"> <button type="submit" class="btn btn-primary">Add to card</button></div>
</div>
	</div>
	</form>
	<script>
     $("#cardform").submit(function(e){
		var allCeckedChVals = [];
		$('input[type="checkbox"]:checked').each(function () {


         allCeckedChVals.push($(this).val());


      });
	   if(allCeckedChVals.length == 0) {
		    alert("You must chose product");
			e.preventDefault();
	   }
 		for (var i=0 ; i < allCeckedChVals.length; i++) {
			
		
		 var id =allCeckedChVals[i];
				
         var quantityValue =$("[id*='quantity" + id+ "']").val();
 
		     if(quantityValue <=0) {
				  alert("You must enter quentity in product "+id);
				  e.preventDefault();
			 }
		}
	 
		
	 });
</script>
</div>	
{include file="footer.tpl"}    
</body>
</html>                                		                            