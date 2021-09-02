<?php

class ucollegeTopPostsWidget extends WP_Widget
{

    /*
     * creating a widget
     */
    function __construct()
    {
        parent::__construct(
            'ucollege_top_widget',
            'Popular posts', // widget title
            array('description' => 'Allows you to display posts sorted by the number of comments in them.') // description
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
        <?php

        $q = new WP_Query("posts_per_page=$posts_per_page&orderby=comment_count");
        if ($q->have_posts()): ?>
            <?php while ($q->have_posts()): $q->the_post(); ?>
                <div class="content__sidebar_info">
                    <div class="content__sidebar_info-img">
                        <?php
                        $image = get_field('article_img_xs');
                        if (!empty($image)): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                        <?php endif; ?>
                    </div>
                    <div class="content__sidebar_info-txt">
                        <h4><?php the_title(); ?></h4>
                        <?php if (get_field('article_description')) { ?>

                            <?php
                            $mess = substr(get_field('article_description'), 0, 85);
                            echo $mess;
                            ?>

                        <?php } ?>
                        <a href="<?php the_permalink(); ?>">
                            Continue Reading »
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif;
        wp_reset_postdata();

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
        <p>
            <label for="<?php echo $this->get_field_id('posts_per_page'); ?>">Number of posts:</label>
            <input id="<?php echo $this->get_field_id('posts_per_page'); ?>" name="<?php echo $this->get_field_name('posts_per_page'); ?>" type="text"
                   value="<?php echo ($posts_per_page) ? esc_attr($posts_per_page) : '5'; ?>" size="3"/>
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
        $instance['posts_per_page'] = (is_numeric($new_instance['posts_per_page'])) ? $new_instance['posts_per_page'] : '5'; // по умолчанию выводятся 5 постов
        return $instance;
    }
}

/*
 * registration of a widget
 */
function ucollege_top_posts_widget_load()
{
    register_widget('ucollegeTopPostsWidget');
}

add_action('widgets_init', 'ucollege_top_posts_widget_load');