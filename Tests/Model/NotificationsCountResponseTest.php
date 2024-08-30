<?php
/**
 * NotificationsCountResponseTest.
 *
 * PHP version 8.1.1
 *
 * @category Class
 *
 * @author   openapi-generator contributors
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.5.5
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Server\Tests\Model;

use OpenAPI\Server\Model\NotificationsCountResponse;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * NotificationsCountResponseTest Class Doc Comment.
 *
 * @category    Class
 *
 * @description NotificationsCountResponse
 *
 * @author      openapi-generator contributors
 *
 * @see        https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPI\Server\Model\NotificationsCountResponse
 *
 * @internal
 */
class NotificationsCountResponseTest extends TestCase
{
  protected NotificationsCountResponse|MockObject $object;

  /**
   * Setup before running any test case.
   */
  public static function setUpBeforeClass(): void
  {
  }

  /**
   * Setup before running each test case.
   */
  public function setUp(): void
  {
    $this->object = $this->getMockBuilder(NotificationsCountResponse::class)->getMockForAbstractClass();
  }

  /**
   * Clean up after running each test case.
   */
  public function tearDown(): void
  {
  }

  /**
   * Clean up after running all test cases.
   */
  public static function tearDownAfterClass(): void
  {
  }

  /**
   * @group integration
   *
   * @small
   */
  public function testTestClassExists(): void
  {
    $this->assertTrue(class_exists(NotificationsCountResponse::class));
    $this->assertInstanceOf(NotificationsCountResponse::class, $this->object);
  }

  /**
   * Test attribute "total".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyTotal(): void
  {
    $this->markTestSkipped('Test for property total not implemented');
  }

  /**
   * Test attribute "like".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyLike(): void
  {
    $this->markTestSkipped('Test for property like not implemented');
  }

  /**
   * Test attribute "follower".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyFollower(): void
  {
    $this->markTestSkipped('Test for property follower not implemented');
  }

  /**
   * Test attribute "comment".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyComment(): void
  {
    $this->markTestSkipped('Test for property comment not implemented');
  }

  /**
   * Test attribute "remix".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyRemix(): void
  {
    $this->markTestSkipped('Test for property remix not implemented');
  }
}
