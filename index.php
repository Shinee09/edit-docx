    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web Application</title>
        <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
            crossorigin="anonymous" />
        <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/responsive.css">


        <link rel="canonical" href="" />
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <meta property="og:title" content="" />
        <meta property="og:url" content="" />
        <meta property="og:description" content="" />
    </head>

    <body>
        <div class="main container-fluid">
            <div class="row">
                <div class="header-right-block">
                    <header class="header-pc">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <a class="navbar-branch" href="http://cksvietnam.vn" target="_blank">
                                <img class="nav-logo" src="./img/logo.png">
                            </a>
                            <!-- <li class="nav-item">
                                <a class="nav-link active" id="tab-css" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="content-css" aria-selected="true">
                                    <img class="nav__img-logo" src="./img/home.png">
                                </a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" id="tab-css" data-toggle="tab" href="#vinca" role="tab"
                                    aria-controls="content-css" aria-selected="false">
                                    <img class="nav__img-logo" src="./img/vinca.png">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-css" data-toggle="tab" href="#vina" role="tab"
                                    aria-controls="content-css" aria-selected="true">
                                    <img class="nav__img-logo" src="./img/vina.png">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-css" data-toggle="tab" href="#fptca" role="tab"
                                    aria-controls="content-css" aria-selected="true">
                                    <img class="nav__img-logo" src="./img/fptca.png">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-css" data-toggle="tab" href="#easyca" role="tab"
                                    aria-controls="content-css" aria-selected="true">
                                    <img class="nav__img-logo" src="./img/easyca.png">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-css" data-toggle="tab" href="#ca2" role="tab"
                                    aria-controls="content-css" aria-selected="true">
                                    <img class="nav__img-logo" src="./img/ca2.png">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-css" data-toggle="tab" href="#newtelca" role="tab"
                                    aria-controls="content-css" aria-selected="true">
                                    <img class="nav__img-logo" src="./img/newtelca.png">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-javascript" data-toggle="tab" href="#fastca" role="tab"
                                    aria-controls="HOME" aria-selected="false">
                                    <img class="nav__img-logo" src="./img/fastca.png">
                                </a>
                            </li>
                        </ul>
                    </header>
                    <header class="header-mobile sticky">
                        <a class="header__mobile__logo-block" href="#">
                            <img class="header__mobile-logo" src="./img/logo.png">
                        </a>
                        <i class="fas fa-bars bar-icon"></i>
                        <div class="nav__mobile">
                            <div class="nav__mobile-header">
                                <img src="./img/logo.png" alt="" class="logo-mobile-img">

                                <label for="nav__input" class="nav__mobile-btn-close">×</label>
                            </div>
                            <hr class="nav__line">
                            <div class="nav__list-block">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <!-- <li class="nav-item">
                                        <a class="nav-link active" id="tab-css" data-toggle="tab" href="#home" role="tab"
                                            aria-controls="content-css" aria-selected="true">
                                            <img class="nav__img-logo" src="./img/home.png">
                                        </a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-css" data-toggle="tab" href="#vinca" role="tab"
                                            aria-controls="content-css" aria-selected="false">
                                            <img class="nav__img-logo" src="./img/vinca.png">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-css" data-toggle="tab" href="#vina" role="tab"
                                            aria-controls="content-css" aria-selected="true">
                                            <img class="nav__img-logo" src="./img/vina.png">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-css" data-toggle="tab" href="#fptca" role="tab"
                                            aria-controls="content-css" aria-selected="true">
                                            <img class="nav__img-logo" src="./img/fptca.png">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-css" data-toggle="tab" href="#easyca" role="tab"
                                            aria-controls="content-css" aria-selected="true">
                                            <img class="nav__img-logo" src="./img/easyca.png">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-css" data-toggle="tab" href="#ca2" role="tab"
                                            aria-controls="content-css" aria-selected="true">
                                            <img class="nav__img-logo" src="./img/ca2.png">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-css" data-toggle="tab" href="#newtelca" role="tab"
                                            aria-controls="content-css" aria-selected="true">
                                            <img class="nav__img-logo" src="./img/newtelca.png">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-javascript" data-toggle="tab" href="#fastca"
                                            role="tab" aria-controls="HOME" aria-selected="false">
                                            <img class="nav__img-logo" src="./img/fastca.png">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>

                <div class="content-block">
                    <div class="container-fluid pt-20">
                        <div class="tab-content" id="myTabContent">
                            <!-- HomePage -->
                            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="tab-css">
                                <div class="container-fluid supplier-content">
                                    <div class="supplier-img">
                                        <img class="supplier-logo" src="./img/logo.png">
                                    </div>

                                </div>
                            </div>
                            <!-- End HomePage -->
                            <!-- VinCA -->
                            <div class="tab-pane show active" id="vinca" role="tabpanel" aria-labelledby="tab-css">
                                <div class="container-fluid supplier-content">
                                    <div class="supplier-img">
                                        <img class="supplier-logo" src="./img/vinca.png">
                                    </div>
                                    <div class="supplier-block">

                                        <form name="form" id="form-vinca" method="post">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label for="company-taxcode">Mã số thuế <span
                                                            class="input-important"></span></label>
                                                    <input name="company-taxcode" id="vinca-company-taxcode"
                                                        class="form-control company-taxcode" maxlength="14"
                                                        minlength="10" pattern="[-+]?[0-9]*[-]?[0-9]+"
                                                        title="Vui lòng điền đúng định dạng mã số thuế" required="">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <button type="submit" class="btn btn-primary"
                                                        id="get-info-form-vinca">Lấy thông
                                                        tin</button>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="company-name">Tên công ty <span
                                                        class="input-important"></span></label>
                                                <input type="text" name="company-name" class="form-control company-name"
                                                    required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="company-address">Địa chỉ
                                                    <span class="input-important"></span>
                                                </label>
                                                <input type="text" name="company-address"
                                                    class="form-control company-address" required="">
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label for="company-director">Người đại diện pháp luật <span
                                                            class="input-important"></span></label>
                                                    <input type="text" name="company-director"
                                                        class="form-control company-director" required="">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="company-position">Chức vụ <span
                                                            class="input-important"></span></label>
                                                    <input type="text" name="company-position"
                                                        class="form-control company-position" value="Giám đốc"
                                                        required="">
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-12">
                                                <label>Gói cước </label>
                                                <select name="package" class="form-select form-control package">
                                                    <option value="0" selected>---Chọn gói---</option>
                                                    <option value="1">Cấp mới 1 năm</option>
                                                    <option value="2">Cấp mới 2 năm</option>
                                                    <option value="3">Cấp mới 3 năm</option>
                                                    <option value="4">Cấp mới 4 năm</option>
                                                    <option value="5">Gia hạn 1 năm</option>
                                                    <option value="6">Gia hạn 2 năm</option>
                                                    <option value="7">Gia hạn 3 năm</option>
                                                    <option value="8">Gia hạn 4 năm</option>
                                                </select>
                                            </div>

                                            <div class="btn-download-block">
                                                <button type="submit" name="create_word"
                                                    class="btn btn-info btn-download" formaction="./file/vinca-gdk.php">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-file-earmark-word-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.485 6.879l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 1 1 .97-.242z" />
                                                    </svg>
                                                    Giấy đăng ký.docx
                                                </button>

                                                <button type="submit" name="create_word"
                                                    class="btn btn-info btn-download" formaction="./file/vinca-gxn.php">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-file-earmark-word-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.485 6.879l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 1 1 .97-.242z" />
                                                    </svg>
                                                    Giấy xác nhận.docx
                                                </button>
                                            </div>
                                            <hr>
                                            <div class="btn-download-block">
                                                <button type="submit" name="create_word"
                                                    class="btn btn-danger btn-download" formaction="./file/vinca-gdk-pdf.php"
                                                    data-bs-toggle="popover" data-placement="top"
                                                    data-trigger="hover" title="Download PDF File API"
                                                    data-content="API có thể kết nối hơi chậm, vui lòng không spam click. Beta Version, có thể bị giới hạn bởi API Limit. Vui lòng download file Word khi gặp lỗi">
                                                    <img src="./img/pdf.svg" class="pdf-icon" />
                                                    Giấy đăng ký.pdf
                                                </button>

                                                <button type="submit" name="create_word"
                                                    class="btn btn-danger btn-download" formaction="./file/vinca-gxn-pdf.php"
                                                    data-bs-toggle="popover" data-placement="top"
                                                    data-trigger="hover" title="Download PDF File API"
                                                    data-content="API có thể kết nối hơi chậm, vui lòng không spam click. Beta Version, có thể bị giới hạn bởi API Limit. Vui lòng download file Word khi gặp lỗi">
                                                    <img src="./img/pdf.svg" class="pdf-icon" />
                                                    Giấy xác nhận.pdf
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End VinCA -->

                            <!-- VINA SmartSign -->
                            <div class="tab-pane faded" id="vina" role="tabpanel" aria-labelledby="tab-css">
                                <div class="container-fluid supplier-content">
                                    <div class="supplier-img">
                                        <img class="supplier-logo" src="./img/vina.png">
                                    </div>
                                    <div class="supplier-block">

                                        <form name="form" id="form-vina" method="post">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label for="company-taxcode">Mã số thuế <span
                                                            class="input-important"></span></label>
                                                    <input name="company-taxcode" id="vina-company-taxcode"
                                                        class="form-control company-taxcode" maxlength="14"
                                                        minlength="10" pattern="[-+]?[0-9]*[-]?[0-9]+"
                                                        title="Vui lòng điền đúng định dạng mã số thuế" required="">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <button type="submit" class="btn btn-primary"
                                                        id="get-info-form-vina">Lấy thông
                                                        tin</button>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="company-name">Tên công ty <span
                                                        class="input-important"></span></label>
                                                <input type="text" name="company-name" class="form-control company-name"
                                                    required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="company-address">Địa chỉ
                                                    <span class="input-important"></span>
                                                </label>
                                                <input type="text" name="company-address"
                                                    class="form-control company-address" required="">
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label for="company-director">Người đại diện pháp luật <span
                                                            class="input-important"></span></label>
                                                    <input type="text" name="company-director"
                                                        class="form-control company-director" required="">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="company-position">Chức vụ <span
                                                            class="input-important"></span></label>
                                                    <input type="text" name="company-position"
                                                        class="form-control company-position" value="Giám đốc"
                                                        required="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="serial">Serial CTS</label>
                                                <input type="text" name="serial" id="serial" class="form-control">
                                            </div>

                                            <!-- Thêm thông tin hợp đồng -->
                                            <button
                                                class="btn btn-outline-success dropdown-toggle btn-sm btn-more-agency"
                                                type="button" data-toggle="collapse" data-target="#vina-agency"
                                                aria-expanded="false" aria-controls="vina-agency">
                                                Thông tin đại lý
                                            </button>
                                            <div class="collapse" id="vina-agency">
                                                <div>
                                                    <div class="form-group">
                                                        <select name="select-vina-c" onchange="handleChangeAgency(this)"
                                                            class="form-select form-control"
                                                            style="color: green; margin-top:15px; font-weight: bold">
                                                            <option value="1" selected>CÔNG TY TNHH KỸ THUẬT CHỮ KÝ SỐ
                                                                VIỆT
                                                                NAM</option>
                                                            <option value="2">Thêm mới</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-lg-6">
                                                            <label for="company-taxcode-c">Mã số thuế <span
                                                                    class="input-important"></span></label>
                                                            <input name="company-taxcode-c" id="company-taxcode-c"
                                                                class="form-control" value="0315450845" required="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="company-name-c">Tên công ty <span
                                                                class="input-important"></span></label>
                                                        <input type="text" name="company-name-c" id="company-name-c"
                                                            class="form-control"
                                                            value="CÔNG TY TNHH KỸ THUẬT CHỮ KÝ SỐ VIỆT NAM"
                                                            required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="company-address-c">Địa chỉ <span
                                                                class="input-important"></span></label>
                                                        <input type="text" name="company-address-c"
                                                            id="company-address-c" class="form-control"
                                                            value="126 Nguyễn Tất Thành, Phường 13, Quận 4, Thành phố Hồ Chí Minh, Việt Nam"
                                                            required="">
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-lg-6">
                                                            <label for="company-director-c">Người đại diện pháp
                                                                luật <span class="input-important"></span></label>
                                                            <input type="text" name="company-director-c"
                                                                id="company-director-c" class="form-control"
                                                                value="Nguyễn Khánh Quân" required="">
                                                        </div>
                                                        <div class="form-group col-lg-6">
                                                            <label for="company-position-c">Chức vụ</label>
                                                            <input type="text" name="company-position-c"
                                                                id="company-position-c" class="form-control"
                                                                value="Giám đốc" required="">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-lg-4">
                                                            <label>CMND/Passport <span
                                                                    class="input-important"></span></label>
                                                            <input name="director-c-id" class="form-control"
                                                                id="director-c-id" required="" value="075088000997">
                                                        </div>
                                                        <div class="form-group col-lg-4">
                                                            <label>Ngày cấp <span
                                                                    class="input-important"></span></label>
                                                            <br />
                                                            <div class="date-block">
                                                                <input data-maxlength="2" min="1" max="31" name="day-c"
                                                                    class="form-control text-center" id="day-c"
                                                                    required="" value="08" />
                                                                <span class="space-date"></span>
                                                                <input data-maxlength="2" min="1" max="12"
                                                                    name="month-c" class="form-control text-center"
                                                                    id="month-c" required="" value="02" />
                                                                <span class="space-date"></span>
                                                                <input data-maxlength="4" min="1900" max="2100"
                                                                    name="year-c" class="form-control text-center"
                                                                    id="year-c" required="" value="2020" />
                                                            </div>
                                                            <script>
                                                            $(document).ready(function() {
                                                                $("#day-c").keyup(function() {
                                                                    $this = $(this);
                                                                    if ($this.val().length >= $this
                                                                        .data(
                                                                            "maxlength")) {
                                                                        if ($this.val().length > $this
                                                                            .data(
                                                                                "maxlength")) {
                                                                            $this.val($this.val()
                                                                                .substring(
                                                                                    0, 2));
                                                                        }
                                                                        $this.next("#month-c").focus();
                                                                    }
                                                                });
                                                            });

                                                            $(document).ready(function() {
                                                                $("#month-c").keyup(function() {
                                                                    $this = $(this);
                                                                    if ($this.val().length >= $this
                                                                        .data(
                                                                            "maxlength")) {
                                                                        if ($this.val().length > $this
                                                                            .data(
                                                                                "maxlength")) {
                                                                            $this.val($this.val()
                                                                                .substring(
                                                                                    0, 2));
                                                                        }
                                                                        $this.next("#year-c").focus();
                                                                    }
                                                                });
                                                            });
                                                            </script>
                                                        </div>
                                                        <div class="form-group col-lg-4">
                                                            <label>Nơi cấp <span class="input-important"></span></label>
                                                            <br />
                                                            <input type="text" name="director-c-issued"
                                                                class="form-control" id="director-c-issued" required=""
                                                                value="Cục CSQLHCVTTXH" />
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-lg-4">
                                                            <label>Số tài khoản:</label>
                                                            <input type="text" name="bank-id" id="bank-id"
                                                                class="form-control" value="172432549" />
                                                        </div>
                                                        <div class="form-group col-lg-4">
                                                            <label>Ngân hàng:</label>
                                                            <input type="text" name="bank-name" id="bank-name"
                                                                class="form-control"
                                                                value="VPBank chi nhánh Cộng Hoà" />

                                                        </div>
                                                        <div class="form-group col-lg-4">
                                                            <label>Tên:</label>
                                                            <input type="text" name="bank-beneficiary"
                                                                id="bank-beneficiary" class="form-control"
                                                                value="CÔNG TY TNHH KỸ THUẬT CHỮ KÝ SỐ" />
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-lg-4">
                                                            <label>Nhân viên giao dịch:</label>
                                                            <input type="text" name="trader-name" id="trader-name"
                                                                class="form-control" value="Nguyễn Thị Bích Ngọc" />
                                                        </div>
                                                        <div class="form-group col-lg-4">
                                                            <label>CMND:</label>
                                                            <input type="text" name="trader-id" id="trader-id"
                                                                class="form-control" value="079199000341" />

                                                        </div>
                                                        <div class="form-group col-lg-4">
                                                            <label>Số điện thoại:</label>
                                                            <input type="text" name="trader-phone" id="trader-phone"
                                                                class="form-control" value="0937516462" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End thông tin hợp đồng -->

                                            <div class="btn-download-block">
                                                <button type="submit" name="create_word"
                                                    class="btn btn-info btn-download" formaction="./file/vina-gdk.php">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-file-earmark-word-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.485 6.879l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 1 1 .97-.242z" />
                                                    </svg>
                                                    Giấy đăng ký.docx
                                                </button>

                                                <button type="submit" name="create_word"
                                                    class="btn btn-info btn-download" formaction="./file/vina-gxn.php">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-file-earmark-word-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.485 6.879l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 1 1 .97-.242z" />
                                                    </svg>
                                                    Giấy xác nhận.docx
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End VINA SmartSign -->


                            <!-- FPT-CA -->
                            <div class="tab-pane faded" id="fptca" role="tabpanel" aria-labelledby="tab-css">
                                <div class="container-fluid supplier-content">
                                    <div class="supplier-img">
                                        <img class="supplier-logo" src="./img/fptca.png">
                                    </div>
                                    <div class="supplier-block">

                                        <form name="form" id="form-fptca" method="post">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label for="company-taxcode">Mã số thuế <span
                                                            class="input-important"></span></label>
                                                    <input name="company-taxcode" id="fptca-company-taxcode"
                                                        class="form-control company-taxcode" maxlength="14"
                                                        minlength="10" pattern="[-+]?[0-9]*[-]?[0-9]+"
                                                        title="Vui lòng điền đúng định dạng mã số thuế" required="">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <button type="submit" class="btn btn-primary"
                                                        id="get-info-form-fptca">Lấy thông
                                                        tin</button>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="company-name">Tên công ty <span
                                                        class="input-important"></span></label>
                                                <input type="text" name="company-name" class="form-control company-name"
                                                    required="">
                                            </div>

                                            <div class="form-group">
                                                <label for="company-address">Địa chỉ
                                                    <span class="input-important"></span>
                                                </label>
                                                <input type="text" name="company-address"
                                                    class="form-control company-address" required="">
                                            </div>


                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label for="company-director">Người đại diện pháp luật <span
                                                            class="input-important"></span></label>
                                                    <input type="text" name="company-director" class="form-control"
                                                        required="">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="company-position">Chức vụ <span
                                                            class="input-important"></span></label>
                                                    <input type="text" name="company-position" class="form-control"
                                                        value="Giám đốc" required="">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <div class="form-check form-switch">
                                                        <input type="checkbox" class="form-check-input checked-contract"
                                                            onclick="handleCheckedContractFpt()"
                                                            id="checked-contract-fpt" checked>
                                                        <label for="checked-contract-fpt">Ngày hợp đồng</label>
                                                    </div>
                                                    <div>
                                                        <div class="form-row date-block">
                                                            <input type="number" data-maxlength="2" min="1" max="31"
                                                                name="day" class="form-control text-center" id="day-fpt"
                                                                value=<?php echo date('d') ?> />
                                                            <span class="space-date"></span>
                                                            <input type="number" data-maxlength="2" min="1" max="12"
                                                                name="month" class="form-control text-center"
                                                                id="month-fpt" value=<?php echo date('m') ?> />
                                                            <span class="space-date"></span>
                                                            <input type="number" data-maxlength="4" min="1900"
                                                                max="2100" name="year" class="form-control text-center"
                                                                id="year-fpt" value=<?php echo date('Y') ?> />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Gói cước </label>
                                                    <select name="package" class="form-select form-control package">
                                                        <option value="0" selected>---Chọn gói---</option>
                                                        <option value="1">Cấp mới 1 năm</option>
                                                        <option value="2">Cấp mới 2 năm</option>
                                                        <option value="3">Cấp mới 3 năm</option>
                                                        <option value="4">Gia hạn 1 năm</option>
                                                        <option value="5">Gia hạn 2 năm</option>
                                                        <option value="6">Gia hạn 3 năm</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="serial">Serial CTS</label>
                                                <input type="text" name="serial" class="form-control serial">
                                            </div>

                                            <div class="btn-download-block">
                                                <button type="submit" name="create_word"
                                                    class="btn btn-info btn-download" formaction="./file/fptca-gdk.php">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-file-earmark-word-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.485 6.879l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 1 1 .97-.242z" />
                                                    </svg>
                                                    Giấy đăng ký.docx
                                                </button>

                                                <button type="submit" name="create_word"
                                                    class="btn btn-info btn-download" formaction="./file/fptca-gxn.php">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-file-earmark-word-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.485 6.879l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 1 1 .97-.242z" />
                                                    </svg>
                                                    Giấy xác nhận.docx
                                                </button>
                                            </div>
                                            <hr>
                                            <div class="btn-download-block">
                                                <button type="submit" name="create_word"
                                                    class="btn btn-secondary btn-download"
                                                    formaction="./file/fptca-gdk.php">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-file-earmark-word-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.485 6.879l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 1 1 .97-.242z" />
                                                    </svg>
                                                    Hợp đồng.docx
                                                </button>
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End FPT-CA -->

                            <!-- Easy-CA -->
                            <div class="tab-pane faded" id="easyca" role="tabpanel" aria-labelledby="tab-css">
                                <div class="container-fluid supplier-content">
                                    <div class="supplier-img">
                                        <img class="supplier-logo" src="./img/easyca.png">
                                    </div>
                                    <div class="supplier-block">

                                        <form name="form" id="form-easyca" method="post">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label for="company-taxcode">Mã số thuế <span
                                                            class="input-important"></span></label>
                                                    <input name="company-taxcode" id="easyca-company-taxcode"
                                                        class="form-control company-taxcode" maxlength="14"
                                                        minlength="10" pattern="[-+]?[0-9]*[-]?[0-9]+"
                                                        title="Vui lòng điền đúng định dạng mã số thuế" required="">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <button type="submit" class="btn btn-primary"
                                                        id="get-info-form-easyca">Lấy thông
                                                        tin</button>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="company-name">Tên công ty <span
                                                        class="input-important"></span></label>
                                                <input type="text" name="company-name" class="form-control company-name"
                                                    required="">
                                            </div>

                                            <div class="form-group">
                                                <label for="company-address">Địa chỉ
                                                    <span class="input-important"></span>
                                                </label>
                                                <input type="text" name="company-address"
                                                    class="form-control company-address" required="">
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label for="company-director">Người đại diện pháp luật <span
                                                            class="input-important"></span></label>
                                                    <input type="text" name="company-director" class="form-control"
                                                        required="">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="company-position">Chức vụ <span
                                                            class="input-important"></span></label>
                                                    <input type="text" name="company-position" class="form-control"
                                                        value="Giám đốc" required="">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <div class="form-check form-switch">
                                                        <input type="checkbox"
                                                            class="form-check-input checked-contract-easy"
                                                            onclick="handleCheckedContractEasy()"
                                                            id="checked-contract-easy" checked>
                                                        <label for="checked-contract-easy">Ngày hợp đồng</label>
                                                    </div>
                                                    <div>
                                                        <div class="form-row date-block">
                                                            <input type="number" data-maxlength="2" min="1" max="31"
                                                                name="day" class="form-control text-center"
                                                                id="day-easy" value=<?php echo date('d') ?> />
                                                            <span class="space-date"></span>
                                                            <input type="number" data-maxlength="2" min="1" max="12"
                                                                name="month" class="form-control text-center"
                                                                id="month-easy" value=<?php echo date('m') ?> />
                                                            <span class="space-date"></span>
                                                            <input type="number" data-maxlength="4" min="1900"
                                                                max="2100" name="year" class="form-control text-center"
                                                                id="year-easy" value=<?php echo date('Y') ?> />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Gói cước </label>
                                                    <select name="package" class="form-select form-control package">
                                                        <option value="0" selected disabled>---Chọn gói---</option>
                                                        <option value="1">Cấp mới 1 năm</option>
                                                        <option value="2">Cấp mới 2 năm</option>
                                                        <option value="3">Cấp mới 3 năm</option>
                                                        <option value="4">Cấp mới 4 năm</option>
                                                        <option value="5">Gia hạn 1 năm</option>
                                                        <option value="6">Gia hạn 2 năm</option>
                                                        <option value="7">Gia hạn 3 năm</option>
                                                        <option value="8">Gia hạn 4 năm</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label>CMND/Passport <span class="input-important"></span></label>
                                                    <input name="id-card" class="form-control" id="id-card" required="">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Ngày cấp <span class="input-important"></span></label>
                                                    <br />
                                                    <div class="date-block">
                                                        <input data-maxlength="2" min="1" max="31" name="day-issued"
                                                            class="form-control text-center" id="day-issued"
                                                            required="" />
                                                        <span class="space-date"></span>
                                                        <input data-maxlength="2" min="1" max="12" name="month-issued"
                                                            class="form-control text-center" id="month-issued"
                                                            required="" />
                                                        <span class="space-date"></span>
                                                        <input data-maxlength="4" min="1900" max="2100"
                                                            name="year-issued" class="form-control text-center"
                                                            id="year-issued" required="" />
                                                    </div>
                                                    <script>
                                                    $(document).ready(function() {
                                                        $("#day-issued").keyup(function() {
                                                            $this = $(this);
                                                            if ($this.val().length >= $this.data(
                                                                    "maxlength")) {
                                                                if ($this.val().length > $this.data(
                                                                        "maxlength")) {
                                                                    $this.val($this.val().substring(
                                                                        0, 2));
                                                                }
                                                                $this.next("#month-issued").focus();
                                                            }
                                                        });
                                                    });

                                                    $(document).ready(function() {
                                                        $("#month-issued").keyup(function() {
                                                            $this = $(this);
                                                            if ($this.val().length >= $this.data(
                                                                    "maxlength")) {
                                                                if ($this.val().length > $this.data(
                                                                        "maxlength")) {
                                                                    $this.val($this.val().substring(
                                                                        0, 2));
                                                                }
                                                                $this.next("#year-issued").focus();
                                                            }
                                                        });
                                                    });

                                                    $(document).ready(function() {
                                                        $("#year-issued").keyup(function() {
                                                            $this = $(this);
                                                            if ($this.val().length >= $this.data(
                                                                    "maxlength")) {
                                                                if ($this.val().length > $this.data(
                                                                        "maxlength")) {
                                                                    $this.val($this.val().substring(0,
                                                                        4));
                                                                }
                                                                $this.next("#serial").focus();
                                                            }
                                                        });
                                                    });
                                                    </script>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Nơi cấp <span class="input-important"></span></label>
                                                    <br />
                                                    <input type="text" name="place-issued" class="form-control"
                                                        id="place-issued" required="" value="Cục CSQLHCVTTXH" />
                                                </div>
                                            </div>

                                            <div class="btn-download-block">
                                                <button type="submit" name="create_word"
                                                    class="btn btn-info btn-download"
                                                    formaction="./file/easyca-gdk.php">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-file-earmark-word-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.485 6.879l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 1 1 .97-.242z" />
                                                    </svg>
                                                    Giấy đăng ký.docx
                                                </button>

                                                <button type="submit" name="create_word"
                                                    class="btn btn-info btn-download"
                                                    formaction="./file/easyca-gxn.php">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-file-earmark-word-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.485 6.879l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 1 1 .97-.242z" />
                                                    </svg>
                                                    Giấy xác nhận.docx
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End EasyCA -->

                            <!-- CA2 -->
                            <div class="tab-pane faded" id="ca2" role="tabpanel" aria-labelledby="tab-css">
                                <div class="container-fluid supplier-content">
                                    <div class="supplier-img">
                                        <img class="supplier-logo" src="./img/ca2.png">
                                    </div>
                                    <div class="supplier-block">

                                        <form name="form" id="form-ca2" method="post">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label for="company-taxcode">Mã số thuế <span
                                                            class="input-important"></span></label>
                                                    <input name="company-taxcode" id="ca2-company-taxcode"
                                                        class="form-control company-taxcode" maxlength="14"
                                                        minlength="10" pattern="[-+]?[0-9]*[-]?[0-9]+"
                                                        title="Vui lòng điền đúng định dạng mã số thuế" required="">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <button type="submit" class="btn btn-primary"
                                                        id="get-info-form-ca2">Lấy
                                                        thông
                                                        tin</button>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="company-name">Tên công ty <span
                                                        class="input-important"></span></label>
                                                <input type="text" name="company-name" class="form-control company-name"
                                                    required="">
                                            </div>

                                            <div class="form-group">
                                                <label for="company-address">Địa chỉ
                                                    <span class="input-important"></span>
                                                </label>
                                                <input type="text" name="company-address"
                                                    class="form-control company-address" required="">
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label for="company-director">Người đại diện pháp luật <span
                                                            class="input-important"></span></label>
                                                    <input type="text" name="company-director" class="form-control"
                                                        required="">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label for="company-position">Chức vụ <span
                                                            class="input-important"></span></label>
                                                    <input type="text" name="company-position" class="form-control"
                                                        value="Giám đốc" required="">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label for="company-phone">Số điện thoại <span
                                                            class="input-important"></span></label>
                                                    <input type="number" name="company-phone" class="form-control"
                                                        required="" minlength="1">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <div class="form-check form-switch">
                                                        <input type="checkbox"
                                                            class="form-check-input checked-contract-ca2"
                                                            onclick="handleCheckedContractCa2()"
                                                            id="checked-contract-ca2" checked>
                                                        <label for="checked-contract-ca2">Ngày hợp đồng
                                                            <span class="input-important"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <div class="form-row date-block">
                                                            <input type="number" data-maxlength="2" min="1" max="31"
                                                                name="day" class="form-control text-center" id="day-ca2"
                                                                value=<?php echo date('d') ?> />
                                                            <span class="space-date"></span>
                                                            <input type="number" data-maxlength="2" min="1" max="12"
                                                                name="month" class="form-control text-center"
                                                                id="month-ca2" value=<?php echo date('m') ?> />
                                                            <span class="space-date"></span>
                                                            <input type="number" data-maxlength="4" min="1900"
                                                                max="2100" name="year" class="form-control text-center"
                                                                id="year-ca2" value=<?php echo date('Y') ?> />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Gói cước
                                                        <span class="input-important"></span>
                                                    </label>
                                                    <select name="package" class="form-select form-control package"
                                                        id="ca2-package" onchange=handleChangePackageCA2(this) required>
                                                        <option selected disabled hidden>---Chọn gói---</option>
                                                        <option value="1">Cấp mới 1 năm</option>
                                                        <option value="2">Cấp mới 2 năm</option>
                                                        <option value="3">Cấp mới 3 năm</option>
                                                        <option value="4">Gia hạn 1 năm</option>
                                                        <option value="5">Gia hạn 2 năm</option>
                                                        <option value="6">Gia hạn 3 năm</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label>CMND/Passport <span class="input-important"></span></label>
                                                    <input name="id-card" class="form-control" id="id-card" required="">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Ngày cấp <span class="input-important"></span></label>
                                                    <br />
                                                    <div class="date-block">
                                                        <input data-maxlength="2" min="1" max="31" name="day-issued"
                                                            class="form-control text-center" id="day-issued"
                                                            required="" />
                                                        <span class="space-date"></span>
                                                        <input data-maxlength="2" min="1" max="12" name="month-issued"
                                                            class="form-control text-center" id="month-issued"
                                                            required="" />
                                                        <span class="space-date"></span>
                                                        <input data-maxlength="4" min="1900" max="2100"
                                                            name="year-issued" class="form-control text-center"
                                                            id="year-issued" required="" />
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Nơi cấp <span class="input-important"></span></label>
                                                    <br />
                                                    <input type="text" name="place-issued" class="form-control"
                                                        id="place-issued" required="" value="Cục CSQLHCVTTXH" />
                                                </div>
                                            </div>

                                            <div class="btn-download-block">
                                                <button type="submit" name="create_word"
                                                    class="btn btn-info btn-download" id="btn-ca2-hd"
                                                    formaction="./file/ca2-hd.php">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-file-earmark-word-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.485 6.879l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 1 1 .97-.242z" />
                                                    </svg>
                                                    Hợp đồng 2 bên.docx
                                                </button>
                                            </div>

                                            <div class="btn-download-block">
                                                <button type="submit" name="create_word"
                                                    class="btn btn-info btn-download" id="btn-ca2-cm"
                                                    formaction="./file/ca2-cm.php" disabled="disabled">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-file-earmark-word-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.485 6.879l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 1 1 .97-.242z" />
                                                    </svg>
                                                    Cấp mới.docx
                                                </button>

                                                <button type="submit" name="create_word"
                                                    class="btn btn-info btn-download" id="btn-ca2-gh"
                                                    formaction="./file/ca2-gh.php" disabled="disabled">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-file-earmark-word-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.485 6.879l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 1 1 .97-.242z" />
                                                    </svg>
                                                    Gia hạn.docx
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End CA2 -->

                            <!-- Newtel-CA -->
                            <div class="tab-pane faded" id="newtelca" role="tabpanel" aria-labelledby="tab-css">
                                <div class="container-fluid supplier-content">
                                    <div class="supplier-img">
                                        <img class="supplier-logo" src="./img/newtelca.png">
                                    </div>
                                    <div class="supplier-block">

                                        <form name="form" id="form-newtelca" method="post">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label for="company-taxcode">Mã số thuế <span
                                                            class="input-important"></span></label>
                                                    <input name="company-taxcode" id="newtelca-company-taxcode"
                                                        class="form-control company-taxcode" maxlength="14"
                                                        minlength="10" pattern="[-+]?[0-9]*[-]?[0-9]+"
                                                        title="Vui lòng điền đúng định dạng mã số thuế" required="">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <button type="submit" class="btn btn-primary"
                                                        id="get-info-form-newtelca">Lấy thông
                                                        tin</button>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="company-name">Tên công ty <span
                                                        class="input-important"></span></label>
                                                <input type="text" name="company-name" class="form-control company-name"
                                                    required="">
                                            </div>

                                            <div class="form-group">
                                                <label for="company-address">Địa chỉ
                                                    <span class="input-important"></span>
                                                </label>
                                                <input type="text" name="company-address"
                                                    class="form-control company-address" required="">
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label for="company-director">Người đại diện pháp luật <span
                                                            class="input-important"></span></label>
                                                    <input type="text" name="company-director" class="form-control"
                                                        required="">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="company-position">Chức vụ <span
                                                            class="input-important"></span></label>
                                                    <input type="text" name="company-position" class="form-control"
                                                        value="Giám đốc" required="">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <div class="form-check form-switch">
                                                        <input type="checkbox"
                                                            class="form-check-input checked-contract-newtel"
                                                            onclick="handleCheckedContractNewtel()"
                                                            id="checked-contract-newtel" checked>
                                                        <label for="checked-contract-newtel">Ngày hợp đồng
                                                            <span class="input-important"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <div class="form-row date-block">
                                                            <input type="number" data-maxlength="2" min="1" max="31"
                                                                name="day" class="form-control text-center" id="day-newtel"
                                                                value=<?php echo date('d') ?> />
                                                            <span class="space-date"></span>
                                                            <input type="number" data-maxlength="2" min="1" max="12"
                                                                name="month" class="form-control text-center"
                                                                id="month-newtel" value=<?php echo date('m') ?> />
                                                            <span class="space-date"></span>
                                                            <input type="number" data-maxlength="4" min="1900"
                                                                max="2100" name="year" class="form-control text-center"
                                                                id="year-newtel" value=<?php echo date('Y') ?> />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label>CMND/Passport <span class="input-important"></span></label>
                                                    <input name="id-card" class="form-control" id="id-card" required="">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Ngày cấp <span class="input-important"></span></label>
                                                    <br />
                                                    <div class="date-block">
                                                        <input data-maxlength="2" min="1" max="31" name="day-issued"
                                                            class="form-control text-center" id="day-issued"
                                                            required="" />
                                                        <span class="space-date"></span>
                                                        <input data-maxlength="2" min="1" max="12" name="month-issued"
                                                            class="form-control text-center" id="month-issued"
                                                            required="" />
                                                        <span class="space-date"></span>
                                                        <input data-maxlength="4" min="1900" max="2100"
                                                            name="year-issued" class="form-control text-center"
                                                            id="year-issued" required="" />
                                                    </div>
                                                    <script>
                                                    $(document).ready(function() {
                                                        $("#day-issued").keyup(function() {
                                                            $this = $(this);
                                                            if ($this.val().length >= $this.data(
                                                                    "maxlength")) {
                                                                if ($this.val().length > $this.data(
                                                                        "maxlength")) {
                                                                    $this.val($this.val().substring(
                                                                        0, 2));
                                                                }
                                                                $this.next("#month-issued").focus();
                                                            }
                                                        });
                                                    });

                                                    $(document).ready(function() {
                                                        $("#month-issued").keyup(function() {
                                                            $this = $(this);
                                                            if ($this.val().length >= $this.data(
                                                                    "maxlength")) {
                                                                if ($this.val().length > $this.data(
                                                                        "maxlength")) {
                                                                    $this.val($this.val().substring(
                                                                        0, 2));
                                                                }
                                                                $this.next("#year-issued").focus();
                                                            }
                                                        });
                                                    });

                                                    $(document).ready(function() {
                                                        $("#year-issued").keyup(function() {
                                                            $this = $(this);
                                                            if ($this.val().length >= $this.data(
                                                                    "maxlength")) {
                                                                if ($this.val().length > $this.data(
                                                                        "maxlength")) {
                                                                    $this.val($this.val().substring(0,
                                                                        4));
                                                                }
                                                                $this.next("#serial").focus();
                                                            }
                                                        });
                                                    });
                                                    </script>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Nơi cấp <span class="input-important"></span></label>
                                                    <br />
                                                    <input type="text" name="place-issued" class="form-control"
                                                        id="place-issued" required="" value="Cục CSQLHCVTTXH" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="director-address">Hộ khẩu thường trú
                                                    <span class="input-important"></span>
                                                </label>
                                                <input type="text" name="director-address"
                                                    class="form-control director-address" required="">
                                            </div>

                                            <div class="btn-download-block">
                                                <button type="submit" name="create_word"
                                                    class="btn btn-info btn-download"
                                                    formaction="./file/newtelca-gdk.php">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-file-earmark-word-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.485 6.879l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 1 1 .97-.242z" />
                                                    </svg>
                                                    MB.01.Giấy đăng ký.docx
                                                </button>

                                                <button type="submit" name="create_word"
                                                    class="btn btn-info btn-download"
                                                    formaction="./file/newtelca-gxn.php">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-file-earmark-word-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.485 6.879l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 1 1 .97-.242z" />
                                                    </svg>
                                                    MB.02.Giấy xác nhận.docx
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Newtel-CA -->

                            <!-- FastCA -->
                            <div class="tab-pane faded" id="fastca" role="tabpanel" aria-labelledby="tab-css">
                                <div class="container-fluid supplier-content">
                                    <div class="supplier-img">
                                        <img class="supplier-logo" src="./img/fastca.png">
                                    </div>
                                    <div class="supplier-block">

                                        <form name="form" id="form-fastca" method="post">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label for="company-taxcode">Mã số thuế <span
                                                            class="input-important"></span></label>
                                                    <input name="company-taxcode" id="fastca-company-taxcode"
                                                        class="form-control company-taxcode" maxlength="14"
                                                        minlength="10" pattern="[-+]?[0-9]*[-]?[0-9]+"
                                                        title="Vui lòng điền đúng định dạng mã số thuế" required="">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <button type="submit" class="btn btn-primary"
                                                        id="get-info-form-fastca">Lấy thông
                                                        tin</button>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="company-name">Tên công ty <span
                                                        class="input-important"></span></label>
                                                <input type="text" name="company-name" class="form-control company-name"
                                                    required="">
                                            </div>

                                            <div class="form-group">
                                                <label for="company-address">Địa chỉ
                                                    <span class="input-important"></span>
                                                </label>
                                                <input type="text" name="company-address"
                                                    class="form-control company-address" required="">
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label for="company-director">Người đại diện pháp luật <span
                                                            class="input-important"></span></label>
                                                    <input type="text" name="company-director" class="form-control"
                                                        required="">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="company-position">Chức vụ <span
                                                            class="input-important"></span></label>
                                                    <input type="text" name="company-position" class="form-control"
                                                        value="Giám đốc" required="">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <div class="form-check form-switch">
                                                        <input type="checkbox"
                                                            class="form-check-input checked-contract-fast"
                                                            onclick="handleCheckedContractFast()"
                                                            id="checked-contract-fast" checked>
                                                        <label for="checked-contract-fast">Ngày hợp đồng
                                                            <span class="input-important"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <div class="form-row date-block">
                                                            <input type="number" data-maxlength="2" min="1" max="31"
                                                                name="day" class="form-control text-center" id="day-fast"
                                                                value=<?php echo date('d') ?> />
                                                            <span class="space-date"></span>
                                                            <input type="number" data-maxlength="2" min="1" max="12"
                                                                name="month" class="form-control text-center"
                                                                id="month-fast" value=<?php echo date('m') ?> />
                                                            <span class="space-date"></span>
                                                            <input type="number" data-maxlength="4" min="1900"
                                                                max="2100" name="year" class="form-control text-center"
                                                                id="year-fast" value=<?php echo date('Y') ?> />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                <label>Gói cước </label>
                                                <select name="package" class="form-select form-control package">
                                                    <option value="0" selected>---Chọn gói---</option>
                                                    <option value="1">Cấp mới 1 năm</option>
                                                    <option value="2">Cấp mới 2 năm</option>
                                                    <option value="3">Cấp mới 3 năm</option>
                                                    <option value="4">Gia hạn 1 năm</option>
                                                    <option value="5">Gia hạn 2 năm</option>
                                                    <option value="6">Gia hạn 3 năm</option>
                                                </select>
                                            </div>
                                            </div>

                                            <div class="btn-download-block">
                                                <button type="submit" name="create_word"
                                                    class="btn btn-info btn-download"
                                                    formaction="./file/fastca-gdk.php">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-file-earmark-word-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.485 6.879l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 1 1 .97-.242z" />
                                                    </svg>
                                                    Giấy đăng ký.docx
                                                </button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End FastCA -->



                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-bs-delay="10000">
            <div class="toast-header">
                <img src="./img/alert-icon.png" alt="" class="toast-alert-icon">
                <strong class="me-auto">Lỗi

                </strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Tên công ty hoặc địa chỉ có chứa ký tự & hoặc < gây lỗi file. Vui lòng tạm xoá ở web sau đó sửa thủ công
                    file </div>
            </div>

            <div id="get-tax-info" style="display: none"></div>

    </body>

    <script src="./js/script.js"></script>
    <script src="./js/validation.js"></script>

    <script>
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))


