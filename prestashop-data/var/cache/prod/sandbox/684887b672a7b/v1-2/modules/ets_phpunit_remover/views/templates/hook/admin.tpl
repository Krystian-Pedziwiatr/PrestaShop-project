{*
* 2007-2020 ETS-Soft
*
* NOTICE OF LICENSE
*
* This file is not open source! Each license that you purchased is only available for 1 wesite only.
* If you want to use this file on more websites (or projects), you need to purchase additional licenses.
* You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs, please contact us for extra customization service at an affordable price
*
*  @author ETS-Soft <etssoft.jsc@gmail.com>
*  @copyright  2007-2020 ETS-Soft
*  @license    Valid for 1 website (or project) for each purchase of license
*  International Registered Trademark & Property of ETS-Soft
*}
<script type="text/javascript" src="{$jsUrl nofilter}"></script>
<script type="text/javascript" src="{$jsOtherUrl nofilter}"></script>
<form action="{$ajaxUrl nofilter}" class="defaultForm form-horizontal ets-phpunit-form">
    <div class="ets_phpunit panel">
        <div class="panel-heading">PHPUnit Remover</div>
        <div class="form-wrapper">
            <div class="ets-phpunit-info">
                {l s='Welcome to ' mod='ets_phpunit_remover'}<b>PHPUnit Remover</b>!<br/>
                {l s='As officially reported (Jan 7, 2020), Critical Security Vulnerability In PrestaShop was found due to old PHPUnit dependency is included in some Prestashop modules.'  mod='ets_phpunit_remover'}<br/>
                {l s='For more information, ' mod='ets_phpunit_remover'} <a href="https://build.prestashop.com/news/critical-security-vulnerability-in-prestashop-modules/" target="_blank">{l s='see here' mod='ets_phpunit_remover'}</a><br/>
                {l s='According to the news, attackers are using a vulnerability in a popular dependency used by modules to take control of PrestaShop sites. '  mod='ets_phpunit_remover'}<br/>
                {l s='Fortunately, PHPUnit is a development library and is not needed for the normal function of your site and can be deleted, so you can simply delete all the “phpunit” directories found above. This should help close the attack vector.' mod='ets_phpunit_remover'}<br/>
                <b>PHPUnit Remover</b> {l s='help you remove all the PHPUnit directories on your website and make it safe!'  mod='ets_phpunit_remover'}<br/><br/>
            </div>
            {if $phpunitDirectories}
                <div class="ets-phpunit-exist">
                    <div class="alert alert-danger">{l s='Oops! Your website may not be safe! We found %d PHPUnit directories on your website. Please clear these directories to protect your website from hackers' sprintf=count($phpunitDirectories)  mod='ets_phpunit_remover'}</div>
                    <div><b>{l s='PHPUnit directories: ' mod='ets_phpunit_remover'}</b></div><br/>
                    <ul class="ets_phpunit_ul alert alert-warning">
                        {foreach $phpunitDirectories as $dir}
                            <li>{$dir|escape:'html':'utf-8'}</li>
                        {/foreach}
                    </ul>
                    <div class="btn-default btn ets-php-unit-clear">{l s='Clear PHPUnit directories now!' mod='ets_phpunit_remover'}</div>
                    <div class="hide ets-php-unit-clearing">
                        <img src="{$loadingGift nofilter}" style="width: 18px; height: 18px;" />
                        {l s='Clearing...! Please wait a moment.' mod='ets_phpunit_remover'}
                    </div>
                </div>
            {else}
                <div class="alert alert-info">{l s='Congratulations! Your site is safe! We do not found any phpunit directories!' mod='ets_phpunit_remover'}</div>
            {/if}
        </div>
    </div>
</form>
<div class="ets-copyright">
    <div class="li_othermodules ">
        {l s='This module is made by ' mod='ets_phpunit_remover'} <b>ETS-Soft</b>.
        <span class="link_othermodules" data-href="{$other_modules_link nofilter}">{l s='See all our modules >>' mod='ets_phpunit_remover'}</span>
    </div>
</div>