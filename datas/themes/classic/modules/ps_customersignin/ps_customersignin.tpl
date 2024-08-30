<div id="_desktop_user_info">
    <div class="user-info" style="display: flex; align-items: center; gap: 20px;">
        {if $logged}
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
                    <div class="xp-fill" style="width: {$xpProgress}%"></div>
                </div>
                <p>{l s='XP: level' d='Modules.Customersignin.Shop'} {$currentLevel}</p>
            </div>
            <a
                    class="logout hidden-sm-down"
                    href="{$urls.actions.logout}"
                    rel="nofollow"
            >
                <i class="material-icons">&#xE7FF;</i>
                {l s='Sign out' d='Shop.Theme.Actions'}
            </a>
            <a
                    class="account"
                    href="{$urls.pages.my_account}"
                    title="{l s='View my customer account' d='Shop.Theme.Customeraccount'}"
                    rel="nofollow"
            >
                <i class="material-icons hidden-md-up logged">&#xE7FF;</i>
                <span class="hidden-sm-down">{$customerName}</span>
            </a>
        {else}
            <a
                    href="{$urls.pages.authentication}?back={$urls.current_url|urlencode}"
                    title="{l s='Log in to your customer account' d='Shop.Theme.Customeraccount'}"
                    rel="nofollow"
            >
                <i class="material-icons">&#xE7FF;</i>
                <span class="hidden-sm-down">{l s='Sign in' d='Shop.Theme.Actions'}</span>
            </a>
        {/if}
    </div>
</div>
