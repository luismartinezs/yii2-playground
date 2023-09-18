<?php

namespace app\widgets;

use yii\base\Widget;

class DefinitionList extends Widget
{
  public $items = [];

  public function run()
  {
    $output = '<dl>';

    foreach ($this->items as $item) {
      $term = $item['term'];
      $definition = $item['definition'];

      $output .= '<dt>' . $term . '</dt>';
      $output .= '<dd>' . $definition . '</dd>';
    }

    $output .= '</dl>';

    return $output;
  }
}
