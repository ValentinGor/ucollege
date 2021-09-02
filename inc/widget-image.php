<?php

class ucollegeImageWidget extends WP_Widget
{

    /*
     * creating a widget
     */
    function __construct()
    {
        parent::__construct(
            'ucollege_top_image',
            'Popular image', // widget title
            array('description' => 'Allows to display pictures in the widget block.') // description
        );
    }

    /*
     * frontend widget
     */
    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']); // apply a filter to the title (optional)
        $posts_per_page = $instance['posts_per_page'];

        // echo $args['before_widget'];

        if (!empty($title))
            ?>
            <div class="content__sidebar_head">
            <h3><?php echo $title; ?></h3>
        </div>
        <?php if (have_rows('gallery', 'option')): ?>
        <div class="content__sidebar_fancybox">
            <?php while (have_rows('gallery', 'option')): the_row();
                $image = get_sub_field('gallery_small_img', 'option');
                $image2 = get_sub_field('gallery_big_img', 'option');
                ?>

                <?php if (!empty($image)): ?>
                    <a href="<?php echo $image2; ?>" data-fancybox="images">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                    </a>
                <?php endif; ?>

            <?php endwhile; ?>
        </div>
    <?php endif;

        // echo $args['after_widget'];
    }

    /*
     * backend widget
     */
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        }
        if (isset($instance['posts_per_page'])) {
            $posts_per_page = $instance['posts_per_page'];
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Title</label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>"/>
        </p>

        <?php
    }

    /*
     * saving widget settings
     */
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}

/*
 * registration of a widget
 */
function ucollege_top_image_widget_load()
{
    register_widget('ucollegeImageWidget');
}

add_action('widgets_init', 'ucollege_top_image_widget_load');