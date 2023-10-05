<?php




function hhs_get_sample_options() {
    $options = array(
        'Option 1' => 'option1',
        'Option 2' => 'option2',
        'Option 3' => 'option3',
        'Option 4' => 'option4',
    );

    return $options;
}

add_action('admin_init', 'hhs_add_meta_boxes', 1);
function hhs_add_meta_boxes() {
    add_meta_box('repeatable-fields', 'Artistes Videos', 'hhs_repeatable_meta_box_display', 'artistes', 'normal', 'default');
}

function hhs_repeatable_meta_box_display() {
    global $post;

    $repeatable_fields = get_post_meta($post->ID, 'artistes_videos', true);
    $options = hhs_get_sample_options();

    wp_nonce_field('hhs_repeatable_meta_box_nonce', 'hhs_repeatable_meta_box_nonce');
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            // Add new row
            $(document).on('click', '#add-row', function () {
                var row = $('.empty-row.screen-reader-text').clone(true);
                row.removeClass('empty-row screen-reader-text');
                row.insertBefore('#repeatable-fieldset-one tbody>tr:last');
                return false;
            });

            // Remove row
            $(document).on('click', '.remove-row', function () {
                $(this).parents('tr').remove();
                return false;
            });

            // Media uploader
            $(document).on('click', '.upload-button', function (e) {
                e.preventDefault();

                var button = $(this),
                    customUploader = wp.media({
                        title: 'Choose Video Thumbnail',
                        library: {type: 'image'},
                        button: {text: 'Choose Thumbnail'},
                        multiple: false
                    }).on('select', function () {
                        var attachment = customUploader.state().get('selection').first().toJSON();
                        button.prev('.thumbnail-preview').attr('src', attachment.url);
                        button.prev('.thumbnail-value').val(attachment.url);
                    }).open();
            });
        });
    </script>

    <table id="repeatable-fieldset-one" width="100%">
        <thead>
        <tr>
            <th width="30%">Video Link</th>
            <th width="20%">Video Title</th>
            <th width="20%">Category</th>
            <th width="20%">Thumbnail</th>
            <th width="10%"></th>
        </tr>
        </thead>
        <tbody>
        <?php if ($repeatable_fields) :
            foreach ($repeatable_fields as $field) :
                ?>
                <tr>
                    <td><input type="text" class="widefat" name="video_link[]" value="<?php echo esc_attr($field['video_link']); ?>" /></td>

                    <td><input type="text" class="widefat" name="video_title[]" value="<?php echo esc_attr($field['video_title']); ?>" /></td>

                    <td>
                        <select name="video_category[]">
                            <?php foreach ($options as $label => $value) : ?>
                                <option value="<?php echo $value; ?>" <?php selected($field['video_category'], $value); ?>><?php echo $label; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>

                    <td>
                        <div>
                            <input type="text" class="thumbnail-value" name="thumbnail[]" value="<?php echo esc_url($field['thumbnail']); ?>" />
                            <input type="button" class="upload-button button" value="Upload" />
                            <br/>
                            <img class="thumbnail-preview" src="<?php echo esc_url($field['thumbnail']); ?>" style="max-width: 100px;" />
                        </div>
                    </td>

                    <td><a class="button remove-row" href="#">Remove</a></td>
                </tr>
            <?php endforeach;
        else : ?>
            <tr>
                <td><input type="text" class="widefat" name="video_link[]" /></td>

                <td><input type="text" class="widefat" name="video_title[]" /></td>

                <td>
                    <select name="video_category[]">
                        <?php foreach ($options as $label => $value) : ?>
                            <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>

                <td>
                    <div>
                        <input type="text" class="thumbnail-value" name="thumbnail[]" />
                        <input type="button" class="upload-button button" value="Upload" />
                        <br/>
                        <img class="thumbnail-preview" src="" style="max-width: 100px;" />
                    </div>
                </td>

                <td><a class="button remove-row" href="#">Remove</a></td>
            </tr>
        <?php endif; ?>

        <!-- Empty hidden row for jQuery -->
        <tr class="empty-row screen-reader-text">
            <td><input type="text" class="widefat" name="video_link[]" /></td>

            <td><input type="text" class="widefat" name="video_title[]" /></td>

            <td>
                <select name="video_category[]">
                    <?php foreach ($options as $label => $value) : ?>
                        <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>

            <td>
                <div>
                    <input type="text" class="thumbnail-value" name="thumbnail[]" />
                    <input type="button" class="upload-button button" value="Upload" />
                    <br/>
                    <img class="thumbnail-preview" src="" style="max-width: 100px;" />
                </div>
            </td>

            <td><a class="button remove-row" href="#">Remove</a></td>
        </tr>
        </tbody>
    </table>

    <p><a id="add-row" class="button" href="#">Add another</a></p>
    <?php
}

add_action('save_post', 'hhs_repeatable_meta_box_save');
function hhs_repeatable_meta_box_save($post_id) {
    if (!isset($_POST['hhs_repeatable_meta_box_nonce']) || !wp_verify_nonce($_POST['hhs_repeatable_meta_box_nonce'], 'hhs_repeatable_meta_box_nonce')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $old = get_post_meta($post_id, 'artistes_videos', true);
    $new = array();

    $video_links = $_POST['video_link'];
    $video_titles = $_POST['video_title'];
    $video_categories = $_POST['video_category'];
    $thumbnails = $_POST['thumbnail'];

    $count = count($video_links);

    for ($i = 0; $i < $count; $i++) {
        if ($video_links[$i] != '') {
            $new[$i]['video_link'] = sanitize_text_field($video_links[$i]);
            $new[$i]['video_title'] = sanitize_text_field($video_titles[$i]);
            $new[$i]['video_category'] = sanitize_text_field($video_categories[$i]);
            $new[$i]['thumbnail'] = esc_url_raw($thumbnails[$i]);
        }
    }

    if (!empty($new) && $new != $old) {
        update_post_meta($post_id, 'artistes_videos', $new);
    } elseif (empty($new) && $old) {
        delete_post_meta($post_id, 'artistes_videos', $old);
    }
}




function get_artistes_videos($post_id) {
    $videos = get_post_meta($post_id, 'artistes_videos', true);

    // Ensure the videos array is properly formatted
    if (!empty($videos) && is_array($videos)) {
        $clean_videos = array();

        foreach ($videos as $video) {
            $clean_video = array(
                'video_link' => isset($video['video_link']) ? $video['video_link'] : '',
                'video_title' => isset($video['video_title']) ? $video['video_title'] : '',
                'video_category' => isset($video['video_category']) ? $video['video_category'] : '',
                'thumbnail' => isset($video['thumbnail']) ? $video['thumbnail'] : ''
            );

            $clean_videos[] = $clean_video;
        }

        return $clean_videos;
    }

    return array();
}




