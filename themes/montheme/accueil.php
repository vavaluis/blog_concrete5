<?php $this->inc("elements/header.php"); ?>   

            <div id="wrapper"> 
				<?php 
					$a = new Area('Ma zone');
					$a -> display($c);
				?>
            </div>
			
            <div id="wrap">
                <class id="Titre">
                    <h1>
						<?php 
							$a = new Area('Titre');
							$a -> display($c);
						?>
					</h1>
                </class> 
				
                <class id="Scroll">
                        <HR align="center" size="1" width="1100px" color="#DDDDDD">
                </class>

                <article id="First">
                    <h2>
						<?php 
							$a = new Area('Titre article 1');
							$a -> display($c);
						?>
					</h2>
					<br>
                    <p>
						<?php 
							$a = new Area('Sous-titre article 1');
							$a -> display($c);
						?>
					</p>
					<br>
					<?php 
						$a = new Area('Image article 1');
						$a -> display($c);
					?>
					<br>
                    <p>
						<?php 
							$a = new Area('Corps article 1');
							$a -> display($c);
						?>
					</p>
                    <button id="MonBoutton">Learn More  <p class="fleche">----></p></button>   
                </article>
				
				<article id="Second">
                    <h2>
						<?php 
							$a = new Area('Titre article 2');
							$a -> display($c);
						?>
					</h2>
					<br>
                    <p>
						<?php 
							$a = new Area('Sous-titre article 2');
							$a -> display($c);
						?>
					</p>
					<br>
					<?php 
						$a = new Area('Image article 2');
						$a -> display($c);
					?>
					<br>
                    <p>
						<?php 
							$a = new Area('Corps article 2');
							$a -> display($c);
						?>
					</p>
                    <button id="MonBoutton">Learn More  <p class="fleche">----></p></button>   
                </article>
				
				<article id="Third">
                    <h2>
						<?php 
							$a = new Area('Titre article 3');
							$a -> display($c);
						?>
					</h2>
					<br>
                    <p>
						<?php 
							$a = new Area('Sous-titre article 3');
							$a -> display($c);
						?>
					</p>
					<br>
					<?php 
						$a = new Area('Image article 3');
						$a -> display($c);
					?>
					<br>
                    <p>
						<?php 
							$a = new Area('Corps article 3');
							$a -> display($c);
						?>
					</p>
                    <button id="MonBoutton">Learn More  <p class="fleche">----></p></button> 
				</article>

                <class id="Scroll">
                        <HR align="center" size="1" width="1100px" color="#DDDDDD">
                </class>

                <article id="SocialMedia">   
                        <h2><b>
							<?php 
								$a = new Area('TitreSocial');
								$a -> display($c);
							?>
						</b></h2>
						
                        <hr align="center" size="1"></hr>
						
						<p>  
							<?php 
								$a = new Area('ContenuSocial');
								$a -> display($c);
							?>
						</p>
						<br>
						
                        <img src="<?php echo $this->getThemePath(); ?>/assets/img/LogoRss.png"><img src="<?php echo $this->getThemePath(); ?>/assets/img/LogoFb.png"><img src="<?php echo $this->getThemePath(); ?>/assets/img/LogoIn.png"><img src="<?php echo $this->getThemePath(); ?>/assets/img/LogoYt.png"><img src="<?php echo $this->getThemePath(); ?>/assets/img/LogoTw.png">
						
                        <article id="Newsletter">
                            <h2><b>
								<?php 
									$a = new Area('TitreNewsletter');
									$a -> display($c);
								?>
							</b></h2>
							
                            <hr align="center" size="1"></hr>
							
                            <p>
								<?php 
									$a = new Area('ContenuNewsletter');
									$a -> display($c);
								?> 
							</p>
                            <form>
                                <?php 
									$a = new Area('FormMailNewsletter');
									$a -> display($c);
								?>
                            </form>
                        </article>
						
						<button id="MonBoutton2">Subscribe  <p class="fleche">----></p></button>
                </article>
				
                <article id="Contact">
                        <h2><b>
							<?php 
								$a = new Area('TitreContact');
								$a -> display($c);
							?>
						</b></h2>
						
                        <hr align="center" size="1"></hr>
						
                        <form>
							<?php 
								$a = new Area('FormContact');
								$a -> display($c);
							?>
                        </form>
						
						<button id="MonBoutton2">Send it  <p class="fleche">----></p></button>
                </article>
				
				<article id="News">
                    <h2><b>
						<?php 
							$a = new Area('TitreNewsUpdates');
							$a -> display($c);
						?>
					</b></h2>
					
                    <hr align="center" size="1"></hr>
                    
					<div id="Sub-news">
                        <?php 
							$a = new Area('ImageNewsUpdates1');
							$a -> display($c);
						?>
						<p>
							<?php 
								$a = new Area('TexteNewsUpdates1');
								$a -> display($c);
							?>
						</p>                            
                    </div>
					 
                    <hr align="center" size="1"></hr>
					 
                     <div id="Sub-news">
                        <?php 
							$a = new Area('ImageNewsUpdates2');
							$a -> display($c);
						?>
						<p>
							<?php 
								$a = new Area('TexteNewsUpdates2');
								$a -> display($c);
							?>
						</p>                            
                    </div>
					 
                    <hr align="center" size="1"></hr>
					 
                    <div id="Sub-news">
                        <?php 
							$a = new Area('ImageNewsUpdates3');
							$a -> display($c);
						?>
						<p>
							<?php 
								$a = new Area('TexteNewsUpdates3');
								$a -> display($c);
							?>
						</p>                          
                    </div>
					 
					<hr align="center" size="1"></hr>
					 
					<button id="MonBoutton2">Visit our Blog  <p class="fleche">----></p></button>
				</article>
			   
				<article id="BoutonSubmit"></article>        
            </div>
<?php $this->inc("elements/footer.php"); ?> 