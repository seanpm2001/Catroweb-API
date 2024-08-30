<?php
/**
 * UpdateStudioErrorResponseTest.
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
 * The version of the OpenAPI document: v1.5.7
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Server\Tests\Model;

use OpenAPI\Server\Model\UpdateStudioErrorResponse;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * UpdateStudioErrorResponseTest Class Doc Comment.
 *
 * @category    Class
 *
 * @description UpdateStudioErrorResponse
 *
 * @author      openapi-generator contributors
 *
 * @see        https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPI\Server\Model\UpdateStudioErrorResponse
 *
 * @internal
 */
class UpdateStudioErrorResponseTest extends TestCase
{
  protected UpdateStudioErrorResponse|MockObject $object;

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
    $this->object = $this->getMockBuilder(UpdateStudioErrorResponse::class)->getMockForAbstractClass();
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
    $this->assertTrue(class_exists(UpdateStudioErrorResponse::class));
    $this->assertInstanceOf(UpdateStudioErrorResponse::class, $this->object);
  }

  /**
   * Test attribute "name".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyName(): void
  {
    $this->markTestSkipped('Test for property name not implemented');
  }

  /**
   * Test attribute "description".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyDescription(): void
  {
    $this->markTestSkipped('Test for property description not implemented');
  }

  /**
   * Test attribute "image_file".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyImageFile(): void
  {
    $this->markTestSkipped('Test for property image_file not implemented');
  }
}
