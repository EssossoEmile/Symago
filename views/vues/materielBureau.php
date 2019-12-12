 <?php
require_once '../dao/personDAO.class.php';
require_once '../dao/materielDAO.class.php';
require_once '../dao/materielBureauDAO.class.php';
require_once '../dao/db.class.php';
?>
<section id="main-content">
    <section class="wrapper">
        <!-- arborescence -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.php">Home Page</a></li>
                    <li><i class="fa fa-files-o"></i>Office Hardware</li>
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

                                <div class="form-group">
                                    <select class="form-control " name="nameAttrib" id="nameAttrib" required>
                                    <option disabled selected>name of person has attribution</option>
                                    <?php
                                       $dao = new personDAO();
                                       $noms = $dao->getAll();
                                       while($nom = $noms->fetch()){
                                       echo "<option value=".$nom['firstName'].">".$nom['matricule']." - ".$nom['firstName']."</option>";
                                    }
                                    ?>
                                    </select>
                                </div>
								<div class="form-group ">
                                    <select class="form-control " name="materielAttrib" id="materielAttrib" required>
                                    <option disabled selected>Name of hardware attributed</option>
                                    <?php
                                       $dao = new materielDAO();
                                       $noms = $dao->getAll();
                                       while($nom = $noms->fetch()){
                                       echo "<option value=".$nom['id_materiel'].">".$nom['code']." - ".$nom['nom']." </option>";
                                    }
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label col-lg-2">Date attribution</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="dateAttrib" id="dateAttrib" type="date" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Date of end attribution</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="dateFinAttrib" id="dateFinAttrib" type="date" required />
                                    </div>
                                </div>
								 <div class="form-group ">
                                    <label class="control-label col-lg-2">Hour attribution</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="heureAttrib" id="heureAttrib" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Heure of end attribution</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="heureFin" id="heureFin" type="text" required />
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
 if(isset($_POST['submit'])){
       if(isset($_POST['nameAttrib']) && isset($_POST['materielAttrib'])){
            $materielBureau->setNomAttribution($_POST['nameAttrib']);
            $materielBureau->setMateriel($_POST['materielAttrib']);
			$materielBureau->setDateAttribution($_POST['dateAttrib']);
            $materielBureau->setDateFinAttribution($_POST['dateFinAttrib']);
            $materielBureau->setHeureAttribution($_POST['heureAttrib']);
			$materielBureau->setHeureFinAttribution($_POST['heureFin']);
			
            $dao->create($materielBureau);
			}
        
    }
?>
<!-- jQuery -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/insert.js"></script>