Validator({
    form: '#form-vinca',
    rules: [
        Validator.isChars('.company-name'),
        Validator.isChars('.company-address')
    ]
})
Validator({
    form: '#form-vina',
    rules: [
        Validator.isChars('.company-name'),
        Validator.isChars('.company-address')
    ]
})
Validator({
    form: '#form-fptca',
    rules: [
        Validator.isChars('.company-name'),
        Validator.isChars('.company-address')
    ]
})
Validator({
    form: '#form-easyca',
    rules: [
        Validator.isChars('.company-name'),
        Validator.isChars('.company-address')
    ]
})
Validator({
    form: '#form-ca2',
    rules: [
        Validator.isChars('.company-name'),
        Validator.isChars('.company-address')
    ]
})
Validator({
    form: '#form-newtelca',
    rules: [
        Validator.isChars('.company-name'),
        Validator.isChars('.company-address')
    ]
})
Validator({
    form: '#form-fastca',
    rules: [
        Validator.isChars('.company-name'),
        Validator.isChars('.company-address')
    ]
})
Validator({
    form: '#form-viettelca',
    rules: [
        Validator.isChars('.company-name'),
        Validator.isChars('.company-address')
    ]
})



var date = new Date();
const day = date.getDate();
const month = date.getMonth() + 1;
const year = date.getFullYear();


