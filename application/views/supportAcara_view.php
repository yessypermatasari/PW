
		<div class="container">
			<div class="gallery-grids">
				<section>
					<ul id="da-thumbs" class="da-thumbs">
					<?php foreach($barang as $barangs){?>
						<li>
							<a href="<?php echo base_url() ?>index.php/support/detil/<?php echo $barangs->id_support;?>">
								<img src="<?php echo base_url(); ?>uploads/<?php echo $barangs->gambar_support;?>"/>
								<div>
									<h5>Literature</h5>
									<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
								</div>
							</a>
						</li>
						<?php } ?>
						
						
					</ul>
				</section>
			</div>
		</div>
	