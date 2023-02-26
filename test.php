<?php

// Your Instagram access token
$access_token = 'IGQVJYak01c3ZA4VklaZA1Q2YlllRDYyV1ZA5N3lqMmNGREZAlekNBVGdGT1FmdXh6bWNqRHRrMlpJcE5hUVRsTEVnRjl5U0M5MlFJOVVDY01TM082Xy1HNHlYU2huRGY1bmFhUGFEaFl5cm55TW1obThtRDJvTGZAlanpxRW9N';

// Fetch the Instagram feed
$response = file_get_contents("https://graph.instagram.com/me/media?fields=id,media_type,media_url,thumbnail_url,caption,permalink,username,children{media_type,media_url}&access_token={$access_token}");
$data = json_decode($response);

// Output the Instagram feed
echo "<div style='display: flex; flex-wrap: wrap; justify-content: center;'>";
foreach ($data->data as $post) {
  if ($post->media_type == 'IMAGE' || $post->media_type == 'VIDEO') {
    // Single image or video post
    echo "<div style='margin: 10px;'>";
    if ($post->media_type == 'IMAGE') {
      echo "<img src='{$post->media_url}' alt='{$post->caption}' style='max-width: 100%;'/>";
    } else {
      echo "<video src='{$post->media_url}' alt='{$post->caption}' style='max-width: 100%;' controls></video>";
    }
    echo "<div style='margin-top: 10px;'>";
    echo "<strong>{$post->username}</strong>";
    if ($post->caption) {
      echo "<p>{$post->caption}</p>";
    }
    echo "</div>";
    echo "</div>";
  } else if ($post->media_type == 'CAROUSEL_ALBUM') {
    // Carousel or album post
    echo "<div style='margin: 10px;'>";
    echo "<div id='carousel-{$post->id}' class='carousel slide' data-ride='carousel'>";
    echo "<ol class='carousel-indicators'>";
    for ($i = 0; $i < count($post->children->data); $i++) {
      echo "<li data-target='#carousel-{$post->id}' data-slide-to='{$i}'";
      if ($i == 0) {
        echo " class='active'";
      }
      echo "></li>";
    }
    echo "</ol>";
    echo "<div class='carousel-inner'>";
    foreach ($post->children->data as $index => $child) {
      echo "<div class='carousel-item";
      if ($index == 0) {
        echo " active";
      }
      echo "'>";
      if ($child->media_type == 'IMAGE') {
        echo "<img src='{$child->media_url}' alt='{$post->caption}' style='max-width: 100%;'/>";
      } else {
        echo "<video src='{$child->media_url}' alt='{$post->caption}' style='max-width: 100%;' controls></video>";
      }
      echo "</div>";
    }
    echo "</div>";
    echo "<a class='carousel-control-prev' href='#carousel-{$post->id}' role='button' data-slide='prev'>";
    echo "<span class='carousel-control-prev-icon' aria-hidden='true'></span>";
    echo "<span class='sr-only'>Previous</span>";
    echo "</a>";
    echo "<a class='carousel-control-next' href='#carousel-{$post->id}' role='button' data-slide='next'>";
    echo "<span class='carousel-control-next-icon' aria-hidden='true'></span>";
    echo "<span class='sr-only'>Next</span>";
    echo "</a>";
    echo "<div style='margin-top: 10px;'>";
    echo "<strong>{$post->username}</strong>";
    if ($post->caption) {
      echo "<p>{$post->caption}</p>";
	}
  }
}
