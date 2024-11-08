<html>
    <head>
        
        <style>
            .p {
                margin-bottom: 0rem;
            }
            #reset_msg_text {
                margin-bottom: 2rem;
            }
            #password_reset_btn {
                background-color: #5e2129;
                padding: 1rem 2rem;
                border-radius: 10px;
                color: #ffffff;
                font-weight: bold;
                text-transform: uppercase;
                text-decoration: none;
            }
            #ignore_text {
                color: #c5c5c5;
                margin-top: 2rem;
            }
        </style>
    </head>
    <body style="width: 100%">
        <div align="center" class="container text-center" style="width:600px;background-color:#f7f6f6;">
            <br><br>
            <img style="max-width: 15%;" src="https://heena.lk/img/logo.png" />

            <br><br>
            <div class="" style="padding-top:15px;padding-bottom:15px;font-size: 35px;background-color:#00ad9b;color:#fff;">
                Thanks for shopping with us
            </div>

            <div style="text-align:start;margin-left: 20px;">
                <h5>Hi User,</h5>
                <p><?php echo e($body->status); ?></p>
                <h4 style="color: #00ad9b;">[Order #
                    <?php echo e('ORD' . str_pad(number_format($body->order->id + 100000, 0, '', ''), 6, '0', STR_PAD_LEFT)); ?>]
                    (<?php echo e(date('d M, Y', strtotime($body->order->ordered_date))); ?>)</h4>
            </div>


            <div style="text-align: center; max-width: 600px; padding-left:20px;padding-right:20px;">
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 1.5rem;" class="mb-3">
                    <thead>
                        <tr style="border-bottom: 2px solid #e2e8f0;">
                            <th style="min-width: 175px; text-align: start; padding-bottom: 0.2rem;">Title</th>
                            <th style="min-width: 80px; text-align: end; padding-bottom: 0.2rem;">Price</th>
                            <th style="min-width: 70px; text-align: end; padding-bottom: 0.2rem;">Quantity</th>
                            <th style="min-width: 100px; text-align: end; padding-bottom: 0.2rem;">Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $body->order->ordered_books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr style="font-weight: bolder; color: #4a5568; text-align: end;">
                            <td style="display: flex; align-items: center; padding-top: 0.6rem;">
                                <i style="color: #e53e3e; margin-right: 0.5rem;" class="fa fa-genderless"></i>
                                <?php echo e($row->book->title ?? '-'); ?>

                            </td>
                            <td style="padding-top: 0.6rem;">LKR <?php echo e($row->book->price); ?></td>
                            <td style="padding-top: 0.6rem;"><?php echo e($row->quantity); ?></td>
                            <td style="padding-top: 0.6rem; color: #1a202c; font-weight: bolder;">LKR <?php echo e($row->total_price); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>


            </div>

            <div style="margin-top:15px;margin-bottom:15px;border:1px solid #e2e8f0;"></div>


            <div style="max-width: 600px;padding-left:30px;padding-right:20px;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="width: 50%;"></td>
                        <td style="font-weight: bold; color: #888; font-size: 0.95rem;">Subtotal</td>
                        <td style="text-align: end; font-weight: bold; font-size: 0.95rem; color: #333;">LKR <?php echo e($body->order->sub_total); ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="font-weight: bold; color: #888; font-size: 0.95rem;">Delivery Fee</td>
                        <td style="text-align: end; font-weight: bold; font-size: 0.95rem; color: #333;">LKR <?php echo e($body->order->delivery_fee); ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="font-weight: bold; color: #888; font-size: 0.95rem;">Processing Fee (3.42%)</td>
                        <td style="text-align: end; font-weight: bold; font-size: 0.95rem; color: #333;">LKR <?php echo e($body->order->processing_fee); ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="font-weight: bold; color: #888; font-size: 0.95rem;">Net Total</td>
                        <td style="text-align: end; font-weight: bold; font-size: 0.95rem; color: #333;">LKR <?php echo e($body->order->net_total); ?></td>
                    </tr>
                </table>
            </div>


            <div style="margin-top:15px;margin-bottom:15px;border:1px solid #e2e8f0;"></div>
            <br>

            <div style="display: flex; width: 600px; flex-direction: row; justify-content: space-around;">
                <div style="text-align: start; flex: 1; margin-right: 100px; margin-left: 20px;">
                    <h4 style="color: #00ad9b;">Billing Address</h4>
                    <p><?php echo e($body->order->customer->first_name ??''); ?> <?php echo e($body->order->customer->last_name ??''); ?></p>
                    <p><?php echo e($body->order->customer->billing_address_street_address_line_1 ??''); ?></p>
                    <p><?php echo e($body->order->customer->billing_address_street_address_line_2 ??''); ?></p>
                    <p><?php echo e($body->order->customer->billing_address_zip_code); ?></p>
                    <p><?php echo e($body->order->customer->email ??''); ?></p>
                    <p><?php echo e($body->order->customer->contact_no_personal_country_code ??''); ?> <?php echo e($body->order->customer->contact_no_personal ??''); ?></p>


                </div>

                <div style="text-align: start; flex: 1;">
                    <h4 style="color: #00ad9b;">Shipping Address</h4>
                    <p><?php echo e($body->order->customer->first_name ??''); ?> <?php echo e($body->order->customer->last_name ??''); ?></p>
                    <p><?php echo e($body->order->customer->shipping_address_street_address_line_1 ?? $body->order->customer->billing_address_street_address_line_1); ?></p>
                    <p><?php echo e($body->order->customer->shipping_address_street_address_line_2 ?? $body->order->customer->billing_address_street_address_line_2); ?></p>
                    <p><?php echo e($body->order->customer->shipping_address_zip_code ?? $body->order->customer->billing_address_zip_code); ?></p>
                    <p><?php echo e($body->order->customer->email ??''); ?></p>
                    <p><?php echo e($body->order->customer->contact_no_personal_country_code ??''); ?> <?php echo e($body->order->customer->contact_no_personal ??''); ?></p>

                </div>
            </div>

            <div style="margin-top:15px;margin-bottom:15px;border:1px solid #e2e8f0;"></div>

            <p>Heena publishers | +94 707 590 690</p>

            <div style="padding-top:15px;padding-bottom:5px;width:600px;"></div>
        </div>
    </body>
</html>
<?php /**PATH C:\Users\dewmi\OneDrive\Desktop\Art-Gallery\resources\views/layouts/emali/order-state.blade.php ENDPATH**/ ?>