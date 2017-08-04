<?php 

add_shortcode("gridview","gailGridShortcode");

function gailGridShortcode($options,$view) {
    ob_start();
    $itemTable = get_db()->getTable('Item');
    $select = $itemTable->getSelect();

    if(isset($options['tags']))  
        $itemTable->filterByTags($select,$options['tags']);
    if(isset($options['itemtype']))
        $itemTable->filterByItemType($select,$options['itemtype']);

    $items = $itemTable->fetchObjects($select);
    
    echo '<div class="gailgrid">';
    foreach($items as $item) {
        if(!$item->hasThumbnail())
            continue;
            echo '<div class ="item hentry">';

        if(isset($options['lightbox']) && $options['lightbox']==true ){
            $imageUrl = $item->getFile()->getWebPath('original');
            $title = metadata($item,array("Dublin Core","Title"));
            $titleLink = ' <a href="'.public_url('items/show/'.$item->id).'">'.$title.'</a> ';
            $recordAudioLink = ' <a href="'.public_url('items/show/'.$item->id.'#ar-widget').'">Share your story</a> ';

            echo '<a data-lightbox="gailgrid" data-title="'.htmlentities($titleLink.' - '.$recordAudioLink).'" data-caption="test" href="'.$imageUrl.'">';                
            echo item_image('square_thumbnail',array(),0,$item);
            echo '</a>';        
        } else {
            echo link_to_item(item_image('square_thumbnail',array(),0,$item),array(),'show',$item);            
        }
        echo('</div>');
    }    
    echo('</div>');

    return ob_get_clean();
}
?>
