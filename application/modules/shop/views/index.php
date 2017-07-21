<?php foreach($products as $product): ?>
	<div class="box col-md-3">
		<div class="panel panel-default no-padding">
			<div class="panel-body">
				<img src="<?php echo unserialize($product -> product_photos)[0]['photo_url']; ?>" alt="" class="img-responsive img-rounded">
			</div>
			<div class="panel-footer">
				<h4><?php echo $product -> product_name; ?></h4>
				<p>
					<span><b><?php echo $product -> product_price; ?> zł</b></span>
					<span>Dostępne: <?php echo $product -> product_inStock; ?></span>
				</p>
				<p>
					<a href="" class="btn btn-warning">Zamów teraz!</a>
				</p>
			</div>
		</div>
	</div>
<?php endforeach; ?>