const btnCheckFpt = document.querySelector('#checked-contract-fpt')
const dayItemFpt = document.querySelector('#day-fpt')
const monthItemFpt = document.querySelector('#month-fpt')
const yearItemFpt = document.querySelector('#year-fpt')
const handleCheckedContractFpt = () => {
    if (btnCheckFpt.checked === true) {
        dayItemFpt.value = day
        monthItemFpt.value = month
        yearItemFpt.value = year
    } else {
        dayItemFpt.value = monthItemFpt.value = yearItemFpt.value = ''
    }
}

const btnCheckEasy = document.querySelector('#checked-contract-easy')
const dayItemEasy = document.querySelector('#day-easy')
const monthItemEasy = document.querySelector('#month-easy')
const yearItemEasy = document.querySelector('#year-easy')
const handleCheckedContractEasy = () => {
    if (btnCheckEasy.checked === true) {
        dayItemEasy.value = day
        monthItemEasy.value = month
        yearItemEasy.value = year
    } else {
        dayItemEasy.value = monthItemEasy.value = yearItemEasy.value = ''
    }
}

const btnCheckCa2 = document.querySelector('#checked-contract-ca2')
const dayItemCa2 = document.querySelector('#day-ca2')
const monthItemCa2 = document.querySelector('#month-ca2')
const yearItemCa2 = document.querySelector('#year-ca2')
const handleCheckedContractCa2 = () => {
    if (btnCheckCa2.checked === true) {
        dayItemCa2.value = day
        monthItemCa2.value = month
        yearItemCa2.value = year
    } else {
        dayItemCa2.value = monthItemCa2.value = yearItemCa2.value = ''
    }
}

