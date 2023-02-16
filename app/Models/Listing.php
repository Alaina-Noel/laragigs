<?php

  namespace App\Models;

  class Listing {
    public static function all() {
      return
       [
        [ 'id' => 42,
        'title' => 'this is the title of listing #1',
        'description' => 'this is the description blah blah'],
        [ 'id' => 43,
        'title' => 'this is the title of listing #2',
        'description' => 'this is the description #2 blah blah']
       ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
  }
