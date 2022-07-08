<?php

namespace Galoa\ExerciciosPhp2022\WebScrapping;

use DOMXPath;

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