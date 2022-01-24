<?php
/**
 * Яндекс карты
 */

add_action('ds11_yandexmap','ds11_yandexmap_output');
function ds11_yandexmap_output(){
    ?>
    <div class="ds11_yandexmap">
        <h3>Мы на карте</h3>
        <div class="yandexmap">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A401d30829bf96c5d5b073245f1d71bdca7c79fc55bfa7d13b4218a74cc37f0d5&amp;width=100%25&amp;height=340&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>

    </div>
    <?php
}
?>