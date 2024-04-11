<?php
/**
 * BaseUserTest.
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
 * The version of the OpenAPI document: v1.4.0
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Server\Tests\Model;

use OpenAPI\Server\Model\BaseUser;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * BaseUserTest Class Doc Comment.
 *
 * @category    Class
 *
 * @description BaseUser
 *
 * @author      openapi-generator contributors
 *
 * @see        https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPI\Server\Model\BaseUser
 *
 * @internal
 */
class BaseUserTest extends TestCase
{
  protected BaseUser|MockObject $object;

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
    $this->object = $this->getMockBuilder(BaseUser::class)->getMockForAbstractClass();
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
    $this->assertTrue(class_exists(BaseUser::class));
    $this->assertInstanceOf(BaseUser::class, $this->object);
  }

  /**
   * Test attribute "email".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyEmail(): void
  {
    $this->markTestSkipped('Test for property email not implemented');
  }

  /**
   * Test attribute "username".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyUsername(): void
  {
    $this->markTestSkipped('Test for property username not implemented');
  }

  /**
   * Test attribute "password".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyPassword(): void
  {
    $this->markTestSkipped('Test for property password not implemented');
  }

  /**
   * Test attribute "picture".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyPicture(): void
  {
    $this->markTestSkipped('Test for property picture not implemented');
  }

  /**
   * Test attribute "about".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyAbout(): void
  {
    $this->markTestSkipped('Test for property about not implemented');
  }

  /**
   * Test attribute "currently_working_on".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyCurrentlyWorkingOn(): void
  {
    $this->markTestSkipped('Test for property currently_working_on not implemented');
  }
}
