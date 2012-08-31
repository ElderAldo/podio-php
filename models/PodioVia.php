<?php
namespace Podio;

class Via extends Object {
  public function __construct($attributes = array()) {
    $this->property('id', 'integer');
    $this->property('name', 'string');
    $this->property('url', 'string');
    $this->property('display', 'boolean');

    $this->init($attributes);
  }
}
