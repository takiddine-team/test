<?php





// Add a new admin menu item for the Partners settings page
function add_partners_settings_page() {
    add_menu_page(
        'Partners',
        'Partners',
        'manage_options',
        'partners',
        'partners_settings_page_content',
        'dashicons-businessman',
        25
    );
}
add_action('admin_menu', 'add_partners_settings_page');

// Register the Partners settings section and fields
function register_partners_settings() {
    // Register a new settings section
    add_settings_section(
        'partners_settings_section',
        'Partners Settings',
        'partners_settings_section_callback',
        'partners'
    );

    // Register the settings
    register_setting('partners_settings_section', 'partners_list', 'sanitize_partners_list');
}
add_action('admin_init', 'register_partners_settings');


// Callback function for the Partners settings section
function partners_settings_section_callback() {
    echo '<p>Enter your partners information below:</p>';
}

// Sanitize the partners list
function sanitize_partners_list($input) {
    $sanitized = array();

    if (isset($input) && is_array($input)) {
        foreach ($input as $key => $value) {
            $sanitized[$key]['id'] = sanitize_key($key);
            $sanitized[$key]['image'] = sanitize_text_field($value['image']);
            $sanitized[$key]['title'] = sanitize_text_field($value['title']);
            $sanitized[$key]['link'] = sanitize_text_field($value['link']);
        }
    }

    return $sanitized;
}




// Render the Partners settings page content
function partners_settings_page_content() {
    ?>
    <div class="wrap">
        <h1>Partners Settings</h1>

        <form method="post" action="options.php">
            <?php settings_fields('partners_settings_section'); ?>
            <?php do_settings_sections('partners'); ?>
            <table id="partners-list">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Link</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $partners_list = get_option('partners_list');
                    if (!empty($partners_list)) {
                        foreach ($partners_list as $partner) {
                            echo '<tr>';
                            echo '<td>';
                            echo '<input type="text" class="partner-image" name="partners_list[' . $partner['id'] . '][image]" value="' . esc_attr($partner['image']) . '" style="width:70%;margin-right:15px;" />';
                            echo '<button class="upload-image-button button">Select Image</button>';
                            echo '</td>';
                            echo '<td><input type="text" class="partner-title" name="partners_list[' . $partner['id'] . '][title]" value="' . esc_attr($partner['title']) . '" /></td>';
                            echo '<td><input type="text" class="partner-link" name="partners_list[' . $partner['id'] . '][link]" value="' . esc_attr($partner['link']) . '" /></td>';
                            echo '<td><a class="remove-partner" href="#">Remove</a></td>';
                            echo '</tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
            <button id="add-partner" class="button">Add Partner</button>
            <?php submit_button(); ?>
        </form>
    </div>

    <script>
        jQuery(document).ready(function($) {
            var nextId = <?php echo count($partners_list); ?>;
            
            // Add new partner row
            $('#add-partner').on('click', function(e) {
                e.preventDefault();

                var row = '<tr>' +
                    '<td>' +
                    '<input type="text" class="partner-image" name="partners_list[' + nextId + '][image]" value="" style="width:70%;margin-right:15px;" />' +
                    '<button class="upload-image-button button">Select Image</button>' +
                    '</td>' +
                    '<td><input type="text" class="partner-title" name="partners_list[' + nextId + '][title]" value="" /></td>' +
                    '<td><input type="text" class="partner-link" name="partners_list[' + nextId + '][link]" value="" /></td>' +
                    '<td><a class="remove-partner" href="#">Remove</a></td>' +
                    '</tr>';

                $('#partners-list tbody').append(row);
                nextId++;
            });

            // Remove partner row
            $(document).on('click', '.remove-partner', function(e) {
                e.preventDefault();
                $(this).closest('tr').remove();
            });

            // Open media modal on image button click
            $(document).on('click', '.upload-image-button', function(e) {
                e.preventDefault();

                var button = $(this);
                var imageField = button.prev('.partner-image');

                // Create the media frame
                var frame = wp.media({
                    title: 'Select Image',
                    button: { text: 'Use Image' },
                    multiple: false
                });

                // Handle image selection
                frame.on('select', function() {
                    var attachment = frame.state().get('selection').first().toJSON();
                    imageField.val(attachment.url);
                });

                // Open the media frame
                frame.open();
            });
        });
    </script>
    <?php
}





function add_dashboard_styles_partners() {
    echo '<style>
	#partners-list {
		width: 100%;
		border-collapse: collapse;
		margin-bottom: 20px;
	}
	
	#partners-list th,
	#partners-list td {
		padding: 10px;
		border: 1px solid #e5e5e5;
	}
	
	#partners-list th {
		font-weight: bold;
		background-color: #f7f7f7;
	}
	
	#partners-list tbody tr:nth-child(even) {
		background-color: #f9f9f9;
	}
	
	#partners-list tbody tr:hover {
		background-color: #fafafa;
	}
	
	#partners-list input[type="text"] {
		width: 100%;
		box-sizing: border-box;
		padding: 5px;
		border: 1px solid #ddd;
	}
	
	#partners-list .button {
		padding: 5px 10px;
		font-size: 14px;
		line-height: 1.5;
		border-radius: 4px;
		cursor: pointer;
	}
	
	#partners-list .upload-image-button {
		margin-right: 5px;
	}
	
	.placeholder-row td {
		text-align: center;
		font-style: italic;
		color: #999;
	}

	
    </style>';
}
add_action( 'admin_head', 'add_dashboard_styles_partners' );




function get_partners_list() {
    $partners_list = get_option('partners_list');
    $partners = array();

    if (!empty($partners_list)) {
        foreach ($partners_list as $partner) {
            $image = $partner['image'];
            $title = $partner['title'];
            $link = $partner['link'];

            $partners[] = array(
                'image' => $image,
                'title' => $title,
                'link' => $link,
            );
        }
    }

    return $partners;
}



