<div class="row mb">
            <div class="boxtieude">Liên Hệ</div>
            <div class=" row boxcontent">
            <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /*=====  End of 14.about page   ======*/
        /*=============================================
=            15. Contact page            =
=============================================*/
.contact-form-container h2 {
           text-align: center;
        }

        .contact-form-container:before {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("../images/form-contact-shadow.webp") center bottom no-repeat;
            background-size: contain;
            content: "";
            z-index: -1;
        }

        .contact-form-container form label {
            font-weight: 800;
            display: block;
        }

        .contact-form-container form input,
        .contact-form-container form select,
        .contact-form-container form textarea {
            width: 100%;
            border: 1px solid #d6d4d4;
            background: #fbfbfb;
            padding: 5px;
            padding-left: 10px;
        }

        .contact-form-container form button {
            width: auto;
            font-size: 17px;
            line-height: 21px;
            color: white;
            font-weight: bold;
            background: #666666;
            border: 1px solid;
            border-color: #666;
            border-radius: 0;
            -webkit-transition: all 300ms ease;
            transition: all 300ms ease;
            padding: 10px 10px 10px 14px;
            border: 1px solid;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }

        .contact-form-container form button:hover {
            background-color: #f36b63;
        }

        .contact-form-container form textarea {
            resize: none;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            margin-bottom: 0.5rem;
        }
    </style>
</head>

<body>
    <div class="contact-form-container">
        <h2>LIÊN HỆ VỚI CHÚNG TÔI</h2>
        <form id="contact-form" action="assets/php/mail.php" method="post" class="contact-form">
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input type="text" name="first_name">
                    </div>

                    <div class="form-group">
                        <label>Email </label>
                        <input type="email" name="email_address"></div>

                    <div class="form-group">
                        <label>Chủ đề</label>
                        <input type="text" name="contact_subject">
                    </div>

                </div>
                <div class="col-lg-9">
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea name="message" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="form-group">
                        <button type="submit" name="submit"> GỬI <i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </form>
        <p class="form-messege pt-10 pb-10 mt-10 mb-10"></p>
    </div>
</body>

</html>
            </div>
           </div>