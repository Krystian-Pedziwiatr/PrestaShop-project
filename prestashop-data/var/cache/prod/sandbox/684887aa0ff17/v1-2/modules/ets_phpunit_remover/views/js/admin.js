/**
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
 * needs please contact us for extra customization service at an affordable price
 *
 *  @author ETS-Soft <contact@etssoft.net>
 *  @copyright  2007-2020 ETS-Soft
 *  @license    Valid for 1 website (or project) for each purchase of license
 *  International Registered Trademark & Property of ETS-Soft
 */

$(document).on('click','.ets-php-unit-clear',function(){
    if(!$(this).hasClass('actived'))
    {
        $(this).addClass('actived');
        if(confirm('Do you want to clear all the PHPUnit directories?'))
        {
            $('.ets-php-unit-clearing').removeClass('hide');
            $.ajax({
                url: $('.ets-phpunit-form').attr('action'),
                data: 'clear=1',
                dataType: 'json',
                success: function(json)
                {
                    if(json.success)
                        $('.ets-phpunit-exist').html('<div class="alert alert-success">'+json.success+'</div>');
                    else
                        $('.ets-phpunit-exist').html('<div class="alert alert-success">'+json.success+'</div>');
                    $('.ets-php-unit-clear').removeClass('actived');
                },
                error: function()
                {
                    $('.ets-php-unit-clear').removeClass('actived');
                    $('.ets-php-unit-clearing').addClass('hide');
                    alert('Oops! Unknown error happened. Please try again or contact us for support!');
                }
            });
        }
        else
            $('.ets-php-unit-clear').removeClass('actived');
    }
    return false;
});
