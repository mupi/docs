<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Helper', 'View');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class ElementHelper extends Helper {
  
  //
  public function getInitialContent($lang="html"){
    $initialContent = "<!-- Redija sua resposta -->";
    if($lang == "js" || $lang = "javascript")  $initialContent = "// Redija sua resposta";
    if($lang == "css")  $initialContent = "\/* Redija sua resposta *\/";
  }

  //
  public function buildTree($els, $id = 0){
    $innerHtml = "";
    foreach ($els as $key => $el) {
      $innerHtml = $innerHtml . "<li my-id='".$id++."'><div>".$key . "</div>";
      if($el != null){
        $innerHtml = $innerHtml . "<ol>" . $this->buildTree($el, $id) . "</ol>";
      }
      $innerHtml = $innerHtml . "</li>";
    }
    return $innerHtml;
  }
  function flattenNShuffle($array) {
    $result = array();
    foreach($array as $key=>$value) {
        if(is_array($value)) {
          $result[$key] = null;
          $result = $result + $this->flattenNShuffle($value);
        }
        else {
          $result[$key] = null ;
        }
    }
    

    $shuffled = $this->shuffle_assoc($result);
    return $result;
  }
 
  function shuffle_assoc(&$array) {
    $keys = array_keys($array);
    shuffle($keys);
    foreach($keys as $key) {
      $new[$key] = $array[$key];
    }
    $array = $new;
    return true;
  }

}
