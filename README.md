# postviews
Wordpress postviews
You can use this code to display postview
""""""
			<?php global $post; post_view_item($post->ID); ?>
			<?php global $post; get_view($post->ID); ?>
""""""
