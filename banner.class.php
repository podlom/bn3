<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 20.12.2016
 * Time: 15:24

 * Updated: 2025-03-14 23:48
 */

namespace app;


class banner
{
    const REF_NAME = 'bn3';

    private $lang;
    private $validLang = ['en', 'uk', 'ru'];
    private $num = null;

    public function __construct($lang = 'en', $num = null)
    {
        if (in_array($lang, $this->validLang)) {
            $this->lang = $lang;
        } else {
            $this->lang = 'en';
        }
        if (!is_null($num)) {
            $this->num = $num;
        }
    }

    public function getHeaders()
    {
        if (!headers_sent()) {
            header('Content-Type:text/html; charset=UTF-8');
        }
    }

    public function getBannerHtml()
    {
        $bannerHtml = '';

        switch ($this->lang) {
            case 'en':
                $banners = [
                    "<a href='https://ko-fi.com/L3L5LJ3TB' target='_blank'><img height='36' style='border:0px;height:36px;' src='https://storage.ko-fi.com/cdn/kofi2.png?v=3' border='0' alt='Buy Me a Coffee at ko-fi.com' /></a>",

                    // '<a target="_blank" href="https://www.amazon.com/gp/search?ie=UTF8&tag=shkod19-20&linkCode=ur2&linkId=95eb6ad149f9f201040969275d511d0d&camp=1789&creative=9325&index=books&keywords=Humor and Jokes">Top humor and jokes (paid link)</a>',
                    // '<a target="_blank" href="https://www.amazon.com/b?_encoding=UTF8&tag=shkod19-20&linkCode=ur2&linkId=2649d1ee7038753a3de39730f9ecc35a&camp=1789&creative=9325&node=86">Top 100 Hot Humor Books (paid link)</a>',
                    // '<a target="_blank" href="https://www.amazon.com/gp/search?ie=UTF8&tag=shkod19-20&linkCode=ur2&linkId=960621d85ab98b42680b33c0cf114824&camp=1789&creative=9325&index=books&keywords=PHP">PHP Books (paid link)</a>',
                    // '<a target="_blank" href="https://www.amazon.com/b?_encoding=UTF8&tag=shkod19-20&linkCode=ur2&linkId=55fbda5c0122b870eb809ee042dc5ff5&camp=1789&creative=9325&node=6">Top Cookboks for Food (paid link)</a>',
                    // '<a target="_blank" href="https://www.amazon.com/b?_encoding=UTF8&tag=shkod19-20&linkCode=ur2&linkId=5a113a655afb74b8e7f4b5c15bab2b5c&camp=1789&creative=9325&node=5">100 Hot Computer and Technology Books (paid link)</a>',
                    // '<a target="_blank" href="https://www.amazon.com/gp/search?ie=UTF8&tag=shkod19-20&linkCode=ur2&linkId=c4288bd9639d7b79a60e82c96f3711a2&camp=1789&creative=9325&index=arts-crafts&keywords=Drawing+Art">Drawing Art (paid link)</a>',
                    // '<a target="_blank" href="https://www.amazon.com/gp/search?ie=UTF8&tag=shkod19-20&linkCode=ur2&linkId=2013322188761005242bd0e128fb64f0&camp=1789&creative=9325&index=arts-crafts&keywords=Art+supplies+for+Drawing">Art supplies for Drawing (paid link)</a>',
                    // '<a target="_blank" href="https://www.amazon.com/gp/search?ie=UTF8&tag=shkod19-20&linkCode=ur2&linkId=7ec590cac001cd6af0e5849fc6120530&camp=1789&creative=9325&index=arts-crafts&keywords=Sketching">Sketching (paid link)</a>',
                    // '<a target="_blank" href="https://www.amazon.com/b?_encoding=UTF8&tag=shkod19-20&linkCode=ur2&linkId=60a6e237332a02084a1d486ac008b7f0&camp=1789&creative=9325&node=229637">100 Networking and Servers Software (paid link)</a>',
                    // '<a target="_blank" href="https://www.amazon.com/b?_encoding=UTF8&tag=shkod19-20&linkCode=ur2&linkId=60a6e237332a02084a1d486ac008b7f0&camp=1789&creative=9325&node=229637">Networking and Servers Software (paid link)</a>',
                    // '<a href="https://www.amazon.com/dp/B0CCLJH8F9?&linkCode=li2&tag=shkod19-20&linkId=cdd812e1b6437122805745e8adb08ed7&language=en_US&ref_=as_li_ss_il" target="_blank"><img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B0CCLJH8F9&Format=_SL160_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=shkod19-20&language=en_US" ></a><img src="https://ir-na.amazon-adsystem.com/e/ir?t=shkod19-20&language=en_US&l=li2&o=1&a=B0CCLJH8F9" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />',

                    '<a target="_blank" href="https://amzn.to/3rkAQmz">Alphabet e-book Kindle Edition</a>',

                    '<a target="_blank" href="https://www.amazon.com/dp/B0CCLJH8F9?&linkCode=ll1&tag=shkod19-20&linkId=dd0e0ae2e4b0b0fa3028b0c6dcbde720&language=en_US&ref_=as_li_ss_tl">Alphabet e-book Kindle Edition</a>',

                    '<a target="_blank" href="https://www.dropbox.com/referrals/AAAwlf2cgPWauEMztYtKtCeDZN0iS4Ib0ZI?src=global9">Dropbox - the best cloud storage for your purposes</a>',

                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2023/04/FESTINGER-BANNER-3-V2.gif" alt="" /></a>',
                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2023/04/FESTINGER-BANNER-1-V2.gif" alt="" /></a>',
                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2023/04/FESTINGER-BANNER-2-V2-1.gif" alt="" /></a>',
                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2021/02/Festinger-Animated-Banner-1-2.gif" alt="" /></a>',

                    '<a href="https://t.me/phpdinos">Join PHPDinos - a Telegram channel for PHP web developers 🦕</a>',
                    '<a href="https://t.me/phpdinos">Join PHPDinos - our Telegram channel for PHP web developers 🦕</a>',

                    '<a href="https://recipes.shkodenko.com/en/?ref=' . self::REF_NAME . '">Best Cooking Recipes - blog about healthy food and cooking</a>',
                    '<a href="https://recipes.shkodenko.com/en/?ref=' . self::REF_NAME . '">Best Cooking Recipes - all about healthy food and cooking</a>',

                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%203.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.cdn.digitaloceanspaces.com/WWW/Badge%201.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%202.svg" alt="DigitalOcean Referral Badge" /></a>',

                    '<a href="https://ko-fi.com/shtaras/shop" target="_blank">Check out my shop on Ko-fi platform</a>',
                    '<a href="https://ko-fi.com/shtaras/shop" target="_blank">Check out our shop on Ko-fi platform</a>',
                    '<a href="https://ko-fi.com/shtaras/shop" target="_blank">Buy someting in shop on Ko-fi platform</a>',
                    '<a href="https://ko-fi.com/shtaras/shop" target="_blank">Get someting for you in shop on Ko-fi platform</a>',

                    '<a href="https://freelancehunt.com/freelancer/sh_taras.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/en/468/1.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/freelancer/sh_taras.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/en/468/2.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/freelancer/sh_taras.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/en/468/3.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/freelancer/sh_taras.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/en/468/5.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/freelancer/sh_taras.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/en/468/6.png" width="468" height="60"></a>',

                    '<a href="http://go.shkodenko.com.ua/to/4" target="_blank" class="p-2 rounded-lg">Buy Me a Coffee ☕</a>',
                    '<a href="http://go.shkodenko.com.ua/to/4" target="_blank" class="p-2 rounded-lg">Buy Me a cup of Coffee ☕</a>',
                    '<a href="http://go.shkodenko.com.ua/to/3" target="_blank" class="p-2 rounded-lg">Support me on a Patreon ☕</a>',
                    '<a href="http://go.shkodenko.com.ua/to/3" target="_blank" class="p-2 rounded-lg">Support us on a Patreon ☕</a>',

                    '<a href="https://ko-fi.com/shtaras" target="_blank" class="p-2 rounded-lg">Buy Me a cup Coffee ☕</a>',
                    '<a href="https://ko-fi.com/shtaras" target="_blank" class="p-2 rounded-lg">Buy Me a Cup of Coffee ☕</a>',

                    '<a href="https://www.shkodenko.com/?ref=' . self::REF_NAME . '">web development blog</a>',
                    '<a href="https://www.shkodenko.com/?ref=' . self::REF_NAME . '">blog about web development</a>',

                    '<a href="https://ip.shkodenko.com/?ref=' . self::REF_NAME . '">get your IP address</a>',
                    '<a href="https://ip.shkodenko.com/?ref=' . self::REF_NAME . '">check your IP address</a>',
                    '<a href="https://ip.shkodenko.com/?ref=' . self::REF_NAME . '">show your IP address</a>',

                    '<a href="https://rndpwd.shkodenko.com/?ref=' . self::REF_NAME . '">Generate secure random passwords</a>',
                    '<a href="https://rndpwd.shkodenko.com/?ref=' . self::REF_NAME . '">Secure random passwords generator</a>',

                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Switch to Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Get benefits with Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Affordable calls with Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Chayka-Pereklyuchayka recommends Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Join Lifecell</a>',

                    '<a href="https://www.canva.com/join/wqv-tdh-kty">Signup to Canva</a>',
                    
                    '<a href="https://www.freelancer.com/u/podlom">Check Taras Shkodenko profile at Freelancer.com</a>',
                    
                    '<a href="https://www.upwork.com/freelancers/~01e05248f10699bf9d">Check Taras Shkodenko profile at Upwork.com</a>',

                    '<a href="https://www.dropbox.com/referrals/AAAwlf2cgPWauEMztYtKtCeDZN0iS4Ib0ZI?src=global91">Download Dropbox for your computer and get 500 MB</a>',

                ];
                break;

            case 'uk':
                $banners = [
                    "<a href='https://ko-fi.com/L3L5LJ3TB' target='_blank'><img height='36' style='border:0px;height:36px;' src='https://storage.ko-fi.com/cdn/kofi2.png?v=3' border='0' alt='Buy Me a Coffee at ko-fi.com' /></a>",

                    '<a target="_blank" href="https://www.dropbox.com/referrals/AAAwlf2cgPWauEMztYtKtCeDZN0iS4Ib0ZI?src=global9">Dropbox - найкраще рішення для зберігання файлів у хмарі</a>',

                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2023/04/FESTINGER-BANNER-3-V2.gif" alt="" /></a>',
                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2023/04/FESTINGER-BANNER-1-V2.gif" alt="" /></a>',
                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2023/04/FESTINGER-BANNER-2-V2-1.gif" alt="" /></a>',
                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2021/02/Festinger-Animated-Banner-1-2.gif" alt="" /></a>',

                    '<a href="https://t.me/phpdinos">Доєднуйтесь до PHPDinos - нового Telegram каналу для PHP та web розробників 🦕</a>',
                    '<a href="https://recipes.shkodenko.com/?ref=' . self::REF_NAME . '">best cooking recipes - блог про здорову їжу та її приготування</a>',

                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%203.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.cdn.digitaloceanspaces.com/WWW/Badge%201.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%202.svg" alt="DigitalOcean Referral Badge" /></a>',

                    '<a href="http://go.shkodenko.com.ua/to/4" target="_blank" class="p-2 rounded-lg">Пригостіть мене горнятком кави ☕</a>',

                    '<a href="https://ko-fi.com/shtaras" target="_blank" class="p-2 rounded-lg">Пригостіть мене кавою ☕</a>',
                    '<a href="https://ko-fi.com/shtaras" target="_blank" class="p-2 rounded-lg">Пригостіть мене філіжанкою кави ☕</a>',

                    '<a href="http://go.shkodenko.com.ua/to/3" target="_blank" class="p-2 rounded-lg">Підтримайте мене на Patreon ☕</a>',

                    '<a href="https://linuxweb.in/?ref=' . self::REF_NAME . '">блог про ОС Linux</a>',

                    '<a href="https://www.shkodenko.com/?ref=' . self::REF_NAME . '">блог розробника Тараса Шкоденко</a>',

                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">сертифікати розробника Тараса Шкоденко</a>',
                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">сертифікована розробника сайтів від Тараса Шкоденко</a>',
                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">програмування та розробника сайтів від Тараса Шкоденко</a>',
                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">програмування та розробника сайтів від сертифікованого розробника</a>',
                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">програмування та розробника сайтів від профі</a>',

                    '<a href="https://ip.shkodenko.com/?lang=uk&ref=' . self::REF_NAME . '">ваша IP адреса</a>',

                    '<a href="https://rndpwd.shkodenko.com/?ref=' . self::REF_NAME . '">безпечний генератор випадкових паролей</a>',

                    '<a href="http://www.weblancer.net/?affiliate=sh_taras">www.weblancer.net - чудовий ресурс для підроботки та фрилансу</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/?affiliate=sh_taras">дивіться мій профіль на сайті www.weblancer.net</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/portfolio/?affiliate=sh_taras">дивіться моє портфоліо на сайті www.weblancer.net</a>',

                    '<a href="https://freelancehunt.com/freelancer/sh_taras.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/1.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/freelancer/sh_taras.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/2.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/freelancer/sh_taras.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/3.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/freelancer/sh_taras.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/5.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/freelancer/sh_taras.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/6.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/freelancer/sh_taras.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ua/468/7.png" width="468" height="60"></a>',

                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">програмування та розробка сайтів, Київ</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">програмування та розробка сайтів, в Україні</a>',

                    '<a href="https://blog.shkodenko.com.ua/?ref=' . self::REF_NAME . '">блог розробника сайтів</a>',
                    '<a href="https://blog.shkodenko.com.ua/?ref=' . self::REF_NAME . '">цікаві статті про розробку сайтів</a>',
                    '<a href="https://blog.shkodenko.com.ua/category/devops-uk/?ref=' . self::REF_NAME . '">цікаві статті для DevOps</a>',
                    '<a href="https://blog.shkodenko.com.ua/category/devops-uk/?ref=' . self::REF_NAME . '">адміністрування веб серверів та ОС Linux</a>',

                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Переходь до Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Отримай вигоду з Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Вигідні дзвінки з Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Чайка-Переключайка рекомендує Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Підключайся до Lifecell</a>',

                    '<a href="https://www.canva.com/join/wqv-tdh-kty">Реєструйся на Canva</a>',
                    
                    '<a href="https://www.freelancer.com/u/podlom">Профіль Тараса Шкоденко на Freelancer.com</a>',
                    
                    '<a href="https://www.upwork.com/freelancers/~01e05248f10699bf9d">Профіль Тараса Шкоденко на Upwork.com</a>',

                    '<a href="https://www.dropbox.com/referrals/AAAwlf2cgPWauEMztYtKtCeDZN0iS4Ib0ZI?src=global91">Завантаж собі Dropbox для комп&apos;ютеру та отримай 500 МБ</a>',

                ];
                break;

            case 'ru':
            default:
                $banners = [
                    "<a href='https://ko-fi.com/L3L5LJ3TB' target='_blank'><img height='36' style='border:0px;height:36px;' src='https://storage.ko-fi.com/cdn/kofi2.png?v=3' border='0' alt='Buy Me a Coffee at ko-fi.com' /></a>",

                    '<a target="_blank" href="https://www.dropbox.com/referrals/AAAwlf2cgPWauEMztYtKtCeDZN0iS4Ib0ZI?src=global9">Dropbox - лучшее решение для файлового хранилища в облаке</a>',

                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2023/04/FESTINGER-BANNER-3-V2.gif" alt="" /></a>',
                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2023/04/FESTINGER-BANNER-1-V2.gif" alt="" /></a>',
                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2023/04/FESTINGER-BANNER-2-V2-1.gif" alt="" /></a>',
                    '<a href="https://account.festingervault.com/ref/47528/"><img decoding="async" src="https://festingervault.com/wp-content/uploads/2021/02/Festinger-Animated-Banner-1-2.gif" alt="" /></a>',

                    '<a href="https://t.me/phpdinos">Присоединяйтесь к PHPDinos - новому Telegram каналу для PHP веб разработчиков 🦕</a>',

                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%203.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.cdn.digitaloceanspaces.com/WWW/Badge%201.svg" alt="DigitalOcean Referral Badge" /></a>',
                    '<a href="https://www.digitalocean.com/?refcode=cfcb074144ad&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%202.svg" alt="DigitalOcean Referral Badge" /></a>',

                    '<a href="http://go.shkodenko.com.ua/to/4" target="_blank" class="p-2 rounded-lg">Угостите меня кофе ☕</a>',
                    '<a href="http://go.shkodenko.com.ua/to/3" target="_blank" class="p-2 rounded-lg">Поддержите меня на Patreon ☕</a>',

                    '<a href="https://ko-fi.com/shtaras" target="_blank" class="p-2 rounded-lg">Чашку кофе ☕</a>',
                    '<a href="https://ko-fi.com/shtaras" target="_blank" class="p-2 rounded-lg">Угостите меня кофе ☕</a>',
                    '<a href="https://ko-fi.com/shtaras" target="_blank" class="p-2 rounded-lg">Угостите меня чашкой кофе ☕</a>',

                    '<a href="https://linuxweb.in/?ref=' . self::REF_NAME . '">блог про ОС Linux</a>',

                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">программирование и разработка сайтов от Тараса Шкоденко</a>',
                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">программирование и разработка сайтов от сертифицированного разработчика</a>',
                    '<a href="https://shkodenko.com.ua/tech.html?ref=' . self::REF_NAME . '#cert">программирование и разработка сайтов от профессионала</a>',

                    '<a href="https://www.shkodenko.com/?ref=' . self::REF_NAME . '">блог разработчика Тараса Шкоденко</a>',

                    '<a href="https://rndpwd.shkodenko.com/?ref=' . self::REF_NAME . '">сервис генерации безопасных паролей</a>',

                    '<a href="https://ip.shkodenko.com/?ref=' . self::REF_NAME . '">узнать ваш IP адрес</a>',

                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">программирование и разработка сайтов, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">программирование и разработка сайтов, в Украине</a>',

                    '<a href="http://www.weblancer.net/?affiliate=sh_taras">www.weblancer.net - отличный ресурс для подработки и фрилансеров</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/?affiliate=sh_taras">смотрите мой профиль на сайте www.weblancer.net</a>',
                    '<a href="http://www.weblancer.net/users/sh_taras/portfolio/?affiliate=sh_taras">смотрите мое портфолио на сайте www.weblancer.net</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">программирование и создание сайтов любой сложности, Киев</a>',

                    '<a href="https://freelancehunt.com/freelancer/sh_taras.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/1.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/freelancer/sh_taras.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/2.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/freelancer/sh_taras.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/3.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/freelancer/sh_taras.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/4.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/freelancer/sh_taras.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/5.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/freelancer/sh_taras.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/6.png" width="468" height="60"></a>',
                    '<a href="https://freelancehunt.com/freelancer/sh_taras.html" target="_blank"><img alt="FreelanceHunt.com" src="https://freelancehunt.com/static/images/bonus/ru/468/7.png" width="468" height="60"></a>',

                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">создание сайтов на основе Wordpress CMS любой сложности, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">создание сайтов на основе Drupal 7+ любой сложности, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">создание сайтов на основе CMS Joomla! любой сложности, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">создание сайтов на основе Yii2 Framework любой сложности, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">создание сайтов на основе Symfony 4+ Framework любой сложности, Киев</a>',
                    '<a href="https://www.shkodenko.com.ua/?ref=' . self::REF_NAME . '">создание сайтов на PHP любой сложности, Киев</a>',

                    '<a href="https://blog.shkodenko.com.ua/?ref=' . self::REF_NAME . '">блог для разработчика сайтов</a>',
                    '<a href="https://blog.shkodenko.com.ua/?ref=' . self::REF_NAME . '">всякие полезности для разработки сайтов</a>',
                    '<a href="https://blog.shkodenko.com.ua/ru/category/devops-ru/?ref=' . self::REF_NAME . '">всякие полезности для DevOps</a>',
                    '<a href="https://blog.shkodenko.com.ua/ru/category/devops-ru/?ref=' . self::REF_NAME . '">всякие полезности системному администратору</a>',
                    '<a href="https://blog.shkodenko.com.ua/ru/category/devops-ru/?ref=' . self::REF_NAME . '">настройка и администрирование ОС Linux</a>',

                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Переходи на Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Получай выгоду с Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Выгодные звонки с Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Чайка-Переключайка рекомендует Lifecell</a>',
                    '<a href="https://r.lifecell.ua/RuCC" target="_blank">Подключайся к Lifecell</a>',

                    '<a href="https://www.canva.com/join/wqv-tdh-kty">Регистрируйся на Canva</a>',
                    
                    '<a href="https://www.freelancer.com/u/podlom">Профиль Тараса Шкоденко на Freelancer.com</a>',
                    
                    '<a href="https://www.upwork.com/freelancers/~01e05248f10699bf9d">Профиль Тараса Шкоденко на Upwork.com</a>',

                    '<a href="https://www.dropbox.com/referrals/AAAwlf2cgPWauEMztYtKtCeDZN0iS4Ib0ZI?src=global91">Загрузи себе Dropbox для компьютера и получи 500 МБ</a>',

                ];
                break;
        }

        if (!empty($banners)) {
            if (!is_null($this->num) && isset($banners[$this->num])) {
                $bannerHtml = $banners[$this->num];
            } else {
                shuffle($banners);
                $bannerHtml = $banners[0];
            }

            // Витягуємо URL з тега <a href="...">
            if (preg_match('/<a\s[^>]*href=[\'"]([^\'"]+)[\'"]/i', $bannerHtml, $matches92)) {
                $this->logClick($matches92[1]);
            }

            return $bannerHtml;
        }

        // Витягуємо URL з тега <a href="...">
        if (preg_match('/<a\s[^>]*href=[\'"]([^\'"]+)[\'"]/i', $bannerHtml, $matches91)) {
            $this->logClick($matches91[1]);
        }

        return $bannerHtml;
    }