const btnCheckNewtel = document.querySelector('#checked-contract-newtel')
const dayItemNewtel = document.querySelector('#day-newtel')
const monthItemNewtel = document.querySelector('#month-newtel')
const yearItemNewtel = document.querySelector('#year-newtel')
const handleCheckedContractNewtel = () => {
    if (btnCheckNewtel.checked === true) {
        dayItemNewtel.value = day
        monthItemNewtel.value = month
        yearItemNewtel.value = year
    } else {
        dayItemNewtel.value = monthItemNewtel.value = yearItemNewtel.value = ''
    }
}

const btnCheckFast = document.querySelector('#checked-contract-fast')
const dayItemFast = document.querySelector('#day-fast')
const monthItemFast = document.querySelector('#month-fast')
const yearItemFast = document.querySelector('#year-fast')
const handleCheckedContractFast = () => {
    if (btnCheckFast.checked === true) {
        dayItemFast.value = day
        monthItemFast.value = month
        yearItemFast.value = year
    } else {
        dayItemFast.value = monthItemFast.value = yearItemFast.value = ''
    }
}


const taxCodeAgency = document.querySelector('#company-taxcode-c')
const nameAgency = document.querySelector('#company-name-c')
const addressAgency = document.querySelector('#company-address-c')
const directorAgency = document.querySelector('#company-director-c')
const positionAgency = document.querySelector('#company-position-c')

