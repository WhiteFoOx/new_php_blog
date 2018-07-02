<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/new_php_blog/admin/edit/<?php echo $data['id']; ?>" method="post" >
                            <div class="form-group">
                                <label>Название</label>
                                <input class="form-control" type="text" value="<?php echo $data['name']; ?>" name="name">
                            </div>
                            <div class="form-group">
                                <label>Описание</label>
                                <input class="form-control" type="text" value="<?php echo $data['description']; ?>" name="description">
                            </div>
                            <div class="form-group">
                                <label>Текст</label>
                                <textarea class="form-control ckeditor" rows="5" name="text"><?php echo $data['text']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Изображение</label>
                                <input class="form-control" type="file" name="img">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Сохранить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>