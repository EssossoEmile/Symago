<section id="main-content">
    <section class="wrapper">
        <!-- arborescence -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.php">Home Page</a></li>
                    <li><i class="fa fa-files-o"></i>Conferance Home</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="container col-md-10 col-md-offset-1">
                <section class="panel">
                    <header class="panel-heading" style="text-align: center">
                        <h4><b>Reservation </b></h4>
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" id="form" method="POST" action="../controleurs/salleConferance.php">

                                <div class="form-group ">
                                    <label class="control-label col-lg-2">Date reservation</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="dateDebut" id="dateDebut" type="date" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Date of end reservation</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="dateFin" id="dateFin" type="date" required />
                                    </div>
                                </div>
								 <div class="form-group ">
                                    <label class="control-label col-lg-2">Hour reservation</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="heureDebut" id="heureDebut" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Heure of end reservation</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="heureFin" id="heureFin" type="text" required />
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label class="control-label col-lg-2">Choice of office</label>
                                    <div class="col-lg-10">
                                        <select class="form-control " name="salle" id="salle" required>
                                            <option disabled selected>choice of office</option>
                                            <option value="230" id="230">230</option>
                                            <option value="230Bis" id="230Bis">230Bis</option>
                                        </select>
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Matricul of Person take a Salle</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="matPerson1" id="matPerson1" type="text" required />
                                    </div>
                                </div>
								<div class="form-group ">
                                    <label class="control-label col-lg-2">Reason</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="reason" id="reason" type="text" required />
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

<!-- jQuery -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/insert.js"></script>
