<?php require_once './shared/header.php' ?>
<section class="section">
	<div class="container">
		<h1 class="title">
			Login
		</h1>
		<form method="POST" action="/">


			<div class="field">
				<div class="field">
					<label class="label">Email</label>
					<div class="control has-icons-left has-icons-right">
						<input class="input " type="email" placeholder="Email input" value="">
						<span class="icon is-small is-left">
							<i class="fas fa-envelope"></i>
						</span>
						<span class="icon is-small is-right">
							<i class="fas fa-exclamation-triangle"></i>
						</span>
					</div>
					<!--<p class="help is-danger">This email is invalid</p>!-->

				</div>
			</div>

			<div class="field">
				<div class="field">
					<label class="label">Password</label>
					<div class="control has-icons-left has-icons-right">
						<input class="input " type="email" placeholder="Email input" value="">
						<span class="icon is-small is-left">
							<i class="fas fa-lock"></i>
						</span>
						<span class="icon is-small is-right">
							<i class="fas fa-exclamation-triangle"></i>
						</span>
					</div>
					<!--<p class="help is-danger">This email is invalid</p>!-->

				</div>
			</div>



			<div class="field is-grouped">
				<div class="control">
					<button class="button is-link">Submit</button>
				</div>
				<div class="control">
					<button class="button is-link is-light">Cancel</button>
				</div>
			</div>
		</form>
	</div>
</section>
<?php require_once './shared/footer.php' ?>

