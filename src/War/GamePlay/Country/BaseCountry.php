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
  protected $troops = 3;

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
    if ($this->troops<1){
      return True;
    }else{
      return False;
    }
  }

  public function conquer(CountryInterface $conqueredCountry): void{
    if($conqueredCountry->getNumberOfTroops()<1){
      $this->neighbors_list = [
        $this->name => $conqueredCountry->getNeighbors(),
      ];
    }
  }

  public function killTroops(int $killedTroops): void{
    $this->troops -= $killedTroops;
  }
}
