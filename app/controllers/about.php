<?php

$title = 'My blog | About';

$post =
  '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, veniam, provident commodi quia error voluptatibus impedit, porro consequuntur facere voluptatum temporibus repellat! Accusamus a ducimus provident! Praesentium accusamus itaque rerum?</p>
  <p>Optio sequi tempore commodi dolore alias mollitia quis soluta, rem excepturi provident similique praesentium saepe sint atque ab quibusdam vel nulla? Sunt impedit dignissimos reiciendis aperiam maxime labore quasi omnis.</p>
  <p>Consectetur harum hic dolorum eveniet enim fugiat architecto alias veniam, nobis et fugit facilis reiciendis, deserunt nesciunt minima iure esse dolores! Minus exercitationem tenetur modi voluptatum reiciendis accusantium sapiente ullam.</p>';

$recent_posts = [
  1 => [
    'title' => 'An item',
    'slug' => lcfirst(str_replace(' ', '-', 'An item')),
  ],
  2 => [
    'title' => 'A second item',
    'slug' => lcfirst(str_replace(' ', '-', 'A second item')),
  ],
  3 => [
    'title' => 'A third item',
    'slug' => lcfirst(str_replace(' ', '-', 'A third item')),
  ],
  4 => [
    'title' => 'A fourth item',
    'slug' => lcfirst(str_replace(' ', '-', 'A fourth item')),
  ],
  5 => [
    'title' => 'A fifth item',
    'slug' => lcfirst(str_replace(' ', '-', 'A fifth item')),
  ],

];

require_once VIEWS . '/about.tpl.php';

