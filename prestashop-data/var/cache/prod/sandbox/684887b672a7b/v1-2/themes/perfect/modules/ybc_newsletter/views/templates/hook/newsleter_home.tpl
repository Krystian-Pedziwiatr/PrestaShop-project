    <div class="ybc-newsletter-home ybc-mail-wrapper">
        <div class="container">
            <div class="row">
                {hook h='ybcCustom2'}
                <!--<div class="parala_content{if (isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT2')} ybc-newsletter-home-bg{elseif (isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT3')} ybc-newsletter-home-3{else} ybc-newsletter-home-parallax{/if}" {*if isset($tc_config.YBC_TC_PARALLAX_NEWSLETTER_ON_OFF) && $tc_config.YBC_TC_PARALLAX_NEWSLETTER_ON_OFF == 1}data-top-bottom="top: 0%;" data-bottom-top="top: -75%;"{/if*}> </div>-->
                <div class="ynp-div-l1 col-md-4 col-sm-12">           
                    <form class="ynp-form ynp-input-row" action="{$YBC_NEWSLETTER_ACTION}" method="post">
                        <div class="ynp-inner">
                            
                            {if isset($tc_config.YBC_TC_PARALLAX_NEWSLETTER_BG) && $tc_config.YBC_TC_PARALLAX_NEWSLETTER_BG}
                               {if (isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT != 'LAYOUT2')}
                                    <div class="bg_newletter">
                                        <img src="{$tc_module_path}images/config/{$tc_config.YBC_TC_PARALLAX_NEWSLETTER_BG}" alt="{l s='Bachground newletter' mod='ybc_newsleter'}" title="{l s='Bachground newletter' mod='ybc_newsleter'}" />
                                    </div>
                                {/if}
                            {/if}
                           {if isset($tc_config.YBC_TC_PARALLAX_NEWSLETTER_BG_LAYOUT2) && $tc_config.YBC_TC_PARALLAX_NEWSLETTER_BG_LAYOUT2}
                               {if (isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT2')}
                                    <div class="bg_newletter">
                                        <img src="{$tc_module_path}images/config/{$tc_config.YBC_TC_PARALLAX_NEWSLETTER_BG_LAYOUT2}" alt="{l s='Bachground newletter' mod='ybc_newsleter'}" title="{l s='Bachground newletter' mod='ybc_newsleter'}" />
                                    </div>
                                {/if}
                            {/if}
                            
                            <div  class="ynp-inner-wrapper">
                                <h4 class="title_cat">{l s='Newsleter' mod='ybc_newsleter'}</h4>
                                <!--<p>{l s='Receive exclusive offers and the latest news on  our products and services' mod=''}</p>
                                <div class="clearfix"></div>-->
                                <div class="form_input">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <input type="text" class="ynp-email-input" value="" placeholder="{l s='Enter your email...' mod='ybc_newsleter'}" />
                                    <input class="button ynp-submit" type="submit" name="ynpSubmit" value="{l s='Subscribe Now!' mod='ybc_newsleter'}" /> 
                                </div>                        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
         </div>
    </div>
