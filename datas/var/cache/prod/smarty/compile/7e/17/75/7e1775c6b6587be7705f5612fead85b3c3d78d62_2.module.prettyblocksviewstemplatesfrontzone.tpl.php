<?php
/* Smarty version 4.3.4, created on 2024-08-24 22:48:57
  from 'module:prettyblocksviewstemplatesfrontzone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ca473938c638_18427336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e1775c6b6587be7705f5612fead85b3c3d78d62' => 
    array (
      0 => 'module:prettyblocksviewstemplatesfrontzone.tpl',
      1 => 1701772574,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ca473938c638_18427336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>


 <div data-prettyblocks-zone="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['zone_name']->value, ENT_QUOTES, 'UTF-8');?>
">
 <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['blocks']->value) > 0) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'block', false, NULL, 'zoneBlocks', array (
));
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
  <div <?php if ($_smarty_tpl->tpl_vars['block']->value['settings']['default']['load_ajax']) {?> load-ajax <?php }?> data-block data-instance-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['instance_id'], ENT_QUOTES, 'UTF-8');?>
" data-id-prettyblocks="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id_prettyblocks'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if (!$_smarty_tpl->tpl_vars['block']->value['settings']['default']['load_ajax']) {?>
        <?php $_smarty_tpl->_assignInScope('template', 'module:prettyblocks/views/templates/blocks/welcome.tpl');?>
        <?php if ((isset($_smarty_tpl->tpl_vars['block']->value['templates'][$_smarty_tpl->tpl_vars['block']->value['templateSelected']]))) {?>
          <?php $_smarty_tpl->_assignInScope('template', $_smarty_tpl->tpl_vars['block']->value['templates'][$_smarty_tpl->tpl_vars['block']->value['templateSelected']]);?>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('instance_id'=>$_smarty_tpl->tpl_vars['block']->value['instance_id'],'id_prettyblocks'=>$_smarty_tpl->tpl_vars['block']->value['id_prettyblocks'],'block'=>$_smarty_tpl->tpl_vars['block']->value,'states'=>$_smarty_tpl->tpl_vars['block']->value['states']), 0, true);
?>
      <?php } else { ?>  
        Chargement en cours.... 
      <?php }?>
    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
  </div>
<div class="d-none blocks text-center w-100 p-5" data-zone-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['zone_name']->value, ENT_QUOTES, 'UTF-8');?>
"></div>


<?php }
}
