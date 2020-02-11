<?php 


$erick = new Persona("Erick Fabian", "Murillo Vega","Software engineer", "erickmurillo133@gmail.com","79558863",
	"I am a calm, friendly, hardworking and honest person.I like doing things right."
	,"M", ["Learn about Data Science","Fishing","Rally"]);
	?>

	<!DOCTYPE html>
	<html>

	<?php  ?>

	<body>
		<div class="container"> 
			<form>

        <div class="field">
          <label class="label">Name</label>
          <div class="control">
            <input class="input is-success" type="text" name="name" value="<?php echo $name;?>">
          </div>
           <p class="help is-danger">* <?= $nameErr;?></p>
        </div>


				<div class="field">
					<label class="label">Name</label>
					<div class="control">
						<input class="input" type="text" placeholder="Text input" value="<?= $erick->name ?>" >
					</div>
				</div>

				<div class="field">
					<label class="label">Last name</label>
					<div class="control">
						<input class="input is-success" type="text" placeholder="Text input" value="<?= $erick->lastName ?>">
					</div>

				</div>

				<div class="field">
					<label class="label">Profession</label>
					<div class="control">
						<input class="input is-success" type="text" placeholder="Text input" value="<?= $erick->profession ?>">
					</div>
				</div>

				<div class="field">
					<label class="label">Email</label>
					<div class="control ">
						<input class="input is-success" type="email" placeholder="Email input" value="<?= $erick->email?>">
					</div>
				</div>


				<div class="field">
					<label class="label">Phone</label>
					<div class="control">
						<input class="input is-success" type="text" placeholder="Text input" value="<?= $erick->phone?>">
					</div>
				</div>



				<div class="field">
					<label class="label">About me</label>
					<div class="control">
						<textarea class="textarea" placeholder="Textarea"> <?php echo $erick->aboutMe; ?>  </textarea>
					</div>
				</div>


				<div class="field">
					<label class="label">Sex</label>
					<div class="control">
						<label class="radio">
							<input type="radio" name="question" <?php echo $value=($erick->sex == "M")?"checked":"unchecked";?>>
							M
						</label>
						<label class="radio">
							<input type="radio" name="question" <?php echo $value=($erick->sex == "F")?"checked":"unchecked";?>>
							F
						</label>
						<label class="radio">
							<input type="radio" name="question" <?php echo $value=($erick->sex == "O")?"checked":"unchecked";?>>
							Other

						</label>

					</div>
				</div>



				<div class="field">
					<label class="label">My favorite hobbies</label>
					<div class="control">
						<div class="list is-hoverable">
							<?php 
							foreach ($erick->hobbies as $hobbie) {
								echo "<a class='list-item'>$hobbie</a>";
							}
							?>
						</div>
					</div>
				</div>


				<div class="field">
					<div class="control">
						<button class="button is-link">Contact</button>
					</div>
				</div>
			</form>
		</div>
	</body>
	</html>