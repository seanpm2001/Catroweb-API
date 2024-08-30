<?php
/**
 * NotificationContent.
 *
 * PHP version 8.1.1
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.6.0
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the NotificationContent model.
 *
 * @author  OpenAPI Generator team
 */
class NotificationContent
{
  /**
   * Id of the user who caused the notification.
   */
  #[SerializedName('from')]
  #[Assert\Type('string')]
  #[Type('string')]
  #[Assert\Regex('/^[a-zA-Z0-9\\\-]+$/')]
  protected ?string $from = null;

  /**
   * Username of the user who caused the notification.
   */
  #[SerializedName('from_name')]
  #[Assert\Type('string')]
  #[Type('string')]
  protected ?string $from_name = null;

  /**
   * Id of the project for which the notification is about.
   */
  #[SerializedName('project')]
  #[Assert\Type('string')]
  #[Type('string')]
  #[Assert\Regex('/^[a-zA-Z0-9\\\-]+$/')]
  protected ?string $project = null;

  /**
   * Name of the project for which the notification is about.
   */
  #[SerializedName('project_name')]
  #[Assert\Type('string')]
  #[Type('string')]
  protected ?string $project_name = null;

  /**
   * Avatar of the user who caused the notification.
   */
  #[SerializedName('avatar')]
  #[Assert\Type('string')]
  #[Type('string')]
  protected ?string $avatar = null;

  /**
   * Id of the remixed project.
   */
  #[SerializedName('remixed_project')]
  #[Assert\Type('string')]
  #[Type('string')]
  #[Assert\Regex('/^[a-zA-Z0-9\\\-]+$/')]
  protected ?string $remixed_project = null;

  /**
   * Name of the remixed project.
   */
  #[SerializedName('remixed_project_name')]
  #[Assert\Type('string')]
  #[Type('string')]
  protected ?string $remixed_project_name = null;

  /**
   * Notification message.
   */
  #[SerializedName('message')]
  #[Assert\Type('string')]
  #[Type('string')]
  protected ?string $message = null;

  /**
   * Prize for anniversary notifications.
   */
  #[SerializedName('prize')]
  #[Assert\Type('string')]
  #[Type('string')]
  protected ?string $prize = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(?array $data = null)
  {
    if (is_array($data)) {
      $this->from = array_key_exists('from', $data) ? $data['from'] : $this->from;
      $this->from_name = array_key_exists('from_name', $data) ? $data['from_name'] : $this->from_name;
      $this->project = array_key_exists('project', $data) ? $data['project'] : $this->project;
      $this->project_name = array_key_exists('project_name', $data) ? $data['project_name'] : $this->project_name;
      $this->avatar = array_key_exists('avatar', $data) ? $data['avatar'] : $this->avatar;
      $this->remixed_project = array_key_exists('remixed_project', $data) ? $data['remixed_project'] : $this->remixed_project;
      $this->remixed_project_name = array_key_exists('remixed_project_name', $data) ? $data['remixed_project_name'] : $this->remixed_project_name;
      $this->message = array_key_exists('message', $data) ? $data['message'] : $this->message;
      $this->prize = array_key_exists('prize', $data) ? $data['prize'] : $this->prize;
    }
  }

  /**
   * Gets from.
   */
  public function getFrom(): ?string
  {
    return $this->from;
  }

  /**
   * Sets from.
   *
   * @param string|null $from Id of the user who caused the notification
   *
   * @return $this
   */
  public function setFrom(?string $from = null): self
  {
    $this->from = $from;

    return $this;
  }

  /**
   * Gets from_name.
   */
  public function getFromName(): ?string
  {
    return $this->from_name;
  }

  /**
   * Sets from_name.
   *
   * @param string|null $from_name Username of the user who caused the notification
   *
   * @return $this
   */
  public function setFromName(?string $from_name = null): self
  {
    $this->from_name = $from_name;

    return $this;
  }

  /**
   * Gets project.
   */
  public function getProject(): ?string
  {
    return $this->project;
  }

  /**
   * Sets project.
   *
   * @param string|null $project Id of the project for which the notification is about
   *
   * @return $this
   */
  public function setProject(?string $project = null): self
  {
    $this->project = $project;

    return $this;
  }

  /**
   * Gets project_name.
   */
  public function getProjectName(): ?string
  {
    return $this->project_name;
  }

  /**
   * Sets project_name.
   *
   * @param string|null $project_name Name of the project for which the notification is about
   *
   * @return $this
   */
  public function setProjectName(?string $project_name = null): self
  {
    $this->project_name = $project_name;

    return $this;
  }

  /**
   * Gets avatar.
   */
  public function getAvatar(): ?string
  {
    return $this->avatar;
  }

  /**
   * Sets avatar.
   *
   * @param string|null $avatar Avatar of the user who caused the notification
   *
   * @return $this
   */
  public function setAvatar(?string $avatar = null): self
  {
    $this->avatar = $avatar;

    return $this;
  }

  /**
   * Gets remixed_project.
   */
  public function getRemixedProject(): ?string
  {
    return $this->remixed_project;
  }

  /**
   * Sets remixed_project.
   *
   * @param string|null $remixed_project Id of the remixed project
   *
   * @return $this
   */
  public function setRemixedProject(?string $remixed_project = null): self
  {
    $this->remixed_project = $remixed_project;

    return $this;
  }

  /**
   * Gets remixed_project_name.
   */
  public function getRemixedProjectName(): ?string
  {
    return $this->remixed_project_name;
  }

  /**
   * Sets remixed_project_name.
   *
   * @param string|null $remixed_project_name Name of the remixed project
   *
   * @return $this
   */
  public function setRemixedProjectName(?string $remixed_project_name = null): self
  {
    $this->remixed_project_name = $remixed_project_name;

    return $this;
  }

  /**
   * Gets message.
   */
  public function getMessage(): ?string
  {
    return $this->message;
  }

  /**
   * Sets message.
   *
   * @param string|null $message Notification message
   *
   * @return $this
   */
  public function setMessage(?string $message = null): self
  {
    $this->message = $message;

    return $this;
  }

  /**
   * Gets prize.
   */
  public function getPrize(): ?string
  {
    return $this->prize;
  }

  /**
   * Sets prize.
   *
   * @param string|null $prize Prize for anniversary notifications
   *
   * @return $this
   */
  public function setPrize(?string $prize = null): self
  {
    $this->prize = $prize;

    return $this;
  }
}
