<?php include "layout/dash.php"?>
<div class="container mt-5">
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php foreach ($wiki as $wikis) : ?>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><?= $wikis->title ?></td>
                    <td><?= $wikis->content ?></td>
                    <td><?= $wikis->dateCreate ?></td>
                    <td class="action-buttons">
                        <button class="btn btn-primary btn-sm">Éditer</button>
                        <a class="btn btn-outline-danger mt-auto" href="deleteWiki?id=<?php echo $wikis->wikiId ?>">Delete tag</a>
                    </td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>