const directorIdAgency = document.querySelector('#director-c-id')
const dayAgency = document.querySelector('#day-c')
const monthAgency = document.querySelector('#month-c')
const yearAgency = document.querySelector('#year-c')
const directorIssuedAgency = document.querySelector('#director-c-issued')

const bankID = document.querySelector('#bank-id')
const bankName = document.querySelector('#bank-name')
const bankBeneficiary = document.querySelector('#bank-beneficiary')
const traderName = document.querySelector('#trader-name')
const traderId = document.querySelector('#trader-id')
const traderPhone = document.querySelector('#trader-phone')

const handleChangeAgency = (obj) => {
    var selectValue = obj.value
    if (selectValue === '1') {
        taxCodeAgency.value = '0309612872'
        nameAgency.value = 'CÔNG TY TNHH KỸ THUẬT CHỮ KÝ SỐ VIỆT NAM'
        addressAgency.value = '41A Nguyễn Phi Khanh, Phường Tân Định, Quận 1, Thành phố Hồ Chí Minh'
        directorAgency.value = 'Nguyễn Khánh Quân'
        positionAgency.value = 'Giám đốc'
        directorIdAgency.value = '075088000997'
        dayAgency.value = '08'
        monthAgency.value = '02'
        yearAgency.value = '2020'
        directorIssuedAgency.value = 'Cục CSQLHCVTTXH'
        bankID.value = '172432549'
        bankName.value = 'VPBank chi nhánh Cộng Hoà'
        bankBeneficiary.value = 'CÔNG TY TNHH KỸ THUẬT CHỮ KÝ SỐ'
        traderName.value = 'Nguyễn Thị Bích Ngọc'
        traderId.value = '079199000341'
        traderPhone.value = '0937516462'
    }
    if (selectValue === '2') {
        taxCodeAgency.value = nameAgency.value = addressAgency.value = directorAgency.value = positionAgency.value =
            directorIdAgency.value = dayAgency.value = monthAgency.value = yearAgency.value = directorIssuedAgency
            .value = bankID.value = bankName.value = bankBeneficiary.value = traderName.value = traderId.value =
            traderPhone.value = ''
    }
}

