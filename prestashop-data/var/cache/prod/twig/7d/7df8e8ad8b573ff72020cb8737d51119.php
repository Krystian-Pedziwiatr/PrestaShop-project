<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__202ac5946730eee27ffc5b9cb24542a6 */
class __TwigTemplate_37e971e531c1d55d5fb7176afbdc88f7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Moduły • MotoShop24</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '8.2.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Nowe zamówienie zostało złożone w Twoim sklepie.';
    var order_number_msg = 'Numer zamówienia: ';
    var total_msg = 'Razem: ';
    var from_msg = 'Od: ';
    var see_order_msg = 'Zobacz to zamówienie';
    var new_customer_msg = 'W twoim sklepie zarejestrował się nowy klient.';
    var customer_name_msg = 'Nazwa klienta: ';
    var new_msg = 'W twoim sklepie została opublikowana nowa wiadomość.';
    var see_msg = 'Przeczytaj tą wiadomość';
    var token = '78260222c18cb160599f68c7a6d22f52';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '050ad21185a4c3c1843bc2ddc85be0fa';
    var choose_language_translate = 'Wybierz język:';
    var default_language = '1';
    var admin_modules_link = '/admin516f36phnm6lye0xir7/index.php/improve/modules/manage?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4';
    var admin_notification_get_link = '/admin516f36phnm6lye0xir7/index.php/common/notifications?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4';
    var admin_notification_push_link = adminNotificationPushLink = '/admin516f36phnm6lye0xir7/index.php/common/notifications/ack?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4';
    var tab_modules_list = '';
    va";
        // line 42
        echo "r update_success_msg = 'Aktualizacja powiodła się';
    var search_product_msg = 'Szukaj produktu';
  </script>



<link
      rel=\"preload\"
      href=\"/admin516f36phnm6lye0xir7/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin516f36phnm6lye0xir7/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin516f36phnm6lye0xir7/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin516f36phnm6lye0xir7/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin516f36phnm6lye0xir7\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin516f36phnm6lye0xir7\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Z\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##";
        // line 67
        echo "0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin516f36phnm6lye0xir7/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.2.1\"></script>
<script type=\"text/javascript\" src=\"/admin516f36phnm6lye0xir7/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.2.1\"></script>
<script type=\"text/javascript\" src=\"/admin516f36phnm6lye0xir7/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin516f36phnm6lye0xir7/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin516f36phnm6lye0xir7/index.php/common/notifications?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pl adminmodulesmanage\"
  data-base-url=\"/admin516f36phnm6lye0xir7/index.php\"  data-token=\"feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminDashboard&amp;token=9c89dc03a28bee18a5ed538fc66e1866\"></a>
      <span id=\"shop_version\">8.2.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dostęp
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php/configure/advanced/performance/clear-cache?token=ab7d67eb07bc388c392668c5602839e7\"
         target=\"_blank\"         data-item=\"Czyszczenie cashe\"
      >Czyszczenie cashe</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php/sell/catalog/categories/new?token=ab7d67eb07bc388c392668c5602839e7\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=78f114fc8024bf993c806c1916ac1bb2\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php/sell/catalog/products-v2/create?token=ab7d67eb07bc388c392668c5602839e7\"
