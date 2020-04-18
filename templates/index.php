<?php
script('cookbook', 'script');
script('cookbook', 'vue');
style('cookbook', 'style');
?>

<div id="app">
    <div id="app-navigation">
        <?php print_unescaped($this->inc('navigation/index')); ?>
        <?php print_unescaped($this->inc('settings/index')); ?>
    </div>

    <div id="app-content">
        <div id="app-content-wrapper">
            <div class="loader">
                <span class="icon-loading"></span>
            </div>
        </div>
    </div>
</div>
