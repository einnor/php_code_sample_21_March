<?php

/**
 * Cytonn Technologies
 *
 * @author: Ronnie Nyaga <rnyaga@cytonn.com>
 *
 * Project: php.app
 *
 */

  class Book{
    private $author;
    private $publisher;
    public function __construct($author, $publisher){
      $this->author = $author;
      $this->publisher = $publisher;
    }
    public function getAuthorAndPublisher(){
      return 'Author: '.$this->author . ', Publisher:' . $this->publisher;
    }
  }
  class PublishingPress{
    public static function create($author, $publisher) {
      return new Book($author, $publisher);
    }
  }
  // have the publishing press create the Book object
  $riverBetween = PublishingPress::create(“Ngugi wa Thiong’o”, “EA Publishers”);
  print_r($riverBetween->getAuthorAndPublisher());


?>
