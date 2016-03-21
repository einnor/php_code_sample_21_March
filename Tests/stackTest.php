<?php


/**
 * Cytonn Technologies
 *
 * @author: Ronnie Nyaga <rnyaga@cytonn.com>
 *
 * Project: php.app
 *
 */
 
  //Require StackImplementation.php
  require_once 'stackImplementation.php';
  class StackTest extends PHPUnit_Framework_TestCase
  {
      function testCanCreateStack() {
          $stack = new StackImplementation();
      }
      /**
       * @depends testCanCreateStack
       */
      public function testEmpty(StackImplementation $stack)
      {
          $this->assertEmpty($stack);
          return $stack;
      }
      /**
       * @depends testEmpty
       */
      public function testPush(StackImplementation $stack)
      {
          array_push($stack, 'foo');
          $this->assertEquals('foo', $stack[count($stack)-1]);
          $this->assertNotEmpty($stack);
          return $stack;
      }
      /**
       * @depends testPush
       */
      public function testPop(StackImplementation $stack)
      {
          $this->assertEquals('foo', array_pop($stack));
          $this->assertEmpty($stack);
      }
  }
?>
