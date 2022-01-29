<div class="m-5">
    <div class="card">
        <?php
        if ($forum) :
        ?>

            <div class="card-header">

                <h1>Index Forum</h1>
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
                        <?php foreach ($forum as $key => $f) : ?>
                            <tr>
                                <td><?= $f->id; ?></td>
                                <td><?= $f->title; ?></td>
                                <td><?= $f->description; ?></td>
                                <td><?= $f->status; ?></td>
                                <td> <a title="Doesnot Work" href="" class="btn btn-success">Edit</a> </td>
                                <td> <a title="Doesnot Work" href="" class="btn btn-danger">Delete</a> </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else : ?>
            <h1>No Data !!!</h1>
        <?php endif; ?>
    </div>
</div>