<?php
/**
 * Dynamic Data: Custom PHP Function Return Value Snippets
 *
 * Oxygen allows any Text, Image Src, Background URL or Element Property
 * to be populated by the return value of a custom PHP function via the 
 * "Insert Data" -> "PHP Function Return Value" tool.
 * 
 * Rules for these functions:
 * 1. They MUST 'return' strings or numbers, never 'echo'.
 * 2. If 'echo' is used, it will break the DOM wrapping (the text will render 
 *    before Oxygen renders its wrapping <div>).
 * 3. Arguments passed via the visual builder are received as parameters here.
 */

/**
 * Example 1: Calculate the duration since a post was published.
 * 
 * Usage in Oxygen: Click "Insert Data" on a Text element, select 
 * "PHP Function Return Value", type "oxy_get_time_since_published",
 * and leave arguments blank.
 */
function oxy_get_time_since_published() {
    $post_id = get_the_ID(); // Always works inside Oxygen's template/repeater loops
    if (!$post_id) return '';

    $published_time = get_post_time('U', false, $post_id);
    // Returns human readability like "2 days ago"
    return human_time_diff($published_time, current_time('U')) . ' ago'; 
}


/**
 * Example 2: Combine Multiple ACF Fields creatively (Math, Strings)
 * 
 * Often ACF doesn't have a specific field for calculating tax on a price,
 * but instead of fighting with shortcodes, write a clean PHP return function.
 * 
 * Usage in Oxygen: Insert Data -> PHP Function Return Value
 * Function name: "oxy_calculate_total_with_tax"
 * Arguments: (Leave empty if it grabs from current post, or pass specific ID)
 */
function oxy_calculate_total_with_tax($tax_rate = 19) {
    $post_id = get_the_ID();
    
    // Safety check: if ACF isn't installed
    if (!function_exists('get_field')) return '0.00';

    // Get the base numeric price from ACF
    $base_price = (float) get_field('base_price', $post_id);
    
    // Calculate final
    $tax_amount = $base_price * ($tax_rate / 100);
    $total = $base_price + $tax_amount;

    // Return properly formatted string (e.g. $199.99)
    return '$' . number_format($total, 2);
}


/**
 * Example 3: Fallback Image SRC for Dynamic Data
 * 
 * Use case: A Repeater displays user avatars. If a user didn't upload 
 * an ACF image (or featured image), you want to supply a fallback placeholder.
 * 
 * Usage in Oxygen: Click an Image element -> Image URL field -> Data.
 * Function Name: "oxy_get_avatar_or_fallback"
 */
function oxy_get_avatar_or_fallback() {
    $post_id = get_the_ID();
    
    // Check if the post (acting as a team member) has a featured image
    if (has_post_thumbnail($post_id)) {
        return get_the_post_thumbnail_url($post_id, 'medium');
    }

    // Default placeholder URL
    return 'https://via.placeholder.com/300x300.png?text=No+Photo';
}
