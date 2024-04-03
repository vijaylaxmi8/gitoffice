{{-- <html>
    <head>

    </head>
    <body>
        <p class="text-lg"> <b> Dear Sir/Madam</b>, <br/>
            You have requested for Resetting your password. <br/>
            Click the link below to Change your password.<br/>
            <a class="" href="{{route('reset.password',$token)}}" >Reset Link</a>
            <br/>
            Thank you,
            At your help
        </p><br/>
           <p class="bg-red-100 border-l-4 border-green-500 text-red-700 p-4 mb-4" class="text-rose-500	color: rgb(244 63 94);">Desclaimer : If you are not the intended user, kindly bring it to the notice of It Cell.</p>
    </body>
</html> --}}

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
            <a class="" href="{{ route('reset.password', $token) }}">Reset Link</a>
            <br/>
            Thank you,
            At your help
        </p><br/>
        
        <p class="disclaimer"><b>Disclaimer:</b> If you are not the intended user, kindly bring it to the notice of IT Cell.</p>
    </body>
</html>
