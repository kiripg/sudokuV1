<?php
include_once 'data.php';


function getInitialBoard() {
    global $initialBoard;
    return $initialBoard;
}

function getSolvedBoard() {
    global $solvedBoard;
    return $solvedBoard;
}

function getGameBoard() {
    global $gameBoard;
    return $gameBoard;
}

function initialize($level){
    
    global $gameBoard;
    global $initialBoard;
    
    copyBoard($initialBoard[$level], $gameBoard);
    
}

function copyBoard($sourceBoard, &$targetBoard){
        
    //$targetBoard = $sourceBoard;
    
    for($i= 0; $i<9; $i++){
        for($j= 0; $j<9; $j++){
            $targetBoard[$i][$j] = $sourceBoard[$i][$j];
        }
    }
    
}

function addNumberToGame($row, $column, $number){
    
    global $gameBoard;
    if(isEmpty($row,$column)){
     $gameBoard[$row][$column] = $number;   
    }
    
    
}

function isEmpty($row, $column){
    
    global $gameBoard;
    
    if($gameBoard[$row][$column] == 0){
        return true;
    }else{
        return false;
    }
    
}

function deleteNumberToGame($row, $column){
    
    global $gameBoard;
    if(!isEmpty($row,$column)){
     $gameBoard[$row][$column] = 0;   
    }
    
    
}

