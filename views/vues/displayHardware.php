<section id="main-content">
    <section class="wrapper">
        <!-- arborescence -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.php">Home Page</a></li>
                    <li><i class="fa fa-files-o"></i>Hardware</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="container col-md-10 col-md-offset-1">
                <section class="panel">
                    <header class="panel-heading" style="text-align: center">
                        <h4><b>Display Hardware </b></h4>
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" id="form" method="POST" action="../controleurs/displayHardware.php">

							<div class="col-xs-6">
								<select class="form-control" name="optionRecherche1">
								<option disabled selected>--choice name--</option>
								<option value="1" id="1"> Petit</option>
								<option value="2" id="2"> Papy</option>
								</select>
							</div>
							<div class="btn-search">
							<button class="btn btn-success" type="submit">search</button>
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
