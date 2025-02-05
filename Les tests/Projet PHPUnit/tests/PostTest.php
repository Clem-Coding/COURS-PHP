<?php


use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    public function testValidPostCreation()
    {
        $post = new Post("Mon titre", "Mon contenu", "mon-titre");

        $this->assertEquals("Mon titre", $post->getTitle());
        $this->assertEquals("Mon contenu", $post->getContent());
        $this->assertEquals("mon-titre", $post->getSlug());
        $this->assertFalse($post->isPrivate());
    }

    public function testTitleCannotBeEmpty()
    {
        $this->expectException(InvalidArgumentException::class);
        new Post("", "Mon contenu", "mon-titre");
    }

    public function testContentCannotBeEmpty()
    {
        $this->expectException(InvalidArgumentException::class);
        new Post("Mon titre", "", "mon-titre");
    }

    public function testSlugCannotBeEmpty()
    {
        $this->expectException(InvalidArgumentException::class);
        new Post("Mon titre", "Mon contenu", "");
    }

    public function testSlugMustBeUrlSafe()
    {
        $this->expectException(InvalidArgumentException::class);
        new Post("Mon titre", "Mon contenu", "un slug avec des espaces!");
    }

    public function testSetPrivate()
    {
        $post = new Post("Mon titre", "Mon contenu", "mon-titre");
        $post->setPrivate(true);
        $this->assertTrue($post->isPrivate());

        $post->setPrivate(false);
        $this->assertFalse($post->isPrivate());
    }
}
