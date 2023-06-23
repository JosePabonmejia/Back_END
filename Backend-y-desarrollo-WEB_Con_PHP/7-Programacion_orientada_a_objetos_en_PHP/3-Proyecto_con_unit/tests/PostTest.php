<?php

use PHPUnit\Framework\TestCase;//utiliza php unit hehe 
use App\Post;
use App\Comment;
//creamos la clase testeando el metodo post que creamos 
class PostTest extends TestCase
{
    public function test_add_comment_to_post()//Agregar comentarios 
    {
        $post = new Post();
        $comment = new Comment();
        $post->addComment($comment);//Del post necesitamos crear un comentario 
        $this->assertEquals(1,$post->countComments());
        $this->assertInstanceOf(Comment::class,$post->getComments()[0]);
    }
}