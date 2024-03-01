<?php
/**
 * NotificationContentTest.
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
 * The version of the OpenAPI document: v1.3.0
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Server\Model;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * NotificationContentTest Class Doc Comment.
 *
 * @category    Class
 *
 * @description NotificationContent
 *
 * @author      openapi-generator contributors
 *
 * @see        https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPI\Server\Model\NotificationContent
 *
 * @internal
 */
class NotificationContentTest extends TestCase
{
  protected NotificationContent|MockObject $object;

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
    $this->object = $this->getMockBuilder(NotificationContent::class)->getMockForAbstractClass();
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
    $this->assertTrue(class_exists(NotificationContent::class));
    $this->assertInstanceOf(NotificationContent::class, $this->object);
  }

  /**
   * Test attribute "from".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyFrom(): void
  {
    $this->markTestSkipped('Test for property from not implemented');
  }

  /**
   * Test attribute "from_name".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyFromName(): void
  {
    $this->markTestSkipped('Test for property from_name not implemented');
  }

  /**
   * Test attribute "program".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyProgram(): void
  {
    $this->markTestSkipped('Test for property program not implemented');
  }

  /**
   * Test attribute "program_name".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyProgramName(): void
  {
    $this->markTestSkipped('Test for property program_name not implemented');
  }

  /**
   * Test attribute "avatar".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyAvatar(): void
  {
    $this->markTestSkipped('Test for property avatar not implemented');
  }

  /**
   * Test attribute "remixed_program".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyRemixedProgram(): void
  {
    $this->markTestSkipped('Test for property remixed_program not implemented');
  }

  /**
   * Test attribute "remixed_program_name".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyRemixedProgramName(): void
  {
    $this->markTestSkipped('Test for property remixed_program_name not implemented');
  }

  /**
   * Test attribute "message".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyMessage(): void
  {
    $this->markTestSkipped('Test for property message not implemented');
  }

  /**
   * Test attribute "prize".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyPrize(): void
  {
    $this->markTestSkipped('Test for property prize not implemented');
  }
}