const handleChangePackageCA2 = (e) => {
    var checkedSelectCa2 = ($(e).find(":selected").val());
    switch (checkedSelectCa2) {
        case '1':
            $("#btn-ca2-cm").removeAttr('disabled');
            $("#btn-ca2-gh").attr('disabled', 'disabled');
            break;
        case '2':
            $("#btn-ca2-cm").removeAttr('disabled');
            $("#btn-ca2-gh").attr('disabled', 'disabled');
            break;
        case '3':
            $("#btn-ca2-cm").removeAttr('disabled');
            $("#btn-ca2-gh").attr('disabled', 'disabled');
            break;
        case '4':
            $("#btn-ca2-cm").attr('disabled', 'disabled');
            $("#btn-ca2-gh").removeAttr('disabled');
            break;
        case '5':
            $("#btn-ca2-cm").attr('disabled', 'disabled');
            $("#btn-ca2-gh").removeAttr('disabled');
            break;
        case '6':
            $("#btn-ca2-cm").attr('disabled', 'disabled');
            $("#btn-ca2-gh").removeAttr('disabled');
            break;
        default:
            return false
    }
}

// Get info from taxcode vinca
$(document).ready(function() {
    $('#get-info-form-vinca').click(function() {
        var formId = 'form-vinca'
        checkTaxCode = document.getElementById('vinca-company-taxcode').value
        if (checkTaxCode === '') {
            alert('Vui lòng nhập mã số thuế')
        } else {
            var data = $('#form-vinca').serialize();
            document.querySelector(`#${formId} > div:nth-child(2) > input`).value = ''
            document.querySelector(`#${formId} > div:nth-child(3) > input`).value = ''
            document.querySelector(`#${formId} > div:nth-child(4) > div:nth-child(1) > input`).value =
                ''

            $.ajax({
                type: 'POST',
                url: 'post.php',
                data: data,
                success: function(data) {
                    if (data == 'false') {
                        alert('Lấy dữ liệu lỗi, vui lòng nhập thủ công !');
                    } else {
                        $('#get-tax-info').html(data);
                    }
                }
            });
            setTimeout(function() {
                var block = document.querySelector('.table-taxinfo').innerHTML
                getCompanyName(formId, block)
                getAddress(formId, block)
                getDirector(formId, block)
            }, 2000)
            return false;
        }
    });
})

