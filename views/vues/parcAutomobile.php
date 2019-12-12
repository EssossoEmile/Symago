<section id="main-content">
    <section class="wrapper">
        <!-- arborescence -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.php">Home Page</a></li>
                    <li><i class="fa fa-files-o"></i>Automobil Parc</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="container col-md-10 col-md-offset-1">
                <section class="panel">
                    <header class="panel-heading" style="text-align: center">
                        <h4><b>Register car</b></h4>
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" id="form" method="POST" action="../controleurs/salleConferance.php">

                                <div class="form-group ">
                                    <label class="control-label col-lg-2">Name of car</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="nomVehicule" id="nomVehicule" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">First Name  of person take a car</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="nomAttribVehicule" id="nomAttribVehicule" type="text" required />
                                    </div>
                                </div>

								<div class="form-group ">
                                    <label class="control-label col-lg-2">Date of car is come</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="dateArriv" id="dateArriv" type="date" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Date attribution car</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="dateAttribu" id="dateAttribu" type="date" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Date end of attribution car</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="dateFinAttribu" id="dateFinAttribu" type="date" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">hour car is come</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="heureArriv" id="heureArriv" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">hour attribution car</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="heureAttribu" id="heureAttribu" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">hour end attribution car</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="heureFinAttribu" id="heureFinAttribu" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Natur</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="nature" id="nature" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Chassis number</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="number" id="number" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Immatriculation number</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="immaNumber" id="immaNumber" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Marque</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="marque" id="marque" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Type</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="type" id="type" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Puissance</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="puissance" id="puissance" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Genre</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="genre" id="genre" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Aquisition price</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="price" id="price" type="number" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">provide utilisation</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="provide" id="provide" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Last Name Person take car</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="lastName" id="lastName" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">matricule</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="mat" id="mat" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Structure user</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="struct" id="struct" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Function</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="function" id="function" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">phone number</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="tel" id="tel" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">hardware localisation</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="local" id="local" type="text" required />
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

<!-- jQuery -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/insert.js"></script>
