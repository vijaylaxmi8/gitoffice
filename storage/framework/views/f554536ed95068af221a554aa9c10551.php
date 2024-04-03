

<html>
    <head>
        <style>
            .disclaimer {
                color: #cc0000;
                padding: 15px;
                margin-bottom: 15px;
            }
        </style>
    </head>
    <body>
        <p class="text-lg">
            <b>Dear Sir/Madam</b>, <br/>
            You have requested for resetting your password.<br/>
            Click the link below to change your password.<br/>
            <a class="" href="<?php echo e(route('reset.password', $token)); ?>">Reset Link</a>
            <br/>
            Thank you,
            At your help
        </p><br/>
        
        <p class="disclaimer"><b>Disclaimer:</b> If you are not the intended user, kindly bring it to the notice of IT Cell.</p>
    </body>
</html>
<?php /**PATH F:\laravel Apps\gitoffice\resources\views/auth/mailcontent.blade.php ENDPATH**/ ?>