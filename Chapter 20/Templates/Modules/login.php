<?php
function GetTitle()
{
    return 'ورود به برنامه';
}
function GetContent()
{ ?>
    <p>فرم ورود به برنامه در اینجا خواهد بود</p>
    <p>تعداد کاربران این سیستم</p>
    <p><?php echo UserCount(); ?></p>
    <p>User Ehsan Exists ? <?php echo var_dump(UserExists('Ehsan')); ?></p>
    <p>User Admin Exists ? <?php echo var_dump(UserExists('Admin')); ?></p>
<?php
}