$(document).ready(function() {
    $('#get-info-form-vina').click(function() {
        var formId = 'form-vina'
        checkTaxCode = document.getElementById('vina-company-taxcode').value
        if (checkTaxCode === '') {
            alert('Vui lòng nhập mã số thuế')
        } else {
            var data = $('#form-vina').serialize();
            document.querySelector(`#${formId} > div:nth-child(2) > input`).value = ''
            document.querySelector(`#${formId} > div:nth-child(3) > input`).value = ''
            document.querySelector(`#${formId} > div:nth-child(4) > div:nth-child(1) > input`).value =
                ''

            $.ajax({
                type: 'POST',
                url: 'post.php',
                data: data,
                success: function(data) {
                    if (data == 'false') {
                        alert('Lấy dữ liệu lỗi, vui lòng nhập thủ công !');
                    } else {
                        $('#get-tax-info').html(data);
                    }
                }
            });
            setTimeout(function() {
                var block = document.querySelector('.table-taxinfo').innerHTML
                getCompanyName(formId, block)
                getAddress(formId, block)
                getDirector(formId, block)
            }, 2000)
            return false;
        }
    });
})

$(document).ready(function() {
    $('#get-info-form-fptca').click(function() {
        var formId = 'form-fptca'
        checkTaxCode = document.getElementById('fptca-company-taxcode').value
        if (checkTaxCode === '') {
            alert('Vui lòng nhập mã số thuế')
        } else {
            var data = $('#form-fptca').serialize();
            document.querySelector(`#${formId} > div:nth-child(2) > input`).value = ''
            document.querySelector(`#${formId} > div:nth-child(3) > input`).value = ''
            document.querySelector(`#${formId} > div:nth-child(4) > div:nth-child(1) > input`).value =
                ''

            $.ajax({
                type: 'POST',
                url: 'post.php',
                data: data,
                success: function(data) {
                    if (data == 'false') {
                        alert('Lấy dữ liệu lỗi, vui lòng nhập thủ công !');
                    } else {
                        $('#get-tax-info').html(data);
                    }
                }
            });
            setTimeout(function() {
                var block = document.querySelector('.table-taxinfo').innerHTML
                getCompanyName(formId, block)
                getAddress(formId, block)
                getDirector(formId, block)
            }, 2000)
            return false;
        }
    });
})

