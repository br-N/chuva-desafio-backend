<?php

namespace Galoa\ExerciciosPhp2022\War\GamePlay;

use Galoa\ExerciciosPhp2022\War\GamePlay\Country\CountryInterface;

/**
 * A manager that will roll the dice and compute the winners of a battle.
 */
class Battlefield implements BattlefieldInterface {

    public function rollDice(CountryInterface $country, bool $isAtacking): array{
        $roll = array();

        if ($isAtacking){
            $max = $this->country->getNumberOfTroops() - 1;
        }else{
            $max = $this->country->getNumberOfTroops();
        }

        for ($i=0; $i<$max; $i++){
            $dice = rand(1,6);
            $roll[$i] += $dice;
        }
        echo "\ntestando 1 2 3\n";

        return $roll;
    }

    public function computeBattle(CountryInterface $attackingCountry, array $attackingDice, CountryInterface $defendingCountry, array $defendingDice): void{
        $rounds = (count($attackingDice) <= count($defendingDice)) ? count($attackingDice) : count($defendingDice);
        $attack = 0;
        $defense = 0;

        for($i=0; $i<$rounds; $i++){
            if(sort($attackingDice)[$i] > sort($defendingDice)[$i]){
                $attack++;
            }else{
                $defense++;
            }
        }
    }
}
