<div class="container mainContainer registerContainer" role="main">
	<div class="row">
		<div class="col-md-8 col-md-push-2">
			<div class="titleBlock tac">
				<h1>WELCOME BRANDS!</h1>
				<span><img src="<?= base_url() ?>/assets/frontoffice/img/register-slogan.png" width="498" height="29" alt="Let’s get your application started!"></span>
			</div>
			<form>
				<section>
					<div class="sectionTitle">Brand Information</div>
					<div class="row">
						<div class="form-group col-md-6"><input type="text" required placeholder="Brand name *" class="form-control" id="brandName" /></div>
						<div class="form-group col-md-6"><input type="text" required placeholder="Brand URL *" class="form-control" id="brandUrl" /></div>
						<div class="form-group col-md-4"><input type="text" required placeholder="Year founded *" class="form-control" id="yearFounded" /></div>
						<div class="form-group col-md-6 col-md-push-2">
							<label class="checkbox-inline nameLabel">Collection</label>
							<input id="womens" type="checkbox" value=""><label for="womens" class="checkbox-inline customLabel">Womens</label>
							<input id="mens" type="checkbox" value=""><label for="mens" class="checkbox-inline customLabel">Mens</label>
							<input id="kids" type="checkbox" value=""><label for="kids" class="checkbox-inline customLabel">Kids</label>
						</div>
					</div>
				</section>
				<section>
					<div class="sectionTitle">Personal Information</div>
					<div class="row">
						<div class="col-md-2">
							<select class="selectpicker" id="title">
								<option>Mr.</option>
								<option>Mss.</option>
							</select>
						</div>
						<div class="form-group col-md-3"><input type="text" required placeholder="Surname *" class="form-control" id="surname" /></div>
						<div class="form-group col-md-4"><input type="text" required placeholder="Name *" class="form-control" id="name" /></div>
						<div class="form-group col-md-3"><input type="text" required placeholder="Function" class="form-control" id="function" /></div>
						<div class="form-group col-md-4"><input type="email" required placeholder="Email *" class="form-control" id="email" /></div>
						<div class="form-group col-md-4"><input type="password" required placeholder="Password *" class="form-control" id="password" /></div>
						<div class="form-group col-md-4"><input type="password" required placeholder="Confirm Password *" class="form-control" id="confirmPassword" /></div>
					</div>
				</section>
				<section class="clearfix">
					<div class="row"><div class="col-md-12 tar"><input type="submit" value="Submit your application" class="btn btn-lg btn-primary" /></div></div>
				</section>
			</form>
		</div>
	</div>
</div>