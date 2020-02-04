<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-03 13:08:26
  from 'C:\xampp\htdocs\shopping\connection\connection.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e380d3a78e9e3_06401507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9dece93deceeb224ade01ff5904110108ec92b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shopping\\connection\\connection.php',
      1 => 1580731702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e380d3a78e9e3_06401507 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerice";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "ffffffffffffffffffffff";
<?php echo '?>';
}
}
