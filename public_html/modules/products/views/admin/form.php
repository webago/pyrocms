<? if($this->uri->segment(3,'create') == 'create'): ?>
	<h2>Create Product</h2>
	
<? else: ?>
	<h2>Edit Product "<?= $product->title; ?>"</h2>
<? endif; ?>
<?= form_open_multipart($this->uri->uri_string()); ?>

<div class="field">
	<label for="category_slug">Category</label>
	<select name="category_slug" id="category_slug" size="1">
	<? if ($categories) {
	</select>
	<?= anchor('admin/categories/create', 'Create a new category'); ?>
</div>

<div class="field">
	<? if ($suppliers) {
	</select>
	<?= anchor('admin/suppliers/create', 'Create a new supplier'); ?>

<? if($this->uri->segment(3,'create') == 'create'): ?>
<div class="field">
	<label for="userfile">Item Photo</label>
	<input type="file" name="userfile" id="userfile" class="text" />
</div>
<? endif; ?>

	<input type="image" name="btnSave" value="Save" src="/assets/img/admin/fcc/btn-save.jpg" />
	or
	<span class="fcc-cancel"><?= anchor('admin/products/index', 'Cancel'); ?></span>
</p>

<?= form_close(); ?>