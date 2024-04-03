<?php $this->include('panel.layouts.header')?>
            <section class="col-md-10 pt-3">

                <section class="mb-2 d-flex justify-content-between align-items-center">
                    <h2 class="h4">Articles</h2>
                    <a href="<?php $this->url('article/create') ?>" class="btn btn-sm btn-success">Create</a>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-">
                        <thead>
                            <?php foreach($articles as $article){ ?>
                        <tr>
                            <td><?= $article ['id'] ?></td>
                            <td><?= $article ['title'] ?></td>
                            <td><?= $article ['cat_id'] ?></td>
                            <td><?php 
                            if(strlen($article['body']) >= 40) {
                                echo substr($article ['body'], 0 ,40) . "...";
                            }else{
                               echo $article['body'];
                            }
                             ?></td>
                            <td>
                                <a href="<?php $this->url('article/edit/' . $article['id']) ?>" class="btn btn-info btn-sm">Edit</a>
                                <a href="<?php $this->url('article/delete/' . $article['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </section>
                <?php $this->include('panel.layouts.footer')?>