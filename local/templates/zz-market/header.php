<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();
?>
<!doctype html>
<html lang="ru">
<head>
    <?
    use Bitrix\Main\Page\Asset;
    // Пример подключения JS
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery-3.6.0.min.js');
    // Пример подключения CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap-grid.min.css');
    $APPLICATION->ShowHead();
    ?>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>
<body>

<?
$APPLICATION->ShowPanel();
?>

<div class="body__container">
    <header class="header">
        <div class="header__first">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-auto">
                        <div class="header__logo"><a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt=""></a></div>
                    </div>
                    <div class="col-auto">
                        <div class="header__topmenu">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "",
                            Array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array("",""),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "top",
                                "USE_EXT" => "N"
                            )
                        );?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header__account">
                            <a href="https://zz-market.ru/index.php?route=account/account" class="account"><span class="account-text">Войти</span><i class="material-icons-outlined">account_circle</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__second">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-auto"></div>
                    <div class="col">
                        <div class="header__search">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:search.title",
                            "",
                            Array(
                                "CATEGORY_0" => array("iblock_shop"),
                                "CATEGORY_0_TITLE" => "",
                                "CATEGORY_0_iblock_shop" => array("5"),
                                "CHECK_DATES" => "N",
                                "CONTAINER_ID" => "title-search",
                                "INPUT_ID" => "title-search-input",
                                "NUM_CATEGORIES" => "1",
                                "ORDER" => "date",
                                "PAGE" => "#SITE_DIR#search/index.php",
                                "SHOW_INPUT" => "Y",
                                "SHOW_OTHERS" => "N",
                                "TOP_COUNT" => "5",
                                "USE_LANGUAGE_GUESS" => "Y"
                            )
                        );?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header__carr">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:sale.basket.basket.line",
                            "",
                            Array(
                                "HIDE_ON_BASKET_PAGES" => "Y",
                                "PATH_TO_AUTHORIZE" => "",
                                "PATH_TO_BASKET" => SITE_DIR."personal/cart/",
                                "PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
                                "PATH_TO_PERSONAL" => SITE_DIR."personal/",
                                "PATH_TO_PROFILE" => SITE_DIR."personal/",
                                "PATH_TO_REGISTER" => SITE_DIR."login/",
                                "POSITION_FIXED" => "N",
                                "SHOW_AUTHOR" => "N",
                                "SHOW_EMPTY_VALUES" => "Y",
                                "SHOW_NUM_PRODUCTS" => "Y",
                                "SHOW_PERSONAL_LINK" => "Y",
                                "SHOW_PRODUCTS" => "N",
                                "SHOW_REGISTRATION" => "Y",
                                "SHOW_TOTAL_PRICE" => "Y"
                            )
                        );?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>