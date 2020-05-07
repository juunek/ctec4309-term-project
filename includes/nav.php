<div class="container nav">
    <div class="nav-bar">
        <div class="logo">
            <a class="" href="index.php" title="Home"><img src="images/apb-logo.svg" height="120px"></a>
        </div>
        <div class="contact">
            <h4><a href="tel:817-200-6418">(817) 200-6418</a></h4>
            <p><a href="https://goo.gl/maps/1Jsr7fxhxkqSenWe9" target="_blank"><img src="images/maps-icon.svg" height="12px"> 3701 S Cooper Street, #169</a></p>
        </div>
    </div>
    
    <div class="nav-menu"
        <div class="multiblock">
            <?php
                foreach ($navItems as $item) {
                    echo "<a class=\"nav-items\" href=\"$item[slug]\">$item[title]</a>";
                }
            ?>
        </div>
    </div>
</div>