<?php


class Storage
{
 public $name = 'Хранилище';
 public $articles = [];

 public function add_article(Article $article){
     $this->articles[$article->title] = $article;
 }

 public function get_by_title(string $title){
     foreach ($this->articles as $article){
         if ($article-$title === $title){
             return $article;
         }
     }
     return null;
 }

 public function get_by_author_name(string $name){
     $articles = [];
     foreach ($this->articles as $article){
         if ($article->author->name === $name){
             $articles[] = $article;
         }
     }
     return $articles;
 }

}