";
        // line 137
        echo "                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=41fddea1361ed3c05aab8c23e0a25ac7\"
                 data-item=\"Ocena katalogu\"
      >Ocena katalogu</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php/improve/modules/manage?token=ab7d67eb07bc388c392668c5602839e7\"
                 data-item=\"Zainstalowane moduły\"
      >Zainstalowane moduły</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php/sell/orders?token=ab7d67eb07bc388c392668c5602839e7\"
                 data-item=\"Zamówienia\"
      >Zamówienia</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"137\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/manage?-QJM8pU39FqJ_923xLJWfxA4\"
        data-post-link=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminQuickAccesses&token=1cbcd8ace652258b7c2d692de6c0c0ad\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"Moduły - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj aktualną stronę do Szybkiego dostępu
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminQuickAccesses&token=1cbcd8ace652258b7c2d692de6c0c0ad\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj Szybkiem dostępem
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-sea";
        // line 175
        echo "rch-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin516f36phnm6lye0xir7/index.php?controller=AdminSearch&amp;token=74ae362efc8fc4257ad2de4ebc2c7eaf\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\" aria-label=\"Wyszukiwarka\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wszędzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wszędzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, odniesienie itp.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"Nazwa\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zamówienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\"";
        // line 195
        echo " data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"dropdown-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduły</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Anuluj</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Szybki dostęp</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php/configure/advanced/performance/clear-cache?token=ab7d67eb07bc388c392668c5602839e7\"
       target=\"_blank\"       data-item=\"Czyszczenie cashe\"
    >Czyszczenie cashe</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php/sell/catalog/categories/new?token=ab7d67eb07bc388c392668c5602839e7\"
             data-item=\"Nowa kategoria\"
    >Nowa kategoria</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=78f114fc8024bf993c806c1916ac1bb2\"
             data-item=\"Nowy kupon\"
    >Nowy kupon</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php/sell/catalog/products-v2/create?t";
        // line 229
        echo "oken=ab7d67eb07bc388c392668c5602839e7\"
             data-item=\"Nowy produkt\"
    >Nowy produkt</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=41fddea1361ed3c05aab8c23e0a25ac7\"
             data-item=\"Ocena katalogu\"
    >Ocena katalogu</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php/improve/modules/manage?token=ab7d67eb07bc388c392668c5602839e7\"
             data-item=\"Zainstalowane moduły\"
    >Zainstalowane moduły</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php/sell/orders?token=ab7d67eb07bc388c392668c5602839e7\"
             data-item=\"Zamówienia\"
    >Zamówienia</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"13\"
      data-icon=\"icon-AdminModulesSf\"
      data-method=\"add\"
      data-url=\"index.php/improve/modules/manage?-QJM8pU39FqJ_923xLJWfxA4\"
      data-post-link=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminQuickAccesses&token=1cbcd8ace652258b7c2d692de6c0c0ad\"
      data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
      data-link=\"Moduły - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Dodaj aktualną stronę do Szybkiego dostępu
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminQuickAccesses&token=1cbcd8ace652258b7c2d692de6c0c0ad\">
    <i class=\"material-icons\">settings</i>
    Zarządzaj Szybkiem dostępem
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              ";
        // line 273
        echo "<div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8080/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Wyświetl mój sklep</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zamówienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomości<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
     ";
        // line 328
        echo " <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zamówień :(<br>
              Czy sprawdziłeś <strong><a href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=a90811115e4bfc8666fd7fc31cb07307\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klientów :(<br>
              Czy jesteś aktywny w mediach społecznościowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomości.<br>
              Wydaje się, wszyscy Twoi klienci są zadowoleni :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-not";
        // line 371
        echo "ification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8080/img/pr/default.jpg\" alt=\"Krystian\" /></span>
        <span class=\"employee_profile\">Witaj ponownie Krystian</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin516f36phnm6lye0xir7/index.php/configure/advanced/employees/1/edit?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\">
      <i class=\"material-icons\">edit</i>
      <span>Twój profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminLogin&amp;logout=1&amp;token=ea40940ab72cf83defd64f11b3c25d74\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin516f36phnm6lye0xir7/index.php/configure/advanced/employees/toggle-navigation?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
        ";
        // line 419
        echo "  <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminDashboard&amp;token=9c89dc03a28bee18a5ed538fc66e1866\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.2.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminDashboard&amp;token=9c89dc03a28bee18a5ed538fc66e1866\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sprzedaż</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin516f36phnm6lye0xir7/index.php/sell/orders/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Zamówienia
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                     ";
        // line 459
        echo "         
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/sell/orders/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/sell/orders/invoices/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Faktury
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/sell/orders/credit-slips/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Druki kredytowe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/sell/orders/delivery-slips/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Druk wysyłki
                                </a>
                              </li>
";
        // line 489
        echo "
                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminCarts&amp;token=a90811115e4bfc8666fd7fc31cb07307\" class=\"link\"> Koszyki zakupowe
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin516f36phnm6lye0xir7/index.php/sell/catalog/products?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/sell/catalog/products?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_";
        // line 519
        echo "923xLJWfxA4\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/sell/catalog/categories?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Kategorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/sell/catalog/monitoring/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Monitorowanie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminAttributesGroups&amp;token=7d4bde019d1b88ee9e61c02d5b339adb\" class=\"link\"> Atrybuty i cechy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab";
        // line 550
        echo "-AdminParentManufacturers\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/sell/catalog/brands/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Marki i dostawcy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/sell/attachments/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Pliki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminCartRules&amp;token=78f114fc8024bf993c806c1916ac1bb2\" class=\"link\"> Rabaty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/sell/stocks/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Magazyn
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
";
        // line 581
        echo "                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin516f36phnm6lye0xir7/index.php/sell/customers/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Klienci
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/sell/customers/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/sell/addresses/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Adresy
                                </a>
                              </li>

                              ";
        // line 612
        echo "                                                                                                      </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminCustomerThreads&amp;token=8729b77e1ef9ceba768ec6163fa7c719\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Obsługa klienta
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminCustomerThreads&amp;token=8729b77e1ef9ceba768ec6163fa7c719\" class=\"link\"> Obsługa klienta
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/ad";
        // line 641
        echo "min516f36phnm6lye0xir7/index.php/sell/customer-service/order-messages/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Wiadomości zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminReturn&amp;token=60cb0f0d0c88ad9814c80399f277b358\" class=\"link\"> Zwroty produktów
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminStats&amp;token=41fddea1361ed3c05aab8c23e0a25ac7\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statystyki
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-acti";
        // line 676
        echo "ve\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Ulepszanie</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin516f36phnm6lye0xir7/index.php/improve/modules/manage?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Moduły
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/improve/modules/manage?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Menedżer modułów
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-";
        // line 709
        echo "levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin516f36phnm6lye0xir7/index.php/improve/design/themes/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Wygląd
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/improve/design/themes/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Szablony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/improve/design/mail_theme/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Szablon e-maila
                                </a>
                              </li>

                                                                                  
                              
                                                     ";
        // line 738
        echo "       
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/improve/design/cms-pages/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Strony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/improve/design/modules/positions/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Pozycje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminImages&amp;token=00a5d171567550425668769caca89345\" class=\"link\"> Zdjęcia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/modules/link-widget/list?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Lista linków
                                </a>
                              </li>

                         ";
        // line 768
        echo "                                                     </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminCarriers&amp;token=14d7174f5e1ade662c45363686308b88\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Wysyłka
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminCarriers&amp;token=14d7174f5e1ade662c45363686308b88\" class=\"link\"> Przewoźnicy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/improve/shipping/preferences/?_token=feM";
        // line 797
        echo "_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin516f36phnm6lye0xir7/index.php/improve/payment/payment_methods?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Płatność
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/improve/payment/payment_methods?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Płatności
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=";
        // line 829
        echo "\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/improve/payment/preferences?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin516f36phnm6lye0xir7/index.php/improve/international/localization/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Międzynarodowe
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/improve/international/localization/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Lokalizacja
                                </a>
                              </li>

                                                                              ";
        // line 859
        echo "    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/improve/international/zones/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Położenie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/improve/international/taxes/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Podatki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/improve/international/translations/settings?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Tłumaczenia
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfiguruj</span>
            </li>

                              ";
        // line 895
        echo "
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin516f36phnm6lye0xir7/index.php/configure/shop/preferences/preferences?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Preferencje
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/configure/shop/preferences/preferences?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Ogólny
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/configure/shop/order-preferences/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Zamówienia
                                </a>
                              </li>
";
        // line 925
        echo "
                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/configure/shop/product-preferences/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/configure/shop/customer-preferences/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/configure/shop/contacts/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Kontakt
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/configure/shop/se";
        // line 954
        echo "o-urls/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Ruch
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminSearchConf&amp;token=e05c544cd10a67f28675c8b120107845\" class=\"link\"> Szukaj
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin516f36phnm6lye0xir7/index.php/configure/advanced/system-information/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Zaawansowane
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
             ";
        // line 986
        echo "                 <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/configure/advanced/system-information/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Informacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/configure/advanced/performance/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Wydajność
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/configure/advanced/administration/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Administracja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/configure/advanced/emails/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> E-mail
                                </a>
                              </li>

                           ";
        // line 1015
        echo "                                                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/configure/advanced/import/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Importuj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/configure/advanced/employees/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Zespół
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/configure/advanced/sql-requests/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Baza danych
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/configure/advanced/logs/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_";
        // line 1043
        echo "923xLJWfxA4\" class=\"link\"> Logi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/configure/advanced/webservice-keys/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> API
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/configure/advanced/feature-flags/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Nowe i eksperymentalne funkcje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin516f36phnm6lye0xir7/index.php/configure/advanced/security/?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" class=\"link\"> Bezpieczeństwo
                                </a>
                              </li>

                                                                              </ul>
     ";
        // line 1072
        echo "                                   </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Menedżer modułów</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin516f36phnm6lye0xir7/index.php/improve/modules/manage?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" aria-current=\"page\">Moduły</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Moduły          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Załaduj moduł\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_upload</i>                  Załaduj moduł
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin516f36phnm6lye0xir7/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminModules%253Fversion%253D8.2.1%2526country%253Dpl/Pomoc?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    <";
        // line 1124
        echo "/div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/admin516f36phnm6lye0xir7/index.php/improve/modules/manage?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"40\">
                      Moduły
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin516f36phnm6lye0xir7/index.php/improve/modules/alerts?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Powiadomienia
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin516f36phnm6lye0xir7/index.php/improve/modules/updates?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ";
        // line 1151
        echo "_923xLJWfxA4\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Aktualizacje
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Załaduj moduł\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Załaduj moduł
              <i class";
        // line 1173
        echo "=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Pomoc\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin516f36phnm6lye0xir7/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminModules%253Fversion%253D8.2.1%2526country%253Dpl/Pomoc?_token=feM_ulPjvfh52BYfw0y-QJM8pU39FqJ_923xLJWfxA4\"
            >
              Pomoc
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1200
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"mt-2\">
    Dziękujemy.
  </p>
  <a href=\"http://localhost:8080/admin516f36phnm6lye0xir7/index.php?controller=AdminDashboard&amp;token=9c89dc03a28bee18a5ed538fc66e1866\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1234
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1200
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1234
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__202ac5946730eee27ffc5b9cb24542a6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1401 => 1234,  1380 => 1200,  1369 => 102,  1360 => 1234,  1320 => 1200,  1291 => 1173,  1267 => 1151,  1238 => 1124,  1184 => 1072,  1153 => 1043,  1123 => 1015,  1092 => 986,  1058 => 954,  1027 => 925,  995 => 895,  957 => 859,  925 => 829,  891 => 797,  860 => 768,  828 => 738,  797 => 709,  762 => 676,  725 => 641,  694 => 612,  661 => 581,  628 => 550,  595 => 519,  563 => 489,  531 => 459,  489 => 419,  439 => 371,  394 => 328,  337 => 273,  291 => 229,  255 => 195,  233 => 175,  193 => 137,  153 => 102,  116 => 67,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__202ac5946730eee27ffc5b9cb24542a6", "");
    }
}
