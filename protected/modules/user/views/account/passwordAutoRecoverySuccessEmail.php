<html>
<head>
    <title><?php echo Yii::t('UserModule.user', 'Password recovery for "{site}"!', array('site' => CHtml::encode(Yii::app()->name))); ?></title>
</head>
<body>
    <?php echo Yii::t('UserModule.user', 'Password recovery for "{site}"!', array('{site}' => CHtml::encode(Yii::app()->name))); ?><br/>

    <?php echo Yii::t('UserModule.user', 'Your new password : {password}', array('{password}' => $password)); ?><br/>

    <?php echo Yii::t('UserModule.user', 'Now you can'); ?>
    <a href='<?php echo Yii::app()->getRequest()->hostInfo.$this->createUrl('/user/account/login'); ?>'>
        <?php echo Yii::t('UserModule.user', 'login'); ?>
    </a>!<br/><br/>

    <?php echo Yii::t('UserModule.user', 'Best regards, "{site}" administration!', array('{site}' => CHtml::encode(Yii::app()->name))); ?>
</body>
</html>
