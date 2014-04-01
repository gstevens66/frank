<?php

/**
 * Abstract parent for Frank test classes.
 * 1) Implement a subclass of PHPUnit_Framework_TestCase.
 * 2) Define instance variables that store the state of the fixture.
 * 3) Initialize the fixture state by overriding setUp().
 */
abstract class FrankTestCase extends PHPUnit_Framework_TestCase {

  protected $server;

  public function setUp() {
    $this->server_url  = isset($_ENV['server_url'])  ? $_ENV['server_url']  : 'http://127.0.0.1:8080';
  }

}
