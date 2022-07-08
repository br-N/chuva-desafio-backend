<?php

namespace Galoa\ExerciciosPhp2022\WebScrapping;

use DOMXPath;
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
use Box\Spout\Writer\Common\Creator\Style\StyleBuilder;

/**
 * Does the scrapping of a webpage.
 */
class Scrapper {

  /**
   * Loads paper information from the HTML and creates a XLSX file.
   */
  public function scrap(\DOMDocument $dom): void {
    print $dom->saveHTML(); error_reporting(E_ERROR | E_PARSE);

    $writer = WriterEntityFactory::createXLSXWriter();
    $writer->openToFile('model.xlsx');

    $style = (new StyleBuilder())
            ->setFontBold()
            ->setFontSize(11)
            ->setShouldWrapText()
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

    $xpath = new DOMXPath($dom);
    foreach ($xpath->evaluate("//a[@class='paper-card p-lg bd-gradient-left']") as $node) {
      $cells = [
        WriterEntityFactory::createCell($xpath->evaluate('string(div[2]/div[2]/div[2])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(h4[1])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[2]/div[1])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[1])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[1]/@title)', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[2])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[2]/@title)', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[3])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[3]/@title)', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[4])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[4]/@title)', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[5])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[5]/@title)', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[6])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[6]/@title)', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[7])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[7]/@title)', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[8])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[8]/@title)', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[9])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[9]/@title)', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[10])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[10]/@title)', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[11])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[11]/@title)', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[12])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[12]/@title)', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[13])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[13]/@title)', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[14])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[14]/@title)', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[15])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[15]/@title)', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[16])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[16]/@title)', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[17])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[17]/@title)', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[18])', $node)),
        WriterEntityFactory::createCell($xpath->evaluate('string(div[1]/span[18]/@title)', $node)),
      ];
      $writer->addRow(WriterEntityFactory::createRow($cells));
    }
    $writer->close();
  }
}