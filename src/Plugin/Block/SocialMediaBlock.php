<?php

namespace Drupal\socialmedia\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a Social Media Block.
 *
 * @Block(
 *   id = "social_media_block",
 *   admin_label = @Translation("Social Media Block"),
 *   category = @Translation("Custom")
 * )
 */
class SocialMediaBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => '<h3>Hello Social Media Block</h3>
      <a href="https://x.com/?lang=en-in" target="_blank"><i class="fab fa-twitter-square">Twitter</i></a> <br/>
      <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-twitter-square">Facebook</i></a> <br/>
      <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram">Instagram</i></a> <br/>
      <a href="https://in.linkedin.com/" target="_blank"><i class="fab fa-linkedin">LinkedIn</i></a> <br/>
      <a href="https://www.youtube.com/?gl=IN" target="_blank"><i class="fab fa-youtube">YouTube</i></a> <br/>'
    ];
  }

}