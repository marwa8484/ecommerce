<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-04 16:38:07
  from 'C:\xampp\htdocs\shopping\styles\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e398fdf7a3a83_86436898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d4ef622da11e30ac44bae7c14162c4ef937cab8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shopping\\styles\\index.tpl',
      1 => 1580830685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e398fdf7a3a83_86436898 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<?php include_once ('C:\xampp\htdocs\shopping\connection\connection.php');?>

 
<!DOCTYPE html>
<html lang="en">
<head>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body>

<div class="container">
	<form method="post" action="add_to_card.php" id="cardform">
    <h3 class="h3">shopping </h3>
	<div class="row">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_content']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
	    <div class="col-md-3 col-sm-6 mb-5">
            <div class="product-grid ">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="<?php echo $_smarty_tpl->tpl_vars['product']->value['first_image'];?>
">
                        <img class="pic-2" src="<?php echo $_smarty_tpl->tpl_vars['product']->value['second_image'];?>
">
                    </a>
					<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['id'];
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('imageValue', ("image").($_prefixVariable1));?>
					<input type="hidden" name=<?php echo $_smarty_tpl->tpl_vars['imageValue']->value;?>
 value=<?php echo $_smarty_tpl->tpl_vars['product']->value['first_image'];?>
 >
                    <ul class="social">
					<div class="form-group">
					<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['id'];
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('quantityValue', ("quantity").($_prefixVariable2));?>

						<li>quantity<input type="number" id=<?php echo $_smarty_tpl->tpl_vars['quantityValue']->value;?>
 name=<?php echo $_smarty_tpl->tpl_vars['quantityValue']->value;?>
 value=""class="form-control" min=0  max=<?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
 ></li>
                   </div>
				    </ul>
                    <span class="product-new-label">quantity</span>
                    <span class="product-discount-label"><?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
</span>
                </div>
                <div class="product-content">
					<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['id'];
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('nameValue', ("name").($_prefixVariable3));?>
					<input type="hidden" name=<?php echo $_smarty_tpl->tpl_vars['nameValue']->value;?>
 value=<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
 >
					<h3 class="title"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h3>
					<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['id'];
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('codeValue', ("code").($_prefixVariable4));?>
					<input type="hidden" name=<?php echo $_smarty_tpl->tpl_vars['codeValue']->value;?>
 value=<?php echo $_smarty_tpl->tpl_vars['product']->value['code'];?>
 >
					<h6 class="title"><?php echo $_smarty_tpl->tpl_vars['product']->value['code'];?>
</h6>
					<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['id'];
$_prefixVariable5 = ob_get_clean();
$_smarty_tpl->_assignInScope('descriptionValue', ("description").($_prefixVariable5));?>
					<input type="hidden" name=<?php echo $_smarty_tpl->tpl_vars['descriptionValue']->value;?>
 value=<?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
 >
					<h5 class="title"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</h5>
					<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['id'];
$_prefixVariable6 = ob_get_clean();
$_smarty_tpl->_assignInScope('priceValue', ("price").($_prefixVariable6));?>
					<input type="hidden" name=<?php echo $_smarty_tpl->tpl_vars['priceValue']->value;?>
 value=<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 >
					<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['id'];
$_prefixVariable7 = ob_get_clean();
$_smarty_tpl->_assignInScope('currencyValue', ("currency").($_prefixVariable7));?>
					<input type="hidden" name=<?php echo $_smarty_tpl->tpl_vars['currencyValue']->value;?>
 value=<?php echo $_smarty_tpl->tpl_vars['product']->value['currency'];?>
 >
                    <div class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];
echo $_smarty_tpl->tpl_vars['product']->value['currency'];?>

                    </div>
					<div class="form-group"> 
					+ Add To Cart 
                   <input type="checkbox" name="addToCard[]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class="form-control">
				   </div>
                </div>
            </div>
		</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
	<div class="row">
	<div class="col-md-12 "> <div class="pt-8"> <button type="submit" class="btn btn-primary">Add to card</button></div>
</div>
	</div>
	</form>
	<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>
</div>	
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
</body>
</html>                                		                            <?php }
}
