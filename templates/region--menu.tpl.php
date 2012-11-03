<div<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <nav class="navigation">
    <?=drupal_render(menu_tree_output(menu_build_tree('main-menu')))?>
    </nav>
  </div>
</div>