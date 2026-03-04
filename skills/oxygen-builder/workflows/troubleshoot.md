---
description: Oxygen Builder Debugging Guide and Anti-Patterns Checklist.
---

# Workflow: Troubleshoot Oxygen Builder

When a user reports that "Oxygen is broken", "styles are not applying", or "my custom code isn't working", follow this rigorous checklist before assuming it's a code bug.

### Step 1: Diagnose CSS Caching Issues
Does the user state: *"I changed a global color/class but the frontend didn't update?"*
- **Action:** Ask them to regenerate the CSS cache.
- **Rule:** Oxygen compiles global styles into `/wp-content/uploads/oxygen/css/`. If the caching system hangs, visual changes won't apply.
- **Instruct User:** Go to WordPress Dashboard > Oxygen > Settings > CSS Cache > Click "Regenerate".

### Step 2: Diagnostic Shortcode Verification
Does the user state: *"My page is rendering as a blank screen or a dump of JSON data?"*
- **Action:** Verify the DOM serialized data.
- **Rule:** Oxygen builds layouts in JSON `_ct_builder_json`. If it gets corrupted, it falls back to parsing `_ct_builder_shortcodes`.
- **Instruct User:** Sign the shortcodes. Go to Oxygen > Settings > Security > Click "Sign All Shortcodes". This resolves 90% of layout breaking after a site migration or database search/replace.

### Step 3: Analyze "Template Inheritance" Issues
Does the user state: *"My header and footer vanished on single posts?"*
- **Action:** Check Template Priority and Inheritance.
- **Rule:** A template applied to `Single Posts` must explicitly say "Inherit Design From > Main Template". If they leave it blank, Oxygen assumes the user wants a blank canvas without the global header/footer wrappers.

### Step 4: Validate Dynamic Data PHP Functions
Does the user state: *"My PHP function in 'Insert Data' broke the layout completely?"*
- **Action:** Check for the `echo` Anti-Pattern.
- **Rule:** Oxygen calls your custom function and wraps the *return* value in its own `<div>` or `<span>`. If your function uses `echo`, the text will render **above** the HTML tags, completely destroying the DOM structure.
- **Fix:** Rewrite their custom function to only use `return $string;`.

### Step 5: Elementor / Legacy Theme Conflicts
Does the user state: *"I added code to 'functions.php' or 'header.php' of my child theme and it isn't running?"*
- **Action:** Explain Oxygen's architecture.
- **Rule:** Oxygen completely disables the WordPress theme system on the frontend.
- **Fix:** All PHP/JS scripts must be placed in a dedicated code snippets plugin (e.g., Code Snippets, WPCodeBox) or injected directly via the native Oxygen `Code Block` element. 
