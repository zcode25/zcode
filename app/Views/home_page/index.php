<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<section class="hero mb-5 pt-5 pb-5" id="hero">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-10 text-center">
                <h1 class="title text-primary mb-5">ZCODE</h1>
                <h3 class="mb-3 fw-normal tagline">Create, Learn, and Discuss Together About Website Programming With Fun</h3>
                <p class="mb-5">ZCODE is a platform for creating, learning and discussing together about website programming. You will have a pleasant experience and can increase your insight and knowledge with us.</p>
                <a href="#contact" class="btn btn-primary">Contact Us</a>
                <a href="/project" class="btn btn-outline-primary">Projects</a>
            </div>
        </div>
    </div>
</section>

<section class="about mb-5 pt-5 pb-5" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="mb-5">About Us</h3>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-5 mb-5">
                        <img src="/img/about.jpg" class="rounded img-fluid grayscale" alt="zcode">
                    </div>
                    <div class="col-md-6 align-self-center">
                        <p class="justify">ZCODE is a platform for creating, learning and discussing together about website programming. You will have a pleasant experience and can increase your insight and knowledge with us. We can help you create the website of your dreams. We can learn and discuss together to add insight and knowledge about web programming.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feature mb-5 pt-5 pb-5" id="feature">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 mb-5">
                <h3>What Features Will You Get?</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4 mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16">
                    <path d="M2.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1ZM4 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
                    <path d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Z" />
                    <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z" />
                </svg>
                <h5 class="mt-3">Create</h5>
                <p>Create the website of your dreams</p>
            </div>
            <div class="col-md-4 mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                </svg>
                <h5 class="mt-3">Learn</h5>
                <p>You can learn easily and have fun</p>
            </div>
            <div class="col-md-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-chat-text" viewBox="0 0 16 16">
                    <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                    <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8zm0 2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z" />
                </svg>
                <h5 class="mt-3">Discuss</h5>
                <p>Increase your insight and knowledge</p>
            </div>
        </div>
    </div>
</section>

<section class="project mb-5 pt-5 pb-5" id="project">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 mb-5">
                <h3>Our Projects</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6 mb-5">
                <img src="/img/fuluss.png" class="rounded img-fluid pro grayscale" alt="iKPOP">
                <h5 class="mt-5">Fuluss</h5>
                <a href="https://fuluss.rf.gd/" target="_blank">
                    Visit Site
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                    </svg>
                </a>
            </div>
            <div class="col-md-6 mb-5">
                <img src="/img/iKPOP.png" class="rounded img-fluid pro grayscale" alt="iKPOP">
                <h5 class="mt-5">iKPOP</h5>
                <a href="https://ikpop.rf.gd/" target="_blank">
                    Visit Site
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                    </svg>
                </a>
            </div>
            <div class="col-md-6 mb-5">
                <img src="/img/dlk.png" class="rounded img-fluid pro grayscale" alt="DLK">
                <h5 class="mt-5">Drive Listen Korea</h5>
                <a href="https://drivelistenkorea.rf.gd/" target="_blank">
                    Visit Site
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                    </svg>
                </a>
            </div>
            <div class="col-md-6 mb-5">
                <img src="/img/e-shop.png" class="rounded img-fluid pro grayscale" alt="e-shop">
                <h5 class="mt-5">e-shop</h5>
                <a href="https://electronicshop.rf.gd/index.php" target="_blank">
                    Visit Site
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="/project" class="btn btn-primary">View More</a>
            </div>
        </div>
    </div>
</section>

<section class="contact mb-5 pt-5 pb-5" id="contact">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 mb-5">
                <h3>Contact Us</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 text-center mb-5">
                <div class="card" style="cursor: pointer;" onclick="window.open('https://www.instagram.com/zcode25/', '_blank')">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                        <h5 class="card-title mt-3">Instagram</h5>
                        <p class="card-text">@zcode25</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 text-center mb-5">
                <div class="card" style="cursor: pointer;" onclick="window.open('mailto:adamzein345@gmail.com', '_blank')">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                        </svg>
                        <h5 class="card-title mt-3">Email</h5>
                        <p class="card-text">adamzein345@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 text-center mb-5">
                <div class="card" style="cursor: pointer;" onclick="window.open('https://t.me/wpc_zcode', '_blank')">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
                        </svg>
                        <h5 class="card-title mt-3">Telegram</h5>
                        <p class="card-text">Web Programming Club</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 text-center">
                <div class="card" style="cursor: pointer;" onclick="window.open('https://api.whatsapp.com/send?phone=6281316671373&text=Hello%20ZCODE!', '_blank');">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg>
                        <h5 class="card-title mt-3">WhatsApp</h5>
                        <p class="card-text">0813 1667 1373</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer pt-5 pb-5" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>ZCODE</h3>
                <p>Create, Learn, and Discuss Together About Website Programming With Fun</p>
                <p>© 2022 ZCODE. All rights reserved.</p>
            </div>
        </div>
    </div>
</section>

<?php $this->endSection(); ?>