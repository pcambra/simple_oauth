<?php

namespace Drupal\simple_oauth\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Access Token entities.
 *
 * @ingroup simple_oauth
 */
interface Oauth2TokenInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  /**
   * Returns the defaul expiration.
   *
   * @return array
   *   The default expiration timestamp.
   */
  public static function defaultExpiration();

  /**
   * Checks if the current token allows the provided permission.
   *
   * @param string $permission
   *   The requested permission.
   *
   * @return bool
   *   TRUE if the permission is included. FALSE otherwise.
   */
  public function hasPermission($permission);

  /**
   * Revoke a token.
   */
  public function revoke();

  /**
   * Check if the token was revoked.
   *
   * @return bool
   *   TRUE if the token is revoked. FALSE otherwise.
   */
  public function isRevoked();


}
