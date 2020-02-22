
<body>

	<div class="container">
	
		<div class="row">
			
			<div class="col-md-4 col-md-offset-4">
				<h4>Subir varios archivos</h4>
				<form id="form_subidas" action="<?php echo base_url(); ?>imagenes/subir" method="POST" class="form-horizontal">
					<input type="file" name="archivo[]" multiple>
					<input type="button" value="Subir" onclick="galeria(event)">
				</form>
			</div>
			
		</div>
	</div>
	<script type="text/javascript" src="http://localhost/pruebaobjeto/scripts/persona.js"></script>
</body>
</html>
