<?php
/*
  Plugin Name: Social Icons
  Plugin URI: 
  Description: Links to social media profiles through icons
  Author: Sergiu Tripon
  Author URI: http://sergiu-tripon.com
 */

/**
 * Adds Social widget.
 */
class Social extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
                'Social',
                __('Social', 'translation_domain'), // Name
                array('description' => __('Links to social media profiles through icons', 'translation_domain'),)
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {

        $title = apply_filters('widget_title', $instance['title']);

		//Social
        $facebook = $instance['facebook'];
        $twitter = $instance['twitter'];
        $google = $instance['google'];
		$instagram = $instance['instagram'];
		$vine = $instance['vine'];
		$tumblr = $instance['tumblr'];
		$skype = $instance['skype'];
		
		//Professional
        $linkedin = $instance['linkedin'];
		$github = $instance['github'];
		$behance = $instance['behance'];
		$stackexchange = $instance['stackexchange'];
		$stackoverflow = $instance['stackoverflow'];
		$paypal = $instance['paypal'];
		
		//Music
		$soundcloud = $instance['soundcloud'];
		$spotify = $instance['spotify'];
		
		//Video
		$youtube = $instance['youtube'];
		$vimeo = $instance['vimeo'];

        //Social
        $facebook_profile = '<a class="facebook" href="http://www.facebook.com/'.$facebook.'" target="_blank"><i class="fa fa-facebook"></i></a>';
        $twitter_profile = '<a class="twitter" href="http://twitter.com/'.$twitter.'" target="_blank"><i class="fa fa-twitter"></i></a>';
        $google_profile = '<a class="google" href="http://plus.google.com/'.$google.'" target="_blank"><i class="fa fa-google-plus"></i></a>';
		$instagram_profile = '<a class="instagram" href="http://www.instagram.com/'.$instagram.'" target="_blank"><i class="fa fa-instagram"></i>';
		$vine_profile = '<a class="vine" href="http://vine.co/u/'.$vine.'" target="_blank"><i class="fa fa-vine"></i></a>';
		$tumblr_profile = '<a class="tumblr" href="'.$tumblr.'" target="_blank"><i class="fa fa-tumblr"></i></a>';
		$skype_profile = '<a class="skype" href="skype:'.$skype.'?add" target="_blank"><i class="fa fa-skype"></i></a><hr>';
		
		//Professional
		$linkedin_profile = '<a class="linkedin" href="http://uk.linkedin.com/in/'.$linkedin.'" target="_blank"><i class="fa fa-linkedin"></i></a>';
		$github_profile = '<a class="github" href="http://github.com/'.$github.'" target="_blank"><i class="fa fa-github"></i></a>';
		$behance_profile = '<a class="behance" href="http://www.behance.net/'.$behance.'" target="_blank"><i class="fa fa-behance"></i></a>';
		$stackexchange_profile = '<a class="stackexchange" href="http://stackexchange.com/users/'.$stackexchange.'" target="_blank"><i class="fa fa-stack-exchange"></i></a>';
		$stackoverflow_profile = '<a class="stackoverflow" href="http://stackoverflow.com/users/'.$stackoverflow.'" target="_blank"><i class="fa fa-stack-overflow"></i></a>';
		$paypal_profile = '<a class="paypal" href="http://www.behance.net/'.$paypal.'" target="_blank"><i class="fa fa-paypal"></i></a><hr>';

		//Music
		$soundcloud_profile = '<a class="soundcloud" href="http://soundcloud.com/'.$soundcloud.'" target="_blank"><i class="fa fa-soundcloud"></i></a>';
		$spotify_profile = '<a class="paypal" href="http://play.spotify.com/user/'.$spotify.'" target="_blank"><i class="fa fa-spotify"></i></a><hr>';
		
		//Video
		$youtube_profile = '<a class="youtube" href="http://www.youtube.com/channel/'.$youtube.'" target="_blank"><i class="fa fa-youtube"></i></a>';
		$vimeo_profile = '<a class="paypal" href="http://vimeo.com/'.$vimeo.'" target="_blank"><i class="fa fa-vimeo"></i></a>';	
	
        echo $args['before_widget'];

        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        echo '<div class="social-icons">';
		
		//Social
        echo (!empty($facebook) ) ? $facebook_profile : null;
        echo (!empty($twitter) ) ? $twitter_profile : null;
        echo (!empty($google) ) ? $google_profile : null;
		echo (!empty($instagram) ) ? $instagram_profile : null;
		echo (!empty($vine) ) ? $vine_profile : null;
		echo (!empty($tumblr) ) ? $tumblr_profile : null;
		echo (!empty($skype) ) ? $skype_profile : null;
		
		//Professional
        echo (!empty($linkedin) ) ? $linkedin_profile : null;
        echo (!empty($github) ) ? $github_profile : null;
		echo (!empty($behance) ) ? $behance_profile : null;
		echo (!empty($stackexchange) ) ? $stackexchange_profile : null;
		echo (!empty($stackoverflow) ) ? $stackoverflow_profile : null;
		echo (!empty($paypal) ) ? $paypal_profile : null;
		
		//Music
		echo (!empty($soundcloud) ) ? $soundcloud_profile : null;
		echo (!empty($spotify) ) ? $spotify_profile : null;
		
		//Video
		echo (!empty($youtube) ) ? $youtube_profile : null;
		echo (!empty($vimeo) ) ? $vimeo_profile : null;
		
        echo '</div>';

        echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance) {
        isset($instance['title']) ? $title = $instance['title'] : null;
        empty($instance['title']) ? $title = 'Social' : null;

        isset($instance['facebook']) ? $facebook = $instance['facebook'] : null;
        isset($instance['twitter']) ? $twitter = $instance['twitter'] : null;
        isset($instance['google']) ? $google = $instance['google'] : null;
		isset($instance['instagram']) ? $instagram = $instance['instagram'] : null;
		isset($instance['vine']) ? $vine = $instance['vine'] : null;
		isset($instance['tumblr']) ? $tumblr = $instance['tumblr'] : null;
		isset($instance['skype']) ? $skype = $instance['skype'] : null;
		
        isset($instance['linkedin']) ? $linkedin = $instance['linkedin'] :		null;
        isset($instance['github']) ? $github = $instance['github'] : null;
		isset($instance['behance']) ? $behance = $instance['behance'] : null;
		isset($instance['stackexchange']) ? $stackexchange = $instance['stackexchange'] : null;
		isset($instance['stackoverflow']) ? $stackoverflow = $instance['stackoverflow'] : null;
		isset($instance['paypal']) ? $paypal = $instance['paypal'] : null;
		
		isset($instance['soundcloud']) ? $soundcloud = $instance['soundcloud'] : null;
		isset($instance['spotify']) ? $spotify = $instance['spotify'] : null;
		
		isset($instance['youtube']) ? $youtube = $instance['youtube'] : null;
		isset($instance['vimeo']) ? $vimeo = $instance['vimeo'] : null;
		
        ?>
		
		<!-- Social -->
		
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook username:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo esc_attr($facebook); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter username:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo esc_attr($twitter); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('google'); ?>"><?php _e('Google+ username:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('google'); ?>" name="<?php echo $this->get_field_name('google'); ?>" type="text" value="<?php echo esc_attr($google); ?>">
        </p>
		
		<p>
            <label for="<?php echo $this->get_field_id('instagram'); ?>"><?php _e('Instagram username:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('instagram'); ?>" name="<?php echo $this->get_field_name('instagram'); ?>" type="text" value="<?php echo esc_attr($instagram); ?>">
        </p>
		
		<p>
            <label for="<?php echo $this->get_field_id('vine'); ?>"><?php _e('Vine username:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('vine'); ?>" name="<?php echo $this->get_field_name('vine'); ?>" type="text" value="<?php echo esc_attr($vine); ?>">
        </p>
		
		<p>
            <label for="<?php echo $this->get_field_id('tumblr'); ?>"><?php _e('Tumblr URL:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('tumblr'); ?>" name="<?php echo $this->get_field_name('tumblr'); ?>" type="text" value="<?php echo esc_attr($tumblr); ?>">
        </p>
		
		<p>
            <label for="<?php echo $this->get_field_id('skype'); ?>"><?php _e('Skype username:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('skype'); ?>" name="<?php echo $this->get_field_name('skype'); ?>" type="text" value="<?php echo esc_attr($skype); ?>">
        </p>

		<!-- Professional -->
		
        <p>
            <label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('LinkedIn username:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo esc_attr($linkedin); ?>">
        </p>
		
		<p>
            <label for="<?php echo $this->get_field_id('github'); ?>"><?php _e('GitHub username:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('github'); ?>" name="<?php echo $this->get_field_name('github'); ?>" type="text" value="<?php echo esc_attr($github); ?>">
        </p>
		
		<p>
            <label for="<?php echo $this->get_field_id('behance'); ?>"><?php _e('Behance username:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('behance'); ?>" name="<?php echo $this->get_field_name('behance'); ?>" type="text" value="<?php echo esc_attr($behance); ?>">
        </p>
		
		<p>
            <label for="<?php echo $this->get_field_id('stackexchange'); ?>"><?php _e('Stack Exchange username:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('stackexchange'); ?>" name="<?php echo $this->get_field_name('stackexchange'); ?>" type="text" value="<?php echo esc_attr($stackexchange); ?>">
        </p>
		
		<p>
            <label for="<?php echo $this->get_field_id('stackoverflow'); ?>"><?php _e('Stack Overflow username:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('stackoverflow'); ?>" name="<?php echo $this->get_field_name('stackoverflow'); ?>" type="text" value="<?php echo esc_attr($stackoverflow); ?>">
        </p>
		
		<p>
            <label for="<?php echo $this->get_field_id('paypal'); ?>"><?php _e('PayPal username:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('paypal'); ?>" name="<?php echo $this->get_field_name('paypal'); ?>" type="text" value="<?php echo esc_attr($paypal); ?>">
        </p>
		
		<!-- Music -->
		<p>
            <label for="<?php echo $this->get_field_id('soundcloud'); ?>"><?php _e('Soundcloud username:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('soundcloud'); ?>" name="<?php echo $this->get_field_name('soundcloud'); ?>" type="text" value="<?php echo esc_attr($soundcloud); ?>">
        </p>
		
		<p>
            <label for="<?php echo $this->get_field_id('paypal'); ?>"><?php _e('Spotify username:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('spotify'); ?>" name="<?php echo $this->get_field_name('spotify'); ?>" type="text" value="<?php echo esc_attr($spotify); ?>">
        </p>
		
		<!-- Video -->
		<p>
            <label for="<?php echo $this->get_field_id('youtube'); ?>"><?php _e('YouTube username:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="text" value="<?php echo esc_attr($youtube); ?>">
        </p>
		
		<p>
            <label for="<?php echo $this->get_field_id('paypal'); ?>"><?php _e('Vimeo username:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('vimeo'); ?>" name="<?php echo $this->get_field_name('vimeo'); ?>" type="text" value="<?php echo esc_attr($vimeo); ?>">
        </p>
		
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
        
		//Social
		$instance['facebook'] = (!empty($new_instance['facebook']) ) ? strip_tags($new_instance['facebook']) : '';
        $instance['twitter'] = (!empty($new_instance['twitter']) ) ? strip_tags($new_instance['twitter']) : '';
        $instance['google'] = (!empty($new_instance['google']) ) ? strip_tags($new_instance['google']) : '';
		$instance['instagram'] = (!empty($new_instance['instagram']) ) ? strip_tags($new_instance['instagram']) : '';
		$instance['vine'] = (!empty($new_instance['vine']) ) ? strip_tags($new_instance['vine']) : '';
		$instance['tumblr'] = (!empty($new_instance['tumblr']) ) ? strip_tags($new_instance['tumblr']) : '';
		$instance['skype'] = (!empty($new_instance['skype']) ) ? strip_tags($new_instance['skype']) : '';
		
		//Professional
		$instance['linkedin'] = (!empty($new_instance['linkedin']) ) ? strip_tags($new_instance['linkedin']) : '';
		$instance['github'] = (!empty($new_instance['github']) ) ? strip_tags($new_instance['github']) : '';
		$instance['behance'] = (!empty($new_instance['behance']) ) ? strip_tags($new_instance['behance']) : '';
		$instance['stackexchange'] = (!empty($new_instance['stackexchange']) ) ? strip_tags($new_instance['stackexchange']) : '';
		$instance['stackoverflow'] = (!empty($new_instance['stackoverflow']) ) ? strip_tags($new_instance['stackoverflow']) : '';
		$instance['paypal'] = (!empty($new_instance['paypal']) ) ? strip_tags($new_instance['paypal']) : '';
		
		//Music
		$instance['soundcloud'] = (!empty($new_instance['soundcloud']) ) ? strip_tags($new_instance['soundcloud']) : '';
		$instance['spotify'] = (!empty($new_instance['spotify']) ) ? strip_tags($new_instance['spotify']) : '';
		
		//Video
		$instance['youtube'] = (!empty($new_instance['youtube']) ) ? strip_tags($new_instance['youtube']) : '';
		$instance['vimeo'] = (!empty($new_instance['vimeo']) ) ? strip_tags($new_instance['vimeo']) : '';
		
        return $instance;
    }
}