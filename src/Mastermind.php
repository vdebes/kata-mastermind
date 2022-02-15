<?php

namespace Vdebes\KataMastermind;

class Mastermind
{
    /**
     * @var Color[]
     */
    private array $secret;

    public function __construct(Color...$secret)
    {
        $this->secret = $secret;
    }

    public function guess(Color ...$guess): Result
    {
        $incorrect = 0;
        $correct = 0;
        foreach ($guess as $index => $color) {
            if (in_array($color, $this->secret) && array_search($color, $this->secret) !== $index) {
                $incorrect++;
            }

            if (in_array($color, $this->secret) && array_search($color, $this->secret) === $index) {
                $correct++;
            }
        }

        return new Result($correct, $incorrect);
    }
}
