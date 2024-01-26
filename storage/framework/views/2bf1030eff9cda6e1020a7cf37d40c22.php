

<?php $__env->startSection('title'); ?>
Add New Book
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Books</h1>
                <span class="h-20px border-gray-200 border-start mx-4"></span>
            </div>
            <div class="d-flex align-items-center py-1"></div>
        </div>
    </div>

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card mb-5 mb-xl-10">
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                    data-bs-target="#kt_account_profile_details" aria-expanded="true"
                    aria-controls="kt_account_profile_details">
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">Add New Book</h3>
                    </div>
                </div>

                <div id="kt_account_settings_profile_details" class="collapse show">
                    <form class="form" action="<?php echo e(route('admin.create-book')); ?>" method="POST"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="card-body border-top p-9">
                            <div class="row mb-6">

                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Stock No</span>
                                        </label>
                                        <input value="<?php echo e($data->stock_no); ?>" readonly type="text"
                                            class="form-control form-control-solid" placeholder="Enter Stock Number"
                                            name="stock_no">
                                        <?php $__errorArgs = ['stock_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="fv-plugins-message-container invalid-feedback"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Title</span>
                                        </label>
                                        <input value="<?php echo e(old('title')); ?>" type="text"
                                            class="form-control form-control-solid" placeholder="Enter Title"
                                            name="title">
                                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="fv-plugins-message-container invalid-feedback"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-8 fv-row fv-plugins-icon-container"
                                    data-select2-id="select2-data-71-3">
                                    <label class="required fs-6 fw-bold mb-2">Author</label>
                                    <select name="author"
                                        class="form-select form-select-solid select2-hidden-accessible"
                                        data-control="select2" data-hide-search="true"
                                        data-placeholder="Select Author" data-select2-id="select2-data-71-3"
                                        tabindex="-1" aria-hidden="true">
                                        
                                        <?php $__currentLoopData = $data->author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php if(old('author')==$row->id): ?> <?php echo e('selected'); ?> <?php endif; ?>
                                            value="<?php echo e($row->id); ?>"
                                            data-select2-id="select2-data-3-<?php echo e($row->id); ?>"><?php echo e($row->author_name); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="fv-plugins-message-container invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                


                                
                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Price</span>
                                        </label>
                                        <input value="<?php echo e(old('price')); ?>" type="number"
                                            class="form-control form-control-solid" placeholder="Enter Price"
                                            name="price">
                                        <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="fv-plugins-message-container invalid-feedback"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Stock Quantity</span>
                                        </label>
                                        <input value="<?php echo e(old('stock_quantity')); ?>" type="number"
                                            class="form-control form-control-solid" placeholder="Enter Stock Quantity"
                                            name="stock_quantity">
                                        <?php $__errorArgs = ['stock_quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="fv-plugins-message-container invalid-feedback"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-8 fv-row fv-plugins-icon-container"
                                    data-select2-id="select2-data-71-3">
                                    <label class="required fs-6 fw-bold mb-2">Category</label>
                                    <select name="category"
                                        class="form-select form-select-solid select2-hidden-accessible"
                                        data-control="select2" data-hide-search="true"
                                        data-placeholder="Select Reading Age Group" data-select2-id="select2-data-71-3"
                                        tabindex="-1" aria-hidden="true">
                                        
                                        <?php $__currentLoopData = $data->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php if(old('category')==$row->id): ?> <?php echo e('selected'); ?> <?php endif; ?>
                                            value="<?php echo e($row->id); ?>"
                                            data-select2-id="select2-data-3-<?php echo e($row->id); ?>"><?php echo e($row->category_name); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="fv-plugins-message-container invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>


                                
                                <div class="d-flex flex-column mb-8">
                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">Description</span>
                                    </label>
                                    <textarea name="description" class="form-control form-control-solid" rows="3"
                                        placeholder="Enter Description"><?php echo e(old('description')); ?></textarea>
                                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="fv-plugins-message-container invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-lg-4 mb-8 fv-row fv-plugins-icon-container"
                                    data-select2-id="select2-data-71-3">
                                    <label class="required fs-6 fw-bold mb-2">Language</label>
                                    <select name="language"
                                        class="form-select form-select-solid select2-hidden-accessible"
                                        data-control="select2" data-hide-search="true"
                                        data-placeholder="Select Language" data-select2-id="select2-data-71-3"
                                        tabindex="-1" aria-hidden="true">
                                        
                                        <?php $__currentLoopData = $data->language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php if(old('language')==$row->id): ?> <?php echo e('selected'); ?> <?php endif; ?>
                                            value="<?php echo e($row->id); ?>"
                                            data-select2-id="select2-data-3-<?php echo e($row->id); ?>"><?php echo e($row->language); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['language'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="fv-plugins-message-container invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="col-lg-4 mb-8 fv-row fv-plugins-icon-container"
                                    data-select2-id="select2-data-71-3">
                                    <label class="required fs-6 fw-bold mb-2">Publisher</label>
                                    <select name="publisher"
                                        class="form-select form-select-solid select2-hidden-accessible"
                                        data-control="select2" data-hide-search="true"
                                        data-placeholder="Select Publisher" data-select2-id="select2-data-71-3"
                                        tabindex="-1" aria-hidden="true">
                                        
                                        <?php $__currentLoopData = $data->publisher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php if(old('publisher')==$row->id): ?> <?php echo e('selected'); ?> <?php endif; ?>
                                            value="<?php echo e($row->id); ?>"
                                            data-select2-id="select2-data-3-<?php echo e($row->id); ?>"><?php echo e($row->publisher_name); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['publisher'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="fv-plugins-message-container invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Publication Date</span>
                                        </label>
                                        <input value="<?php echo e(old('publication_date')); ?>" type="date"
                                            class="form-control form-control-solid" placeholder="Enter Publication Date"
                                            name="publication_date">
                                        <?php $__errorArgs = ['publication_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="fv-plugins-message-container invalid-feedback"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>


                                
                                <div class="col-lg-4 mb-8 fv-row fv-plugins-icon-container"
                                    data-select2-id="select2-data-71-3">
                                    <label class="required fs-6 fw-bold mb-2">Edition</label>
                                    <select name="edition"
                                        class="form-select form-select-solid select2-hidden-accessible"
                                        data-control="select2" data-hide-search="true"
                                        data-placeholder="Select Edition" data-select2-id="select2-data-71-3"
                                        tabindex="-1" aria-hidden="true">
                                        
                                        <?php $__currentLoopData = $data->edition; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php if(old('edition')==$row->id): ?> <?php echo e('selected'); ?> <?php endif; ?>
                                            value="<?php echo e($row->id); ?>"
                                            data-select2-id="select2-data-3-<?php echo e($row->id); ?>"><?php echo e($row->edition); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['edition'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="fv-plugins-message-container invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Pages Count</span>
                                        </label>
                                        <input value="<?php echo e(old('pages_count')); ?>" name="pages_count" type="text"
                                            class="form-control form-control-solid" placeholder="Enter Pages Count">
                                        <?php $__errorArgs = ['pages_count'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="fv-plugins-message-container invalid-feedback"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-8 fv-row fv-plugins-icon-container"
                                    data-select2-id="select2-data-71-3">
                                    <label class="required fs-6 fw-bold mb-2">Reading Age Group</label>
                                    <select name="reading_age_group"
                                        class="form-select form-select-solid select2-hidden-accessible"
                                        data-control="select2" data-hide-search="true"
                                        data-placeholder="Select Reading Age Group" data-select2-id="select2-data-71-3"
                                        tabindex="-1" aria-hidden="true">
                                        
                                        <?php $__currentLoopData = $data->readingAgeGroup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php if(old('reading_age_group')==$row->id): ?> <?php echo e('selected'); ?> <?php endif; ?>
                                            value="<?php echo e($row->id); ?>"
                                            data-select2-id="select2-data-3-<?php echo e($row->id); ?>"><?php echo e($row->reading_age_group); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['reading_age_group'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="fv-plugins-message-container invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>


                                
                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Length (cm)</span>
                                        </label>
                                        <input value="<?php echo e(old('length')); ?>" name="length" type="number"
                                            class="form-control form-control-solid" placeholder="Enter Length (cm)">
                                        <?php $__errorArgs = ['length'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="fv-plugins-message-container invalid-feedback"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Width (cm)</span>
                                        </label>

                                        <input value="<?php echo e(old('width')); ?>" name="width" type="number"
                                            class="form-control form-control-solid" placeholder="Enter Width (cm)">
                                        <?php $__errorArgs = ['width'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="fv-plugins-message-container invalid-feedback"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Height (cm)</span>
                                        </label>

                                        <input value="<?php echo e(old('height')); ?>" name="height" type="number"
                                            class="form-control form-control-solid" placeholder="Enter Height (cm)">
                                        <?php $__errorArgs = ['height'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="fv-plugins-message-container invalid-feedback"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                
                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Weight (g)</span>
                                        </label>
                                        <input value="<?php echo e(old('weight')); ?>" name="weight" type="number"
                                            class="form-control form-control-solid" placeholder="Enter Weight (g)">
                                        <?php $__errorArgs = ['weight'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="fv-plugins-message-container invalid-feedback"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">ISBN 10</span>
                                        </label>
                                        <input value="<?php echo e(old('isbn_10')); ?>" name="isbn_10" type="number"
                                            class="form-control form-control-solid" placeholder="Enter ISBN 10">
                                        <?php $__errorArgs = ['isbn_10'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="fv-plugins-message-container invalid-feedback"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">ISBN 13</span>
                                        </label>
                                        <input value="<?php echo e(old('isbn_13')); ?>" name="isbn_13" type="number"
                                            class="form-control form-control-solid" placeholder="Enter ISBN 13">
                                        <?php $__errorArgs = ['isbn_13'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="fv-plugins-message-container invalid-feedback"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <div class="separator separator-dashed my-10"></div>

                                <?php for($i=1;$i<7;$i++): ?> <div class="col-lg-2">
                                    <label class="<?php echo e($i==1?'required':''); ?> fs-6 fw-bold mb-2">Book Image <?php echo e($i); ?></label>
                                    <div class="form-group">
                                        <div class="image-input image-input-outline" data-kt-image-input="true"
                                            style="background-image: url(<?php echo e(asset('assets/media/avatars/book.png')); ?>)">
                                            <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url(<?php echo e(asset('assets/media/avatars/book.png')); ?>)">
                                            </div>
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="Change Book Image">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <input type="file" name="book_image_<?php echo e($i); ?>" accept=".png, .jpg, .jpeg"
                                                    <?php echo e($i==1?'required':''); ?> />
                                            </label>
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                title="Cancel Book Image">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                title="Remove Book Image">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                        </div>
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                    </div>
                            </div>
                            <?php endfor; ?>

                        </div>
                </div>
            </div>

            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <a type="reset" class="btn btn-light btn-active-light-primary me-2"
                    href="<?php echo e(route('admin.books')); ?>">Discard</a>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>

            </form>

        </div>
    </div>
</div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dewmi\OneDrive\Desktop\Art-Gallery\resources\views/admin/book/add.blade.php ENDPATH**/ ?>