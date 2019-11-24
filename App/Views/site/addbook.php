<div class="book-container tp-border">
    <div class="profile-body col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <?php if (! empty($message)) { ?>
                    <div class="alert alert-danger"><?php echo $message; ?></div>
                <?php } else { ?>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="h4 text-center">معلومات الكتاب</div>
                            <div class="row pv-lg">
                                <div class="col-sm-12">
                                    <form action="<?php echo url('/addbook/submit'); ?>" method="post" id="SiteForm">
                                        <div id="form-results"></div>
                                        <button type="button" class="btn btn-warning pdfOutLink pull-left">
                                            <span class="fa fa-out"></span>الإضافة كرابط خارجي
                                        </button>
                                        <div class="clearfix"></div>
                                        <br>
                                        <div id="message"></div>
                                        <div class="form-group col-sm-12">
                                            <label>العنوان</label>
                                            <input class="form-control" name="title" placeholder="العنوان" type="text">
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label>الوصف</label>
                                            <textarea class="form-control" name="desc"
                                                      placeholder="نبذة عن الكتاب"></textarea>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label> تصنيف الكتاب</label>
                                            <select class="form-control select-lookup" name="category">
                                                <option></option>
                                                <?php
                                                show_tree($categories);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>المؤلف</label>
                                            <select name="author" class="form-control select-lookup">
                                                <option></option>
                                                <?php
                                                foreach ($authors as $author) { ?>
                                                    <option value="<?php echo $author->id; ?>"><?php echo $author->name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div id="addPdf" class="form-group col-sm-6">
                                            <label>ملف الكتاب</label>
                                            <div class="input-group">
                                                <label class="input-group-btn">
                            <span class="btn btn-warning">اختر...
                                 <input type="file" name="link" style="display: none;">
                            </span>
                                                </label>
                                                <input type="text" class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>صورة الكتاب</label>
                                            <div class="input-group">
                                                <label class="input-group-btn">
                            <span class="btn btn-warning">اختر...
                                 <input type="file" name="image" style="display: none;">
                            </span>
                                                </label>
                                                <input type="text" class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <?php echo $recaptcha; ?>
                                        </div>
                                        <input type="hidden" name="token" value="<?php echo $token; ?>">
                                        <div class="clearfix"></div>
                                        <button type="button" class="btn btn-primary btn-lg center-block submit-btn">
                                            إضافة
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>