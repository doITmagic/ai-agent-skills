---
name: oxygen-builder
description: Comprehensive technical architecture, API reference, and development guide for WordPress Oxygen Builder. Contains concrete code snippets for OxyEl, Conditions API, dynamic data routing, WooCommerce integration, and CSS architecture best practices.
---

# 🛠️ Skill: Advanced Oxygen Builder Development Guide

This is the definitive, highly technical development guide for **Oxygen Builder (v4.0 - v6.0+)** in WordPress. Use these rules, snippets, and architectural conventions whenever you are tasked with creating, debugging, or extending a WordPress site built with Oxygen.

---

## 🏗️ 1. Core Architecture & Database Storage

Oxygen completely bypasses the traditional WordPress theme engine. 
*   **Disabled Theme System:** Oxygen disables `wp-content/themes`. Functions inside `functions.php`, `header.php`, `footer.php`, or any other template hierarchy file (`single.php`, `archive.php`) are ignored and will NOT execute on the front-end.
*   **Code Injection:** All custom PHP, Javascript, and global CSS must be deployed via a site-specific snippets plugin (e.g., WPCodeBox, Code Snippets) or inside a custom plugin container.
*   **JSON Storage Paradigm:** Layouts are NOT saved as HTML in the `post_content` column. 
    *   The entire DOM structure, component properties, and layout configuration are serialized and saved in the **`_ct_builder_json`** post meta as a massive multidimensional JSON array.
    *   A fallback is generated and saved as shortcodes in the **`_ct_builder_shortcodes`** post meta.
    *   **Do not** attempt to write SQL queries to "search and replace" Oxygen content using standard WP `post_content` queries. It will corrupt the JSON.
*   **CSS Caching System:** All styles defined in the builder (Global Colors, classes, element IDs) are dynamically compiled into physical CSS files stored in `/wp-content/uploads/oxygen/css/`. If CSS changes aren't reflecting, instruct the user to regenerate the cache via **Oxygen > Settings > CSS Cache > Regenerate**.

---

## 🎨 2. Templating Engine & Routing Rules

Oxygen templates intercept WP hooks via `template_include` to render their JSON payloads natively.

*   **Template Priority:** When multiple templates match a WordPress condition (e.g., an Archive template vs. a generic Catch-All), Oxygen respects a priority integer (0-99). The template with the **highest number wins**. If a Catch-All has priority 0, and a "Blog Posts" template has priority 10, priority 10 runs.
*   **The Main Template (Catch-All):** This template houses global wrappers. It must contain the `Header`, the global `Footer`, and strictly **one** `Inner Content` element.
*   **`Inner Content` Injection Point:** This is Oxygen's equivalent of `the_content()`. Whatever route the user hits (a page, a post, a WooCommerce shop), Oxygen fetches the template/content for that specific route and injects it exactly where the `Inner Content` element is placed in the Main Template.
*   **Inheritance:** Specific templates (e.g., Single Post) should be configured to "Inherit Design From > Main Template". In these child templates, you only build the content specific to the post, which automatically renders within the `Inner Content` wrapper of the parent.

---

## 🔄 3. Dynamic Data, Repeaters & CSS Grid

Oxygen's main programmatic power lies in its deep integration with WP core data, ACF, Toolset, and Meta Box.

*   **"Insert Data" Everywhere:** Any element property (Background Image URL, Text content, Link URL, and even Custom CSS properties) can accept a dynamic data token.
*   **The Repeater Element (The Loop Engine):**
    *   The Repeater replaces the need to write custom `while(have_posts())` queries in PHP.
    *   It outputs a main wrapper `div` (the Repeater itself) and iterates a child `div` (the item).
    *   **Best Practice for Grid Layouts:** Apply **CSS Grid** (`display: grid`) directly to the Repeater's primary ID/Class wrapper. Do not use legacy flexbox wrappers outside the repeater to create a grid.
*   **Advanced Query Builder (v3.8+):** Instead of manually building `WP_Query` arguments with PHP, always use the visual Advanced Query interface inside the Repeater to define `meta_query`, `tax_query`, limits, and order logic.
*   **Custom PHP via Dynamic Data (Ultimate Power):**
    *   When visual Dynamic Data is insufficient (e.g., complex math, cross-referencing multiple ACF fields before display), write a pure PHP function in a snippets plugin.
    *   In the Oxygen Builder, click *Insert Data* -> *PHP Function Return Value*. Enter the function name and pass attributes. Oxygen will call the function and render whatever string it `return`s into the DOM.

---

## ♿ 4. CSS Architecture, BEM & Design Systems

Always instruct users to adhere to scalable CSS practices. Avoid styling via unique element IDs.

