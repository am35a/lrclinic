<?php
    $message = "
Имя отправителя: {$_POST['f-name']}

Адрес отправителя: {$_POST['f-email']}

Текст сообщения: {$_POST['f-message']}
                ";

    mail($_POST['f-email'], "Cобращение с сайта L.R.Clinic", $message, "Bcc: lrclinic@mail.ru");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>L.R. Clinic - Клиника Врачебной Косметологии</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:900&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-landing">
        <!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
                    <header id="header" class="vhigh">
                        <a href="index.html" class="logo"><img src="images/lrclinic_logo_480.png" alt="L.R.Click - Клиника Врачебной Косметологии"></a>
                    </header>
                <!-- Main -->
					<div id="main">
                        <!-- Post -->
							<section class="post align-center">
                                <b>Спасибо! Ваше сообщение успешно отправлено.</b>
                                <!--ul class="actions">
                                    <li><a href="http://www.lrclinic.ru" target="_self" class="button special">Вернуться...</a></li>
                                </ul-->
                            </section>
                    </div>
            </div>
    </body>
</html>
