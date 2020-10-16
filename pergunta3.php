<?php
   class Time {
      var $nome;
      var $pontos;
      var $gols;


      //GETS AND SETS
      function set_nome($var){
         $this->nome = $var;
      }

      function get_nome(){
         echo $this->nome ."<br/>";
      }

      function set_pontos($var){
         $this->pontos = $var;
      }

      function get_pontos(){
         echo $this->pontos ."<br/>";
      }

      function set_gols($var){
         $this->gols = $var;
      }

      function get_gols(){
         echo $this->gols ." <br/>";
      }
   }

   //MAIN

   $brasil = new Time;
   $argentina = new Time;
   $chile = new Time;


   //SET VALUES
   $brasil->set_nome( "CBF" );
   $argentina->set_nome( "ARG" );
   $chile->set_nome( "CHI" );

   $brasil->set_pontos( 3 );
   $argentina->set_pontos( 6 );
   $chile->set_pontos( 4 );

   $brasil->set_gols( 2 );
   $argentina->set_gols( 5 );
   $chile->set_gols( 2 );

   //GET VALUES OUTPUT

   $brasil->get_nome();
   $brasil->get_pontos();
   $brasil->get_gols();

   $argentina->get_nome();
   $argentina->get_pontos();
   $argentina->get_gols();

   $chile->get_nome();
   $chile->get_pontos();
   $chile->get_gols();


?>
