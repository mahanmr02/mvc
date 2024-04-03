<?php $this->include('panel.layouts.header')?>
            <section class="col-md-10 pt-3">

                <form action="<?php $this->url('category/store')?>" method="post">
                    <section class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="name ...">
                    </section>
                    <section class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="description ...">
                    </section>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
                <?php $this->include('panel.layouts.footer')?>


