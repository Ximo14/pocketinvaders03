<?php
/**
 * Ejercicio hecho by Ximo Gil
 */
class ia
{

// Declaración de una propiedad

public $mapaCol=4;
public $mapaFil=4;
public $numNaves=3;
public $navesHumano=[];

public $navesIA=[
  0=>['tipo'=>"nave",
      'fil'=>3,
      'col'=>0
    ],
  1=>['tipo'=>"nave",
      'fil'=>3,
      'col'=>1
    ],
  2=>['tipo'=>"nave",
      'fil'=>3,
      'col'=>2]
];


// Declaración de un método
  //Getter
  public function getColumna(){
    return $this->mapaCol;
    }
  public function getFila(){
    return $this->mapaFil;
    }


    public function getNave(){
      return $this->numNaves;
    }

    public function getNaveHumano()
    {
      return $this->navesHumano;
    }
    public function getNavesIA(){

      return $this->navesIA;
    }
  //Setter
  public function setMapaCol($mapaCol){

    if($mapaCol<0){
        $this->mapaCol=0;
    }
    elseif($mapaCol>3){
      $this->mapaCol=3;
    }else{
      $this->mapaCol=$mapaCol;
    }

  }

  public function setMapaFil($mapaFil){

    if($mapaFil<0){
        $this->mapaFil=0;
    }
    elseif($mapaFil>3){
      $this->mapaFil=3;
    }
    else{
      $this->mapaFil=$mapaFil;
    }
    }

  public function setNaveHumana($tipo,$col,$fil){
    $this->navesHumano[]=[
      'tipo'=>$tipo,
      'col'=>$col,
      'fil'=>$fil,
    ];}

    public function setNavesIA($navesIA)
    {
      return $this->navesIA;
    }

public function randomPos(){
  $this->columna=rand(0,3);

  $this->fila=rand(0,3);

}

}
 ?>
