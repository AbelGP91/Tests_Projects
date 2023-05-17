<?php

include "src/User.php";

use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase{

    public function testClassConstructor(){

    $user = new User(18, 'John');

    $this->assertSame('John', $user->name);
    $this->assertSame(18, $user->age);

    $this->assertEmpty($user->favorite_movies);

    $this->assertIsString($user->tellName());
    $this->assertStringContainsStringIgnoringCase('John', $user->tellName());

    $this->assertIsString($user->tellAge());
    $this->assertStringContainsStringIgnoringCase('18', $user->tellAge());

    $this->assertTrue($user->addFavoriteMovie('Avengers'));
    $this->assertTrue($user->addFavoriteMovie('Justice League'));
    $this->assertContains('Avengers', $user->favorite_movies);
    $this->assertCount(2, $user->favorite_movies);

    $this->assertTrue($user->removeFavoriteMovie('Avengers'));
    $this->assertNotContains('Avengers', $user->favorite_movies);
    $this->assertCount(1, $user->favorite_movies);
    $this->assertContains('Justice League', $user->favorite_movies);

}

}