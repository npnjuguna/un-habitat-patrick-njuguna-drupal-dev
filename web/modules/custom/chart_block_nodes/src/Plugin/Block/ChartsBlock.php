<?php

namespace Drupal\chart_block_nodes\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'ChartsBlock' block.
 *
 * @Block(
 *  id = "charts_block",
 *  admin_label = @Translation("Charts block"),
 * )
 */
class ChartsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

//    $types = \Drupal::entityTypeManager()
//      ->getStorage('node_type')
//      ->loadMultiple();

    $node_types = \Drupal\node\Entity\NodeType::loadMultiple();

    $node_types_list = array_keys($node_types);


    $node_count = [];

    for($i=0; $i < count($node_types_list); ++$i) {
      $nids = \Drupal::entityQuery('node')->condition('type',$node_types_list[$i])->execute();
      $node_count[] = count($nids);

    }


    $options = [];

    $options['type'] = 'column';
    $options['title'] = $this->t('Count of Nodes per Content Type');

    $options['yaxis_title'] = $this->t('Number of nodes');
    $options['xaxis_title'] = $this->t('Type');

    $options['yaxis_min'] = '';
    $options['yaxis_max'] = '';

    // TODO Google specific options...
    $options['legend'] = 'none';

    // Sample data format.
    $categories = $node_types_list;

    $seriesData = [
      [
        'name'  => 'Number of nodes',
        'color' => '#0d233a',
        'data'  => $node_count
      ],
    ];
    $build = [
      '#theme'      => 'chart_block_nodes',
      '#library'    => 'google',
      '#categories' => $categories,
      '#seriesData' => $seriesData,
      '#options'    => $options,
      '#cache' => array(
        'max-age' => 7*24*60*60,
      )
    ];

    return $build;
  }

}
