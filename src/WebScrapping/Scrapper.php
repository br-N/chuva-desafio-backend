<?php

namespace Galoa\ExerciciosPhp2022\WebScrapping;

use DOMXPath;
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
use Box\Spout\Writer\Common\Creator\Style\StyleBuilder;
use Box\Spout\Common\Entity\Style\CellAlignment;

$writer = WriterEntityFactory::createXLSXWriter();
$writer->openToFile('model.xlsx');

$style = (new StyleBuilder())
        ->setFontBold()
        ->setFontSize(13)
        ->setShouldWrapText()
        ->setCellAlignment(CellAlignment::RIGHT)
        ->build();
        
$cells = [
  WriterEntityFactory::createCell('ID', $style),
  WriterEntityFactory::createCell('Title', $style),
  WriterEntityFactory::createCell('Type', $style),
  WriterEntityFactory::createCell('Author 1', $style),
  WriterEntityFactory::createCell('Author 1 Institution', $style),
  WriterEntityFactory::createCell('Author 2', $style),
  WriterEntityFactory::createCell('Author 2 Institution', $style),
  WriterEntityFactory::createCell('Author 3', $style),
  WriterEntityFactory::createCell('Author 3 Institution', $style),
  WriterEntityFactory::createCell('Author 4', $style),
  WriterEntityFactory::createCell('Author 4 Institution', $style),
  WriterEntityFactory::createCell('Author 5', $style),
  WriterEntityFactory::createCell('Author 5 Institution', $style),
  WriterEntityFactory::createCell('Author 6', $style),
  WriterEntityFactory::createCell('Author 6 Institution', $style),
  WriterEntityFactory::createCell('Author 7', $style),
  WriterEntityFactory::createCell('Author 7 Institution', $style),
  WriterEntityFactory::createCell('Author 8', $style),
  WriterEntityFactory::createCell('Author 8 Institution', $style),
  WriterEntityFactory::createCell('Author 9', $style),
  WriterEntityFactory::createCell('Author 9 Institution', $style),
  WriterEntityFactory::createCell('Author 10', $style),
  WriterEntityFactory::createCell('Author 10 Institution', $style),
  WriterEntityFactory::createCell('Author 11', $style),
  WriterEntityFactory::createCell('Author 11 Institution', $style),
  WriterEntityFactory::createCell('Author 12', $style),
  WriterEntityFactory::createCell('Author 12 Institution', $style),
  WriterEntityFactory::createCell('Author 13', $style),
  WriterEntityFactory::createCell('Author 13 Institution', $style),
  WriterEntityFactory::createCell('Author 14', $style),
  WriterEntityFactory::createCell('Author 14 Institution', $style),
  WriterEntityFactory::createCell('Author 15', $style),
  WriterEntityFactory::createCell('Author 15 Institution', $style),
  WriterEntityFactory::createCell('Author 16', $style),
  WriterEntityFactory::createCell('Author 16 Institution', $style),
  WriterEntityFactory::createCell('Author 17', $style),
  WriterEntityFactory::createCell('Author 17 Institution', $style),
  WriterEntityFactory::createCell('Author 18', $style),
  WriterEntityFactory::createCell('Author 18 Institution', $style),
];
$writer->addRow(WriterEntityFactory::createRow($cells));
$writer->close();

/**
 * Does the scrapping of a webpage.
 */
class Scrapper {

  /**
   * Loads paper information from the HTML and creates a XLSX file.
   */
  public function scrap(\DOMDocument $dom): void {
    //print $dom->saveHTML(); error_reporting(E_ERROR | E_PARSE);

    $xpath = new DOMXPath($dom);

    foreach ($xpath->evaluate("//a") as $node) {
      // ID
      echo "\n\n" . $xpath->evaluate('string(div[2]/div[2]/div[2])', $node);

      // Title
      echo "\n\n" . $xpath->evaluate('string(h4[1])', $node);

      // Type
      echo "\n\n" . $xpath->evaluate('string(div[2]/div[1])', $node);

      // Author
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[1])', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[2])', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[3])', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[4])', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[5])', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[6])', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[7])', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[8])', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[9])', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[10])', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[11])', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[12])', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[13])', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[14])', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[15])', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[16])', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[17])', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[18])', $node);

      // Author Institution
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[1]/@title)', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[2]/@title)', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[3]/@title)', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[4]/@title)', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[5]/@title)', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[6]/@title)', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[7]/@title)', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[8]/@title)', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[9]/@title)', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[10]/@title)', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[11]/@title)', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[12]/@title)', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[13]/@title)', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[14]/@title)', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[15]/@title)', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[16]/@title)', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[17]/@title)', $node);
      echo "\n\n" . $xpath->evaluate('string(div[1]/span[18]/@title)', $node);
    }
  }
}