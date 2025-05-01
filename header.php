<?php
function isActive($page)
{
    return ($_SERVER['REQUEST_URI'] == $page) ? 'elementor-item-active' : '';
}
?>

<div component="header.php">
    <link rel="stylesheet" type="text/css" href="/css/customer.css">
    <script type="text/javascript" src="/js/jiaogeiwocommon.js"></script>

    <div data-elementor-type="header" data-elementor-id="98"
        class="elementor elementor-98 elementor-location-header" data-elementor-settings="[]">
        <div class="elementor-section-wrap">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-d003c66 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="d003c66" data-element_type="section" data-settings="{"
                background_background":"classic","sticky":"top","sticky_effects_offset":2,"sticky_on":["desktop","tablet","mobile"],"sticky_offset":0}"="">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-952ff51"
                        data-id="952ff51" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-418bccb elementor-widget elementor-widget-image"
                                data-id="418bccb" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img width="154" height="60"
                                        src="images/header/logo.png"
                                        class="attachment-large size-large" alt="" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-47e0e60"
                        data-id="47e0e60" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div
                                class="elementor-element elementor-element-269a059 elementor-nav-menu__align-right elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu">



                                <div component="menus.js">

                                    <div class="elementor-widget-container">
                                        <nav migration_allowed="1" migrated="0" role="navigation"
                                            class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none">
                                            <ul id="menu-1-269a059" class="elementor-nav-menu">

                                                <li
                                                    class="menu-item menu-item-type-custom page_item menu-item-13752">
                                                    <a href="/index.php" class="elementor-item <?php echo isActive('/index.php'); ?>">Home</a>

                                                </li>


                                                <li
                                                    class="menu-item menu-item-type-custom page_item menu-item-13753">
                                                    <a href="/about.php" class="elementor-item <?php echo isActive('/about.php'); ?>">About Us</a>

                                                </li>


                                                <li
                                                    class="menu-item menu-item-type-custom page_item menu-item-object-custom menu-item-has-children menu-item-13754">
                                                    <a href="/product.php" aria-haspopup="true"
                                                        aria-expanded="false"
                                                        class="elementor-item elementor-item-anchor <?php echo isActive('/product.php'); ?>">Product</a>

                                                    <ul class="sub-menu elementor-nav-menu--dropdown">

                                                        <li
                                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-14316">
                                                            <a href="/product.php?c=press_brake"
                                                                class="elementor-sub-item">Press Brake</a>

                                                            <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15956">
                                                                    <a href="/press-brake/product-electro_hydraulic_cnc_press_brake.php"
                                                                        class="elementor-sub-item">Electro-hydraulic
                                                                        CNC Press Brake</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15957">
                                                                    <a href="/press-brake/product-torsion_press_brake.php"
                                                                        class="elementor-sub-item">Torsion-synchro
                                                                        CNC Press Brake</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15958">
                                                                    <a href="/press-brake/product-tandem_press_brake.php"
                                                                        class="elementor-sub-item">Tandem Press
                                                                        Brake</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15959">
                                                                    <a href="/press-brake/product-heavy_duty_press_brake.php"
                                                                        class="elementor-sub-item">Heavy-duty Press
                                                                        Brake</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15960">
                                                                    <a href="/press-brake/product-robotic_press_brake.php"
                                                                        class="elementor-sub-item">Robotic Press
                                                                        Brake</a>
                                                                </li>

                                                            </ul>

                                                        </li>


                                                        <li
                                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15316">
                                                            <a href="/product.php?c=shearing_machine"
                                                                class="elementor-sub-item">Hydraulic Shearing Machine</a>

                                                            <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15961">
                                                                    <a href="/shearing-machine/product-swing_beam_shearing_machine.php"
                                                                        class="elementor-sub-item">Swing Beam
                                                                        Shearing Machine</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15962">
                                                                    <a href="/shearing-machine/product-guillotine_shearing_machine.php"
                                                                        class="elementor-sub-item">Guillotine
                                                                        Shearing Machine</a>
                                                                </li>

                                                            </ul>

                                                        </li>


                                                        <li
                                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15950">
                                                            <a href="/product.php?c=laser_cutting_machine"
                                                                class="elementor-sub-item">Fiber Laser Cutting Machine</a>

                                                            <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15963">
                                                                    <a href="/laser-cutting-machine/product-single_table_fiber_laser_cutting_machine.php"
                                                                        class="elementor-sub-item">T1 Single Table
                                                                        Fiber Laser Cutting Machine</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15964">
                                                                    <a href="/laser-cutting-machine/product-double_table_fiber_laser_cutting_machine.php"
                                                                        class="elementor-sub-item">T2 Double Table
                                                                        Fiber Laser Cutting Machine</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15965">
                                                                    <a href="/laser-cutting-machine/product-fully_enclosed_fiber_laser_cutting_machine.php"
                                                                        class="elementor-sub-item">T3 Fully Enclosed
                                                                        Laser Cutting Machine</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15966">
                                                                    <a href="/laser-cutting-machine/product-single_panel_tube__laser_cutting_machine.php"
                                                                        class="elementor-sub-item">TR1 Single Panel
                                                                        Tube Integrated Laser Cutting Machine</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15967">
                                                                    <a href="/laser-cutting-machine/product-exchange_panel_tube_laser_cutting_machine.php"
                                                                        class="elementor-sub-item">TR2 Exchange
                                                                        Table Plate and Tube Integrated Laser
                                                                        Cutting Machine</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15968">
                                                                    <a href="/laser-cutting-machine/product-full_protection_tube_laser_cutting_machine.php"
                                                                        class="elementor-sub-item">TR3
                                                                        Full-protection Interactive Table Panel Tube
                                                                        Integrated Laser Cutting Machine</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15969">
                                                                    <a href="/laser-cutting-machine/product-tube_laser_cutting_machine.php"
                                                                        class="elementor-sub-item">Tube Laser
                                                                        Cutting Machine</a>
                                                                </li>

                                                            </ul>

                                                        </li>


                                                        <li
                                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15951">
                                                            <a href="/product.php?c=plate_rolling_machine"
                                                                class="elementor-sub-item">Plate Rolling
                                                                Machine</a>

                                                            <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15970">
                                                                    <a href="/rolling-machine/product-plate_rolling_machine.php"
                                                                        class="elementor-sub-item">W11 Three-roller
                                                                        Plate Rolling Machine</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15971">
                                                                    <a href="/rolling-machine/product-four-roller_plate_rolling_machine.php"
                                                                        class="elementor-sub-item">W11S Universal
                                                                        Plate Rolling Machine</a>
                                                                </li>

                                                            </ul>

                                                        </li>


                                                        <li
                                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15952">
                                                            <a href="/product.php?c=hand_operated_ironworker"
                                                                class="elementor-sub-item">Hand-Operated
                                                                Ironworker</a>

                                                            <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-16459">
                                                                    <a href="/ironworker/product-hand_operated_ironworker.php"
                                                                        class="elementor-sub-item">Hand-Operated
                                                                        Ironworker</a>
                                                                </li>

                                                            </ul>

                                                        </li>


                                                        <li
                                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15953">
                                                            <a href="/product.php?c=four_column_hydraulic_press"
                                                                class="elementor-sub-item">Four-Column Hydraulic
                                                                Press</a>

                                                            <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-16460">
                                                                    <a href="/four-column-hydraulic-press/product-four_column_hydraulic_press.php"
                                                                        class="elementor-sub-item">Four-Column
                                                                        Hydraulic Press</a>
                                                                </li>

                                                            </ul>

                                                        </li>


                                                        <li
                                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15954">
                                                            <a href="/product.php?c=mechanical_blade"
                                                                class="elementor-sub-item">Mechanical Blade</a>

                                                            <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15972">
                                                                    <a href="/mechanical-blade/product-rolling_shear_blade.php"
                                                                        class="elementor-sub-item">Rolling Shear Slitting Blade</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15973">
                                                                    <a href="/mechanical-blade/product-slitting_circular_blade.php"
                                                                        class="elementor-sub-item">Slitting round
                                                                        blade</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15975">
                                                                    <a href="/mechanical-blade/product-shearing_machine_blade.php"
                                                                        class="elementor-sub-item">Shearing Machine
                                                                        Blade</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15977">
                                                                    <a href="/mechanical-blade/product-doctor_blade.php"
                                                                        class="elementor-sub-item">Ink Doctor
                                                                        Blade</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15978">
                                                                    <a href="/mechanical-blade/product-rolling_blade.php"
                                                                        class="elementor-sub-item">Rolled Steel
                                                                        Blade</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15979">
                                                                    <a href="/mechanical-blade/product-slow_cursher_blade.php"
                                                                        class="elementor-sub-item">Slow Shredder
                                                                        Blade</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15980">
                                                                    <a href="/mechanical-blade/product-toothed_blade.php"
                                                                        class="elementor-sub-item">Saw Blade</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15981">
                                                                    <a href="/mechanical-blade/product-chipper_blade.php"
                                                                        class="elementor-sub-item">Chipper Blade</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15982">
                                                                    <a href="/mechanical-blade/product-corrugated_paper_cutting_blade.php"
                                                                        class="elementor-sub-item">Corrugated Paper
                                                                        Cutting Slitter Blade</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15983">
                                                                    <a href="/mechanical-blade/product-crusher_blade.php"
                                                                        class="elementor-sub-item">Crusher Blade</a>
                                                                </li>

                                                            </ul>

                                                        </li>


                                                        <li
                                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15955">
                                                            <a href="/product.php?c=bending_machine_mold"
                                                                class="elementor-sub-item">Press Brake Tools</a>

                                                            <ul class="sub-menu elementor-nav-menu--dropdown">

                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15984">
                                                                    <a href="/bending-machine-mold/product-cnc_bending_machine_mold.php"
                                                                        class="elementor-sub-item">Die of CNC Press
                                                                        Brake</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15985">
                                                                    <a href="/bending-machine-mold/product-flattening_die_of_press_brake.php"
                                                                        class="elementor-sub-item">Press Brake
                                                                        Flattening Die</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15986">
                                                                    <a href="/bending-machine-mold/product-upper_die_of_press_brake.php"
                                                                        class="elementor-sub-item">Upper Die of
                                                                        Press Brake</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15987">
                                                                    <a href="/bending-machine-mold/product-v_lower_die_of_press_brake.php"
                                                                        class="elementor-sub-item">Single/Multi V
                                                                        Lower Die of Press Brake</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15988">
                                                                    <a href="/bending-machine-mold/product-radius_die_of_press_brake.php"
                                                                        class="elementor-sub-item">Circular Bending Die of Press
                                                                        Brake</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15989">
                                                                    <a href="/bending-machine-mold/product-gooseneck_punch_of_press_brake.php"
                                                                        class="elementor-sub-item">Gooseneck
                                                                        Punch of Press Brake</a>
                                                                </li>


                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15990">
                                                                    <a href="/bending-machine-mold/product-mark_free_die_of_press_brake.php"
                                                                        class="elementor-sub-item">Mark-Free Punch of Press Brake</a>
                                                                </li>

                                                            </ul>

                                                        </li>

                                                    </ul>

                                                </li>


                                                <li
                                                    class="menu-item menu-item-type-custom page_item menu-item-13755">
                                                    <a href="/services.php" class="elementor-item <?php echo isActive('/services.php'); ?>">Services</a>

                                                </li>


                                                <li
                                                    class="menu-item menu-item-type-custom page_item menu-item-13756">
                                                    <a href="/blog.php"
                                                        class="elementor-item <?php echo isActive('/blog.php'); ?>">Blog</a>

                                                </li>


                                                <li
                                                    class="menu-item menu-item-type-custom page_item menu-item-13758">
                                                    <a href="/contact.php" class="elementor-item  <?php echo isActive('/contact.php'); ?>"">Contact us</a>

                                                    </li>
                                                     <?php include 'translator.php'; ?>
                                                </ul>
                                            </nav>
                                            <div class=" elementor-menu-toggle" role="button" tabindex="0"
                                                        aria-label="Menu Toggle" aria-expanded="false">
                                                        <i class="eicon-menu-bar" aria-hidden="true" role="presentation"></i>
                                                        <span class="elementor-screen-only">Menu</span>
                                    </div>
                                    <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container"
                                        role="navigation" aria-hidden="true">
                                        <ul id="menu-2-269a059" class="elementor-nav-menu">

                                            <li
                                                class="menu-item menu-item-type-custom page_item menu-item-13752">
                                                <a href="/index.php" class="elementor-item">Home</a>

                                            </li>


                                            <li
                                                class="menu-item menu-item-type-custom page_item menu-item-13753">
                                                <a href="/about.php" class="elementor-item">About Us</a>

                                            </li>


                                            <li
                                                class="menu-item menu-item-type-custom page_item menu-item-object-custom menu-item-has-children menu-item-13754">
                                                <a href="/product.php" aria-haspopup="true"
                                                    aria-expanded="false"
                                                    class="elementor-item elementor-item-anchor">Product</a>

                                                <ul class="sub-menu elementor-nav-menu--dropdown">

                                                    <li
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-14316">
                                                        <a href="/product.php?c=press_brake"
                                                            class="elementor-sub-item">Press Brake</a>

                                                        <ul class="sub-menu elementor-nav-menu--dropdown">

                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15956">
                                                                <a href="/press-brake/product-electro_hydraulic_cnc_press_brake.php"
                                                                    class="elementor-sub-item">Electro-hydraulic
                                                                    CNC Press Brake</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15957">
                                                                <a href="/press-brake/product-torsion_press_brake.php"
                                                                    class="elementor-sub-item">Torsion-synchro
                                                                    CNC Press Brake</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15958">
                                                                <a href="/press-brake/product-tandem_press_brake.php"
                                                                    class="elementor-sub-item">Tandem Press
                                                                    Brake</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15959">
                                                                <a href="/press-brake/product-heavy_duty_press_brake.php"
                                                                    class="elementor-sub-item">Heavy-duty Press
                                                                    Brake</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15960">
                                                                <a href="/press-brake/product-robotic_press_brake.php"
                                                                    class="elementor-sub-item">Robotic Press
                                                                    Brake</a>
                                                            </li>

                                                        </ul>

                                                    </li>


                                                    <li
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15316">
                                                        <a href="/product.php?c=shearing_machine"
                                                            class="elementor-sub-item">Hydraulic Shearing Machine</a>

                                                        <ul class="sub-menu elementor-nav-menu--dropdown">

                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15961">
                                                                <a href="/shearing-machine/product-swing_beam_shearing_machine.php"
                                                                    class="elementor-sub-item">Swing Beam
                                                                    Shearing Machine</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15962">
                                                                <a href="/shearing-machine/product-guillotine_shearing_machine.php"
                                                                    class="elementor-sub-item">Guillotine
                                                                    Shearing Machine</a>
                                                            </li>

                                                        </ul>

                                                    </li>


                                                    <li
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15950">
                                                        <a href="/product.php?c=laser_cutting_machine"
                                                            class="elementor-sub-item">Fiber Laser Cutting Machine</a>

                                                        <ul class="sub-menu elementor-nav-menu--dropdown">

                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15963">
                                                                <a href="/laser-cutting-machine/product-single_table_fiber_laser_cutting_machine.php"
                                                                    class="elementor-sub-item">T1 Single Table
                                                                    Fiber Laser Cutting Machine</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15964">
                                                                <a href="/laser-cutting-machine/product-double_table_fiber_laser_cutting_machine.php"
                                                                    class="elementor-sub-item">T2 Double Table
                                                                    Fiber Laser Cutting Machine</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15965">
                                                                <a href="/laser-cutting-machine/product-fully_enclosed_fiber_laser_cutting_machine.php"
                                                                    class="elementor-sub-item">T3 Fully Enclosed
                                                                    Laser Cutting Machine</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15966">
                                                                <a href="/laser-cutting-machine/product-single_panel_tube__laser_cutting_machine.php"
                                                                    class="elementor-sub-item">TR1 Single Panel
                                                                    Tube Integrated Laser Cutting Machine</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15967">
                                                                <a href="/laser-cutting-machine/product-exchange_panel_tube_laser_cutting_machine.php"
                                                                    class="elementor-sub-item">TR2 Exchange
                                                                    Table Plate and Tube Integrated Laser
                                                                    Cutting Machine</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15968">
                                                                <a href="/laser-cutting-machine/product-full_protection_tube_laser_cutting_machine.php"
                                                                    class="elementor-sub-item">TR3
                                                                    Full-protection Interactive Table Panel Tube
                                                                    Integrated Laser Cutting Machine</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15969">
                                                                <a href="/laser-cutting-machine/product-tube_laser_cutting_machine.php"
                                                                    class="elementor-sub-item">Tube Laser
                                                                    Cutting Machine</a>
                                                            </li>

                                                        </ul>

                                                    </li>


                                                    <li
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15951">
                                                        <a href="/product.php?c=plate_rolling_machine"
                                                            class="elementor-sub-item">Plate Rolling
                                                            Machine</a>

                                                        <ul class="sub-menu elementor-nav-menu--dropdown">

                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15970">
                                                                <a href="/rolling-machine/product-plate_rolling_machine.php"
                                                                    class="elementor-sub-item">W11 Three-roller
                                                                    Plate Rolling Machine</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15971">
                                                                <a href="/rolling-machine/product-four-roller_plate_rolling_machine.php"
                                                                    class="elementor-sub-item">W11S Universal
                                                                    Plate Rolling Machine</a>
                                                            </li>

                                                        </ul>

                                                    </li>


                                                    <li
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15952">
                                                        <a href="/product.php?c=hand_operated_ironworker"
                                                            class="elementor-sub-item">Hand-Operated
                                                            Ironworker</a>

                                                        <ul class="sub-menu elementor-nav-menu--dropdown">

                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-16459">
                                                                <a href="/ironworker/product-hand_operated_ironworker.php"
                                                                    class="elementor-sub-item">Hand-Operated
                                                                    Ironworker</a>
                                                            </li>

                                                        </ul>

                                                    </li>


                                                    <li
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15953">
                                                        <a href="/product.php?c=four_column_hydraulic_press"
                                                            class="elementor-sub-item">Four-Column Hydraulic
                                                            Press</a>

                                                        <ul class="sub-menu elementor-nav-menu--dropdown">

                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-16460">
                                                                <a href="/four-column-hydraulic-press/product-four_column_hydraulic_press.php"
                                                                    class="elementor-sub-item">Four-Column
                                                                    Hydraulic Press</a>
                                                            </li>

                                                        </ul>

                                                    </li>


                                                    <li
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15954">
                                                        <a href="/product.php?c=mechanical_blade"
                                                            class="elementor-sub-item">Mechanical Blade</a>

                                                        <ul class="sub-menu elementor-nav-menu--dropdown">

                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15972">
                                                                <a href="/mechanical-blade/product-rolling_shear_blade.php"
                                                                    class="elementor-sub-item">Rolling Shear
                                                                    Slitting Blade</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15973">
                                                                <a href="/mechanical-blade/product-slitting_circular_blade.php"
                                                                    class="elementor-sub-item">Slitting round
                                                                    blade</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15975">
                                                                <a href="/mechanical-blade/product-shearing_machine_blade.php"
                                                                    class="elementor-sub-item">Shearing Machine
                                                                    Blade</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15977">
                                                                <a href="/mechanical-blade/product-doctor_blade.php"
                                                                    class="elementor-sub-item">Ink Doctor
                                                                    Blade</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15978">
                                                                <a href="/mechanical-blade/product-rolling_blade.php"
                                                                    class="elementor-sub-item">Rolled Steel
                                                                    Blade</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15979">
                                                                <a href="/mechanical-blade/product-slow_cursher_blade.php"
                                                                    class="elementor-sub-item">Slow Shredder
                                                                    Blade</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15980">
                                                                <a href="/mechanical-blade/product-toothed_blade.php"
                                                                    class="elementor-sub-item">Saw Blade</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15981">
                                                                <a href="/mechanical-blade/product-chipper_blade.php"
                                                                    class="elementor-sub-item">Chipper Blade</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15982">
                                                                <a href="/mechanical-blade/product-corrugated_paper_cutting_blade.php"
                                                                    class="elementor-sub-item">Corrugated Paper
                                                                    Cutting Slitter Blade</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15983">
                                                                <a href="/mechanical-blade/product-crusher_blade.php"
                                                                    class="elementor-sub-item">Crusher Blade</a>
                                                            </li>

                                                        </ul>

                                                    </li>


                                                    <li
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-15955">
                                                        <a href="/product.php?c=bending_machine_mold"
                                                            class="elementor-sub-item">Press Brake Tools</a>

                                                        <ul class="sub-menu elementor-nav-menu--dropdown">

                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15984">
                                                                <a href="/bending-machine-mold/product-cnc_bending_machine_mold.php"
                                                                    class="elementor-sub-item">Die of CNC Press
                                                                    Brake</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15985">
                                                                <a href="/bending-machine-mold/product-flattening_die_of_press_brake.php"
                                                                    class="elementor-sub-item">Press Brake
                                                                    Flattening Die</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15986">
                                                                <a href="/bending-machine-mold/product-upper_die_of_press_brake.php"
                                                                    class="elementor-sub-item">Upper Die of
                                                                    Press Brake</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15987">
                                                                <a href="/bending-machine-mold/product-v_lower_die_of_press_brake.php"
                                                                    class="elementor-sub-item">Single/Multi V
                                                                    Lower Die of Press Brake</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15988">
                                                                <a href="/bending-machine-mold/product-radius_die_of_press_brake.php"
                                                                    class="elementor-sub-item">Circular Bending Die of Press Brake</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15989">
                                                                <a href="/bending-machine-mold/product-gooseneck_punch_of_press_brake.php"
                                                                    class="elementor-sub-item">Gooseneck Punch of Press Brake</a>
                                                            </li>


                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-15990">
                                                                <a href="/bending-machine-mold/product-mark_free_die_of_press_brake.php"
                                                                    class="elementor-sub-item">Mark-Free Punch of Press Brake</a>
                                                            </li>

                                                        </ul>

                                                    </li>

                                                </ul>

                                            </li>


                                            <li
                                                class="menu-item menu-item-type-custom page_item menu-item-13755">
                                                <a href="/services.php" class="elementor-item">Services</a>

                                            </li>


                                            <li
                                                class="menu-item menu-item-type-custom page_itemcurrent-menu-item current_page_item menu-item-13756">
                                                <a href="/blog.php"
                                                    class="elementor-item elementor-item-active">Blog</a>

                                            </li>


                                            <li
                                                class="menu-item menu-item-type-custom page_item menu-item-13758">
                                                <a href="/contact.php" class="elementor-item">Contact us</a>

                                            </li>

                                        </ul>
                                    </nav>
                                </div>


                            </div>



                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-640b616 elementor-hidden-mobile disnone"
                    data-id="640b616" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-95079e7 elementor-search-form--skin-full_screen elementor-widget elementor-widget-search-form"
                            data-id="95079e7">
                            <div class="elementor-widget-container">
                                <form class="elementor-search-form" role="search" action="" method="get">
                                    <div class="elementor-search-form__toggle">
                                        <i aria-hidden="true" class="fas fa-search"></i> <span
                                            class="elementor-screen-only">Search</span>
                                    </div>
                                    <div class="elementor-search-form__container">
                                        <input placeholder="Search..." class="elementor-search-form__input"
                                            type="search" name="s" title="Search" value="">
                                        <div class="dialog-lightbox-close-button dialog-close-button">
                                            <i class="eicon-close" aria-hidden="true"></i>
                                            <span class="elementor-screen-only">Close</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>
</div>

<script>
    var $ = jQuery;
</script>
<script>
    $('.elementor-menu-toggle').click(function() {
        $(this).toggleClass('elementor-active')
    })
    // $(function(){
    //     $('.elementor-menu-toggle').on('click',function(){
    //         $(this).toggleClass('elementor-active');
    //         $(this).next().slideToggle();
    //     });
    // });
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/6253cb2db0d10b6f3e6cce5d/1g0bl3c2r';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Rucheng Intelligent Technology",
  "url": "https://www.ruchengintelligent.com",
  "logo": "https://www.ruchengintelligent.com/images/logo-no-font.jpg",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Shiqiu Industrial Zone, Lishui District",
    "addressLocality": "Nanjing",
    "addressRegion": "Jiangsu",
    "postalCode": "211200",
    "addressCountry": "China"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+86-400-886-6884",
    "contactType": "Customer Support",
    "areaServed": "Worldwide",
    "availableLanguage": ["English", "Chinese"]
  },
  "sameAs": [
    "https://www.ruchengmachine.com"
  ]
}
</script>
<!--End of Tawk.to Script-->
</div>