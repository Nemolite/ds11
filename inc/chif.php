<?php
/**
 * Блок руководителя ,важных банеров и основные документы
 */
add_action('ds11_chif_block','ds11_chif_block_output');
function ds11_chif_block_output(){
    ?>
     <div class="ds11-chif">
        <h5>Заведующий «Детский сад № 11 «Колокольчик"</h5>
            <div class="ds11-chif-img">
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/zav.jpg" alt="Заведующий МБДОУ Д/С №11 Колокольчик Караганова Людмила Юрьевна ">
            </div>
        <h5>Караганова Людмила Юрьевна</h5>                
    </div> <!-- .ds11-chif -->
   
    <?
}
?>