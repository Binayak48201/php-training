<div class="m-5">
    <div class="card">
        <?php if ($forum) : ?>
            <div class="card-header">
                <h1 class="d-flex justify-content-center">Index Page</h1>
                <a href="add-view" class="btn btn-success">Add Forum</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <a title="Delete All" href="delete" class="float-right btn btn-danger mb-2">Delete All Data</a> </td>
                        <?php foreach ($forum as $key => $f) : ?>
                            <tr>
                                <td><?= $f->id; ?></td>
                                <td><?= $f->title; ?></td>
                                <td><?= $f->description; ?></td>
                                <td><a href="show" title="<?= $f->status; ?>" class="<?= $f->status == 1 ? 'btn btn-success' : 'btn btn-danger' ?>"><?= $f->status; ?></a></td>
                                <td> <a title="Doesnot Work" href="" class="btn btn-success">Edit</a> </td>
                                <td>
                                    <a title="Delete" href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else : ?>
            <a href="add-view" class="btn btn-success">Add Forum</a>
            <h1>No Data !!!</h1>
        <?php endif; ?>
    </div>
</div>