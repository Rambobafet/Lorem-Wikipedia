<?php

/*
 * Author : Rambobafet
 * Version : 0.1
 * License : WTFPL
 * URL License : http://www.wtfpl.net/about/
 * 
 */

class Lorem_Wikipedia{
    
    private $array_paragraphes = array();
    
    function __construct(){
    }
    
    function __destruct(){
    }
    
    public function makeLorem($lang = 'fr', $nb_p = 1){
        $all_p = array();  
        $paragraphes = array();
        
        $this->getAllWikipediaParagraphes($lang, $nb_p);
        
        $all_p = $this->getParagraphes();
                
        if(is_array($all_p)):
            foreach($all_p as $value):
                array_push($paragraphes, $this->randomizeP($value));
            endforeach;
        else:
            echo "not array. Debug :";
            var_dump($all_p);
        endif;
                
        return $paragraphes;
    }
    
    private function addParagrapheToArray($text){
        array_push($this->array_paragraphes, $text);
        return true;
    }
    
    private function setParagraphes($array){
        $this->array_paragraphes = $array;
        return true;
    }
    
    private function getParagraphes(){
        return $this->array_paragraphes;
    }
    
    public function getAllWikipediaParagraphes($lang, $number){
        $html = file_get_contents('https://fr.wikipedia.org/wiki/Sp%C3%A9cial:Page_au_hasard');
        
        preg_match_all('%(<p[^>]*>.*?</p>)%i', $html, $paragraphes);
        
        // Vérification du nombre de caractères minimal dans le <p>
        foreach($paragraphes[0] as $key => $value):
            $value = $this->removeTags($value);
            if(strlen($value) < 400):
                unset($paragraphes[0][$key]);
            else:
                $this->addParagrapheToArray($value);
            endif;
        endforeach;
        
        if(count($this->getParagraphes()) < $number){
            $this->getAllWikipediaParagraphes($lang, $number);
        }else{
            $array = $this->getParagraphes();
            
            shuffle($array);
            $array = array_slice($array, 0, $number);
            $this->setParagraphes($array);
            return true;
        }
    }
    
    private function removeTags($text){        
        $text = strip_tags($text);
        return $text;
    }
    
    private function randomizeP($text){
        $array = explode(' ', $text);
        shuffle($array);
        
        $p = '';
        foreach($array as $key => $value){
            $p .= ' '.$value;
        }
        
        $p = ucfirst(strtolower(trim($p)));
        $p = "<p>".$p."</p>";
        return $p;
    }
}