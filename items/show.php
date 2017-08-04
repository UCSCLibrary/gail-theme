<?php echo head(array('title' => metadata('item',array('Dublin Core', 'Title')), 'bodyid'=>'items','bodyclass' => 'show')); ?>

<!-- item/show.php -->

<div class="col-md-2">
<!-- Menu goes here -->
</div>

<div class="container-fluid" style="padding-bottom:5rem;">
  <div class="row-fluid">
    <div class="col-md-10">
      <div class="row">
        <div class="col-md-9">
          <h2><?php echo metadata('item', array('Dublin Core', 'Title')); ?></h2>
        </div>
        <div class="col-md-3"><ul class="pager">
          <li><?php echo link_to_previous_item_show("&larr; Prev"); ?></li>
          <li><?php echo link_to_next_item_show("Next &rarr;"); ?></li>
          </ul>
        </div>
      </div>

      <?php echo bootstrap_custom_show_item_metadata(); ?>

      


      <?php
      if (class_exists('DocsViewerPlugin')):
      $docsViewer = new DocsViewerPlugin;
      # $docsViewer->embed();
      endif;
      ?>

      <?php
      set_loop_records('files', get_current_record('item')->Files);
      foreach(loop('files') as $file): ?>
        <div class="row" style="padding-bottom:1rem;">

          <div class="col-md-8">
            <a href=<?php echo metadata($file, 'uri')?>>
              <?php echo file_image('fullsize', $props=array('class'=>'img-responsive'), $file);?>
            </a>
          </div>

          <div class="col-md-4">
            <?php $name = pathinfo($file->original_filename, PATHINFO_FILENAME); ?>
            <?php echo $name .  "<br />"; ?>
            <?php echo metadata($file, array('Dublin Core', 'Title')); ?>
            <?php echo metadata($file, array('Dublin Core', 'Description')); ?>
          </div>
        </div> 
      <?php endforeach; ?>

      <!-- Step 3 -->

      <?php if(metadata('item','Collection Name')): ?>
        <div id="collection" class="element">
          <h3><?php echo __('Collection'); ?></h3>
          <div class="element-text">
            <?php echo link_to_collection_for_item(); ?>
          </div>
        </div>
      <?php endif; ?>

      <!-- The following prints a list of all tags associated with the item -->
      <?php if (metadata('item','has tags')): ?>
        <div id="item-tags" class="element">
          <h3><?php echo __('Tags'); ?></h3>
          <div class="element-text">
            <?php echo tag_string('item'); ?>
          </div>
        </div>
      <?php endif;?>

      <!-- The following prints a citation for this item. -->
      <div id="item-citation" class="element">
        <h3><?php echo __('Citation'); ?></h3>
        <div class="element-text">
          <?php echo metadata('item','citation',array('no_escape'=>true)); ?>
        </div>
      </div>

      <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>


      <!-- The following returns all of the files associated with an item. -->
      <!-- replace this with a carousel of related items-->
      <div id="itemfiles" class="element">
        <h3>Related Files</h3> 
        <div class="element-text">
          <?php echo files_for_item($options = array('imageSize' => 'thumbnail','showFilename' => false)); ?>
        </div>
      </div>

    </div>
  </div>
</div>

<?php echo foot(); ?>
