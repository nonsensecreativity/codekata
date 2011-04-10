<?php // vim:set tabstop=4 sw=4 et:
require_once $path . "iterative.php";

/**
 * Test the iterative implementation of binary chop
 *
 * @see http://codekata.pragprog.com/2007/01/kata_two_karate.html
 * @author Raymond Julin
 * Created: 2011-04-10
 */
class IterativeTest extends PHPUnit_Framework_TestCase {
	public function testChop() {
		$algo = new IterativeBinaryChop;

		$this->assertEquals(-1, $algo->chop(3, array()));
		$this->assertEquals(-1, $algo->chop(3, array(1)));
		$this->assertEquals(0, $algo->chop(1, array(1)));

		$arr = array(1,3,5);
		$this->assertEquals(0, $algo->chop(1, $arr));
		$this->assertEquals(1, $algo->chop(3, $arr));
		$this->assertEquals(2, $algo->chop(5, $arr));

		foreach (array(0,2,4,6) as $pos)
			$this->assertEquals(-1, $algo->chop($pos, $arr));

		$arr = array(1,3,5,7);
		$this->assertEquals(0, $algo->chop(1, $arr));
		$this->assertEquals(1, $algo->chop(3, $arr));
		$this->assertEquals(2, $algo->chop(5, $arr));
		$this->assertEquals(3, $algo->chop(7, $arr));

		foreach (array(0,2,4,6,8) as $pos)
			$this->assertEquals(-1, $algo->chop($pos, $arr));
	}
}