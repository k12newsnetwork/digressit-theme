<div id="footer">
	<?php
	
	
	 ?>
	
	<div class="foot">
	<?php if(has_action('custom_footer')): ?>
		<?php do_action('custom_footer'); ?>
		
	<?php else: ?>
		<span>Powered by <a href="http://digress.it/?v=<?php echo DIGRESSIT_VERSION; ?>"><b>Digress.it</b></a></span>
	<?php endif; ?>
	</div>
</div>

<div id="debug-message"></div>

</div> <!-- wrapper -->

<?php wp_footer(); ?>
<?php get_lightboxes(); ?>
</body>
</html> 
