<section id="main-content">
    <section class="wrapper">
        <!-- arborescence -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.php">Home Page</a></li>
                    <li><i class="fa fa-files-o"></i>Manadge Personal Office</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="container col-md-10 col-md-offset-1">
                <section class="panel">
                    <header class="panel-heading" style="text-align: center">
                        <h4><b>Registration </b></h4>
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" id="form" method="POST" >

                                <div class="form-group ">
                                    <label class="control-label col-lg-2">Name Office</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="nomBureau" id="nomBureau" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Matricul of Person take a office</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="matPerson" id="matPerson" type="text" required />
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" name="submit" type="submit">Register</button>
                                        <a class="btn btn-default" href="" onclick="return confirm('Voulez-vous annuler?')">Avorte</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>

<?php
	require_once '../dao/bureauDAO.class.php';
	require_once '../dao/personDAO.class.php';
    require_once '../dao/db.class.php';

    $bureau = new Bureau();
	$personDao = new PersonDAO();
    $dao = new BureauDAO();

    if(isset($_POST['submit'])){
        if(isset($_POST['nomBureau']) && isset($_POST['matPerson'])){
			$mat = $_POST['matPerson'];
			$row = $personDao->getMatricule($mat)->fetch(PDO::FETCH_ASSOC);
			$row1 = $dao->getOccupe($mat)->fetch(PDO::FETCH_ASSOC);
			if($row!=null){
			$bureau->setNomBureau($_POST['nomBureau']);
            $bureau->setNomPersonne($mat);
			
			$dao->create($bureau);
			}
        }
    }
?>


<!-- jQuery -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/insert.js"></script>
