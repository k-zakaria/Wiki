<?php include "layout/dash.php"; ?>

<div class="container m-5">
    <div class="table-responsive">
        <div class="mb-2">
            <a class="btn btn-outline-dark mt-auto" href="addTag">Add tag</a>
        </div>
        <table class="table table-bordered table-striped text-center">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php foreach ($tag as $tags) : ?>
                <tbody>
                    <tr>
                        <td><?= $tags->tagId ?></td>
                        <td><?= $tags->name ?></td>
                        <td class="action-buttons">
                            <!-- Bouton "Update Tag" qui déclenche l'ouverture du modal -->
                            <button type="button" class="btn btn-outline-dark mt-auto" data-toggle="modal" data-target="#updateTagModal<?= $tags->tagId ?>">
                                Update tag
                            </button>

                            <!-- Modal "Update Tag" pour chaque tag -->
                            <div class="modal fade" id="updateTagModal<?= $tags->tagId ?>" tabindex="-1" role="dialog" aria-labelledby="updateTagModalTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="updateTagModalTitle">Update Tag</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Formulaire de mise à jour du tag -->
                                            <form method="post" action="updateTag">
                                                <div class="form-group">
                                                    <label for="updateTagName">Tag name</label>
                                                    <input class="form-control" type="text" id="updateTagName" name="newTagName" value="<?= $tags->name ?>" required>
                                                    <input type="hidden" name="tagId" value="<?= $tags->tagId ?>">
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="submit" value="update" class="btn btn-save">Update</button>
                                                </div>
                                            </form>
                                            <!-- Fin du formulaire -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="btn btn-outline-dark mt-auto" href="deleteTag?id=<?= $tags->tagId ?>">Delete tag</a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>

