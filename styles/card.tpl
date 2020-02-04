{*  Shopping Template  *}
 
 
<!DOCTYPE html>
<html lang="en">
<head>
{include file="header.tpl"}
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
                    {foreach  from=$products  item=product}
                        <tr>
                            <td><img class="pic-1" src="{$product.image}" width="50" height="50"> </td>
                            <td>{$product.name}</td>
                            <td>{$product.code}</td>
                            <td class="text-center"> {$product.quantity}</td>
                            <td class="text-right">{$product.price} {$product.currency}</td>
                        </tr>
                        
                    {/foreach }
                      
                        <tr>
                            
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>{$total_price} {$total_currency}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>

{include file="footer.tpl"}    
</body>
</html>                                		                            