<?php /* Smarty version Smarty-3.1.6, created on 2018-05-06 20:57:37
         compiled from "H:/PHPStudy/PHPTutorial/WWW/LAB/LearnTHINKPHP/shop/Admin/View\Goods\update.html" */ ?>
<?php /*%%SmartyHeaderCode:259625aeec4a2c9a351-69980888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edf9bff83a1600e7390c37aaee1067e55a3cc234' => 
    array (
      0 => 'H:/PHPStudy/PHPTutorial/WWW/LAB/LearnTHINKPHP/shop/Admin/View\\Goods\\update.html',
      1 => 1525611452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259625aeec4a2c9a351-69980888',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5aeec4a2cfc03',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aeec4a2cfc03')) {function content_5aeec4a2cfc03($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改商品</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》修改商品信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__ACTION__;?>
/goods_id/<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_id'];?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>商品名称</td>
                    <td><input type="text" name="goods_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_name'];?>
" /></td>
                </tr>
                <!-- <tr>
                    <td>商品分类</td>
                    <td>
                        <select name="f_goods_category_id">
                            <option>请选择</option>
                            <option>家用电器</option>
                            <option>手机数码</option>
                            <option>电脑办公</option>
                            <option>服饰鞋帽</option>
                        </select>
                    </td>
                </tr> -->
                <!-- <tr>
                    <td>商品品牌</td>
                    <td>
                        <select name="f_goods_brand_id">
                            <option>请选择</option>
                            <option>苹果</option>
                            <option>诺基亚</option>
                            <option>HTC</option>
                            <option>摩托罗拉</option>
                        </select>
                    </td>
                </tr> -->
                <tr>
                    <td>商品价格</td>
                    <td><input type="text" name="goods_price" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_price'];?>
" /></td>
                </tr>
                <tr>
                    <td>商品数量</td>
                    <td><input type="text" name="goods_num" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_num'];?>
" /></td>
                </tr>
                <tr>
                    <td>商品重量</td>
                    <td><input type="text" name="goods_weight" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_weight'];?>
" /></td>
                </tr>
                <!-- <tr>
                    <td>商品图片</td>
                    <td><input type="file" name="f_goods_image" value="<?php echo @ADMIN_IMG_URL;?>
2013-12-33.jpg" /></td>
                </tr> -->
                <tr>
                    <td>商品详细描述</td>
                    <td>
                        <textarea name="goods_introduce"><?php echo $_smarty_tpl->tpl_vars['info']->value['goods_introduce'];?>
</textarea>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="修改">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>