<section id="main-content">
    <section class="wrapper">
        <!-- arborescence -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.php">Home Page</a></li>
                    <li><i class="fa fa-files-o"></i>Person</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="container col-md-10 col-md-offset-1">
                <section class="panel">
                    <header class="panel-heading" style="text-align: center">
                        <h4><b>Register </b></h4>
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" id="form" method="POST" >


                                <div class="form-group ">
                                    <label class="control-label col-lg-2">First Name</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="firstName" id="firstName" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Last Name</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="lastName" id="lastName" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Matricul</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="matricule" id="matricule" type="text" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" name="submit" type="submit">Reservation</button>
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
	require_once '../dao/personDAO.class.php';
    require_once '../dao/db.class.php';

    $person = new Person();
    $dao = new PersonDAO();

    if(isset($_POST['submit'])){
        if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['matricule'])){
		$attrib=$dao->getMatricule($_POST['matricule']);
		$attrib = $attrib->fetch();
			if($attrib['matricule']==null){
            $person->setFirstName($_POST['firstName']);
            $person->setLastName($_POST['lastName']);
            $person->setMatricule($_POST['matricule']);
			
            $dao->create($person);
			}
        }else{
		echo  htmlspecialchars("already exist");
		}
		
    }
?>


<!-- jQuery -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/insert.js"></script>
