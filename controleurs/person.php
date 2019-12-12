<?php
	require_once '../dao/personDAO.class.php';
    require_once '../dao/db.class.php';

    $person = new Person();
    $dao = new PersonDAO();

    if(isset($_POST['submit'])){
        if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['matricule'])){
            $person->setFirstName($_POST['firstName']);
            $person->setLastName($_POST['lastName']);
            $person->setMatricule($_POST['matricule']);

            $dao->create($person);
        }
    }
	require_once '../views/index.php';
?>