<?php

namespace Tests\Chromabits\Nucleus\Hashing;

use Chromabits\Nucleus\Hashing\HmacHasher;
use Chromabits\Nucleus\Support\Str;
use Chromabits\Nucleus\Testing\TestCase;

/**
 * Class HmacHasherTest
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Tests\Chromabits\Nucleus\Hashing
 */
class HmacHasherTest extends TestCase
{
    public function testHash()
    {
        $hasher = new HmacHasher();

        $private = Str::random(256);
        $private2 = Str::random(256);

        $hash1 = $hasher->hash('this is a test', $private);
        $hash2 = $hasher->hash('this is a another test', $private);
        $hash3 = $hasher->hash('this is a another test', $private);
        $hash4 = $hasher->hash('this is a another test', $private2);
        $hash5 = $hasher->hash('this is a another test', $private2);

        $this->assertNotEquals($hash1, $hash2);
        $this->assertEquals($hash2, $hash3);
        $this->assertNotEquals($hash3, $hash4);
        $this->assertEquals($hash4, $hash5);
    }

    public function testVerify()
    {
        $hasher = new HmacHasher();

        $private = Str::random(256);
        $private2 = Str::random(256);

        $hash1 = $hasher->hash('this is a test', $private);
        $hash2 = $hasher->hash('another test', $private2);

        $this->assertEqualsMatrix([
            [true, $hasher->verify($hash1, 'this is a test', $private)],
            [false, $hasher->verify($hash1, 'this is a test', $private2)],
            [false, $hasher->verify($hash2, 'this is a test', $private)],
            [false, $hasher->verify($hash1, 'th1s 1s 4 t3st', $private)],
            [false, $hasher->verify($hash2, 'another test', $private)],
            [true, $hasher->verify($hash2, 'another test', $private2)],
        ]);
    }
}
