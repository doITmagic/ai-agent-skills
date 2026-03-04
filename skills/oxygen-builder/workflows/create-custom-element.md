---
description: How to scaffold, develop and integrate a Custom Oxygen Element (OxyEl) using best practices.
---

# Workflow: Create Custom Oxygen Element

Use this workflow whenever the user requests a new visual element or component to be dragged-and-dropped inside the Oxygen Builder interface.

### Step 1: Scenario Identification
- Is the request purely visual? Suggest using Oxygen's built-in "Code Block" element first. It's much faster.
- Is the request for a reusable, configurable component that needs a left-sidebar control panel (colors, text inputs)? **Proceed to Step 2.**

### Step 2: Scaffold the Element
Run the provided scaffolding script to generate the boilerplate plugin structure. The script is located inside the `.agent/skills/oxygen-builder/scripts/` folder of this project's root.

```bash
// turbo
cd .agent/skills/oxygen-builder/scripts/
./scaffold-oxyel.sh "Card Component" "oxy-custom-card"
```

*(Note: Adjust the arguments to match the user's requested element name).*

### Step 3: Implement Visual Controls (`controls()` function)
- Edit the generated `oxy-custom-card.php` file.
- Add `$this->addOptionControl()` for texts, toggles, or integers.
- Add `$this->addStyleControl()` for CSS properties that must target a specific DOM class in your element. Note that `addStyleControl` automatically writes the CSS for you globally without needing `customCSS()`.

### Step 4: Write the Render Logic (`render()` function)
- In the same PHP file, implement the `render($options, $defaults, $content)` method.
- **Critical Rule:** Every element must have a stable root `<div class="oxy-slug-wrapper">`.
- Use `esc_html()` or `wp_kses_post()` on user input variables.
- Wrap nested content (if the element is a container) around `echo do_shortcode($content);`.

### Step 5: Ask User to Deploy
- Instruct the user to move the generated folder (`oxy-custom-card` in the example) to their WordPress `wp-content/plugins/` directory.
- Remind them to **Activate the plugin** in the WP Admin.
- Tell them the element will now appear under "+ Add > Custom Components" in the Oxygen Editor.
