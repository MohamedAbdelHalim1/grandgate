<div class="table_component" role="region" tabindex="0" style="overflow: auto ; width:100%">
    <table
        style="border:1px solid #dededf;
        height: 100%;
        width: 100%;
        table-layout: fixed;
        border-collapse: collapse;
        border-spacing: 1px;
        text-align: left; ">
        <caption style="caption-side: top;text-align: left;">You've Got New Contact Request </caption>
        <thead>
            <tr>
                <th
                    style="border: 1px solid #dededf;
        background-color: #eceff1;
        color: #000000;
        padding: 5px;">
                    Name</th>
                <th
                    style="border: 1px solid #dededf;
        background-color: #eceff1;
        color: #000000;
        padding: 5px;">
                    Phone</th>
                <th
                    style="border: 1px solid #dededf;
        background-color: #eceff1;
        color: #000000;
        padding: 5px;">
                    Subject</th>
                <th
                    style="border: 1px solid #dededf;
        background-color: #eceff1;
        color: #000000;
        padding: 5px;">
                    Message</th>
            </tr>
        </thead>
        <tbody>
            <?php if($name != null): ?>
                <tr>
                    <td
                        style="border: 1px solid #dededf;
        background-color: #ffffff;
        color: #000000;
        padding: 5px;">
                        <?php echo e($name); ?></td>

                    <td
                        style="border: 1px solid #dededf;
        background-color: #ffffff;
        color: #000000;
        padding: 5px;">
                        <?php echo e($phone); ?></td>
                    <td
                        style="border: 1px solid #dededf;
        background-color: #ffffff;
        color: #000000;
        padding: 5px;">
                        <?php echo e($subject); ?></td>
                    <td
                        style="border: 1px solid #dededf;
        background-color: #ffffff;
        color: #000000;
        padding: 5px;">
                        <?php echo e($inquiry); ?></td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php /**PATH /home/1216096.cloudwaysapps.com/ncaabhugrv/public_html/resources/views/backend/contact/view.blade.php ENDPATH**/ ?>