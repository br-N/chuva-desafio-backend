<?php

namespace Galoa\ExerciciosPhp2022\WebScrapping;

//use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
//use Box\Spout\Common\Entity\Row;

/**
 * Does the scrapping of a webpage.
 */
class Scrapper {

  /**
   * Loads paper information from the HTML and creates a XLSX file.
   */
  public function scrap(\DOMDocument $dom): void {
    //print $dom->saveHTML(); error_reporting(E_ERROR | E_PARSE);

    /*$writer = WriterEntityFactory::createXLSXWriter();

    $writer->openToFile('teste.xlsx');

    $cells = [
      WriterEntityFactory::createCell('Carl'),
      WriterEntityFactory::createCell('is'),
      WriterEntityFactory::createCell('great!'),
    ];

    $singleRow = WriterEntityFactory::createRow($cells);
    $writer->addRow($singleRow);  

    $values = ['Carl', 'is', 'great!'];
    $rowFromValues = WriterEntityFactory::createRowFromArray($values);
    $writer->addRow($rowFromValues);

    $writer->close();*/



    $titleTag = $dom->getElementsByTagName("h4");
    $titleList = '';
    foreach($titleTag as $link){
      if(strpos($link->getAttribute('class'), 'my-xs paper-title') === 0){
        $titleList .= $link->textContent . "\n";
      }
    }
    file_put_contents("titulos.txt", $titleList);


    $uniTag = $dom->getElementsByTagName("span");
    $uniList = '';
    $authorList = '';
    foreach($uniTag as $link){
      $title = $link->getAttribute('title');

      if(!empty($title)){
        $uniList .= $link->getAttribute('title') . "\n";
        $authorList .= $link->textContent . "\n";
      }
    }
    file_put_contents("universidades.txt", $uniList);
    file_put_contents("autores.txt", $authorList);


    $typeTag = $dom->getElementsByTagName("div");
    $typeList = '';
    $idList = '';
    foreach($typeTag as $link){
      if(strpos($link->getAttribute('class'), 'tags mr-sm') === 0){ 
        $typeList .= $link->textContent . "\n";
      }

      if(strpos($link->getAttribute('class'), 'volume-info') === 0){
        $idList .= $link->textContent . "\n";
      }
    }
    file_put_contents("tipos.txt", $typeList);
    file_put_contents("ids.txt", $idList);

    /*$elements = $dom->getElementsByTagName("a");
    $titleList = '';
    $uniList = '';
    $authorList = '';
    $typeList = '';
    $idList = '';

    foreach($elements as $link){
      if(strpos($link->getAttribute('class'), 'my-xs paper-title') === 0){
        $titleList .= $link->item(0)->textContent . "\n";
      }
    }
    file_put_contents("titulos.txt", $titleList);*/
  }
}