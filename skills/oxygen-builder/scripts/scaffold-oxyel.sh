#!/bin/bash

# Script: scaffold-oxyel.sh
# Purpose: Automatically generates a basic WordPress plugin structure 
# ready for an Oxygen Custom Element (OxyEl).
# 
# Usage: ./scaffold-oxyel.sh "Element Name" "Plugin Slug"

if [ "$#" -ne 2 ]; then
    echo "Usage: $0 \"Element Name\" \"plugin-slug\""
    echo "Example: $0 \"My Super Hero\" \"oxy-super-hero\""
    exit 1
fi

ELEMENT_NAME=$1
PLUGIN_SLUG=$2
CLASS_NAME=$(echo "$ELEMENT_NAME" | sed -r 's/[^a-zA-Z0-9]//g')
ELEMENT_SLUG=$(echo "$ELEMENT_NAME" | tr '[:upper:]' '[:lower:]' | sed -r 's/[^a-z0-9]/_/g')

PLUGIN_DIR="./${PLUGIN_SLUG}"
PLUGIN_FILE="${PLUGIN_DIR}/${PLUGIN_SLUG}.php"

echo "🚀 Scaffolding Oxygen Element Plugin: $ELEMENT_NAME ($CLASS_NAME) into ./$PLUGIN_SLUG"

mkdir -p "$PLUGIN_DIR"

cat <<EOF > "$PLUGIN_FILE"
<?php
/**
 * Plugin Name: Oxygen Builder Element - $ELEMENT_NAME
 * Description: Custom Oxygen component generated via rag-code-mcp skill scaffolding.
 * Version: 1.0.0
 * Author: Your Name
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

add_action('plugins_loaded', 'init_${PLUGIN_SLUG}_oxygen_element');

function init_${PLUGIN_SLUG}_oxygen_element() {
    
    // Safety check - ensuring Oxygen is installed and active
    if (!class_exists('OxyEl')) {
        return;
    }

    class Oxy${CLASS_NAME} extends OxyEl {

        public function name() {
            return '$ELEMENT_NAME';
        }

        public function slug() {
            return '$ELEMENT_SLUG'; 
        }

        public function button_place() {
            return 'custom_components'; // "basics", "helpers", "interactive"
        }

        public function icon() {
            // Default placeholder SVG icon
            return '<svg viewBox="0 0 24 24"><path fill="currentColor" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>';
        }

        public function controls() {
            \$this->addOptionControl(
                array(
                    "type" => "textfield",
                    "name" => "Title Text",
                    "slug" => "title_text"
                )
            );
        }

        public function render(\$options, \$defaults, \$content) {
            \$title = isset(\$options['title_text']) ? \$options['title_text'] : 'Hello World';
            ?>
            <div class="oxy-${ELEMENT_SLUG}-wrapper">
                <h3><?php echo esc_html(\$title); ?></h3>
                <?php if (\$content) { ?>
                    <div class="oxy-${ELEMENT_SLUG}-content">
                        <?php echo do_shortcode(\$content); ?>
                    </div>
                <?php } ?>
            </div>
            <?php
        }
    }

    new Oxy${CLASS_NAME}();
}
EOF

echo "✅ Created $PLUGIN_FILE"
echo "👉 Move this folder to wp-content/plugins/ and activate the plugin inside WordPress."
