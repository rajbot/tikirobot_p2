<?php
/**
 * @package WordPress
 * @subpackage P2
 */
?>
<?php if ( !p2_get_hide_sidebar() ) : ?>
	<div id="sidebar">
        <div id="top"></div> <?php /* tikirobot change */ ?>
        <div id="bg"> <?php /* tikirobot change */ ?>
	<? /*
            <div id="twitterings">
                <div class="title">Twittering</div>
                <script type="text/javascript" src="http://tikirobot.net/twitter/"></script>
            </div>
	   */ ?>
            <ul>
                <?php
                if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar() ) {
                    the_widget( 'P2_Recent_Comments', array(), array( 'before_widget' => '<li> ', 'after_widget' => '</li>', 'before_title' =>'<h2>', 'after_title' => '</h2>' ) );
                    the_widget( 'P2_Recent_Tags', array(), array( 'before_widget' => '<li> ', 'after_widget' => '</li>', 'before_title' =>'<h2>', 'after_title' => '</h2>' ) );
                }
                ?>
            </ul>
        </div>
		<div class="clear"></div>

	</div> <!-- // sidebar -->
<?php endif; ?>