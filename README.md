# kata-mastermind
![PHP](https://github.com/vdebes/kata-mastermind/actions/workflows/php.yml/badge.svg)

Inspired from [CodingDojo.org](https://codingdojo.org/kata/Mastermind/)

## Rules
Code an algorithm capable of playing this boring role: answering the number of well placed and misplaced colors.

Therefore, your function should return, for a secret and a guessing combination:
* the number of well placed colors
* the number of correct but misplaced colors

A combination can contain any number of pegs but you’d better give the same number for the secret and the guessing. You can use any number of colors.

More details on the classic board game on [Wikipedia](https://en.wikipedia.org/wiki/Mastermind_(board_game)).

## Constraints
* Cyclomatic complexity should stay below 10

## Hints
* It’s better to start by detecting well placed colors.
* Detecting misplaced colors is about counting them…

## Tools
All tools are described running ```make help```.

## Kickstart
A basic class and test are already setup.