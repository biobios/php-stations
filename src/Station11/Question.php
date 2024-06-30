<?php

namespace Src\Station11;

class Question
{
    public function main(array $sweets): array
    {
        $budget = 300;

        $lessThanBudgetSweets = $this->getSweetsLessThanBudget($sweets, $budget);
        $keys = $this->getRandomKeys($lessThanBudgetSweets, $budget);
        $selectedSweets = $this->makeCombination($sweets, $keys);

        return $selectedSweets;
    }

    private function getSweetsLessThanBudget(array $sweets, int $budget)
    {
        $selectedSweets = [];
        foreach ($sweets as $key => $sweet) {
            if ($sweet['price'] <= $budget) {
                $selectedSweets[$key] = $sweet;
            }
        }

        return $selectedSweets;
    }

    private function getRandomKeys(array $lessThanBudgetSweets, int $budget)
    {

        if(count($lessThanBudgetSweets) <= 3) {
            return array_keys($lessThanBudgetSweets);
        }

        $keys = [];

        do {
            $keys = array_rand($lessThanBudgetSweets, 3);
            $totalPrice = 0;
            foreach ($keys as $key) {
                $totalPrice += $lessThanBudgetSweets[$key]['price'];
            }

        } while ($totalPrice > $budget);

        return $keys;
    }

    private function makeCombination(array $sweets, array $keys)
    {
        $selectedSweets = [];
        foreach ($keys as $key) {
            $selectedSweets[] = $sweets[$key];
        }

        return $selectedSweets;
    }
}
