<?php

class Game{

    // Array of game
    private $game;

    // Array nums of rows
    private $minRows;
    private $maxColumns;
    private $maxOf_A_Player;
    public $minOf_B_Player;

    private $maxCols;

    public function __construct(array $game, $iterations)
    {
        $this->game = $game;
        $this->iterations = $iterations;
    }

    private function makeRow($row, $i){
        foreach($row as $el){
            if($this->maxOf_A_Player === $i){
                echo '<td><b>' . $el . '</b></td>';
            }
            else{
                echo '<td>' . $el . '</td>';
            }
        }
    }

    protected function result(){

        echo '<table border="3"><tr><th></th><th>B1</th><th>B2</th><th>B3</th><th>B4</th></tr><tr>';
        $i = 1;
        foreach($this->game as $row){
            echo '<td><b>A' . $i . '</b></td>';

            $this->makeRow($row,$i);

            echo '<tr>';
            $i++;
        }
        echo '</tr></table>';
    }

    private function maxOfCol(){
        $maxNum = max($this->minRows);
        $this->maxOf_A_Player = array_search($maxNum, $this->minRows) + 1;
    }

    private function minOfRow(){
        $minNum = min($this->maxCols);
        $this->minOf_B_Player = array_search($minNum, $this->maxCols) + 1;
    }

    private function setColumns($arr){
        for($i = 0; $i < count($this->game[$i]); $i++){
            for($j = 0; $j < count($this->game); $j++){
                $this->maxColumns[$i][] = $arr[$j][$i];
            }
        }

    }

    public function maximin(){
        foreach ($this->game as $row){
            $this->minRows[] = min($row);
        }

        $this->maxOfCol();

        $this->result();

        $this->setColumns($this->game);
    }

    public function minimax(){
        foreach($this->maxColumns as $col){
            $this->maxCols[] = max($col);
        }

        $this->minOfRow();

        echo $this->minOf_B_Player;


    }

    public function getMinRows(){
        return $this->minRows;
    }

}