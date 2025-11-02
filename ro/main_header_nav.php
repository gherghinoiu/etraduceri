<?php
// main_header_nav.php
// This file assumes $activeMenuItemId is set before including

$activeMenuItemId = isset($activeMenuItemId) ? $activeMenuItemId : 0; // Default to no active item if not set

function getNavLinkClass($itemId, $currentActiveId)
{
    $class = "nav-link";
    if ($itemId == $currentActiveId) {
        $class .= " current active";
        if (isset($isCurrentPageAria) && $isCurrentPageAria) {
            $class .= '" aria-current="page';
        }
    }
    return $class;
}
?>
<div id="t4-header" class="t4-section  t4-header  t4-palette-primary  t4-sticky">
    <div class="t4-section-inner container">
        <div class="t4-row row">
            <div class="t4-col logo col col-lg-2">
                <div class="navbar-brand logo-image logo-control">
                    <a href="../index.html" title="Laseda Services">
                        <img class="logo-img-sm d-block d-sm-none" src="../images/mstile-50x50.png#joomlaImage://local-images/mstile-50x50.png?width=50&height=50" alt="Laseda Services" />

                        <img class="logo-img d-none d-sm-block" src="../images/mstile-50x50.png#joomlaImage://local-images/mstile-50x50.png?width=50&height=50" alt="Laseda Services" />

                    </a>
                </div>

            </div>
            <div class="t4-col mainnav col">
                <div class="t4-navbar">

                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#t4-megamenu-mainmenu-ro-ro" aria-expanded="false" aria-label="Toggle navigation" style="display: none;">
                            <i class="fa fa-bars toggle-bars"></i>
                        </button>
                        <div id="t4-megamenu-mainmenu-ro-ro" class="t4-megamenu collapse navbar-collapse">

                            <ul class="nav navbar-nav level0" itemscope="itemscope" itemtype="http://www.schema.org/SiteNavigationElement">
                                <li class="nav-item default dropdown mega" data-id="108" itemprop="name" data-level="1" data-align="left"><a href="index.html" class="<?php echo getNavLinkClass(108, $activeMenuItemId); ?>" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">Acasă<i class="item-caret"></i></a>
                                    <div class="dropdown-menu mega-dropdown-menu">
                                        <div class="mega-dropdown-inner">

                                            <div class="row">
                                                <div class="mega-sub-1 col-12 col-md">
                                                    <div class="mega-col-module">
                                                        <div class="mega-inner">

                                                            <ul class="mega-nav level11">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item" data-id="116" itemprop="name" data-level="1"><a href="preturi.html" class="<?php echo getNavLinkClass(116, $activeMenuItemId); ?>">Prețuri</a></li>
                                <li class="nav-item dropdown parent" data-id="117" itemprop="name" data-level="1"><a href="servicii.html" class="<?php echo getNavLinkClass(117, $activeMenuItemId); ?> dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">Servicii<i class="item-caret"></i></a>
                                    <div class="dropdown-menu level1" data-bs-popper="static">
                                        <div class="dropdown-menu-inner">
                                            <ul>
                                                <li class="nav-item" data-id="121" itemprop="name" data-level="2"><a href="servicii/licitatii-si-proiecte-cu-finantare-europeana.html" class="<?php echo getNavLinkClass(121, $activeMenuItemId); ?> dropdown-item">Licitații și proiecte cu finanțare europeană</a></li>
                                                <li class="nav-item" data-id="122" itemprop="name" data-level="2"><a href="servicii/traduceri-specializate.html" class="<?php echo getNavLinkClass(122, $activeMenuItemId); ?> dropdown-item">Traduceri specializate</a></li>
                                                <li class="nav-item" data-id="123" itemprop="name" data-level="2"><a href="servicii/servicii-pentru-companii.html" class="<?php echo getNavLinkClass(123, $activeMenuItemId); ?> dropdown-item">Servicii pentru companii</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item" data-id="118" itemprop="name" data-level="1"><a href="intrebari-frecvente.html" class="<?php echo getNavLinkClass(118, $activeMenuItemId); ?>">Întrebări frecvente</a></li>
                                <li class="nav-item" data-id="119" itemprop="name" data-level="1"><a href="contact.html" class="<?php echo getNavLinkClass(119, $activeMenuItemId); ?>">Contact</a></li>
                                <li class="nav-item" data-id="120" itemprop="name" data-level="1"><a href="comanda-online.php" class="<?php echo getNavLinkClass(120, $activeMenuItemId); ?>">Comandă</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- <span id="triggerButton" class="btn js-offcanvas-trigger t4-offcanvas-toggle d-lg-none" data-offcanvas-trigger="off-canvas-right"><i class="fa fa-bars toggle-bars"></i></span> -->
                </div>

            </div>
        </div>
    </div>
</div>