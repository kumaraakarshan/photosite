<div class="mainContent">
	<div class="mainContentNew container">
		<div class="contectInnerMain">
			<div class="contectTop">
				<div class="contectTopInner">
					<h4 >
						Attention!
						We always reply within a few hours.
						
					</h4>
					<h4 >
						If you don't get a message, please check your
						spam folders!
						Thanks
						
					</h4>
					<p >
						Of course you can also reach us by
						phone/Whatsapp/SMS: 
						
</p>
					<p >
						0676/4513300
					</p>
				</div>
			</div>
			<div class="section2Divider contectDivider">
			</div>
			<div class="formGroup">
				<div class="formGroupInner">
					<div class="formLeft">
						<?php
							if(!empty($ERR)) 
							{
								echo '<div class="error_msg">'.$ERR.'</div>';
							}
							?>
						<form class="" method="post">
							
							<p><label>
								Your name (required field)
								<br>
								<input type="text" name="name" size="40" <?php if(!empty($_POST['name'])) { echo ' value="'.$_POST['name'].'"'; } ?>></span> 
								</label>
							</p>
							<p><label>
								Your e-mail address (mandatory field)
								<br>
								<input type="email" name="email"  size="40" <?php if(!empty($_POST['email'])) { echo ' value="'.$_POST['email'].'"'; } ?>> </span> 
								</label>
							</p>
							<p><label>
								Regarding
								<br>
								<input type="text" name="subject"  size="40" <?php if(!empty($_POST['subject'])) { echo ' value="'.$_POST['subject'].'"'; } ?>></span> 
								</label>
							</p>
							<p><label>
								Your message
								<br>
								
								<textarea name="message" cols="39" rows="14"><?php if(!empty($_POST['message'])) { echo $_POST['message']; } ?></textarea></span>
								</label>
							</p>
							<p>
								<button class="formBtn">Send</button>
							</p>
						</form>
					</div>
					<div class="formRight">
					</div>
				</div>
			</div>
			<div class="contect3Conteiner">
				<div class="section2Divider ">
				</div>
				<div class="contect3ContainerHeading">
					<h3 >
						Parking spaces directly in front of the house
					</h3>
				</div>
				<div class="section2Divider ">
				</div>
			</div>
			<div class="formMap">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d85095.08530749382!2d16.325895731109462!3d48.20235097512531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d0676c6c01515%3A0xcd3d7281c9010654!2sMA%2040%20-%20Sozialzentrum%20Beatrix-Kempf-Gasse%20f%C3%BCr%20die%20Wohnbezirke%2011%2C%2021%20und%2022!5e0!3m2!1shi!2sin!4v1683608381319!5m2!1shi!2sin"
					width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</div>

