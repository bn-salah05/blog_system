<?php

require './src/traits/Loggable.php';
require './src/traits/Timestampable.php';
require './src/traits/Serializable.php';
require './src/traits/Taggable.php';
require './src/interfaces/Publishable.php';
require './src/classes/BlogPost.php';
require './src/classes/User.php';
require './src/classes/Comment.php';

use BlogSystem\Classes\BlogPost;
use BlogSystem\Classes\User;
use BlogSystem\Classes\Comment;

$blogPost = new BlogPost();
$user = new User();
$comment = new Comment();

// Using BlogPost class
$blogPost->addTag('PHP');
$blogPost->addTag('OOP');
$blogPost->setCreatedAt('2024-08-05 12:00:00');
$blogPost->setUpdatedAt('2024-08-05 13:00:00');
$blogPost->publish();

echo $blogPost; // BlogPost with tags: PHP, OOP

// Using User class
$user->log("User logged in.");

// Using Comment class
$comment->setCreatedAt('2024-08-05 12:30:00');
$comment->log("Comment added.");

echo $comment->getCreatedAt(); // 2024-08-05 12:30:00