    private function logClick($url)
    {
        $payload = [
            'key' => '***REMOVED***', // <-- має відповідати Yii2 конфігурації
            'url' => $url,
            'ip' => $_SERVER['REMOTE_ADDR'] ?? null,
            // 'country' => null,
            // 'city' => null,
            // 'isp' => null,
            'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? null,
            'network' => self::REF_NAME,
            'lang' => $this->lang,
        ];

        $ch = curl_init('https://go.shkodenko.com/log-banner-click');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 1); // не чекай довго
        curl_exec($ch);
        curl_close($ch);
    }

    private function ipInfo($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
        $output = NULL;
        if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
            $ip = $_SERVER["REMOTE_ADDR"];
            if ($deep_detect) {
                if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
            }
        }
        $purpose    = str_replace(["name", "\n", "\t", " ", "-", "_"], NULL, strtolower(trim($purpose)));
        $support    = ["country", "countrycode", "state", "region", "city", "location", "address"];
        $continents = [
            "AF" => "Africa",
            "AN" => "Antarctica",
            "AS" => "Asia",
            "EU" => "Europe",
            "OC" => "Australia (Oceania)",
            "NA" => "North America",
            "SA" => "South America",
        ];
        if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
            $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
            if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
                switch ($purpose) {
                    case "location":
                        $output = array(
                            "city"           => @$ipdat->geoplugin_city,
                            "state"          => @$ipdat->geoplugin_regionName,
                            "country"        => @$ipdat->geoplugin_countryName,
                            "country_code"   => @$ipdat->geoplugin_countryCode,
                            "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                            "continent_code" => @$ipdat->geoplugin_continentCode
                        );
                        break;
                    case "address":
                        $address = array($ipdat->geoplugin_countryName);
                        if (@strlen($ipdat->geoplugin_regionName) >= 1)
                            $address[] = $ipdat->geoplugin_regionName;
                        if (@strlen($ipdat->geoplugin_city) >= 1)
                            $address[] = $ipdat->geoplugin_city;
                        $output = implode(", ", array_reverse($address));
                        break;
                    case "city":
                        $output = @$ipdat->geoplugin_city;
                        break;
                    case "state":
                        $output = @$ipdat->geoplugin_regionName;
                        break;
                    case "region":
                        $output = @$ipdat->geoplugin_regionName;
                        break;
                    case "country":
                        $output = @$ipdat->geoplugin_countryName;
                        break;
                    case "countrycode":
                        $output = @$ipdat->geoplugin_countryCode;
                        break;
                }
            }
        }
        return $output;
    }
}
