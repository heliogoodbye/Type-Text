<?php
/*
Plugin Name: Type Text
Description: This plugin allows you to display text like it's being typed on a typewriter.
Version: 1.0
Author: Your Name
License: GPL3
*/

// Register shortcode
function type_text_shortcode($atts, $content = null) {
    // Extract shortcode attributes
    $atts = shortcode_atts(
        array(
            'text' => '', // Default text
        ),
        $atts,
        'type_text'
    );

    // Sanitize and get the text
    $text = sanitize_text_field($atts['text']);

    // Generate a unique ID for this instance
    $unique_id = uniqid('typing_');

    // Output the HTML with the text and unique ID
    ob_start();
    ?>
    <span id="<?php echo esc_attr($unique_id); ?>"></span>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var text = "<?php echo esc_js($text); ?>";
        var delay = 100; // Delay between typing each character in milliseconds
        var element = document.getElementById("<?php echo esc_js($unique_id); ?>");
        var index = 0;

        // Function to type the text
        function type() {
            if (index < text.length) {
                element.innerHTML += text.charAt(index);
                index++;
                setTimeout(type, delay);
            }
        }

        // Initialize Intersection Observer
        var observer = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                // If the section comes into view, start typing
                if (entry.isIntersecting) {
                    type();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 }); // 50% of the element must be in view

        // Start observing the target element
        observer.observe(element);
    });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('type_text', 'type_text_shortcode');
?>