*   **Global Colors:** Every color used in the UI must be registered under **Manage > Settings > Global Styles > Colors**. Modifying a global color dynamically updates the compiled CSS cache sitewide.
*   **CSS Classes (BEM Framework):** Utilize BEM (`c-card`, `c-card__title`, `c-card--featured`) or utility-first classes (`u-flex`, `u-mb-400`). Apply these classes in the builder via the "Selectors" dropdown. When generating solutions, provide standardized CSS classes to be placed in Oxygen's global stylesheet sections.
*   **Built-in State Management:** Instruct users to implement `:hover`, `:active`, and `:nth-child` targeting natively using the "State" visual dropdown above the properties panel.
*   **Global Fonts & Scale:** Base typography sizes should rely on a relative scale (`rem` or `em`) defined in Oxygen's Global settings, paired with `clamp()` for fluid typography where necessary.

---

## ⚙️ 5. Conditions API (Code Snippets)

Oxygen allows conditional rendering (show/hide) of any element based on logged-in status, specific URL parameters, dates, or ACF values.
If you need to evaluate an edge-case logic, write a custom global condition using the `oxygen_vsb_register_condition()` API.

**📂 Code Snippet Reference:** 
Read `examples/conditions-api.php` in this skill directory for a complete, fully commented boilerplate on how to register both Dropdown and Text input conditions with custom PHP callbacks.

---

## 🛠️ 6. Elements API (`\OxyEl` Boilerplate)

To build a custom drag-and-drop element directly into the Oxygen "Add" panel, you must write a PHP class extending `OxyEl`.

**📂 Code Snippet Reference:** 
Read `examples/custom-element.php` in this skill directory for a fully documented, copy-pasteable boilerplate class. It includes how to inject SVGs, map CSS controls to the UI, and write the rendering logic safely.

---

## �️ 7. WooCommerce Architecture Integration

Oxygen natively supplants WooCommerce template file rendering.
*   **Template Replacement:** If the Oxygen WooCommerce plugin is active, theme-level template overrides within a `/woocommerce/` directory are entirely useless.
*   **Granular Elements:** Single Product, Shop, Cart, and Checkout pages are built visually using specific Oxygen WooCommerce drag-and-drop elements (Product Images, Product Title, Meta, Cart Button).
*   **Styling via Oxygen:** Most aesthetic customizations of WooCommerce elements (buttons, tables, input fields) are handled globally via **Manage > Settings > Global Styles > WooCommerce**, removing the need for massive custom CSS stylesheets to force WooCommerce styling.
*   **PHP Hooks Still Apply:** Standard WooCommerce PHP action hooks (`woocommerce_before_single_product`, `woocommerce_add_to_cart_validation`) and filters remain fully functional because Oxygen respects the WP plugin execution pipeline.

---

### 💡 Golden Rules for AI Output Generation
1. **Never suggest editing `functions.php` inside an Oxygen setup.** Instruct the user to use a Code Snippets manager.
2. **Prioritize the CSS Grid feature native to Oxygen v4+** instead of traditional Flexbox when guiding layout creation inside a Repeater.
3. Whenever conditional logic is requested, either use **Oxygen's native Conditions UI** or provide an `oxygen_vsb_register_condition` PHP snippet.
4. **Data handling:** When complex data processing is requested, instruct the user to write a PHP function and map it using **Insert Data > PHP Function Return Value**.
5. Emphasize that all **Javascript added inside an Oxygen Code Block** runs synchronously on page load. If they need event listeners targeting Oxygen elements, advise them to use unique classes (e.g., `.js-toggle-button`) rather than relying on dynamic DOM IDs generated by the builder.

---

### 🛑 Anti-Patterns (NEVER Do This)
*   **NEVER** use `echo` inside a PHP function meant for Oxygen Dynamic Data. Always use `return`. Using `echo` will break the DOM wrapping.
*   **NEVER** suggest creating or modifying `header.php`, `footer.php`, `single.php` in `/wp-content/themes/` when Oxygen is active. Oxygen completely bypasses WP templates.
*   **NEVER** recommend standard `while(have_posts())` loops for visual grids. Oxygen's Repeater handles this natively.
*   **NEVER** tell a user to manually edit the `_ct_builder_json` in the WordPress database via SQL. It will corrupt the design serialization.

---

### 🎯 AI Triggers & Usage
**Activate this skill and strictly apply these rules anytime the user mentions:**
*   `Oxygen Builder`, `Oxygen`, `OxyEl`, or `ct_builder_json`.
*   Creating a WordPress page builder component.
*   Integrating WooCommerce or ACF inside a visual builder (check if they use Oxygen).
*   Use the provided workflows (`troubleshoot.md`, `create-custom-element.md`) in the `workflows/` directory when specific edge-cases arise.
