<?php

namespace Galoa\ExerciciosPhp2022\War\GamePlay\Country;

/**
 * Defines a country, that is also a player.
 */
class BaseCountry implements CountryInterface {

  /**
   * The name of the country.
   *
   * @var string
   */
  protected $name;
  protected $neighbors_list = [];
  public $troops = 3;

  /**
   * Builder.
   *
   * @param string $name
   *   The name of the country.
   */
  public function __construct(string $name) {
    $this->name = $name;
  }

  public function getName(): string{
    return $this->name;
  }

  public function setNeighbors(array $neighbors): void{
    for($i=0; $i<count($neighbors); $i++){
      $this->neighbors_list += [$neighbors[$i]->name => $neighbors[$i]->name];
    }
  }

  public function getNeighbors(): array{
    return $this->neighbors_list;
  }

  public function getNumberOfTroops(): int{
    return $this->troops;
  }

  public function isConquered(): bool{
    if ($this->getNumberOfTroops()<1){
      return True;
    }else{
      return False;
    }
  }

  public function conquer(CountryInterface $conqueredCountry): void{
    if($conqueredCountry->isConquered()){
      $conqueredCountry->name = 'conquered';
      foreach($conqueredCountry->getNeighbors() as $neighbor){
        if(!in_array($neighbor, $this->getNeighbors(), true)){
            array_push($this->neighbors_list, $neighbor);
        }
      }
    }
  }

  public function killTroops(int $killedTroops): void{
    $this->troops -= $killedTroops;
  }
}
