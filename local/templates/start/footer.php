<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);
?>
    </div>
    <div itemscope itemtype="https://schema.org/Organization" style="display: none;">
        <span itemprop="name">Your organization</span>
        <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
            <span itemprop="streetAddress">ул. Большая Академическая, д. 5</span>,
            <span itemprop="addressLocality">Москва</span>.
        </div>
        <img itemprop="logo" src="/logo.png" />
        <meta itemprop="telephone" content="+7 (495) 999-99-99" />
        <a itemprop="url" href="https://www.yoursite.ru/"></a>
        <meta itemprop="email" content="info@yourorganization.ru">
    </div>
  </body>
</html>