$(document).ready(function() {
    $('#get-info-form-easyca').click(function() {
        var formId = 'form-easyca'
        checkTaxCode = document.getElementById('easyca-company-taxcode').value
        if (checkTaxCode === '') {
            alert('Vui lòng nhập mã số thuế')
        } else {
            var data = $('#form-easyca').serialize();
            document.querySelector(`#${formId} > div:nth-child(2) > input`).value = ''
            document.querySelector(`#${formId} > div:nth-child(3) > input`).value = ''
            document.querySelector(`#${formId} > div:nth-child(4) > div:nth-child(1) > input`).value =
                ''

            $.ajax({
                type: 'POST',
                url: 'post.php',
                data: data,
                success: function(data) {
                    if (data == 'false') {
                        alert('Lấy dữ liệu lỗi, vui lòng nhập thủ công !');
                    } else {
                        $('#get-tax-info').html(data);
                    }
                }
            });
            setTimeout(function() {
                var block = document.querySelector('.table-taxinfo').innerHTML
                getCompanyName(formId, block)
                getAddress(formId, block)
                getDirector(formId, block)
            }, 2000)
            return false;
        }
    });
})

$(document).ready(function() {
    $('#get-info-form-ca2').click(function() {
        var formId = 'form-ca2'
        checkTaxCode = document.getElementById('ca2-company-taxcode').value
        if (checkTaxCode === '') {
            alert('Vui lòng nhập mã số thuế')
        } else {
            var data = $('#form-ca2').serialize();
            document.querySelector(`#${formId} > div:nth-child(2) > input`).value = ''
            document.querySelector(`#${formId} > div:nth-child(3) > input`).value = ''
            document.querySelector(`#${formId} > div:nth-child(4) > div:nth-child(1) > input`).value =
                ''
            document.querySelector(`#${formId} > div:nth-child(4) > div:nth-child(3) > input`).value =
                ''

            $.ajax({
                type: 'POST',
                url: 'post.php',
                data: data,
                success: function(data) {
                    if (data == 'false') {
                        alert('Lấy dữ liệu lỗi, vui lòng nhập thủ công !');
                    } else {
                        $('#get-tax-info').html(data);
                    }
                }
            });
            setTimeout(function() {
                var block = document.querySelector('.table-taxinfo').innerHTML
                getCompanyName(formId, block)
                getAddress(formId, block)
                getDirector(formId, block)
                getPhone(formId, block)
            }, 2000)
            return false;
        }
    });
})

$(document).ready(function() {
    $('#get-info-form-newtelca').click(function() {
        var formId = 'form-newtelca'
        checkTaxCode = document.getElementById('newtelca-company-taxcode').value
        if (checkTaxCode === '') {
            alert('Vui lòng nhập mã số thuế')
        } else {
            var data = $('#form-newtelca').serialize();
            document.querySelector(`#${formId} > div:nth-child(2) > input`).value = ''
            document.querySelector(`#${formId} > div:nth-child(3) > input`).value = ''
            document.querySelector(`#${formId} > div:nth-child(4) > div:nth-child(1) > input`).value =
                ''

            $.ajax({
                type: 'POST',
                url: 'post.php',
                data: data,
                success: function(data) {
                    if (data == 'false') {
                        alert('Lấy dữ liệu lỗi, vui lòng nhập thủ công !');
                    } else {
                        $('#get-tax-info').html(data);
                    }
                }
            });
            setTimeout(function() {
                var block = document.querySelector('.table-taxinfo').innerHTML
                getCompanyName(formId, block)
                getAddress(formId, block)
                getDirector(formId, block)
            }, 2000)
            return false;
        }
    });
})

$(document).ready(function() {
    $('#get-info-form-fastca').click(function() {
        var formId = 'form-fastca'
        checkTaxCode = document.getElementById('fastca-company-taxcode').value
        if (checkTaxCode === '') {
            alert('Vui lòng nhập mã số thuế')
        } else {
            var data = $('#form-fastca').serialize();
            document.querySelector(`#${formId} > div:nth-child(2) > input`).value = ''
            document.querySelector(`#${formId} > div:nth-child(3) > input`).value = ''
            document.querySelector(`#${formId} > div:nth-child(4) > div:nth-child(1) > input`).value =
                ''

            $.ajax({
                type: 'POST',
                url: 'post.php',
                data: data,
                success: function(data) {
                    if (data == 'false') {
                        alert('Lấy dữ liệu lỗi, vui lòng nhập thủ công !');
                    } else {
                        $('#get-tax-info').html(data);
                    }
                }
            });
            setTimeout(function() {
                var block = document.querySelector('.table-taxinfo').innerHTML
                getCompanyName(formId, block)
                getAddress(formId, block)
                getDirector(formId, block)
            }, 2000)
            return false;
        }
    });
})

getCompanyName = (formId, block) => {
    const start1 = block.search('colspan="2"')
    const end1 = block.search('</thead>')
    const temp = block.slice(start1, end1)
    const start2 = temp.search('copy">')
    const end2 = temp.search('</span')
    const result = temp.slice(start2, end2).replace('copy">', '')
    document.querySelector(`#${formId} > div:nth-child(2) > input`).value = result
    return result
}

getAddress = (formId, block) => {
    const start1 = block.search('address')
    const end1 = block.search('alumni')
    const temp = block.slice(start1, end1)
    const start2 = temp.search('"copy">')
    const end2 = temp.search('</span>')
    const result = temp.slice(start2, end2).replace('"copy">', '')
    document.querySelector(`#${formId} > div:nth-child(3) > input`).value = result
    return result
}

getDirector = (formId, block) => {
    const start1 = block.search('legalName')
    const end1 = block.search('fa-phone')
    const temp = block.slice(start1, end1)
    const start2 = temp.search('">')
    const end2 = temp.search('</a>')
    const result = temp.slice(start2, end2).replace('">', '')
    document.querySelector(`#${formId} > div:nth-child(4) > div:nth-child(1) > input`).value = result
    return result
}

getPhone = (formId, block) => {
    const start1 = block.search('telephone')
    const end1 = block.search('fa-calendar')
    const temp = block.slice(start1, end1)
    const start2 = temp.search('>0')
    const end2 = temp.search('</span')
    const result = temp.slice(start2, end2).replace('>', '')
    document.querySelector(`#${formId} > div:nth-child(4) > div:nth-child(3) > input`).value = result
    return result
}
    </script>



    </html>