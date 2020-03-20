<?php

 // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');


  include_once '../../Config/db.php';
  include_once '../../Models/professeur.php';

  $database = new Database();
  $db =$database->connect();

  $professeur = new Professeur($db);
  $data = json_decode(file_get_contents("php://input"));


  $professeur->nom = $data->nom;
  $professeur->prenom = $data->prenom;
  $professeur->email = $data->email;
  $professeur->profession = $data->profession;
  $professeur->universite = $data->universite;
  $professeur->etablissement = $data->etablissement;
  $professeur->tel = $data->tel;
  $professeur->password = $data->password;


  // Create Category
  if($professeur->create_professeur()) {
    echo json_encode(
      array('message' => 'professeur Created')
    );
  } else {
    echo json_encode(
      array('message' => 'professeur Not Created')
    );
  }


  ?>