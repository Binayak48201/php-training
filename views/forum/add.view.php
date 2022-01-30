<div class="card mx-5 mt-5">
    <div class="card-body">
        <div class="d-flex">
            <h1> <?= $content; ?></h1>
        </div>
        <a href="index" class="d-flex justify-content-center btn btn-success">Show All Data</a><br><br>
        <form method="POST" action="add-forum">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" id="description" placeholder="Enter Description">
            </div>

            <div class="form-group">
                <label class="form-check-label" for="status">Status</label><br>
                <div class="form-check">
                    <input type="radio" name="status" class="form-check-input" id="status" value="1" checked>On<br>
                    <input type="radio" name="status" class="form-check-input" id="status" value="0">Off<br>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>