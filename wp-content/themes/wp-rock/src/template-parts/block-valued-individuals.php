<?php

/**
 * Block - Valued individuals.
 *
 * @package WP-rock
 */

$fields = get_fields();
$block_title = get_field_value($fields, 'title');
$item_repeater = get_field_value($fields, 'item_repeater');

?>

<section class="valued-individuals">
    <div class="valued-individuals__container container">
        <?php
        if (!empty($block_title)) {
            echo '<h2 class="valued-individuals__title">' . $block_title . '</h2>';
        }

        if ($item_repeater) {
            echo '<div class="valued-individuals__inner">';
            foreach ($item_repeater as $item) {
                $icon = $item['icon'] ? '<img class="valued-individuals__item-icon" src="' . $item['icon'] . '" alt="icon">' : '';

                echo '<div class="valued-individuals__item-wrapper"><div class="valued-individuals__item">
                                ' . $icon . '
                                <p class="valued-individuals__item-text">' . $item['text'] . '</p>
                            </div>
                        </div>';
            }
            echo '</div>';
        }
        ?>
    </div>
</section>
