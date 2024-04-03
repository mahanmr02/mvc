<?php $this->include('panel.layouts.header')?>
            <section class="col-md-10 pt-3">

                <form action="<?php $this->url('category/update/' . $category['id']) ?>" method="post">
                    <section class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $category['name'] ?>">
                    </section>
                    <section class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="<?= $category['description'] ?>">
                    </section>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <?php $this->include('panel.layouts.footer')?>

