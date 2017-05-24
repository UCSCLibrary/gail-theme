<?php $pageTitle = __('Browse Items'); echo head(array('title' => $pageTitle, 'bodyid'=>'items','bodyclass' => 'browse')); ?>

<!-- item/browse.php -->
<div class="container-fluid">
    <div class="row" style="padding-bottom:3rem;">
        <div class="page-header">
            <div class="col-md-5">
                <h1>Browse Files <?php echo __('(%s total)', $total_results); ?></h1>

                <ul class="items-nav navigation" id="secondary-nav">
                    <?php echo public_nav_items(); ?>
                </ul>
            </div>
            <div class="col-md-7">
                <?php echo item_search_filters(); ?>
                <div id="pagination-top" class="pagination"><?php echo pagination_links(); ?></div>
            </div>
        </div>
    </div>

    <?php foreach (loop('items') as $item): ?>
        <div class="item hentry">
            <div class="row">
                <div class="col-md-3">
                    <?php if (metadata('item', 'has thumbnail')): ?>
                    
                        <div class="item-img">
                            <?php echo link_to_item(item_image('square_thumbnail')); ?>
                        </div>

                        <br />

                    <?php endif; ?>

                </div>
                <div class="col-md-9">
                    <div class="item-meta">

                        <h3><?php echo link_to_item(metadata('item', array('Dublin Core', 'Title')), array('class'=>'permalink')); ?></h3>

                        <?php echo metadata('item', array('Dublin Core', 'Date')); ?>

                        <?php if ($description = metadata('item', array('Dublin Core', 'Description'), array('snippet'=>250))): ?>
                            <div class="item-description">
                                <?php echo $description; ?>
                            </div>
                        <?php endif; ?>


                        <?php if ($text = metadata('item', array('Dublin Core', 'Relation'), array('snippet'=>250))): ?>
                            <p><?php echo bootstrap_get_metadata($item, 'Relation', 'Location'); ?></p>
                        <?php endif; ?>


                        <?php if (metadata('item', 'has tags')): ?>
                            <div class="tags"><p><strong><?php echo __('Tags'); ?>:</strong>
                                <?php echo tag_string('items'); ?></p>
                            </div>
                        <?php endif; ?>

                        <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); ?>
                    </div><!-- end class="item-meta" -->
                </div>
            </div>
        </div><!-- end class="item hentry" -->
        <hr/>
    <?php endforeach; ?>
</div>


<div id="pagination-bottom" class="pagination"><?php echo pagination_links(); ?></div>



<?php fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); ?>

<?php echo foot(); ?>
