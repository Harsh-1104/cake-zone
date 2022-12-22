<!DOCTYPE html>


<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>
        How to add WhatsApp share button on website?
    </title>

    <style type="text/css">
        /* @media screen and (min-width: 500px) {
            a {}
        }
         */

        .floating {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 100%;
            text-align: center;
            /* font-size: 30px; */
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .floating i {
            margin-top: 10px;
        }

        @media (max-width:768px) and (min-width:635px) {
            .floating {
                width: 50px;
                height: 50px;
            }

            .floating i {
                margin-top: 10px;
            }
        }

        @media (max-width:635px) {
            .floating {
                width: 40px;
                height: 40px;
            }

            .floating i {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
    <h3>Whatsapp sharing</h3>
    <h1>Hello</h1>
    <a href="https://wa.me/919824527094?text=Hello" data-action="share/whatsapp/share" target="_blank" class="text-white position-fixed floating">
        <h1><i class="fa fa-whatsapp float-button text-white"></i></h1>
    </a>
</body>

</html>