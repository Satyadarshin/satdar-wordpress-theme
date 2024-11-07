<?php
/*
* List of project tags from the Jetpack Portfolio; each tag is contained by a Detail block.
*
* @package SatDar
*/
?>

<ul>
    <?php
        $terms = get_terms( array(
            'taxonomy' => 'jetpack-portfolio-tag',
        ));
        foreach ( $terms as $term ) {
            echo '<div class="cv-skill">';
            echo '<details class="wp-block-details is-layout-flow wp-block-details-is-layout-flow">';
            echo '<summary>'. esc_html( $term->name ) . '</summary>';
            echo $term->description. '<br /><a href="' . get_term_link( $term ) . '">See projects that apply this skill</a></details>';
            echo '</div>';
        }
    ?>
</ul>