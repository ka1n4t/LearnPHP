<?php /* Smarty version Smarty-3.1.6, created on 2018-05-06 16:49:40
         compiled from "H:/PHPStudy/PHPTutorial/WWW/LAB/LearnTHINKPHP/shop/Admin/View\Goods\add.html" */ ?>
<?php /*%%SmartyHeaderCode:136135aeeba4b6f41f8-89546290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4913d82114ddfeaaa7cb4735c65a6126627db149' => 
    array (
      0 => 'H:/PHPStudy/PHPTutorial/WWW/LAB/LearnTHINKPHP/shop/Admin/View\\Goods\\add.html',
      1 => 1525596363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136135aeeba4b6f41f8-89546290',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5aeeba4b76965',
  'variables' => 
  array (
    's_category_info' => 0,
    '_v' => 0,
    's_brand_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aeeba4b76965')) {function content_5aeeba4b76965($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加商品</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》添加商品信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__ACTION__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>商品名称</td>
                    <td><input type="text" name="goods_name" /></td>
                </tr>
                <!-- <tr>
                    <td>商品分类</td>
                    <td>
                        <select name="goods_category_id">
                            <option value="0">请选择</option>
                            <?php  $_smarty_tpl->tpl_vars['_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v']->_loop = false;
 $_smarty_tpl->tpl_vars['_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['s_category_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v']->key => $_smarty_tpl->tpl_vars['_v']->value){
$_smarty_tpl->tpl_vars['_v']->_loop = true;
 $_smarty_tpl->tpl_vars['_k']->value = $_smarty_tpl->tpl_vars['_v']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_v']->value['category_name'];?>
</option>
                            <?php } ?>
                        </select>
                    </td>
                </tr> -->
                <!-- <tr>
                    <td>商品品牌</td>
                    <td>
                        <select name="goods_brand_id">
                            <option value="0">请选择</option>
                            <?php  $_smarty_tpl->tpl_vars['_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v']->_loop = false;
 $_smarty_tpl->tpl_vars['_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['s_brand_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v']->key => $_smarty_tpl->tpl_vars['_v']->value){
$_smarty_tpl->tpl_vars['_v']->_loop = true;
 $_smarty_tpl->tpl_vars['_k']->value = $_smarty_tpl->tpl_vars['_v']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['brand_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_v']->value['brand_name'];?>
</option>
                            <?php } ?>
                        </select>
                    </td>
                </tr> -->
                <tr>
                    <td>商品价格</td>
                    <td><input type="text" name="goods_price" /></td>
                </tr>
                <tr>
                    <td>商品数量</td>
                    <td><input type="text" name="goods_num" /></td>
                </tr>
                <tr>
                    <td>商品重量</td>
                    <td><input type="text" name="goods_weight" /></td>
                </tr>
                <!-- <tr>
                    <td>商品图片</td>
                    <td><input type="file" name="goods_image" /></td>
                </tr> -->
                <tr>
                    <td>商品详细描述</td>
                    <td>
                        <textarea name="goods_introduce"></textarea>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>