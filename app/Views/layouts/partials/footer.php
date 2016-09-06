
	<script src="app/assets/js/jquery.min.js"></script>
    <script src="app/assets/bootstrap/js/bootstrap.min.js"></script>

    <?php if(!empty($scripts)): ?>
	    <?php foreach ($scripts as $key => $value): ?>
	    	<script type="text/javascript" src="app/assets/<?php echo $value;?>"></script>
	    <?php endforeach; ?>
	<?php endif; ?>

</body>

</html>