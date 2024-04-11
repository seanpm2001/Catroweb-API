<?php
/**
 * UpdateProjectFailureResponseTest.
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

use OpenAPI\Server\Model\UpdateProjectFailureResponse;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * UpdateProjectFailureResponseTest Class Doc Comment.
 *
 * @category    Class
 *
 * @description UpdateProjectFailureResponse
 *
 * @author      openapi-generator contributors
 *
 * @see        https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPI\Server\Model\UpdateProjectFailureResponse
 *
 * @internal
 */
class UpdateProjectFailureResponseTest extends TestCase
{
  protected UpdateProjectFailureResponse|MockObject $object;

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
    $this->object = $this->getMockBuilder(UpdateProjectFailureResponse::class)->getMockForAbstractClass();
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
    $this->assertTrue(class_exists(UpdateProjectFailureResponse::class));
    $this->assertInstanceOf(UpdateProjectFailureResponse::class, $this->object);
  }

  /**
   * Test attribute "error".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyError(): void
  {
    $this->markTestSkipped('Test for property error not implemented');
  }
}
