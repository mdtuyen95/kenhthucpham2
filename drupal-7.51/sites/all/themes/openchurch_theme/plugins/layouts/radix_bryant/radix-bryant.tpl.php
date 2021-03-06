<?php
/**
 * @file
 * Template for Radix Bryant.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */

// We want to collapse the sidebar if there is no content
$full_width = empty($content['sidebar']) ? ' full-width' : '';
?>

<div class="panel-display bryant clearfix <?php if (!empty($classes)) { print $classes; } ?><?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="container-fluid">
    <div class="row">
      <?php if (!empty($content['sidebar'])): ?>
        <div class="col-md-3 radix-layouts-sidebar panel-panel">
          <div class="panel-panel-inner">
            <?php print $content['sidebar']; ?>
          </div>
        </div>
      <?php endif; ?>
      <div class="col-md-9 radix-layouts-content panel-panel<?php print $full_width; ?>">
        <div class="panel-panel-inner">
          <?php print $content['contentmain']; ?>
        </div>
      </div>
    </div>
  </div>

</div><!-- /.bryant -->