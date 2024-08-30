<?php
/* Smarty version 4.3.4, created on 2024-08-24 22:48:57
  from 'module:ps_customersigninps_customersignin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ca4739431fe0_93468355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:ps_customersigninps_customersignin.tpl',
      1 => 1724451878,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ca4739431fe0_93468355 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_user_info">
    <div class="user-info" style="display: flex; align-items: center; gap: 20px;">
        <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
            <style>
                .customer-xp-bar {
                    margin: 0;
                    flex-grow: 1; /* Permet à la barre d'XP d'occuper tout l'espace disponible */
                    /*display: flex;*/
                }

                .xp-bar {
                    background-color: #e0e0e0;
                    border-radius: 10px;
                    overflow: hidden;
                    width: 100%;
                    height: 20px;
                }

                .xp-fill {
                    background-color: #4caf50;
                    height: 100%;
                    transition: width 0.5s ease;
                }
            </style>

            <div class="customer-xp-bar d-flex flex-row">
                <div class="xp-bar">
                    <div class="xp-fill" style="width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['xpProgress']->value, ENT_QUOTES, 'UTF-8');?>
%"></div>
                </div>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'XP: level','d'=>'Modules.Customersignin.Shop'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currentLevel']->value, ENT_QUOTES, 'UTF-8');?>
</p>
            </div>
            <a
                    class="logout hidden-sm-down"
                    href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['actions']['logout'], ENT_QUOTES, 'UTF-8');?>
"
                    rel="nofollow"
            >
                <i class="material-icons">&#xE7FF;</i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

            </a>
            <a
                    class="account"
                    href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
"
                    title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
                    rel="nofollow"
            >
                <i class="material-icons hidden-md-up logged">&#xE7FF;</i>
                <span class="hidden-sm-down"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
            </a>
        <?php } else { ?>
            <a
                    href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
?back=<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'urlencode' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['current_url'] )), ENT_QUOTES, 'UTF-8');?>
"
                    title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
                    rel="nofollow"
            >
                <i class="material-icons">&#xE7FF;</i>
                <span class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
            </a>
        <?php }?>
    </div>
</div>
<?php }
}
