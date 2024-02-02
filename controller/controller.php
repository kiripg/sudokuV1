<?php
require_once 'global.php';
require_once 'Model/model.php';
require_once 'View/view.php';

// init html
openHeader();

openForm("sudoku", $_SERVER['PHP_SELF']);
// start sudoku
sudoku();

// close html
closeHeader();

function sudoku(){
    
    //bandera
    $firstTime = true;
    //valores de los arrays de niveles
  $levelValues = array(0, 1, 2);
  $levelTexts = array("Easy", "Medium", "Hard");
  $level = $levelTexts[0];
  $gameBoardToSend= "";
  
    if (isset($_REQUEST['init'])) {

        if (isset($_REQUEST['level'])) {
            $level = $levelValues[$_REQUEST['level']];
            
            initialize($level);
            $firstTime=false;
            $gameBoard = getGameBoard();
            showBoard($gameBoard);
            
            //guardo el sudoku para que no se sobrescriba
            $gameBoardToSend= base64_encode(serialize($gameBoard));
            
        }else{
            $gameBoard= unserialize(base64_decode($_REQUEST['board']));
        }
        
  
    }else if(isset($_REQUEST['add'])){
        
       if(isset($_REQUEST['rowToAdd']) && isset($_REQUEST['colToAdd']) && isset($_REQUEST['numToAdd'])){
        $row= $_REQUEST['rowToAdd'];
        $col= $_REQUEST['colToAdd'];
        $num= $_REQUEST['numToAdd'];
        addNumberToGame($row, $col, $num);
        
       }
        
    }
    
          if($firstTime){
     $gameBoard = getGameBoard();
     showBoard($gameBoard);
    }
   
    // Show level select
    showLabel("level", "Level");
    showSelect("level", "level", $levelValues, $levelTexts, $level);
    showHidden("board", "board", $gameBoardToSend );
    showButton("init", "init", "submit", "Init");
    
    br();
    //Show add a number to the game
    showLabel("add", "Row");
    inputTxt("rowToAdd", "rowToAdd", "");
    showLabel("add", "Col");
    inputTxt("colToAdd", "colToAdd", "");
    showLabel("add", "num to add");
    inputTxt("numToAdd", "numToAdd", "");
    showButton("add", "add", "submit", "Add Number");
    br();
    
    //Show delete a number to the game
    showLabel("RowToDelete", "Row");
    inputTxt("rowToDelete", "rowToDelete", "");
    showLabel("ColToDelete", "Col");
    inputTxt("colToDelete", "colToDelete", "");
    showLabel("delete", "num to delete");
    inputTxt("numToDelete", "numToDelete", "");
    showButton("delete", "delete", "submit", "Delete Number");
    br();
    
    //Show candidates
    showLabel("rowToCandidate", "Row");
    inputTxt("RowToCandidate", "RowToCandidate", "");
    showLabel("ColToCandidate", "Col");
    inputTxt("colToCandidate", "colToCandidate", "");
    showButton("candidate", "candidate", "submit", "Show candidates");
    
    

}





