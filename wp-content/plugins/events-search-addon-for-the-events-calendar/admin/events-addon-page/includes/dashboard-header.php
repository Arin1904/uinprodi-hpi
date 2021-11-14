<?php

/**
 * This php file render HTML header for addons dashboard page
 */
    if( !isset( $this->main_menu_slug ) ):
        return;
    endif;

    $cool_plugins_docs = "https://docs.coolplugins.net/";
    $cool_plugins_more_info = "https://eventscalendartemplates.com/";
?>

<div id="cool-plugins-container" class="<?php echo $this->main_menu_slug; ?>">
    <div class="cool-header">
        <h2 style=""><?php echo $this->dashboar_page_heading; ?></h2>
        <a href="<?php echo $cool_plugins_docs; ?>" target="_blank" class="button">Docs</a>
        <a href="<?php echo $cool_plugins_more_info; ?>" target="_blank" class="button">More Info</a>
    </div>