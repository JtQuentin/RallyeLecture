<?php echo validation_errors(); ?>
<?php echo form_open('Editeur/Edit/'.$editeur['id']); ?>
<div>
    Nom : <input type="text" name="nom" value="<?php echo ($this->input->post('nom') ? $this->input->post('nom') : $editeur['nom']); ?>" />
</div>
<button type="submit">Save</button>
<?php echo form_close(); ?>