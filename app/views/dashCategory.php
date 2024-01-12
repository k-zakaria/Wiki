<?php include "layout/dash.php"?>
<div class="container m-5">
    <div class="table-responsive">
    <div class="mb-2"><a class="btn btn-outline-dark mt-auto" href="addCategory">Add Category</a></div>
        <table class="table table-bordered table-striped text-center">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php foreach ($category as $categorys) : ?>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><?= $categorys->name ?></td>
                    <td class="action-buttons">
                        <button class="btn btn-primary btn-sm">Éditer</button>
                        <a class="btn btn-outline-danger mt-auto" href="deleteCategory?id=<?php echo $categorys->categoryId ?>">Delete tag</a>
                    </td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>