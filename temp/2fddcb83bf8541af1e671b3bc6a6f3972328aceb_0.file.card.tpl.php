<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-04 15:04:00
  from 'C:\xampp\htdocs\shopping\styles\card.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3979d0d104d0_95969556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fddcb83bf8541af1e671b3bc6a6f3972328aceb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shopping\\styles\\card.tpl',
      1 => 1580825034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e3979d0d104d0_95969556 (Smarty_Internal_Template $_smarty_tpl) {
?> 
 
<!DOCTYPE html>
<html lang="en">
<head>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">E-COMMERCE CART</h1>
     </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Code</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                        <tr>
                            <td><img class="pic-1" src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" width="50" height="50"> </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['product']->value['code'];?>
</td>
                            <td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
</td>
                            <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value['currency'];?>
</td>
                        </tr>
                        
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      
                        <tr>
                            
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong><?php echo $_smarty_tpl->tpl_vars['total_price']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['total_currency']->value;?>
</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
</body>
</html>                                		                            <?php }
}
