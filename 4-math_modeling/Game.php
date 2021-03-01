<?php

class Game{

    // Array of game
    private $game;

    // count game iterations
    private $iterations;

    // Array nums of rows
    private $minRows;
    private $maxOf_A_Player;
    // Array nums of columns
    private $maxColumns;

    public function __construct(array $game, $iterations)
    {
        $this->game = $game;
        $this->iterations = $iterations;
    }

    protected function result(){
        $i = 1;
        foreach($this->game as $row){
            echo 'A' . $i . ': ';
            foreach($row as $el){
                echo $el . '|';
            }
            echo '<br>';
            $i++;
        }
    }

    private function colSum($row){
        $summOfRow = 0;
            foreach($row as $el){
                $summOfRow += $el;
            }
        return $summOfRow;
        
    }

    private function maxOfCol(){
        $maxNum = max($this->minRows);
        $this->maxOf_A_Player = array_search($maxNum, $this->minRows);
    }

    public function maximin(){
        foreach ($this->game as $row){
            $this->minRows[] = $this->colSum($row);
        }

        $this->maxOfCol();

        $this->result();
    }

    public function getMinRows(){
        return $this->minRows;
    }

    


}