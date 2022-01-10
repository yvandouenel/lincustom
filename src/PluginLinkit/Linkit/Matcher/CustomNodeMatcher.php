<?php

namespace Drupal\linkcustom\Plugin\Linkit\Matcher;

use Drupal\Core\Entity\EntityInterface;
use Drupal\linkit\Plugin\Linkit\Matcher\NodeMatcher;
use Drupal\linkit\Utility\LinkitXss;

/**
 * Provides specific linkit matchers for the node entity type.
 *
 * @Matcher(
 *   id = "linkcustom",
 *   label = @Translation("Content"),
 *   target_entity = "node",
 *   provider = "node"
 * )
 */
class CustomNodeMatcher extends NodeMatcher {
  /**
   * Builds the metadata string used in the suggestion.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The matched entity.
   *
   * @return string
   *   The metadata for this entity.
   */
  protected function buildDescription(EntityInterface $entity) {
    \Drupal::logger('link_custom')->notice("Dans buildDescription");
    return LinkitXss::descriptionFilter($entity->field_title_for_link->value);
  }


}
