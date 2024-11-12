<?php
/*
* Template Name: CV Skills
* 
* List of project tags from the Jetpack Portfolio; each tag is contained by a Detail block.
*
* @package SatDar
*/
?>
<div class="skills-list">
    <?php
    $terms = get_terms( array(
        'taxonomy' => 'jetpack-portfolio-tag',
    ));
    foreach ( $terms as $term ) {
        echo '<div class="cv-skill">';
        echo '<details class="wp-block-details is-layout-flow wp-block-details-is-layout-flow">';
        echo '<summary>'. esc_html( $term->name ) . '</summary>';
        echo '<p class="term-description">'.$term->description. '</p><p class="term-link"><a href="' . get_term_link( $term ) . '">See projects that apply this skill</a></p></details>';
        echo '</div>';
    }
    ?>
</div>