<?php

function redirectionari_navigatie() {

  // READ COMMENTS FOR UNDERSTANDING!

  // TARGETS FOR NAVIGATION
  // _blank	Opens the linked document in a new window or tab
  // _self	Opens the linked document in the same frame as it was clicked (this is default)
  // _parent	Opens the linked document in the parent frame
  // _top	Opens the linked document in the full body of the window

  $navigatie[0] = "Home"; # $navigatie[number] is number of navigation link
  $navigatie_links[0] = "localhost:8888"; # $navigatie_links[number] is number of navigation link
  $navigatie_icon[0] = ""; # Find those icons on https://fontawesome.com/icons?d=gallery
  $navigatie_target[0] = "_self"; # Set the style opening of page
  $navigatie_toggle_store[0] = "false";

  $navigatie[1] = "Store"; # $navigatie[number] is number of navigation link
  $navigatie_links[1] = "https://store.labrp.net/"; # $navigatie_links[number] is number of navigation link
  $navigatie_icon[1] = ""; # Find those icons on https://fontawesome.com/icons?d=gallery
  $navigatie_target[1] = "_blank"; # Set the style opening of page
  $navigatie_toggle_store[1] = "false";

  $navigatie[2] = "Forums"; # $navigatie[number] is number of navigation link
  $navigatie_links[2] = "https://forums.labrp.net/"; # $navigatie_links[number] is number of navigation link
  $navigatie_icon[2] = ""; # Find those icons on https://fontawesome.com/icons?d=gallery
  $navigatie_target[2] = "_blank"; # Set the style opening of page
  $navigatie_toggle_store[2] = "false";

  $navigatie[3] = "LSPD Panel"; # $navigatie[number] is number of navigation link
  $navigatie_links[3] = "https://lspd.labrp.net/login.php"; # $navigatie_links[number] is number of navigation link
  $navigatie_icon[3] = ""; # Find those icons on https://fontawesome.com/icons?d=gallery
  $navigatie_target[3] = "_blank"; # Set the style opening of page
  $navigatie_toggle_store[3] = "false";

  $navigatie[4] = "SAFR Panel"; # $navigatie[number] is number of navigation link
  $navigatie_links[4] = "https://safr.labrp.net/login.php"; # $navigatie_links[number] is number of navigation link
  $navigatie_icon[4] = ""; # Find those icons on https://fontawesome.com/icons?d=gallery
  $navigatie_target[4] = "_blank"; # Set the style opening of page
  $navigatie_toggle_store[4] = "false";

  $iteme_navigatie = count($navigatie);

  for ($i = 0; $i < $iteme_navigatie; $i++) {
    if ($navigatie_toggle_store[$i] == "true") {
      $navigatie_toggle_store[$i] = "store";
    }
    echo ('<li><a href='.$navigatie_links[$i].' target="'.$navigatie_target[$i].'" class="'.$navigatie_toggle_store[$i].'"><i class="'.$navigatie_icon[$i].'"></i> '.$navigatie[$i].'</a></li>');
  }

}


function redirectionari_media() {

  // READ COMMENTS FOR UNDERSTANDING! yh mate

  $media_link[0] = "https://twitter.com/LaboriousRP"; # $media_link[number] is number of navigation link
  $media_icon[0] = "fab fa-twitter"; # Find those icons on https://fontawesome.com/icons?d=gallery

  $media_link[1] = "https://www.youtube.com/channel/UCgiPJMi_QfA50ZNB-L1fQOQ"; # $media_link[number] is number of navigation link
  $media_icon[1] = "fab fa-youtube"; # Find those icons on https://fontawesome.com/icons?d=gallery

  $media_link[2] = "https://www.instagram.com/laboriousrp/"; # $media_link[number] is number of navigation link
  $media_icon[2] = "fab fa-instagram"; # Find those icons on https://fontawesome.com/icons?d=gallery
  $navigatie_target[2] = "_blank"; # Set the style opening of page

  $media_link[3] = "https://www.reddit.com/user/LaboriousRoleplay"; # $media_link[number] is number of navigation link
  $media_icon[3] = "fab fa-reddit"; # Find those icons on https://fontawesome.com/icons?d=gallery

  $media_link[4] = "https://www.twitch.tv/laboriousrp"; # $media_link[number] is number of navigation link
  $media_icon[4] = "fab fa-twitch"; # Find those icons on https://fontawesome.com/icons?d=gallery



  $iteme_media = count($media_link);

  for ($i = 0; $i < $iteme_media; $i++) {
    echo ('<li><a href="'.$media_link[$i].'"><i class="'.$media_icon[$i].'"></i></a></li>');
  }

}

?>