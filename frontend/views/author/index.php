<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
?>
<h1>Authors</h1>
    <br/>
    <a href="<?php echo Url::to(['author/create']); ?>" class="btn btn-primary">Create new author</a>
    <p>
    <table class="table table-condensed">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Birth Date</th>
            <th>Rating</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php foreach($authorsList as $author): ?>
            <tr>
                <td><?php echo $author->id; ?></td>
                <td><?php echo Html::encode($author->first_name); ?></td>
                <td><?php echo Html::encode($author->last_name); ?></td>
                <td><?php echo $author->birthdate; ?></td>
                <td><?php echo $author->rating; ?></td>
                <td><a href="<?php echo Url::to(['author/update', 'id' => $author->id]); ?>">Edit</a></td>
                <td><a href="<?php echo Url::to(['author/delete', 'id' => $author->id]); ?>">Delete</a></td>
            </tr>

<?php endforeach; ?>
</table>