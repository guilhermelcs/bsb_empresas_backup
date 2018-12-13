<?php
/**
 * he template for displaying search forms in Shape.
 * User: eversonaraujo
 * Date: 12/06/2018
 * @package Shape
 * @since Shape 1.0
 */
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <!--label for="s" class="assistive-text"><--?php _e( 'Pesquisar', 'shape' ); ?></label-->
    <div class="d-flex">
        <input type="text" class="form-control" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e('O que você procura?', 'shape' ); ?>" />
<!--        <input type="submit" class="btn btn-primary submit" name="submit" id="searchsubmit" value="--><?php //esc_attr_e( 'Pesquisar', 'shape' ); ?><!--" />-->
    </div>
</form>