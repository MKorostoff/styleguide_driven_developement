<?php

namespace Drupal\demo_footer\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a footer Block
 *
 * @Block(
 *   id = "demo_footer",
 *   admin_label = @Translation("Demo footer"),
 * )
 */
class demoFooter extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $menu_name = 'footer';
    $menu_parameters = \Drupal::menuTree()->getCurrentRouteMenuTreeParameters($menu_name);
    $tree = \Drupal::menuTree()->load($menu_name, $menu_parameters);
    $renderable = \Drupal::menuTree()->build($tree);

    return array(
      '#theme' => 'demo_footer',
      '#links' => $renderable['#items'],
      '#attached' => array(
        'library' =>  array(
          'demo_footer/footer'
        ),
      )
    );
  }
}