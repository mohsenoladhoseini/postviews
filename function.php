<?php
function post_view_item($post_id){
     $counter=get_post_meta($post_id ,'cunter',true);
     if (intval($counter)) {
       $counter++;
       update_post_meta($post_id , 'cunter' ,$counter);
     }else {
       add_post_meta($post_id ,'cunter' ,1);
     }
     echo $counter;
}
function get_view(){
$counter=get_post_meta($post_id ,'cunter',true);
Return intval($counter);
}
