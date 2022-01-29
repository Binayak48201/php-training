<div class="card mx-5 mt-5">
    <div class="card-body">
        <h1> <?= $content;
                $status = 1; ?></h1>
        <form method="POST" action="add-forum">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" id="description" placeholder="Enter Description">
            </div>

            <div class="form-check">
                <input type="checkbox" name="status" class="form-check-input" id="status" value="1">
                <label class="form-check-label" for="status">Status</label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>