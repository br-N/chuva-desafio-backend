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
            $max = $country->getNumberOfTroops() - 1;
        }else{
            $max = $country->getNumberOfTroops();
        }

        for ($i=0; $i<$max; $i++){
            $dice = rand(1,6);
            $roll[$i] = $dice;
        }

        return $roll;
    }

    public function computeBattle(CountryInterface $attackingCountry, array $attackingDice, CountryInterface $defendingCountry, array $defendingDice): void{
        $rounds = (count($attackingDice) <= count($defendingDice)) ? count($attackingDice) : count($defendingDice);
        rsort($attackingDice);
        rsort($defendingDice);
        $attack = 0;
        $defense = 0;
        for($i=0; $i<$rounds; $i++){
            if($attackingDice[$i] > $defendingDice[$i]){
                $attack += 1;
            }else{
                $defense += 1;
            }
        }

        $attackingCountry->killTroops($defense);
        $defendingCountry->killTroops($attack);

        $attackingCountry->conquer($defendingCountry);
    }
}
