<?php
/* @var $this yii\web\View */
?>
<h1>Authors</h1>
    <br/>
    <a href="<?php echo \yii\helpers\Url::to(['author/create']); ?>" class="btn btn-primary" target="_blank">Create new author</a>
    <p>
    <table class="table table-condensed">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Birth Date</th>
            <th>Rating</th>
        </tr>
        <?php foreach($authorsList as $author): ?>
            <tr>
                <td><?php echo $author->id; ?></td>
                <td><?php echo $author->first_name; ?></td>
                <td><?php echo $author->last_name; ?></td>
                <td><?php echo $author->birthdate; ?></td>
                <td><?php echo $author->rating; ?></td>
            </tr>

<?php endforeach; ?>
</table>