<?php

    require_once '../dao/db.class.php';
	require_once '../dao/bureauDAO.class.php';
	require_once '../dao/materielBureauDAO.class.php';
	require_once '../dao/parcAutoDAO.class.php';
	require_once '../dao/salleConferanceDAO.class.php';

    require_once 'includes/header.php';

    if(!empty($_GET['page']) AND is_file('controleurs/'.$_GET['page'].'.php')){
        include 'controleurs/'.$_GET['page'].'.php';
    }
    else{
        require_once 'vues/index.php';
    }

    require_once 'includes/footer.php';
?>


