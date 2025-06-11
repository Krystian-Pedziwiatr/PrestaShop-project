{*
* 2007-2022 ETS-Soft
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
*  @copyright  2007-2022 ETS-Soft
*  @license    Valid for 1 website (or project) for each purchase of license
*  International Registered Trademark & Property of ETS-Soft
*}
{extends file="helpers/form/form.tpl"}
{if $input.type == 'manufacturers' || $input.type == 'cms_pages'}
    <ul style="float: left; padding: 0;">
        {if $input.manufacturers}
            {foreach from=$input.manufacturers item='mnft'}
                <li style="list-style: none;"><input style="padding-left: 10px;" type="checkbox" value="{$mnft.id_manufacturer|escape:'html':'UTF-8'}" name="mnfts[]" id="ybc_mm_mnft_{$mnft.id_manufacturer|escape:'html':'UTF-8'}" /><label for="ybc_mm_mnft_{$mnft.id_manufacturer|escape:'html':'UTF-8'}">{$mnft.name|escape:'html':'UTF-8'}</label></li>
            {/foreach}
        {/if}
    </ul>
{/if}