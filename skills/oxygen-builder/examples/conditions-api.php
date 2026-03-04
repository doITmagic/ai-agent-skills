<?php
/**
 * Oxygen Builder Conditions API Snippet
 *
 * Use this boilerplate to register a custom visual condition inside the 
 * Oxygen Builder "Conditions" modal. This allows users to show/hide 
 * ANY DOM element based on custom PHP logic (e.g., user capabilities, 
 * WooCommerce cart totals, external API responses, custom ACF logic).
 */

// Register the condition on 'init' or 'plugins_loaded'
add_action('init', 'my_custom_oxygen_condition_register');

function my_custom_oxygen_condition_register() {
    
    // Safety check: ensure the Oxygen Condition API is active
    if (!function_exists('oxygen_vsb_register_condition')) {
        return;
    }

    /**
     * oxygen_vsb_register_condition( $name, $options, $operators, $callback, $category )
     *
     * @param string $name       Name displayed in the Oxygen Condition dropdown.
     * @param array  $options    Pre-defined values the user can select from a dropdown list. 
     *                           (Optional - use custom 'text' if user should type the value manually)
     * @param array  $operators  Valid operators (e.g., '==', '!=', '>', '<', 'contains').
     * @param string $callback   The PHP function responsible for evaluating the condition (returns boolean).
     * @param string $category   The group/category header in the UI.
     */
    
    // Example 1: Dropdown Selection Condition
    oxygen_vsb_register_condition(
        'User Role Match',           // Condition Name
        array(                       // Options array (Dropdown choices in Oxygen UI)
            'options' => array(
                'administrator', 
                'editor', 
                'author', 
                'subscriber', 
                'customer'
            )
        ), 
        array('==', '!='),           // Allowed operators
        'my_evaluate_user_role',     // Callback logic function
        'Authentication'             // Category heading
    );

    // Example 2: Text Input Condition
    oxygen_vsb_register_condition(
        'Cart Total greater than',
        array('options' => array()), // Empty options array forces a text input box instead of dropdown
        array('>', '>=', '<', '<='), 
        'my_evaluate_cart_total',
        'eCommerce'
    );
}

/**
 * Callback logic for Example 1 (User Role)
 *
 * @param mixed  $value    The value selected/typed by the user in the Builder UI.
 * @param string $operator The mathematical operator chosen by the user (e.g., '==').
 * @return bool            True means the Oxygen element WILL render. False hides it.
 */
function my_evaluate_user_role($value, $operator) {
    $current_user = wp_get_current_user();
    
    // If user is logged out, they don't have roles
    if (0 == $current_user->ID) {
        return false;
    }

    $roles = (array) $current_user->roles;
    // Check if the role chosen in the builder matches any role the user has
    $has_role = in_array(strtolower($value), $roles);

    if ($operator == '==') {
        return $has_role;
    }

    if ($operator == '!=') {
        return !$has_role;
    }

    return false; // Safest default is to hide
}

/**
 * Callback logic for Example 2 (WooCommerce Cart Total)
 */
function my_evaluate_cart_total($value, $operator) {
    if (!class_exists('WooCommerce') || is_null(WC()->cart)) {
        return false;
    }

    $cart_total = WC()->cart->get_total('edit'); // Raw numeric total without currency symbols
    $target_value = floatval($value); // The number the user typed in the Oxygen UI

    switch ($operator) {
        case '>':
            return $cart_total > $target_value;
        case '>=':
            return $cart_total >= $target_value;
        case '<':
            return $cart_total < $target_value;
        case '<=':
            return $cart_total <= $target_value;
    }

    return false;
}
