<!-- navigation -->
<div class="navigation">
    <a href="<?php echo base_url(); ?>">Home</a>
    <a href="<?php echo base_url('livre/add');?>">Ajouter</a>
</div>
<table>
    <tr>
        <td><a href="<?php echo base_url('livre/index') ?>">#</a></td>
        <td><a href="<?php echo base_url('livre/index_tri/'.$titre) ?>">titre</a></td>
        <td>couverture</td>
        <td><a href="<?php echo base_url('livre/index_tri/'.$idAuteur) ?>">id auteur</a></td>
        <td><a href="<?php echo base_url('livre/index_tri/'.$idEditeur) ?>">id editeur</a></td>
        <td><a href="<?php echo base_url('livre/index_tri/'.$idQuizz) ?>">id quizz</a></td>
        <td>image</td>
        <td>Actions</td>
    </tr>
    <?php $compte =1; ?>
    <?php foreach ($livres as $l): ?>
        <?php if ($compte % 2 == 0){
                ?> <tr style="background-color:darkgrey;"> <?php
            }
            else {
                ?> <tr style="background-color:lightgray;"> <?php
            }
            ?> 
            <td><?php echo $l['id']; ?></td>
            <td><?php echo $l['titre']; ?></td>
            <td><?php echo $l['couverture']; ?></td>
            <td><?php echo $l['idAuteur']; ?></td>
            <td><?php echo $l['idEditeur']; ?></td>
            <td><?php echo $l['idQuizz']; ?></td>
            <td><img src="<?php echo base_url('img/'.$l['couverture']) ?>" alt="<?php echo $l['titre']; ?>" height="50" width="50"> </td>
            <td>
                <a href="<?php echo site_url('livre/edit/'.$l['id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('livre/remove/'.$l['id']); ?>">Delete</a>
            </td>
            
        </tr>
        <?php $compte += 1; ?>
    <?php endforeach; ?>
</table>
<?php 
echo $links;
?>