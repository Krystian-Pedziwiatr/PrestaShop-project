<!-- Block user information module NAV  -->
{if $tc_config.YBC_TC_LAYOUT != 'LAYOUT3'}
    <h3>{l s='Account' mod='blockuserinfo'}</h3>
    <div class="header_user_info nav">
    	{if $is_logged}
    		<a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='blockuserinfo'}">
    			{l s='Log out' mod='blockuserinfo'}
    		</a>
            <a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow"><span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span></a>
    	{else}
    		<a class="login" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log in to your customer account' mod='blockuserinfo'}">
    			{l s='Log in' mod='blockuserinfo'}
    		</a>
            <a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow">
                <span class="hidden_mobile">{l s='My Account' mod='blockuserinfo'}</span>
            </a>
            
    	{/if}
        <a class="bt_wishlist_userinfor" 	href="{$link->getModuleLink('blockwishlist', 'mywishlist', array(), true)|escape:'html':'UTF-8'}" title="{l s='My wishlists' mod='blockuserinfo'}">
           <span>{l s='My wishlists' mod='blockuserinfo'}</span>
        </a>
        <a class="bt_compate-prod" 	href="{$link->getPageLink('products-comparison')|escape:'html':'UTF-8'}" title="{l s='My comparision' mod='blockuserinfo'}">
           <span>{l s='My comparision' mod='blockuserinfo'}</span>
        </a>
    </div>
{/if}
<!-- /Block usmodule NAV -->
