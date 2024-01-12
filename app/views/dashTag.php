<?php include "layout/dash.php"; ?>

<div class="container m-5">
    <div class="table-responsive">
        <div class="mb-2">
            <a class="btn btn-outline-primary mt-auto" href="addTag">Add tag</a>
        </div>
        <table class="table table-bordered table-striped text-center">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tag as $tags) : ?>
                    <tr>
                        <td><?= $tags->tagId ?></td>
                        <td><?= $tags->name ?></td>
                        <td class="action-buttons">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-primary mt-auto" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $tags->tagId ?>">
                                Update Tag
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop<?= $tags->tagId ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel<?= $tags->tagId ?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel<?= $tags->tagId ?>">Update Tag</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post">
                                                <div class="form-group">
                                                    <label for="updateTagName" class="text-end">Name Tag</label>
                                                    <input class="form-control" type="text" id="updateTagName" name="newTagName" value="<?= $tags->name ?>" required>
                                                    <input type="hidden" name="tagId" value="<?= $tags->tagId ?>">
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="submit" value="updateTag" class="btn btn-save">Update</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-outline-danger mt-auto" href="deleteTag?id=<?= $tags->tagId ?>">Delete tag</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
