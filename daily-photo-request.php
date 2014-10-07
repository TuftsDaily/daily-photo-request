<?php
/*
Plugin Name: Tufts Daily Photo Request
Plugin URI: https://github.com/TuftsDaily/photo-request
Description: Adds a button in the Wordpress Admin area linking to our photo request form.
Author: Nitesh Gupta
Author URI:
Version: 1.0
*/

/* Adds a box to the main column on the Post and Page edit screens */
add_action('admin_init', 'request_photo_html_box', 1);
function request_photo_html_box() {
    add_meta_box( 'request_photo_html', 'Request Photo', 'request_photo_html_box_inner', 'post', 'side','high' );
}

/* Prints the box content */
function request_photo_html_box_inner($post, $metabox) {
?>

<div class="inside" style="margin:0;padding:6px 0">

    <a class="button" href="http://jobs-tuftsdaily.herokuapp.com/" target="_blank">Request a Photo</a>

</div>

<?php
}
