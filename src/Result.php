<?php

namespace Vdebes\KataMastermind;

class Result
{
    private int $correct;
    private int $incorrect;

    /**
     * @param int $correct
     * @param int $incorrect
     */
    public function __construct(int $correct, int $incorrect)
    {
        $this->correct = $correct;
        $this->incorrect = $incorrect;
    }

    public function equals(Result $result): bool
    {
        return $result->getCorrect() === $this->correct && $result->getIncorrect() === $this->incorrect;
    }

    public function getCorrect(): int
    {
        return $this->correct;
    }

    public function getIncorrect(): int
    {
        return $this->incorrect;
    }
}
